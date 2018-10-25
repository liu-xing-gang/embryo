@extends('admin.common.layout')
@section('content')
<div class="layui-body" id="LAY_app_body">
    <div class="layadmin-tabsbody-item layui-show"><div class="layui-card layadmin-header">
  <div class="layui-breadcrumb" lay-filter="breadcrumb" style="visibility: visible;">
    <a lay-href="">主页</a><span lay-separator="">/</span>
    <a><cite>组件</cite></a><span lay-separator="">/</span>
    <a><cite>栅格</cite></a><span lay-separator="">/</span>
    <a><cite>等比例列表排列</cite></a>
  </div>
</div><style>
/* 这段样式只是用于演示 */
#LAY-component-grid-list .demo-list .layui-card{height: 267px;}
</style><div class="layui-fluid" id="LAY-component-grid-list">
  <div class="layui-row layui-col-space10 demo-list">
    <div class="layui-col-sm4 layui-col-md3 layui-col-lg2">
      <!-- 填充内容 -->
      <div class="layui-card">

      </div>
    </div>
    <div class="layui-col-sm4 layui-col-md3 layui-col-lg2">
      <div class="layui-card">

      </div>
    </div>
    <div class="layui-col-sm4 layui-col-md3 layui-col-lg2">
      <div class="layui-card">

      </div>
    </div>
    <div class="layui-col-sm4 layui-col-md3 layui-col-lg2">
      <div class="layui-card">

      </div>
    </div>
    <div class="layui-col-sm4 layui-col-md3 layui-col-lg2">
      <div class="layui-card">

      </div>
    </div>
    <div class="layui-col-sm4 layui-col-md3 layui-col-lg2">
      <div class="layui-card">

      </div>
    </div>
    <div class="layui-col-sm4 layui-col-md3 layui-col-lg2">
      <div class="layui-card">

      </div>
    </div>
    <div class="layui-col-sm4 layui-col-md3 layui-col-lg2">
      <div class="layui-card">

      </div>
    </div>
    <div class="layui-col-sm4 layui-col-md3 layui-col-lg2">
      <div class="layui-card">

      </div>
    </div>
    <div class="layui-col-sm4 layui-col-md3 layui-col-lg2">
      <div class="layui-card">

      </div>
    </div>
    <div class="layui-col-sm4 layui-col-md3 layui-col-lg2">
      <div class="layui-card">

      </div>
    </div>
    <div class="layui-col-sm4 layui-col-md3 layui-col-lg2">
      <div class="layui-card">

      </div>
    </div>
    <div class="layui-col-sm4 layui-col-md3 layui-col-lg2">
      <div class="layui-card">

      </div>
    </div>
    <div class="layui-col-sm4 layui-col-md3 layui-col-lg2">
      <div class="layui-card">

      </div>
    </div>
    <div class="layui-col-sm4 layui-col-md3 layui-col-lg2">
      <div class="layui-card">

      </div>
    </div>
    <div class="layui-col-sm4 layui-col-md3 layui-col-lg2">
      <div class="layui-card">

      </div>
    </div>
    <div class="layui-col-sm4 layui-col-md3 layui-col-lg2">
      <div class="layui-card">

      </div>
    </div>
    <div class="layui-col-sm4 layui-col-md3 layui-col-lg2">
      <div class="layui-card">

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
