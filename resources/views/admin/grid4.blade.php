@extends('admin.common.layout')
@section('content')
<div class="layui-body" id="LAY_app_body">
    <div class="layadmin-tabsbody-item layui-show"><div class="layui-card layadmin-header">
  <div class="layui-breadcrumb" lay-filter="breadcrumb" style="visibility: visible;">
    <a lay-href="">主页</a><span lay-separator="">/</span>
    <a><cite>组件</cite></a><span lay-separator="">/</span>
    <a><cite>栅格</cite></a><span lay-separator="">/</span>
    <a><cite>全端复杂组合</cite></a>
  </div>
</div><style>
/* 这段样式只是用于演示 */
#LAY-component-grid-all .layui-card-body{display: flex; justify-content: center; flex-direction: column; text-align: center; height: 200px;}
</style><div class="layui-fluid" id="LAY-component-grid-all">
  <div class="layui-row layui-col-space10">
    <div class="layui-col-xs6 layui-col-sm7 layui-col-md3">
      <!-- 填充内容 -->
      <div class="layui-card">
        <div class="layui-card-header"></div>
        <div class="layui-card-body"></div>
      </div>
    </div>
    <div class="layui-col-xs6 layui-col-sm5 layui-col-md3">
      <div class="layui-card">
        <div class="layui-card-header"></div>
        <div class="layui-card-body"></div>
      </div>
    </div>
    <div class="layui-col-xs6 layui-col-sm5 layui-col-md3">
      <div class="layui-card">
        <div class="layui-card-header"></div>
        <div class="layui-card-body"></div>
      </div>
    </div>
    <div class="layui-col-xs6 layui-col-sm7 layui-col-md3">
      <div class="layui-card">
        <div class="layui-card-header"></div>
        <div class="layui-card-body"></div>
      </div>
    </div>
    <div class="layui-col-xs6 layui-col-sm7 layui-col-md9">
      <div class="layui-card">
        <div class="layui-card-header"></div>
        <div class="layui-card-body"></div>
      </div>
    </div>
    <div class="layui-col-xs6 layui-col-sm5 layui-col-md3">
      <div class="layui-card">
        <div class="layui-card-header"></div>
        <div class="layui-card-body"></div>
      </div>
    </div>
    <div class="layui-col-xs6 layui-col-sm5 layui-col-md3">
      <div class="layui-card">
        <div class="layui-card-header"></div>
        <div class="layui-card-body"></div>
      </div>
    </div>
    <div class="layui-col-xs6 layui-col-sm7 layui-col-md9">
      <div class="layui-card">
        <div class="layui-card-header"></div>
        <div class="layui-card-body"></div>
      </div>
    </div>
  </div>
</div><script>
layui.use(['admin'], function(){
  var $ = layui.$
  ,admin = layui.admin
  ,table = layui.table
  ,element = layui.element;

});
</script></div>
  </div>
@stop
