@extends('admin.common.layout')
@section('content')
<div class="layui-body" id="LAY_app_body">
    <div class="layadmin-tabsbody-item layui-show"><div class="layui-card layadmin-header">
  <div class="layui-breadcrumb" lay-filter="breadcrumb" style="visibility: visible;">
    <a lay-href="">主页</a><span lay-separator="">/</span>
    <a><cite>组件</cite></a><span lay-separator="">/</span>
    <a><cite>栅格</cite></a><span lay-separator="">/</span>
    <a><cite>低于桌面堆叠排列</cite></a>
  </div>
</div><style>
/* 这段样式只是用于演示 */
#LAY-component-grid-stack .layui-card-body{display: flex; justify-content: center; flex-direction: column; text-align: center; height: 200px;}
</style><div class="layui-fluid" id="LAY-component-grid-stack">
  <div class="layui-row layui-col-space10">
    <div class="layui-col-md4">
      <!-- 填充内容 -->
      <div class="layui-card">
        <div class="layui-card-header"></div>
        <div class="layui-card-body"></div>
      </div>
    </div>
    <div class="layui-col-md4">
      <div class="layui-card">
        <div class="layui-card-header"></div>
        <div class="layui-card-body"></div>
      </div>
    </div>
    <div class="layui-col-md4">
      <div class="layui-card">
        <div class="layui-card-header"></div>
        <div class="layui-card-body"></div>
      </div>
    </div>
    <div class="layui-col-md4">
      <div class="layui-card">
        <div class="layui-card-header"></div>
        <div class="layui-card-body"></div>
      </div>
    </div>
    <div class="layui-col-md4">
      <div class="layui-card">
        <div class="layui-card-header"></div>
        <div class="layui-card-body"></div>
      </div>
    </div>
    <div class="layui-col-md4">
      <div class="layui-card">
        <div class="layui-card-header"></div>
        <div class="layui-card-body"></div>
      </div>
    </div>
    <div class="layui-col-md4">
      <div class="layui-card">
        <div class="layui-card-header"></div>
        <div class="layui-card-body"></div>
      </div>
    </div>
    <div class="layui-col-md4">
      <div class="layui-card">
        <div class="layui-card-header"></div>
        <div class="layui-card-body"></div>
      </div>
    </div>
    <div class="layui-col-md4">
      <div class="layui-card">
        <div class="layui-card-header"></div>
        <div class="layui-card-body"></div>
      </div>
    </div>
    <div class="layui-col-md4">
      <div class="layui-card">
        <div class="layui-card-header"></div>
        <div class="layui-card-body"></div>
      </div>
    </div>
    <div class="layui-col-md4">
      <div class="layui-card">
        <div class="layui-card-header"></div>
        <div class="layui-card-body"></div>
      </div>
    </div>
    <div class="layui-col-md4">
      <div class="layui-card">
        <div class="layui-card-header"></div>
        <div class="layui-card-body"></div>
      </div>
    </div>
    <div class="layui-col-md4">
      <div class="layui-card">
        <div class="layui-card-header"></div>
        <div class="layui-card-body"></div>
      </div>
    </div>
    <div class="layui-col-md4">
      <div class="layui-card">
        <div class="layui-card-header"></div>
        <div class="layui-card-body"></div>
      </div>
    </div>
    <div class="layui-col-md4">
      <div class="layui-card">
        <div class="layui-card-header"></div>
        <div class="layui-card-body"></div>
      </div>
    </div>
    <div class="layui-col-md4">
      <div class="layui-card">
        <div class="layui-card-header"></div>
        <div class="layui-card-body"></div>
      </div>
    </div>
    <div class="layui-col-md4">
      <div class="layui-card">
        <div class="layui-card-header"></div>
        <div class="layui-card-body"></div>
      </div>
    </div>
    <div class="layui-col-md4">
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

  element.render('breadcrumb', 'breadcrumb');


});
</script></div>
  </div>
@stop
