@extends('admin.common.layout')
@section('content')
<div class="layui-body" id="LAY_app_body">
    <div class="layadmin-tabsbody-item layui-show"><div class="layui-card layadmin-header">
    <div class="layui-breadcrumb" lay-filter="breadcrumb" style="visibility: visible;">
      <a lay-href="">主页</a><span lay-separator="">/</span>
      <a><cite>组件</cite></a><span lay-separator="">/</span>
      <a><cite>评分组件</cite></a>
    </div>
  </div><div class="layui-fluid">
    <div class="layui-row layui-col-space15">
      <div class="layui-col-md6">
        <div class="layui-card">
          <div class="layui-card-header">基础效果</div>
          <div class="layui-card-body">
            <div id="test-rate-dome1" class="layui-inline"><ul class="layui-rate"><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid"></i></li></ul></div>
          </div>
        </div>
        <div class="layui-card">
          <div class="layui-card-header">显示文字</div>
          <div class="layui-card-body">
            <div id="test-rate-dome2" class="layui-inline"><ul class="layui-rate"><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate"></i></li></ul><span class="layui-inline">2星</span></div>
          </div>
        </div>
        <div class="layui-card">
          <div class="layui-card-header">半星效果</div>
          <div class="layui-card-body">
            <div id="test-rate-dome3" class="layui-inline"><ul class="layui-rate"><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid"></i></li><li><i class="layui-icon layui-icon-rate-half"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate"></i></li></ul></div>
            <div><div id="test-rate-dome4" class="layui-inline"><ul class="layui-rate"><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid"></i></li><li><i class="layui-icon layui-icon-rate-half"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate"></i></li></ul><span class="layui-inline">3.5星</span></div></div>
          </div>
        </div>
        <div class="layui-card">
          <div class="layui-card-header">自定义主题色</div>
          <div class="layui-card-body">
            <ul>
              <li><div id="test-rate-dome10" class="layui-inline"><ul class="layui-rate"><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid" style="color: #FF8000;"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid" style="color: #FF8000;"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid" style="color: #FF8000;"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate" style="color: #FF8000;"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate" style="color: #FF8000;"></i></li></ul></div></li>
              <li><div id="test-rate-dome11" class="layui-inline"><ul class="layui-rate"><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid" style="color: #009688;"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid" style="color: #009688;"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid" style="color: #009688;"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate" style="color: #009688;"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate" style="color: #009688;"></i></li></ul></div></li>
              <li><div id="test-rate-dome12" class="layui-inline"><ul class="layui-rate"><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid" style="color: #1E9FFF;"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid" style="color: #1E9FFF;"></i></li><li><i class="layui-icon layui-icon-rate-half" style="color: #1E9FFF;"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate" style="color: #1E9FFF;"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate" style="color: #1E9FFF;"></i></li></ul></div></li>
              <li><div id="test-rate-dome13" class="layui-inline"><ul class="layui-rate"><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid" style="color: #2F4056;"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid" style="color: #2F4056;"></i></li><li><i class="layui-icon layui-icon-rate-half" style="color: #2F4056;"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate" style="color: #2F4056;"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate" style="color: #2F4056;"></i></li></ul></div></li>
              <li><div id="test-rate-dome14" class="layui-inline"><ul class="layui-rate"><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid" style="color: #FE0000;"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid" style="color: #FE0000;"></i></li><li><i class="layui-icon layui-icon-rate-half" style="color: #FE0000;"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate" style="color: #FE0000;"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate" style="color: #FE0000;"></i></li></ul></div></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="layui-col-md6">
        <div class="layui-card">
          <div class="layui-card-header">只读</div>
          <div class="layui-card-body">
            <div id="test-rate-dome9" class="layui-inline"><ul class="layui-rate" readonly=""><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate"></i></li></ul></div>
          </div>
        </div>
        <div class="layui-card">
          <div class="layui-card-header">自定义内容</div>
          <div class="layui-card-body">
            <div id="test-rate-dome5" class="layui-inline"><ul class="layui-rate"><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate"></i></li></ul><span class="layui-inline">中等</span></div>
            <div><div id="test-rate-dome6" class="layui-inline"><ul class="layui-rate"><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid"></i></li><li><i class="layui-icon layui-icon-rate-half"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate"></i></li></ul><span class="layui-inline">1.5</span></div></div>
          </div>
        </div>
        <div class="layui-card">
          <div class="layui-card-header">自定义长度</div>
          <div class="layui-card-body">
            <div id="test-rate-dome7" class="layui-inline"><ul class="layui-rate"><li class="layui-inline"><i class="layui-icon layui-icon-rate"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate"></i></li></ul></div>
            <div><div id="test-rate-dome8" class="layui-inline"><ul class="layui-rate"><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate"></i></li></ul></div></div>
          </div>
        </div>
      </div>

    </div>
  </div><script>
  layui.use(['admin', 'rate'], function(){
    var rate = layui.rate;
    //基础效果
    rate.render({
      elem: '#test-rate-dome1'
    })

    //显示文字
    rate.render({
      elem: '#test-rate-dome2'
      ,value: 2 //初始值
      ,text: true //开启文本
    });

    //半星效果
    rate.render({
      elem: '#test-rate-dome3'
      ,value: 2.5 //初始值
      ,half: true //开启半星
    })
    rate.render({
      elem: '#test-rate-dome4'
      ,value: 3.5
      ,half: true
      ,text: true
    })

    //自定义文本
    rate.render({
      elem: '#test-rate-dome5'
      ,value: 3
      ,text: true
      ,setText: function(value){ //自定义文本的回调
        var arrs = {
          '1': '极差'
          ,'2': '差'
          ,'3': '中等'
          ,'4': '好'
          ,'5': '极好'
        };
        this.span.text(arrs[value] || ( value + "星"));
      }
    })
    rate.render({
      elem: '#test-rate-dome6'
      ,value: 1.5
      ,half: true
      ,text: true
      ,setText: function(value){
        this.span.text(value);
      }
    })

    //自定义长度
    rate.render({
      elem: '#test-rate-dome7'
      ,length: 3
    });
    rate.render({
      elem: '#test-rate-dome8'
      ,length: 10
      ,value: 8 //初始值
    });

    //只读
    rate.render({
      elem: '#test-rate-dome9'
      ,value: 4
      ,readonly: true
    });

    //主题色
    rate.render({
      elem: '#test-rate-dome10'
      ,value: 3
      ,theme: '#FF8000' //自定义主题色
    });
    rate.render({
      elem: '#test-rate-dome11'
      ,value: 3
      ,theme: '#009688'
    });

    rate.render({
      elem: '#test-rate-dome12'
      ,value: 2.5
      ,half: true
      ,theme: '#1E9FFF'
    })
    rate.render({
      elem: '#test-rate-dome13'
      ,value: 2.5
      ,half: true
      ,theme: '#2F4056'
    });
    rate.render({
      elem: '#test-rate-dome14'
      ,value: 2.5
      ,half: true
      ,theme: '#FE0000'
    })
  });
  </script></div>
  </div>
@stop
