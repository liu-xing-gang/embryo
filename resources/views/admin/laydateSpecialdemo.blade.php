@extends('admin.common.layout')
@section('content')
<div class="layui-body" id="LAY_app_body">
    <div class="layadmin-tabsbody-item layui-show"><div class="layui-card layadmin-header">
    <div class="layui-breadcrumb" lay-filter="breadcrumb" style="visibility: visible;">
      <a lay-href="">主页</a><span lay-separator="">/</span>
      <a><cite>组件</cite></a><span lay-separator="">/</span>
      <a><cite>日期时间</cite></a>
    </div>
  </div><div class="layui-fluid">
    <div class="layui-row layui-col-space15">
      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">联动范围选择</div>
          <div class="layui-card-body" pad15="">
            <div class="layui-form" wid100="">
              <div class="layui-form-item">
                <div class="layui-inline">
                  <label class="layui-form-label">活动日期</label>
                  <div class="layui-input-inline">
                    <input type="text" class="layui-input" id="test-laydate-start" placeholder="开始日期" lay-key="1">
                  </div>
                  <div class="layui-form-mid">
                    -
                  </div>
                  <div class="layui-input-inline">
                    <input type="text" class="layui-input" id="test-laydate-end" placeholder="结束日期" lay-key="2">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><script>
  layui.use(['admin', 'laydate'], function(){
    var laydate = layui.laydate;

    //示例代码

    //开始日期
    var insStart = laydate.render({
      elem: '#test-laydate-start'
      ,min: 0
      ,done: function(value, date){
        //更新结束日期的最小日期
        insEnd.config.min = lay.extend({}, date, {
          month: date.month - 1
        });

        //自动弹出结束日期的选择器
       insEnd.config.elem[0].focus();
      }
    });

    //结束日期
    var insEnd = laydate.render({
      elem: '#test-laydate-end'
      ,min: 0
      ,done: function(value, date){
        //更新开始日期的最大日期
        insStart.config.max = lay.extend({}, date, {
          month: date.month - 1
        });
      }
    });
  });
  </script></div>
  </div>
@stop
