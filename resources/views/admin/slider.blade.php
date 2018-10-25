@extends('admin.common.layout')
@section('content')
<div class="layui-body" id="LAY_app_body">
    <div class="layadmin-tabsbody-item layui-show"><div class="layui-card layadmin-header">
    <div class="layui-breadcrumb" lay-filter="breadcrumb" style="visibility: visible;">
      <a lay-href="">主页</a><span lay-separator="">/</span>
      <a><cite>组件</cite></a><span lay-separator="">/</span>
      <a><cite>滑块组件</cite></a>
    </div>
  </div><style>
  .test-slider-demo{margin: 45px 30px;}
  </style><div class="layui-fluid">
    <div class="layui-row layui-col-space15">
      <div class="layui-col-md6">
        <div class="layui-card">
          <div class="layui-card-header">基础效果</div>
          <div class="layui-card-body">
            <div id="test-slider-dome1" class="test-slider-demo"><div class="layui-slider "><div class="layui-slider-tips"></div><div class="layui-slider-bar" style="background:#009688; width:0%;left:0;"></div><div class="layui-slider-wrap" style="left:0%;"><div class="layui-slider-wrap-btn" style="border: 2px solid #009688;"></div></div></div></div>
          </div>
        </div>
        <div class="layui-card">
          <div class="layui-card-header">定义初始值</div>
          <div class="layui-card-body">
            <div id="test-slider-dome1" class="test-slider-demo"></div>
          </div>
        </div>
        <div class="layui-card">
          <div class="layui-card-header">设置最大最小值</div>
          <div class="layui-card-body">
            <div id="test-slider-dome3" class="test-slider-demo"><div class="layui-slider "><div class="layui-slider-tips"></div><div class="layui-slider-bar" style="background:#009688; width:0%;left:0;"></div><div class="layui-slider-wrap" style="left:0%;"><div class="layui-slider-wrap-btn" style="border: 2px solid #009688;"></div></div></div></div>
          </div>
        </div>
        <div class="layui-card">
          <div class="layui-card-header">设置步长</div>
          <div class="layui-card-body">
            <div id="test-slider-dome4" class="test-slider-demo"><div class="layui-slider "><div class="layui-slider-tips"></div><div class="layui-slider-bar" style="background:#009688; width:0%;left:0;"></div><div class="layui-slider-wrap" style="left:0%;"><div class="layui-slider-wrap-btn" style="border: 2px solid #009688;"></div></div></div></div>
            <div id="test-slider-dome5" class="test-slider-demo"><div class="layui-slider "><div class="layui-slider-tips"></div><div class="layui-slider-bar" style="background:#009688; width:0%;left:0;"></div><div class="layui-slider-wrap" style="left:0%;"><div class="layui-slider-wrap-btn" style="border: 2px solid #009688;"></div></div><div class="layui-slider-step" style="left:10%"></div><div class="layui-slider-step" style="left:20%"></div><div class="layui-slider-step" style="left:30%"></div><div class="layui-slider-step" style="left:40%"></div><div class="layui-slider-step" style="left:50%"></div><div class="layui-slider-step" style="left:60%"></div><div class="layui-slider-step" style="left:70%"></div><div class="layui-slider-step" style="left:80%"></div><div class="layui-slider-step" style="left:90%"></div></div></div>
          </div>
        </div>
        <div class="layui-card">
          <div class="layui-card-header">设置提示文本</div>
          <div class="layui-card-body">
            <div id="test-slider-dome6" class="test-slider-demo"><div class="layui-slider "><div class="layui-slider-tips"></div><div class="layui-slider-bar" style="background:#009688; width:0%;left:0;"></div><div class="layui-slider-wrap" style="left:0%;"><div class="layui-slider-wrap-btn" style="border: 2px solid #009688;"></div></div></div></div>
            <div id="test-slider-dome7" class="test-slider-demo"><div class="layui-slider "><div class="layui-slider-bar" style="background:#009688; width:0%;left:0;"></div><div class="layui-slider-wrap" style="left:0%;"><div class="layui-slider-wrap-btn" style="border: 2px solid #009688;"></div></div></div></div>
            <div id="test-slider-tips1" style="position:relative; left: 30px; top: -20px;"></div>
          </div>
        </div>
        <div class="layui-card">
          <div class="layui-card-header">开启输入框</div>
          <div class="layui-card-body">
            <div id="test-slider-dome8" class="test-slider-demo" style="position: relative;"><div class="layui-slider " style="margin-right: 85px;"><div class="layui-slider-tips"></div><div class="layui-slider-bar" style="background:#009688; width:0%;left:0;"></div><div class="layui-slider-wrap" style="left:0%;"><div class="layui-slider-wrap-btn" style="border: 2px solid #009688;"></div></div></div><div class="layui-slider-input layui-input"><div class="layui-slider-input-txt"><input type="text" class="layui-input"></div><div class="layui-slider-input-btn"><i class="layui-icon layui-icon-up"></i><i class="layui-icon layui-icon-down"></i></div></div></div>
          </div>
        </div>
      </div>
      <div class="layui-col-md6">
        <div class="layui-card">
          <div class="layui-card-header">开启范围选择</div>
          <div class="layui-card-body">
            <div id="test-slider-dome9" class="test-slider-demo"><div class="layui-slider "><div class="layui-slider-tips"></div><div class="layui-slider-bar" style="background:#009688; width:40%;left:0%;"></div><div class="layui-slider-wrap" style="left:0%;"><div class="layui-slider-wrap-btn" style="border: 2px solid #009688;"></div></div><div class="layui-slider-wrap" style="left:40%;"><div class="layui-slider-wrap-btn" style="border: 2px solid #009688;"></div></div></div></div>
            <div id="test-slider-tips2" style="position:relative; left: 30px; margin-top: -10px;"></div>
            <div id="test-slider-dome10" class="test-slider-demo"><div class="layui-slider "><div class="layui-slider-tips"></div><div class="layui-slider-bar" style="background:#009688; width:30%;left:30%;"></div><div class="layui-slider-wrap" style="left:30%;"><div class="layui-slider-wrap-btn" style="border: 2px solid #009688;"></div></div><div class="layui-slider-wrap" style="left:60%;"><div class="layui-slider-wrap-btn" style="border: 2px solid #009688;"></div></div></div></div>
          </div>
        </div>
        <div class="layui-card">
          <div class="layui-card-header">垂直滑块</div>
          <div class="layui-card-body">
            <div id="test-slider-dome11" style="margin: 45px 30px; display: inline-block;"><div class="layui-slider layui-slider-vertical" style="height: 200px;"><div class="layui-slider-tips"></div><div class="layui-slider-bar" style="background:#009688; height:0%;bottom:0;"></div><div class="layui-slider-wrap" style="bottom:0%;"><div class="layui-slider-wrap-btn" style="border: 2px solid #009688;"></div></div></div></div>
            <div id="test-slider-dome12" style="margin: 45px 30px; display: inline-block;"><div class="layui-slider layui-slider-vertical" style="height: 200px;"><div class="layui-slider-tips"></div><div class="layui-slider-bar" style="background:#009688; height:30%;bottom:0;"></div><div class="layui-slider-wrap" style="bottom:30%;"><div class="layui-slider-wrap-btn" style="border: 2px solid #009688;"></div></div></div></div>
            <div id="test-slider-dome13" style="margin: 45px 30px; display: inline-block;"><div class="layui-slider layui-slider-vertical" style="height: 200px;"><div class="layui-slider-tips"></div><div class="layui-slider-bar" style="background:#009688; height:50%;bottom:0%;"></div><div class="layui-slider-wrap" style="bottom:0%;"><div class="layui-slider-wrap-btn" style="border: 2px solid #009688;"></div></div><div class="layui-slider-wrap" style="bottom:50%;"><div class="layui-slider-wrap-btn" style="border: 2px solid #009688;"></div></div></div></div>
            <div id="test-slider-dome14" style="margin: 45px 30px; display: inline-block; position: relative;"><div class="layui-slider layui-slider-vertical" style="height: 200px;"><div class="layui-slider-tips"></div><div class="layui-slider-bar" style="background:#009688; height:80%;bottom:0;"></div><div class="layui-slider-wrap" style="bottom:80%;"><div class="layui-slider-wrap-btn" style="border: 2px solid #009688;"></div></div></div><div class="layui-slider-input layui-input" style="left: 0px; top: -48px;"><div class="layui-slider-input-txt"><input type="text" class="layui-input"></div><div class="layui-slider-input-btn"><i class="layui-icon layui-icon-up"></i><i class="layui-icon layui-icon-down"></i></div></div></div>
          </div>
        </div>
        <div class="layui-card">
          <div class="layui-card-header">自定义颜色</div>
          <div class="layui-card-body">
            <div id="test-slider-dome15" class="test-slider-demo"><div class="layui-slider "><div class="layui-slider-tips"></div><div class="layui-slider-bar" style="background:#1E9FFF; width:0%;left:0;"></div><div class="layui-slider-wrap" style="left:0%;"><div class="layui-slider-wrap-btn" style="border: 2px solid #1E9FFF;"></div></div></div></div>
            <div id="test-slider-dome16" class="test-slider-demo"><div class="layui-slider "><div class="layui-slider-tips"></div><div class="layui-slider-bar" style="background:#5FB878; width:50%;left:0;"></div><div class="layui-slider-wrap" style="left:50%;"><div class="layui-slider-wrap-btn" style="border: 2px solid #5FB878;"></div></div></div></div>
            <div id="test-slider-dome17" class="test-slider-demo"><div class="layui-slider "><div class="layui-slider-tips"></div><div class="layui-slider-bar" style="background:#FF5722; width:40%;left:30%;"></div><div class="layui-slider-wrap" style="left:30%;"><div class="layui-slider-wrap-btn" style="border: 2px solid #FF5722;"></div></div><div class="layui-slider-wrap" style="left:70%;"><div class="layui-slider-wrap-btn" style="border: 2px solid #FF5722;"></div></div></div></div>
          </div>
        </div>
        <div class="layui-card">
          <div class="layui-card-header">禁用滑块</div>
          <div class="layui-card-body">
            <div id="test-slider-dome18" class="test-slider-demo"><div class="layui-slider  layui-disabled"><div class="layui-slider-tips"></div><div class="layui-slider-bar" style="background:#c2c2c2; width:35%;left:0;"></div><div class="layui-slider-wrap" style="left:35%;"><div class="layui-slider-wrap-btn layui-disabled" style="border: 2px solid #c2c2c2;"></div></div></div></div>
          </div>
        </div>
      </div>
    </div>
  </div><script>
  layui.use(['admin', 'slider'], function(){
    var $ = layui.$
    ,slider = layui.slider;

    //默认滑块
    slider.render({
      elem: '#test-slider-dome1'
    });

    //定义初始值
    slider.render({
      elem: '#test-slider-dome2'
      ,value: 20 //初始值
    });

    //设置最大最小值
    slider.render({
      elem: '#test-slider-dome3'
      ,min: 20 //最小值
      ,max: 50 //最大值
    });

    //设置步长
    slider.render({
      elem: '#test-slider-dome4'
      ,step: 10 //步长
    });

    slider.render({
      elem: '#test-slider-dome5'
      ,step: 10 //步长
      ,showstep: true //开启间隔点
    });

    //设置提示文本
    slider.render({
      elem: '#test-slider-dome6'
      ,min: 20
      ,max: 1000
      ,setTips: function(value){ //自定义提示文本
       return value + 'GB';
      }
    });
    slider.render({
      elem: '#test-slider-dome7'
      ,tips: false //关闭默认提示层
      ,change: function(value){
        $('#test-slider-tips1').html('当前数值：'+ value);
      }
    });

    //开启输入框
    slider.render({
      elem: '#test-slider-dome8'
      ,input: true //输入框
    });

    //开启范围选择
    slider.render({
      elem: '#test-slider-dome9'
      ,value: 40 //初始值
      ,range: true //范围选择
      ,change: function(vals){
        $('#test-slider-tips2').html('开始值：'+ vals[0] + '、结尾值：'+ vals[1]);
      }
    });
    slider.render({
      elem: '#test-slider-dome10'
      ,value: [30, 60] //初始值
      ,range: true //范围选择
    });

    //垂直滑块
    slider.render({
      elem: '#test-slider-dome11'
      ,type: 'vertical' //垂直滑块
    });
    slider.render({
      elem: '#test-slider-dome12'
      ,value: 30
      ,type: 'vertical' //垂直滑块
    });
    slider.render({
      elem: '#test-slider-dome13'
      ,value: 50
      ,range: true //范围选择
      ,type: 'vertical' //垂直滑块
    });
    slider.render({
      elem: '#test-slider-dome14'
      ,value: 80
      ,input: true //输入框
      ,type: 'vertical' //垂直滑块
    });

    //自定义颜色
    slider.render({
      elem: '#test-slider-dome15'
      ,theme: '#1E9FFF' //主题色
    });
    slider.render({
      elem: '#test-slider-dome16'
      ,value: 50
      ,theme: '#5FB878' //主题色
    });
    slider.render({
      elem: '#test-slider-dome17'
      ,value: [30, 70]
      ,range: true
      ,theme: '#FF5722' //主题色
    });

    //禁用滑块
    slider.render({
      elem: '#test-slider-dome18'
      ,value: 35
      ,disabled: true //禁用滑块
    });
  });
  </script></div>
  </div>
@stop
