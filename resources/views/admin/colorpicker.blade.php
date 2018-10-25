@extends('admin.common.layout')
@section('content')
<div class="layui-body" id="LAY_app_body">
    <div class="layadmin-tabsbody-item layui-show"><div class="layui-card layadmin-header">
    <div class="layui-breadcrumb" lay-filter="breadcrumb" style="visibility: visible;">
      <a lay-href="">主页</a><span lay-separator="">/</span>
      <a><cite>组件</cite></a><span lay-separator="">/</span>
      <a><cite>颜色选择器组件</cite></a>
    </div>
  </div><div class="layui-fluid">
    <div class="layui-row layui-col-space15">
      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">常规使用</div>
          <div class="layui-card-body">
            <div id="test-colorpicker-dome1" class="layui-inline"><div class="layui-unselect layui-colorpicker"><span><span class="layui-colorpicker-trigger-span" lay-type="" style=""><i class="layui-icon layui-colorpicker-trigger-i layui-icon-close"></i></span></span></div></div>
            <div id="test-colorpicker-dome2" style="margin-left: 10px;" class="layui-inline"><div class="layui-unselect layui-colorpicker"><span><span class="layui-colorpicker-trigger-span" lay-type="" style="background: #2ec770"><i class="layui-icon layui-colorpicker-trigger-i layui-icon-down"></i></span></span></div></div>
          </div>
        </div>
        <div class="layui-card">
          <div class="layui-card-header">表单赋值</div>
          <div class="layui-card-body">
            <form class="layui-form" action="">
              <div class="layui-form-item">
                <div class="layui-input-inline" style="width: 120px;">
                  <input type="text" value="" placeholder="请选择颜色" class="layui-input" id="test-colorpicker-form-input">
                </div>
                <div class="layui-inline" style="left: -11px;">
                  <div id="test-colorpicker-dome3" class="layui-inline"><div class="layui-unselect layui-colorpicker"><span><span class="layui-colorpicker-trigger-span" lay-type="" style="background: #1c97f5"><i class="layui-icon layui-colorpicker-trigger-i layui-icon-down"></i></span></span></div></div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="layui-card">
          <div class="layui-card-header">RGB / RGBA 色值</div>
          <div class="layui-card-body">
            <div id="test-colorpicker-dome4" class="layui-inline"><div class="layui-unselect layui-colorpicker"><span><span class="layui-colorpicker-trigger-span" lay-type="torgb" style="background: rgb(68,66,66)"><i class="layui-icon layui-colorpicker-trigger-i layui-icon-down"></i></span></span></div></div>
            <div id="test-colorpicker-dome5" style="margin-left: 30px;" class="layui-inline"><div class="layui-unselect layui-colorpicker"><span class="layui-colorpicker-trigger-bgcolor"><span class="layui-colorpicker-trigger-span" lay-type="rgba" style="background: rgba(68,66,66,0.5)"><i class="layui-icon layui-colorpicker-trigger-i layui-icon-down"></i></span></span></div></div>
          </div>
        </div>
        <div class="layui-card">
          <div class="layui-card-header">透明度选择</div>
          <div class="layui-card-body">
            <div id="test-colorpicker-dome6" class="layui-inline"><div class="layui-unselect layui-colorpicker"><span class="layui-colorpicker-trigger-bgcolor"><span class="layui-colorpicker-trigger-span" lay-type="rgba" style="background: #009688"><i class="layui-icon layui-colorpicker-trigger-i layui-icon-down"></i></span></span></div></div>
            <div id="test-colorpicker-dome7" style="margin-left: 30px;" class="layui-inline"><div class="layui-unselect layui-colorpicker"><span class="layui-colorpicker-trigger-bgcolor"><span class="layui-colorpicker-trigger-span" lay-type="rgba" style="background: rgb(0,150,136,0.6)"><i class="layui-icon layui-colorpicker-trigger-i layui-icon-down"></i></span></span></div></div>
            <div id="test-colorpicker-dome8" style="margin-left: 30px;" class="layui-inline"><div class="layui-unselect layui-colorpicker"><span class="layui-colorpicker-trigger-bgcolor"><span class="layui-colorpicker-trigger-span" lay-type="rgba" style=""><i class="layui-icon layui-colorpicker-trigger-i layui-icon-close"></i></span></span></div></div>
          </div>
        </div>
        <div class="layui-card">
          <div class="layui-card-header">预定义颜色项</div>
          <div class="layui-card-body">
            <div id="test-colorpicker-dome9" class="layui-inline"><div class="layui-unselect layui-colorpicker"><span><span class="layui-colorpicker-trigger-span" lay-type="" style="background: #c71585"><i class="layui-icon layui-colorpicker-trigger-i layui-icon-down"></i></span></span></div></div>
            <div id="test-colorpicker-dome10" style="margin-left: 30px;" class="layui-inline"><div class="layui-unselect layui-colorpicker"><span><span class="layui-colorpicker-trigger-span" lay-type="" style="background: #9d8a0e"><i class="layui-icon layui-colorpicker-trigger-i layui-icon-down"></i></span></span></div></div>
          </div>
        </div>
        <div class="layui-card">
          <div class="layui-card-header">全功能和回调的使用</div>
          <div class="layui-card-body">
            <input type="hidden" name="color" value="" id="test-colorpicker-all-input">
            <div id="test-colorpicker-dome11" class="layui-inline"><div class="layui-unselect layui-colorpicker"><span class="layui-colorpicker-trigger-bgcolor"><span class="layui-colorpicker-trigger-span" lay-type="rgba" style="background: rgba(7, 155, 140, 1)"><i class="layui-icon layui-colorpicker-trigger-i layui-icon-down"></i></span></span></div></div>
          </div>
        </div>
        <div class="layui-card">
          <div class="layui-card-header">颜色框尺寸</div>
          <div class="layui-card-body">
            <div id="test-colorpicker-dome12" class="layui-inline"><div class="layui-unselect layui-colorpicker layui-colorpicker-lg"><span><span class="layui-colorpicker-trigger-span" lay-type="" style=""><i class="layui-icon layui-colorpicker-trigger-i layui-icon-close"></i></span></span></div></div>
            <div id="test-colorpicker-dome13" style="margin-left: 30px;" class="layui-inline"><div class="layui-unselect layui-colorpicker"><span><span class="layui-colorpicker-trigger-span" lay-type="" style=""><i class="layui-icon layui-colorpicker-trigger-i layui-icon-close"></i></span></span></div></div>
            <div id="test-colorpicker-dome14" style="margin-left: 30px;" class="layui-inline"><div class="layui-unselect layui-colorpicker layui-colorpicker-xs"><span><span class="layui-colorpicker-trigger-span" lay-type="" style=""><i class="layui-icon layui-colorpicker-trigger-i layui-icon-close"></i></span></span></div></div>
          </div>
        </div>
      </div>
    </div>
  </div><script>
  layui.use(['admin', 'colorpicker'], function(){
    var $ = layui.$
    ,colorpicker = layui.colorpicker;

    //常规使用
    colorpicker.render({
      elem: '#test-colorpicker-dome1' //绑定元素
      ,change: function(color){ //颜色改变的回调
        layer.tips('选择了：'+ color, this.elem, {
          tips: 1
        });
      }
    });

    //初始色值
    colorpicker.render({
      elem: '#test-colorpicker-dome2'
      ,color: '#2ec770' //设置默认色
      ,done: function(color){
        layer.tips('选择了：'+ color, this.elem);
      }
    });

    //表单赋值
    colorpicker.render({
      elem: '#test-colorpicker-dome3'
      ,color: '#1c97f5'
      ,done: function(color){
        $('#test-colorpicker-form-input').val(color);
      }
    });

    //RGB 、RGBA
    colorpicker.render({
      elem: '#test-colorpicker-dome4'
      ,color: 'rgb(68,66,66)'
      ,format: 'rgb' //默认为 hex
    });
    colorpicker.render({
      elem: '#test-colorpicker-dome5'
      ,color: 'rgba(68,66,66,0.5)'
      ,format: 'rgb'
      ,alpha: true //开启透明度滑块
    });

    //开启透明度
    colorpicker.render({
      elem: '#test-colorpicker-dome6'
      ,color: '#009688' //hex
      ,alpha: true //开启透明度
      ,format: 'rgb'
    });
    colorpicker.render({
      elem: '#test-colorpicker-dome7'
      ,color: 'rgb(0,150,136,0.6)' //rgba
      ,alpha: true
      ,format: 'rgb'
    });
    colorpicker.render({ //无初始色值时
      elem: '#test-colorpicker-dome8'
      ,alpha: true
      ,format: 'rgb'
    });

    //预定义颜色项
    colorpicker.render({
      elem: '#test-colorpicker-dome9'
      ,color: '#c71585'
      ,predefine: true // 开启预定义颜色
    });
    colorpicker.render({
      elem: '#test-colorpicker-dome10'
      ,color: '#9d8a0e'
      ,predefine: true // 开启预定义颜色
      ,colors: ['#ff8c00','#00ced1','#9d8a0e'] //自定义预定义颜色项
    });

    //开启全功能
    colorpicker.render({
      elem: '#test-colorpicker-dome11'
      ,color: 'rgba(7, 155, 140, 1)'
      ,format: 'rgb'
      ,predefine: true
      ,alpha: true
      ,done: function(color){
        $('#test-colorpicker-all-input').val(color); //向隐藏域赋值
        layer.tips('给指定隐藏域设置了颜色值：'+ color, this.elem);

        color || this.change(color); //清空时执行 change
      }
      ,change: function(color){
        //给当前页面头部和左侧设置主题色
        $('.layui-side-menu,.layui-logo').css('cssText', 'background-color: '+ color + ' !important;');
      }
    });

    //设定颜色框尺寸
    colorpicker.render({
      elem: '#test-colorpicker-dome12'
      ,size: 'lg' //大号下拉框
    });
    colorpicker.render({
      elem: '#test-colorpicker-dome13'
      //,size: 'sm' //默认 sm
    });
    colorpicker.render({
      elem: '#test-colorpicker-dome14'
      ,size: 'xs' //mini下拉框
    });
  });
  </script></div>
  </div>
@stop
