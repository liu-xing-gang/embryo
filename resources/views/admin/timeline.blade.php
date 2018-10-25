@extends('admin.common.layout')
@section('content')
<div class="layui-body" id="LAY_app_body">
    <div class="layadmin-tabsbody-item layui-show"><div class="layui-card layadmin-header">
  <div class="layui-breadcrumb" lay-filter="breadcrumb" style="visibility: visible;">
    <a lay-href="">主页</a><span lay-separator="">/</span>
    <a><cite>组件</cite></a><span lay-separator="">/</span>
    <a><cite>时间线</cite></a>
  </div>
</div><style>
/* 这段样式只是用于演示 */
#LAY-component-timeline .layui-card-body{padding: 15px;}
</style><div class="layui-fluid" id="LAY-component-timeline">
  <div class="layui-row layui-col-space15">
    <div class="layui-col-md12">
      <div class="layui-card">
        <div class="layui-card-header">常规时间线</div>
        <div class="layui-card-body">

          <ul class="layui-timeline">
            <li class="layui-timeline-item">
              <i class="layui-icon layui-timeline-axis"></i>
              <div class="layui-timeline-content layui-text">
                <h3 class="layui-timeline-title">12月28日</h3>
                <p>
                  一直以来，layui 秉承无偿开源的初心，虔诚致力于服务各层次前后端 Web 开发者，在商业横飞的当今时代，这一信念从未动摇。即便身单力薄，仍然重拾决心，埋头造轮，以尽可能地填补产品本身的缺口。在过去的一段的时间，我一直在寻求持久之道，已维持你眼前所见的一切。而 layuiAdmin 是我们尝试解决的手段之一。我相信真正有爱于 layui 生态的你，定然不会错过这一拥抱吧。
                </p>
                <p><br>子曰：君子不用防，小人防不住。请务必通过官网正规渠道，获得 <a href="http://www.layui.com/admin/" target="_blank">layuiAdmin</a>！</p>
              </div>
            </li>
            <li class="layui-timeline-item">
              <i class="layui-icon layui-timeline-axis"></i>
              <div class="layui-timeline-content layui-text">
                <h3 class="layui-timeline-title">12月25日</h3>
                <p>又是一年 <em>“圣诞节”</em>，2018 向我们正在走来</p>
                <ul>
                  <li>叮叮当，叮叮当，铃儿响叮当</li>
                  <li>今晚滑雪多快乐，我们坐在雪橇上</li>
                </ul>
              </div>
            </li>
            <li class="layui-timeline-item">
              <i class="layui-icon layui-timeline-axis"></i>
              <div class="layui-timeline-content layui-text">
                <h3 class="layui-timeline-title">12月24日</h3>
                <p>
                  美丽的夜晚，都是祈祷的人们。<br>他们等待着第二天，收到圣诞老人的礼物。<br><br>
                </p>
                <blockquote class="layui-elem-quote">平安夜，天赐平安。愿真善美的事物都能永恒。</blockquote>
              </div>
            </li>
            <li class="layui-timeline-item">
              <i class="layui-icon layui-timeline-axis"></i>
              <div class="layui-timeline-content layui-text">
                <div class="layui-timeline-title">过去</div>
              </div>
            </li>
          </ul>

        </div>
      </div>
    </div>
    <div class="layui-col-md12">
      <div class="layui-card">
        <div class="layui-card-header">简约时间线</div>
        <div class="layui-card-body">

          <ul class="layui-timeline">
            <li class="layui-timeline-item">
              <i class="layui-icon layui-timeline-axis"></i>
              <div class="layui-timeline-content layui-text">
                <div class="layui-timeline-title">
                  2018年，layui 5.0 发布，并发展成为中国最受欢迎的前端 UI 框架（期望）
                </div>
              </div>
            </li>
            <li class="layui-timeline-item">
              <i class="layui-icon layui-timeline-axis"></i>
              <div class="layui-timeline-content layui-text">
                <div class="layui-timeline-title">2017年，layui 里程碑版本 2.0 发布</div>
              </div>
            </li>
            <li class="layui-timeline-item">
              <i class="layui-icon layui-timeline-axis"></i>
              <div class="layui-timeline-content layui-text">
                <div class="layui-timeline-title">2016年，layui 首个版本发布</div>
              </div>
            </li>
            <li class="layui-timeline-item">
              <i class="layui-icon layui-timeline-axis"></i>
              <div class="layui-timeline-content layui-text">
                <div class="layui-timeline-title">2015年，layui 孵化</div>
              </div>
            </li>
            <li class="layui-timeline-item">
              <i class="layui-icon layui-anim layui-anim-rotate layui-anim-loop layui-timeline-axis"></i>
              <div class="layui-timeline-content layui-text">
                <div class="layui-timeline-title">更久前，轮子时代。维护几个独立组件：layer等</div>
              </div>
            </li>
          </ul>

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

});
</script></div>
  </div>
@stop
