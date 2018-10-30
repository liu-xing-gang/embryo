@extends('admin.common.layout')
@section('content')
<div class="layui-body" id="LAY_app_body">
    <div class="layadmin-tabsbody-item layui-show"><div class="layui-card layadmin-header">
    <div class="layui-breadcrumb" lay-filter="breadcrumb" style="visibility: visible;">
      <a lay-href="">主页</a><span lay-separator="">/</span>
      <a><cite>组件</cite></a><span lay-separator="">/</span>
      <a><cite>上传组件</cite></a><span lay-separator="">/</span>
      <a><cite>功能演示二</cite></a>
    </div>
  </div><div class="layui-fluid">
    <div class="layui-row layui-col-space15">
      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">选完文件后不自动上传</div>
          <div class="layui-card-body">
            <div class="layui-upload">
              <button type="button" class="layui-btn layui-btn-normal" id="test-upload-change">选择文件</button><input class="layui-upload-file" type="file" accept="undefined" name="file">
              <button type="button" class="layui-btn" id="test-upload-change-action">开始上传</button>
            </div>
          </div>
        </div>
      </div>

      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">拖拽上传</div>
          <div class="layui-card-body">
            <div class="layui-upload-drag" id="test-upload-drag">
              <i class="layui-icon"></i>
              <p>点击上传，或将文件拖拽到此处</p>
            </div><input class="layui-upload-file" type="file" accept="undefined" name="file">
          </div>
        </div>
      </div>

      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">高级应用：制作一个多文件列表</div>
          <div class="layui-card-body">
            <div class="layui-upload">
              <button type="button" class="layui-btn layui-btn-normal" id="test-upload-testList">选择多文件</button><input class="layui-upload-file" type="file" accept="undefined" name="file" multiple="">
              <div class="layui-upload-list">
                <table class="layui-table">
                  <thead>
                    <tr><th>文件名</th>
                    <th>大小</th>
                    <th>状态</th>
                    <th>操作</th>
                  </tr></thead>
                  <tbody id="test-upload-demoList"></tbody>
                </table>
              </div>
              <button type="button" class="layui-btn" id="test-upload-testListAction">开始上传</button>
            </div>
          </div>
        </div>
      </div>

      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">绑定原始文件域</div>
          <div class="layui-card-body">
            <input type="file" name="file" id="test-upload-primary">
          </div>
        </div>
      </div>

    </div>
  </div><script>
  layui.use(['admin', 'upload'], function(){
    var $ = layui.jquery
    ,upload = layui.upload;

    //选完文件后不自动上传
    upload.render({
      elem: '#test-upload-change'
      ,url: '/upload/'
      ,auto: false
      //,multiple: true
      ,bindAction: '#test-upload-change-action'
      ,done: function(res){
        console.log(res)
      }
    });

    //拖拽上传
    upload.render({
      elem: '#test-upload-drag'
      ,url: '/upload/'
      ,done: function(res){
        console.log(res)
      }
    });

    //多文件列表示例
    var demoListView = $('#test-upload-demoList')
    ,uploadListIns = upload.render({
      elem: '#test-upload-testList'
      ,url: '/upload/'
      ,accept: 'file'
      ,multiple: true
      ,auto: false
      ,bindAction: '#test-upload-testListAction'
      ,choose: function(obj){
        var files = this.files = obj.pushFile(); //将每次选择的文件追加到文件队列
        //读取本地文件
        obj.preview(function(index, file, result){
          var tr = $(['<tr id="upload-'+ index +'">'
            ,'<td>'+ file.name +'</td>'
            ,'<td>'+ (file.size/1014).toFixed(1) +'kb</td>'
            ,'<td>等待上传</td>'
            ,'<td>'
              ,'<button class="layui-btn layui-btn-mini test-upload-demo-reload layui-hide">重传</button>'
              ,'<button class="layui-btn layui-btn-mini layui-btn-danger test-upload-demo-delete">删除</button>'
            ,'</td>'
          ,'</tr>'].join(''));

          //单个重传
          tr.find('.test-upload-demo-reload').on('click', function(){
            obj.upload(index, file);
          });

          //删除
          tr.find('.test-upload-demo-delete').on('click', function(){
            delete files[index]; //删除对应的文件
            tr.remove();
            uploadListIns.config.elem.next()[0].value = ''; //清空 input file 值，以免删除后出现同名文件不可选
          });

          demoListView.append(tr);
        });
      }
      ,done: function(res, index, upload){
        if(res.code == 0){ //上传成功
          var tr = demoListView.find('tr#upload-'+ index)
          ,tds = tr.children();
          tds.eq(2).html('<span style="color: #5FB878;">上传成功</span>');
          tds.eq(3).html(''); //清空操作
          return delete this.files[index]; //删除文件队列已经上传成功的文件
        }
        this.error(index, upload);
      }
      ,error: function(index, upload){
        var tr = demoListView.find('tr#upload-'+ index)
        ,tds = tr.children();
        tds.eq(2).html('<span style="color: #FF5722;">上传失败</span>');
        tds.eq(3).find('.test-upload-demo-reload').removeClass('layui-hide'); //显示重传
      }
    });

    //绑定原始文件域
    upload.render({
      elem: '#test-upload-primary'
      ,url: '/upload/'
      ,done: function(res){
        console.log(res)
      }
    });

  });
  </script></div>
  </div>
@stop