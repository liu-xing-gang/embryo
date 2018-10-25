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
          <div class="layui-card-header">常规用法</div>
          <div class="layui-card-body" pad15="">

            <div class="layui-form">
              <div class="layui-form-item">
                <div class="layui-inline">
                  <label class="layui-form-label">中文版</label>
                  <div class="layui-input-inline">
                    <input type="text" class="layui-input" id="test-laydate-normal-cn" placeholder="yyyy-MM-dd" lay-key="1">
                  </div>
                </div>
                <div class="layui-inline">
                  <label class="layui-form-label">国际版</label>
                  <div class="layui-input-inline">
                    <input type="text" class="layui-input" id="test-laydate-normal-en" placeholder="yyyy-MM-dd" lay-key="2">
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">五大选择器</div>
          <div class="layui-card-body" pad15="">

            <div class="layui-form" wid100="">
              <div class="layui-form-item">
                <div class="layui-inline">
                  <label class="layui-form-label">年选择器</label>
                  <div class="layui-input-inline">
                    <input type="text" class="layui-input" id="test-laydate-type-year" placeholder="yyyy" lay-key="3">
                  </div>
                </div>
                <div class="layui-inline">
                  <label class="layui-form-label">年月选择器</label>
                  <div class="layui-input-inline">
                    <input type="text" class="layui-input" id="test-laydate-type-month" placeholder="yyyy-MM" lay-key="4">
                  </div>
                </div>
                <div class="layui-inline">
                  <label class="layui-form-label">日期选择器</label>
                  <div class="layui-input-inline">
                    <input type="text" class="layui-input" id="test-laydate-type-date" placeholder="yyyy-MM-dd" lay-key="5">
                  </div>
                </div>
                <div class="layui-inline">
                  <label class="layui-form-label">时间选择器</label>
                  <div class="layui-input-inline">
                    <input type="text" class="layui-input" id="test-laydate-type-time" placeholder="HH:mm:ss" lay-key="6">
                  </div>
                </div>
                <div class="layui-inline">
                  <label class="layui-form-label">日期时间选择器</label>
                  <div class="layui-input-inline">
                    <input type="text" class="layui-input" id="test-laydate-type-datetime" placeholder="yyyy-MM-dd HH:mm:ss" lay-key="7">
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">范围选择</div>
          <div class="layui-card-body" pad15="">

            <div class="layui-form" wid100="">
              <div class="layui-form-item">
                <div class="layui-inline">
                  <label class="layui-form-label">日期范围</label>
                  <div class="layui-input-inline">
                    <input type="text" class="layui-input" id="test-laydate-range-date" placeholder=" - " lay-key="8">
                  </div>
                </div>
                <div class="layui-inline">
                  <label class="layui-form-label">年范围</label>
                  <div class="layui-input-inline">
                    <input type="text" class="layui-input" id="test-laydate-range-year" placeholder=" - " lay-key="9">
                  </div>
                </div>
                <div class="layui-inline">
                  <label class="layui-form-label">年月范围</label>
                  <div class="layui-input-inline">
                    <input type="text" class="layui-input" id="test-laydate-range-month" placeholder=" - " lay-key="10">
                  </div>
                </div>
                <div class="layui-inline">
                  <label class="layui-form-label">时间范围</label>
                  <div class="layui-input-inline">
                    <input type="text" class="layui-input" id="test-laydate-range-time" placeholder=" - " lay-key="11">
                  </div>
                </div>
                <div class="layui-inline">
                  <label class="layui-form-label">日期时间范围</label>
                  <div class="layui-input-inline">
                    <input type="text" class="layui-input" id="test-laydate-range-datetime" placeholder=" - " lay-key="12">
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">自定义格式</div>
          <div class="layui-card-body" pad15="">

            <div class="layui-form" wid100="">
              <div class="layui-form-item">
                <div class="layui-inline">
                  <label class="layui-form-label">请选择日期</label>
                  <div class="layui-input-inline">
                    <input type="text" class="layui-input" id="test-laydate-format-date1" placeholder="yyyy年MM月dd日" lay-key="13">
                  </div>
                </div>
                <div class="layui-inline">
                  <label class="layui-form-label">请选择日期</label>
                  <div class="layui-input-inline">
                    <input type="text" class="layui-input" id="test-laydate-format-date2" placeholder="dd/MM/yyyy" lay-key="14">
                  </div>
                </div>
                <div class="layui-inline">
                  <label class="layui-form-label">请选择月份</label>
                  <div class="layui-input-inline">
                    <input type="text" class="layui-input" id="test-laydate-format-month" placeholder="yyyyMM" lay-key="15">
                  </div>
                </div>
                <div class="layui-inline">
                  <label class="layui-form-label">请选择时间</label>
                  <div class="layui-input-inline">
                    <input type="text" class="layui-input" id="test-laydate-format-time" placeholder="H点m分" lay-key="16">
                  </div>
                </div>
                <div class="layui-inline">
                  <label class="layui-form-label">请选择范围</label>
                  <div class="layui-input-inline">
                    <input type="text" class="layui-input" id="test-laydate-format-range1" placeholder=" ~ " lay-key="17">
                  </div>
                </div>
                <div class="layui-inline">
                  <label class="layui-form-label">请选择范围</label>
                  <div class="layui-input-inline">
                    <input type="text" class="layui-input" id="test-laydate-format-range2" placeholder="开始 到 结束" lay-key="18">
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">同时绑定多个</div>
          <div class="layui-card-body" pad15="">
            <div class="layui-form" wid100="">
              <div class="layui-form-item">
                <div class="layui-inline">
                  <input type="text" class="layui-input test-laydate-item" placeholder="yyyy-MM-dd" lay-key="19">
                </div>
                <div class="layui-inline">
                  <input type="text" class="layui-input test-laydate-item" placeholder="yyyy-MM-dd" lay-key="20">
                </div>
                <div class="layui-inline">
                  <input type="text" class="layui-input test-laydate-item" placeholder="yyyy-MM-dd" lay-key="21">
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

    //常规用法
    laydate.render({
      elem: '#test-laydate-normal-cn'
    });

    //国际版
    laydate.render({
      elem: '#test-laydate-normal-en'
      ,lang: 'en'
    });

    //年选择器
    laydate.render({
      elem: '#test-laydate-type-year'
      ,type: 'year'
    });

    //年月选择器
    laydate.render({
      elem: '#test-laydate-type-month'
      ,type: 'month'
    });

    //日期选择器
    laydate.render({
      elem: '#test-laydate-type-date'
      //,type: 'date' //type 默认为 date，所以可不填
    });

    //时间选择器
    laydate.render({
      elem: '#test-laydate-type-time'
      ,type: 'time'
    });

    //日期时间选择器
    laydate.render({
      elem: '#test-laydate-type-datetime'
      ,type: 'datetime'
    });

    //日期范围
    laydate.render({
      elem: '#test-laydate-range-date'
      ,range: true
    });

    //年范围
    laydate.render({
      elem: '#test-laydate-range-year'
      ,type: 'year'
      ,range: true
    });

    //年月范围
    laydate.render({
      elem: '#test-laydate-range-month'
      ,type: 'month'
      ,range: true
    });

    //时间范围
    laydate.render({
      elem: '#test-laydate-range-time'
      ,type: 'time'
      ,range: true
    });

    //日期时间范围
    laydate.render({
      elem: '#test-laydate-range-datetime'
      ,type: 'datetime'
      ,range: true
    });

    //自定义格式
    laydate.render({
      elem: '#test-laydate-format-date1'
      ,format: 'yyyy年MM月dd日'
    });
    laydate.render({
      elem: '#test-laydate-format-date2'
      ,format: 'dd/MM/yyyy'
    });
    laydate.render({
      elem: '#test-laydate-format-month'
      ,type: 'month'
      ,format: 'yyyyMM'
    });
    laydate.render({
      elem: '#test-laydate-format-time'
      ,type: 'time'
      ,format: 'H点m分'
    });
    laydate.render({
      elem: '#test-laydate-format-range1'
      ,range: '~'
    });
    laydate.render({
      elem: '#test-laydate-format-range2'
      ,type: 'datetime'
      ,range: '到'
      ,format: 'yyyy年M月d日H时m分s秒'
    });

    //同时绑定多个
    lay('.test-laydate-item').each(function(){
      laydate.render({
        elem: this
        ,trigger: 'click'
      });
    });

  });
  </script></div>
  </div>
@stop
