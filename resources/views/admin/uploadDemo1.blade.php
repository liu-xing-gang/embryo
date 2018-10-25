@extends('admin.common.layout')
@section('content')
<div class="layui-body" id="LAY_app_body">
    <div class="layadmin-tabsbody-item layui-show"><style>
  .layui-upload-img{width: 92px; height: 92px; margin: 0 10px 10px 0;}
  </style><div class="layui-card layadmin-header">
    <div class="layui-breadcrumb" lay-filter="breadcrumb" style="visibility: visible;">
      <a lay-href="">主页</a><span lay-separator="">/</span>
      <a><cite>组件</cite></a><span lay-separator="">/</span>
      <a><cite>上传组件</cite></a><span lay-separator="">/</span>
      <a><cite>功能演示一</cite></a>
    </div>
  </div><div class="layui-fluid">
    <div class="layui-row layui-col-space15">
      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">普通图片上传</div>
          <div class="layui-card-body">
            <div class="layui-upload">
              <button type="button" class="layui-btn" id="test-upload-normal">上传图片</button><input class="layui-upload-file" type="file" accept="undefined" name="file">
              <div class="layui-upload-list">
                <img class="layui-upload-img" id="test-upload-normal-img">
                <p id="test-upload-demoText"></p>
              </div>
            </div>
            <blockquote class="layui-elem-quote">
            为节省服务器开销，以下示例均未配置真实上传接口，所以每次上传都会报提示：请求上传接口出现异常，这属于正常现象。
            </blockquote>
          </div>
        </div>
      </div>

      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">上传多张图片</div>
          <div class="layui-card-body">
            <div class="layui-upload">
              <button type="button" class="layui-btn" id="test-upload-more">多图片上传</button><input class="layui-upload-file" type="file" accept="undefined" name="file" multiple="">
              <blockquote class="layui-elem-quote layui-quote-nm" style="margin-top: 10px;">
                预览图：
                <div class="layui-upload-list" id="test-upload-more-list"></div>
             </blockquote>
            </div>
          </div>
        </div>
      </div>

      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">指定允许上传的文件类型</div>
          <div class="layui-card-body">
            <button type="button" class="layui-btn" id="test-upload-type1"><i class="layui-icon"></i>上传文件</button><input class="layui-upload-file" type="file" accept="undefined" name="file">
            <button type="button" class="layui-btn layui-btn-primary" id="test-upload-type2"><i class="layui-icon"></i>只允许压缩文件</button><input class="layui-upload-file" type="file" accept="undefined" name="file">
            <button type="button" class="layui-btn" id="test-upload-type3"><i class="layui-icon"></i>上传视频</button><input class="layui-upload-file" type="file" accept="undefined" name="file">
            <button type="button" class="layui-btn" id="test-upload-type4"><i class="layui-icon"></i>上传音频</button><input class="layui-upload-file" type="file" accept="undefined" name="file">
          </div>
        </div>
      </div>

      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">设定文件大小限制</div>
          <div class="layui-card-body">
            <button type="button" class="layui-btn layui-btn-danger" id="test-upload-size">
              <i class="layui-icon"></i>上传图片
            </button><input class="layui-upload-file" type="file" accept="undefined" name="file">
            <div class="layui-inline layui-word-aux">
              这里以限制 60KB 为例
            </div>
          </div>
        </div>
      </div>

      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">同时绑定多个元素，并将属性设定在元素上</div>
          <div class="layui-card-body">
            <button class="layui-btn test-upload-demoMore" lay-data="{url: '/a/'}">上传A</button><input class="layui-upload-file" type="file" accept="undefined" name="file">
            <button class="layui-btn test-upload-demoMore" lay-data="{url: '/b/', size:5}">上传B</button><input class="layui-upload-file" type="file" accept="undefined" name="file">
            <button class="layui-btn test-upload-demoMore" lay-data="{url: '/c/', accept: 'file',size:10}">上传C</button><input class="layui-upload-file" type="file" accept="undefined" name="file">
          </div>
        </div>
      </div>

    </div>
  </div><script>
  layui.use(['admin', 'upload'], function(){
    var $ = layui.jquery
    ,upload = layui.upload;

    //普通图片上传
    var uploadInst = upload.render({
      elem: '#test-upload-normal'
      ,url: '/upload/'
      ,before: function(obj){
        //预读本地文件示例，不支持ie8
        obj.preview(function(index, file, result){
          $('#test-upload-normal-img').attr('src', result); //图片链接（base64）
        });
      }
      ,done: function(res){
        //如果上传失败
        if(res.code > 0){
          return layer.msg('上传失败');
        }
        //上传成功
      }
      ,error: function(){
        //演示失败状态，并实现重传
        var demoText = $('#test-upload-demoText');
        demoText.html('<span style="color: #FF5722;">上传失败</span> <a class="layui-btn layui-btn-mini demo-reload">重试</a>');
        demoText.find('.demo-reload').on('click', function(){
          uploadInst.upload();
        });
      }
    });

    //多图片上传
    upload.render({
      elem: '#test-upload-more'
      ,url: '/upload/'
      ,multiple: true
      ,before: function(obj){
        //预读本地文件示例，不支持ie8
        obj.preview(function(index, file, result){
          $('#test-upload-more-list').append('<img src="'+ result +'" alt="'+ file.name +'" class="layui-upload-img">')
        });
      }
      ,done: function(res){
        //上传完毕
      }
    });

    //指定允许上传的文件类型
    upload.render({
      elem: '#test-upload-type1'
      ,url: '/upload/'
      ,accept: 'file' //普通文件
      ,done: function(res){
        console.log(res)
      }
    });
    upload.render({ //允许上传的文件后缀
      elem: '#test-upload-type2'
      ,url: '/upload/'
      ,accept: 'file' //普通文件
      ,exts: 'zip|rar|7z' //只允许上传压缩文件
      ,done: function(res){
        console.log(res)
      }
    });
    upload.render({
      elem: '#test-upload-type3'
      ,url: '/upload/'
      ,accept: 'video' //视频
      ,done: function(res){
        console.log(res)
      }
    });
    upload.render({
      elem: '#test-upload-type4'
      ,url: '/upload/'
      ,accept: 'audio' //音频
      ,done: function(res){
        console.log(res)
      }
    });

    //设定文件大小限制
    upload.render({
      elem: '#test-upload-size'
      ,url: '/upload/'
      ,size: 60 //限制文件大小，单位 KB
      ,done: function(res){
        console.log(res)
      }
    });

    //同时绑定多个元素，并将属性设定在元素上
    upload.render({
      elem: '.test-upload-demoMore'
      ,before: function(){
        layer.tips('接口地址：'+ this.url, this.item, {tips: 1});
      }
      ,done: function(res, index, upload){
        var item = this.item;
        console.log(item); //获取当前触发上传的元素，layui 2.1.0 新增
      }
    })

  });
  </script></div>
  </div>
@stop
