@extends('admin.common.layout')
@section('content')
<div class="layui-body" id="LAY_app_body">
    <div class="layadmin-tabsbody-item layui-show"><div class="layui-card layadmin-header">
  <div class="layui-breadcrumb" lay-filter="breadcrumb" style="visibility: visible;">
    <a lay-href="">主页</a><span lay-separator="">/</span>
    <a><cite>组件</cite></a><span lay-separator="">/</span>
    <a href="http://layer.layui.com/" target="_blank">layer</a><span lay-separator="">/</span>
    <a><cite>风格定制</cite></a>
  </div>
</div><style>
/* 这段样式只是用于演示 */
#LAY-component-layer-theme .layui-card-body{padding-top: 15px;}
</style><div class="layui-fluid" id="LAY-component-layer-theme">
  <div class="layui-row layui-col-space15">
    <div class="layui-col-md12">
      <div class="layui-card">
        <div class="layui-card-header">风格定制</div>
        <div class="layui-card-body">

          <div class="layui-btn-container layadmin-layer-demo">
            <button data-type="test1" class="layui-btn layui-btn-primary">layuiAdmin风格</button>
            <button data-type="test2" class="layui-btn layui-btn-primary">右侧呼出</button>
          </div>

        </div>
      </div>
    </div>
    <div class="layui-col-md12">
      <div class="layui-card">
        <div class="layui-card-body">

          持续增加中

        </div>
      </div>
    </div>
  </div>
</div><script>
layui.use(['admin'], function(){
  var $ = layui.$
  ,admin = layui.admin
  ,element = layui.element
  ,router = layui.router();

  element.render();

  var active = {
    test1: function(){
      admin.popup({
        title: 'layuiAdmin'
        ,shade: 0
        ,anim: -1
        ,area: ['280px', '150px']
        ,id: 'layadmin-layer-skin-test'
        ,skin: 'layui-anim layui-anim-upbit'
        ,content: '内容'
      })
    }
    ,test2: function(){
      admin.popupRight({
        id: 'LAY_adminPopupLayerTest'
        ,success: function(){
          $('#'+ this.id).html('<div style="padding: 20px;">放入内容</div>');
          //admin.view(this.id).render('system/xxx')
        }
      });
    }
  };

  $('#LAY-component-layer-theme .layadmin-layer-demo .layui-btn').on('click', function(){
    var type = $(this).data('type');
    active[type] && active[type].call(this);
  });
});
</script></div>
  </div>
@stop
