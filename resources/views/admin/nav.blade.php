@extends('admin.common.layout')
@section('content')
<div class="layui-body" id="LAY_app_body">
    <div class="layadmin-tabsbody-item layui-show"><div class="layui-card layadmin-header">
  <div class="layui-breadcrumb" lay-filter="breadcrumb" style="visibility: visible;">
    <a lay-href="">主页</a><span lay-separator="">/</span>
    <a><cite>组件</cite></a><span lay-separator="">/</span>
    <a><cite>导航</cite></a>
  </div>
</div><style>
/* 这段样式只是用于演示 */
#LAY-component-nav .layui-nav-tree {vertical-align: top;}
</style><div class="layui-fluid" id="LAY-component-nav">
  <div class="layui-row layui-col-space15">
    <div class="layui-col-md6">
      <div class="layui-card">
        <div class="layui-card-header">水平导航菜单</div>
        <div class="layui-card-body">
          <ul class="layui-nav" lay-filter="component-nav">
            <li class="layui-nav-item"><a href="javascript:;">最新活动</a></li>
            <li class="layui-nav-item layui-this">
              <a href="javascript:;">产品<span class="layui-nav-more"></span></a>
              <dl class="layui-nav-child layui-anim layui-anim-upbit">
                <dd><a href="javascript:;">选项1</a></dd>
                <dd><a href="javascript:;">选项2</a></dd>
                <dd><a href="javascript:;">选项3</a></dd>
              </dl>
            </li>
            <li class="layui-nav-item"><a href="javascript:;">大数据</a></li>
            <li class="layui-nav-item">
              <a href="javascript:;">解决方案<span class="layui-nav-more"></span></a>
              <dl class="layui-nav-child layui-anim layui-anim-upbit">
                <dd><a href="javascript:;">移动模块</a></dd>
                <dd><a href="javascript:;">后台模版</a></dd>
                <dd class="layui-this"><a href="javascript:;">选中项</a></dd>
                <dd><a href="javascript:;">电商平台</a></dd>
              </dl>
            </li>
            <li class="layui-nav-item"><a href="javascript:;">社区</a></li>
          <span class="layui-nav-bar" style="width: 0px; left: 362px; opacity: 0; top: 55px;"></span></ul>
        </div>
      </div>
      <div class="layui-card">
        <div class="layui-card-header">导航带徽章和图片</div>
        <div class="layui-card-body">
          <ul class="layui-nav" lay-filter="component-nav">
            <li class="layui-nav-item">
              <a href="javascript:;">控制台<span class="layui-badge">9</span></a>
            </li>
            <li class="layui-nav-item">
              <a href="javascript:;">个人中心<span class="layui-badge-dot"></span></a>
            </li>
            <li class="layui-nav-item" lay-unselect="">
              <a href="javascript:;"><img src="http://t.cn/RCzsdCq" class="layui-nav-img">我<span class="layui-nav-more"></span></a>
              <dl class="layui-nav-child layui-anim layui-anim-upbit">
                <dd><a href="javascript:;">修改信息</a></dd>
                <dd><a href="javascript:;">安全管理</a></dd>
                <dd><a href="javascript:;">退了</a></dd>
              </dl>
            </li>
          <span class="layui-nav-bar" style="left: 102px; top: 55px; width: 0px; opacity: 0;"></span></ul>
        </div>
      </div>
      <div class="layui-card">
        <div class="layui-card-header">导航主题</div>
        <div class="layui-card-body">
          <ul class="layui-nav layui-bg-cyan" lay-filter="component-nav">
            <li class="layui-nav-item"><a href="javascript:;">藏青导航</a></li>
            <li class="layui-nav-item layui-this"><a href="javascript:;">产品</a></li>
            <li class="layui-nav-item"><a href="javascript:;">大数据</a></li>
            <li class="layui-nav-item">
              <a href="javascript:;">解决方案<span class="layui-nav-more"></span></a>
              <dl class="layui-nav-child layui-anim layui-anim-upbit">
                <dd><a href="javascript:;">移动模块</a></dd>
                <dd><a href="javascript:;">后台模版</a></dd>
                <dd><a href="javascript:;">电商平台</a></dd>
              </dl>
            </li>
            <li class="layui-nav-item"><a href="javascript:;">社区</a></li>
          <span class="layui-nav-bar" style="left: 116px; top: 55px; width: 0px; opacity: 0;"></span></ul>
          <br>
          <ul class="layui-nav layui-bg-green" lay-filter="component-nav">
            <li class="layui-nav-item"><a href="javascript:;">墨绿导航</a></li>
            <li class="layui-nav-item layui-this"><a href="javascript:;">产品</a></li>
            <li class="layui-nav-item"><a href="javascript:;">大数据</a></li>
            <li class="layui-nav-item">
              <a href="javascript:;">解决方案<span class="layui-nav-more"></span></a>
              <dl class="layui-nav-child layui-anim layui-anim-upbit">
                <dd><a href="javascript:;">移动模块</a></dd>
                <dd><a href="javascript:;">后台模版</a></dd>
                <dd><a href="javascript:;">电商平台</a></dd>
              </dl>
            </li>
            <li class="layui-nav-item"><a href="javascript:;">社区</a></li>
          <span class="layui-nav-bar" style="left: 20px; top: 55px; width: 0px; opacity: 0;"></span></ul>
          <br>
          <ul class="layui-nav layui-bg-blue" lay-filter="component-nav">
            <li class="layui-nav-item"><a href="javascript:;">艳蓝导航</a></li>
            <li class="layui-nav-item layui-this"><a href="javascript:;">产品</a></li>
            <li class="layui-nav-item"><a href="javascript:;">大数据</a></li>
            <li class="layui-nav-item">
              <a href="javascript:;">解决方案<span class="layui-nav-more"></span></a>
              <dl class="layui-nav-child layui-anim layui-anim-upbit">
                <dd><a href="javascript:;">移动模块</a></dd>
                <dd><a href="javascript:;">后台模版</a></dd>
                <dd><a href="javascript:;">电商平台</a></dd>
              </dl>
            </li>
            <li class="layui-nav-item"><a href="javascript:;">社区</a></li>
          <span class="layui-nav-bar" style="left: 20px; top: 55px; width: 0px; opacity: 0;"></span></ul>
        </div>
      </div>
    </div>

    <div class="layui-col-md6">
      <div class="layui-card">
        <div class="layui-card-header">垂直导航菜单</div>
        <div class="layui-card-body">
          <ul class="layui-nav layui-nav-tree layui-inline" lay-filter="component-nav-active" style="margin-right: 10px;">
            <li class="layui-nav-item layui-nav-itemed">
              <a href="javascript:;">默认展开<span class="layui-nav-more"></span></a>
              <dl class="layui-nav-child">
                <dd><a href="javascript:;">选项一</a></dd>
                <dd><a href="javascript:;">选项二</a></dd>
                <dd><a href="javascript:;">选项三</a></dd>
                <dd><a href="javascript:;">跳转项</a></dd>
              </dl>
            </li>
            <li class="layui-nav-item">
              <a href="javascript:;">解决方案<span class="layui-nav-more"></span></a>
              <dl class="layui-nav-child">
                <dd><a href="javascript:;">移动模块</a></dd>
                <dd><a href="javascript:;">后台模版</a></dd>
                <dd><a href="javascript:;">电商平台</a></dd>
              </dl>
            </li>
            <li class="layui-nav-item"><a href="javascript:;">云市场</a></li>
            <li class="layui-nav-item"><a href="javascript:;">社区</a></li>
          <span class="layui-nav-bar" style="top: 22.5px; height: 0px; opacity: 0;"></span></ul>
          <ul class="layui-nav layui-nav-tree layui-bg-cyan layui-inline" lay-filter="component-nav-active">
            <li class="layui-nav-item layui-nav-itemed">
              <a href="javascript:;">默认展开<span class="layui-nav-more"></span></a>
              <dl class="layui-nav-child">
                <dd><a href="javascript:;">选项一</a></dd>
                <dd><a href="javascript:;">选项二</a></dd>
                <dd><a href="javascript:;">选项三</a></dd>
                <dd><a href="http://www.layui.com/admin/" target="_blank">跳转项</a></dd>
              </dl>
            </li>
            <li class="layui-nav-item">
              <a href="javascript:;">解决方案<span class="layui-nav-more"></span></a>
              <dl class="layui-nav-child">
                <dd><a href="javascript:;">移动模块</a></dd>
                <dd><a href="javascript:;">后台模版</a></dd>
                <dd><a href="javascript:;">电商平台</a></dd>
              </dl>
            </li>
            <li class="layui-nav-item"><a href="javascript:;">云市场</a></li>
            <li class="layui-nav-item"><a href="javascript:;">社区</a></li>
          <span class="layui-nav-bar" style="top: 227.5px; height: 0px; opacity: 0;"></span></ul>
        </div>
      </div>
      <div class="layui-card">
        <div class="layui-card-header">面包屑</div>
        <div class="layui-card-body">
          <span class="layui-breadcrumb" lay-filter="breadcrumb" style="visibility: visible;">
            <a href="javascript:;">首页</a><span lay-separator="">/</span>
            <a href="javascript:;">演示</a><span lay-separator="">/</span>
            <a><cite>导航元素</cite></a>
          </span>
          <br>
          <span class="layui-breadcrumb" lay-separator="-" lay-filter="breadcrumb" style="visibility: visible;">
            <a href="javascript:;">首页</a><span lay-separator="">-</span>
            <a href="javascript:;">演示</a><span lay-separator="">-</span>
            <a><cite>导航元素</cite></a>
          </span>
          <br>
          <span class="layui-breadcrumb" lay-separator="\" lay-filter="breadcrumb" style="visibility: visible;">
            <a href="javascript:;">首页</a><span lay-separator="">\</span>
            <a href="javascript:;">演示</a><span lay-separator="">\</span>
            <a><cite>导航元素</cite></a>
          </span>
        </div>
      </div>
    </div>
  </div>
</div><script>
layui.use(['admin'], function(){
  var $ = layui.$
  ,admin = layui.admin
  ,element = layui.element;

  element.render('nav', 'component-nav');
  element.render('nav', 'component-nav-active');

  element.on('nav(component-nav-active)', function(elem){
    layer.msg(elem.text());
  });
});
</script></div>
  </div>
@stop
