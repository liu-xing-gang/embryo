@extends('admin.common.layout')
@section('content')
<div class="layui-body" id="LAY_app_body">
    <div class="layadmin-tabsbody-item layui-show"><div class="layui-card layadmin-header">
  <div class="layui-breadcrumb" lay-filter="breadcrumb" style="visibility: visible;">
    <a lay-href="">主页</a><span lay-separator="">/</span>
    <a><cite>组件</cite></a><span lay-separator="">/</span>
    <a><cite>栅格</cite></a><span lay-separator="">/</span>
    <a><cite>九宫格</cite></a>
  </div>
</div><style>
/* 这段样式只是用于演示 */
#LAY-component-grid-speed-dial .layui-card-body{display: flex; justify-content: center; flex-direction: column; text-align: center; font-size: 20px;}
#LAY-component-grid-speed-dial .layui-card-body:hover{background-color: #FAFAFA;}
</style><div class="layui-fluid" id="LAY-component-grid-speed-dial">
  <div class="layui-row layui-col-space1">
    <div class="layui-col-xs4">
      <!-- 填充内容 -->
      <div class="layui-card">
        <div class="layui-card-body" style="height: 221px;">1</div>
      </div>
    </div>
    <div class="layui-col-xs4">
      <div class="layui-card">
        <div class="layui-card-body" style="height: 221px;">2</div>
      </div>
    </div>
    <div class="layui-col-xs4">
      <div class="layui-card">
        <div class="layui-card-body" style="height: 221px;">3</div>
      </div>
    </div>
    <div class="layui-col-xs4">
      <div class="layui-card">
        <div class="layui-card-body" style="height: 221px;">4</div>
      </div>
    </div>
    <div class="layui-col-xs4">
      <div class="layui-card">
        <div class="layui-card-body" style="height: 221px;">5</div>
      </div>
    </div>
    <div class="layui-col-xs4">
      <div class="layui-card">
        <div class="layui-card-body" style="height: 221px;">6</div>
      </div>
    </div>
    <div class="layui-col-xs4">
      <div class="layui-card">
        <div class="layui-card-body" style="height: 221px;">7</div>
      </div>
    </div>
    <div class="layui-col-xs4">
      <div class="layui-card">
        <div class="layui-card-body" style="height: 221px;">8</div>
      </div>
    </div>
    <div class="layui-col-xs4">
      <div class="layui-card">
        <div class="layui-card-body" style="height: 221px;">9</div>
      </div>
    </div>
  </div>
</div><script>
layui.use(['admin'], function(){
  var $ = layui.$
  ,admin = layui.admin
  ,element = layui.element;

  element.render('breadcrumb', 'breadcrumb');

  //监听窗口尺寸改变事件，控制宽度相同
  admin.resize(function(){
    var cardBody = $('#LAY-component-grid-speed-dial .layui-card-body');
    cardBody.height(cardBody.width())
  });
});
</script></div>
  </div>
@stop
