@extends('admin.common.layout')
@section('content')
<div class="layui-body" id="LAY_app_body">
        <div class="layadmin-tabsbody-item layui-show"><script type="text/html" template="">
      <link rel="stylesheet" href="@{{ layui.setter.base }}style/template.css?v=@{{ layui.admin.v }}-1" media="all">
    </script> <link rel="stylesheet" href="./dist/style/template.css?v=1.1.0 pro-1" media="all"> <div class="layui-card layadmin-header">
      <div class="layui-breadcrumb" lay-filter="breadcrumb" style="visibility: visible;">
        <a lay-href="">主页</a><span lay-separator="">/</span>
        <a><cite>页面</cite></a><span lay-separator="">/</span>
        <a><cite>客户列表</cite></a>
      </div>
    </div><div class="layui-fluid">
      <div class="layadmin-caller">
        <form class="layui-form caller-seach" action="">
          <i class="layui-icon layui-icon-search caller-seach-icon caller-icon"></i>
          <input type="text" name="title" required="" lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input caller-pl32">
          <i class="layui-icon layui-icon-close caller-dump-icon caller-icon"></i>
        </form>
        <div class="layui-tab layui-tab-brief caller-tab" lay-filter="docDemoTabBrief">
          <ul class="layui-tab-title">
            <li class="layui-this">所有联系人</li>
            <li>联系方式</li>
            <li>联系地址</li>
          </ul>
        </div>
        <div class="caller-contar">
          <div class="caller-item">
            <script type="text/html" template="">
              <img src="{{asset('images/portrait.png')}}" alt="" class="caller-img caller-fl">
            </script> <img src="{{asset('images/portrait.png')}}" alt="" class="caller-img caller-fl">
            <div class="caller-main caller-fl">
              <p><strong>胡歌</strong> <em>最近联系：1 小时前</em></p>
              <p class="caller-adds"><i class="layui-icon layui-icon-location"></i>浙江省广州市越秀区中山六路109</p>
              <div class="caller-iconset">
                <i class="layui-icon layui-icon-login-wechat"></i>
                <i class="layui-icon layui-icon-login-qq"></i>
                <i class="layui-icon layui-icon-login-weibo"></i>
              </div>
            </div>
            <button class="layui-btn layui-btn-sm caller-fr">
              <i class="layui-icon layui-icon-ok"></i>
              已收藏
            </button>
          </div>
          <div class="caller-item">
            <script type="text/html" template="">
              <img src="{{asset('images/portrait.png')}}" alt="" class="caller-img caller-fl">
            </script> <img src="{{asset('images/portrait.png')}}" alt="" class="caller-img caller-fl">
            <div class="caller-main caller-fl">
              <p><strong>胡歌</strong> <em>最近联系：1 小时前</em></p>
              <p class="caller-adds"><i class="layui-icon layui-icon-location"></i>浙江省广州市越秀区中山六路109</p>
              <div class="caller-iconset">
                <i class="layui-icon layui-icon-login-wechat"></i>
                <i class="layui-icon layui-icon-login-qq"></i>
                <i class="layui-icon layui-icon-login-weibo"></i>
              </div>
            </div>
            <button class="layui-btn layui-btn-sm layui-btn layui-btn-primary caller-fr">
              已收藏
            </button>
          </div>
          <div class="caller-item">
           <script type="text/html" template="">
              <img src="{{asset('images/portrait.png')}}" alt="" class="caller-img caller-fl">
            </script> <img src="{{asset('images/portrait.png')}}" alt="" class="caller-img caller-fl">
            <div class="caller-main caller-fl">
              <p><strong>胡歌</strong> <em>最近联系：1 小时前</em></p>
              <p class="caller-adds"><i class="layui-icon layui-icon-location"></i>浙江省广州市越秀区中山六路109</p>
              <div class="caller-iconset">
                <i class="layui-icon layui-icon-login-wechat"></i>
                <i class="layui-icon layui-icon-login-qq"></i>
                <i class="layui-icon layui-icon-login-weibo"></i>
              </div>
            </div>
            <button class="layui-btn layui-btn-sm caller-fr">
              <i class="layui-icon layui-icon-ok"></i>
              已收藏
            </button>
          </div>
          <div class="caller-item">
            <script type="text/html" template="">
              <img src="{{asset('images/portrait.png')}}" alt="" class="caller-img caller-fl">
            </script> <img src="{{asset('images/portrait.png')}}" alt="" class="caller-img caller-fl">
            <div class="caller-main caller-fl">
              <p><strong>胡歌</strong> <em>最近联系：1 小时前</em></p>
              <p class="caller-adds"><i class="layui-icon layui-icon-location"></i>浙江省广州市越秀区中山六路109</p>
              <div class="caller-iconset">
                <i class="layui-icon layui-icon-login-wechat"></i>
                <i class="layui-icon layui-icon-login-qq"></i>
                <i class="layui-icon layui-icon-login-weibo"></i>
              </div>
            </div>
            <button class="layui-btn layui-btn-sm layui-btn layui-btn-primary caller-fr">
              已收藏
            </button>
          </div>
          <div class="caller-item">
            <script type="text/html" template="">
              <img src="{{asset('images/portrait.png')}}" alt="" class="caller-img caller-fl">
            </script> <img src="{{asset('images/portrait.png')}}" alt="" class="caller-img caller-fl">
            <div class="caller-main caller-fl">
              <p><strong>胡歌</strong> <em>最近联系：1 小时前</em></p>
              <p class="caller-adds"><i class="layui-icon layui-icon-location"></i>浙江省广州市越秀区中山六路109</p>
              <div class="caller-iconset">
                <i class="layui-icon layui-icon-login-wechat"></i>
                <i class="layui-icon layui-icon-login-qq"></i>
                <i class="layui-icon layui-icon-login-weibo"></i>
              </div>
            </div>
            <button class="layui-btn layui-btn-sm caller-fr">
              <i class="layui-icon layui-icon-ok"></i>
              已收藏
            </button>
          </div>
          <div class="caller-item">
            <script type="text/html" template="">
              <img src="{{asset('images/portrait.png')}}" alt="" class="caller-img caller-fl">
            </script> <img src="{{asset('images/portrait.png')}}" alt="" class="caller-img caller-fl">
            <div class="caller-main caller-fl">
              <p><strong>胡歌</strong> <em>最近联系：1 小时前</em></p>
              <p class="caller-adds"><i class="layui-icon layui-icon-location"></i>浙江省广州市越秀区中山六路109</p>
              <div class="caller-iconset">
                <i class="layui-icon layui-icon-login-wechat"></i>
                <i class="layui-icon layui-icon-login-qq"></i>
                <i class="layui-icon layui-icon-login-weibo"></i>
              </div>
            </div>
            <button class="layui-btn layui-btn-sm layui-btn layui-btn-primary caller-fr">
              已收藏
            </button>
          </div>
          <div class="caller-item">
            <script type="text/html" template="">
              <img src="{{asset('images/portrait.png')}}" alt="" class="caller-img caller-fl">
            </script> <img src="{{asset('images/portrait.png')}}" alt="" class="caller-img caller-fl">
            <div class="caller-main caller-fl">
              <p><strong>胡歌</strong> <em>最近联系：1 小时前</em></p>
              <p class="caller-adds"><i class="layui-icon layui-icon-location"></i>浙江省广州市越秀区中山六路109</p>
              <div class="caller-iconset">
                <i class="layui-icon layui-icon-login-wechat"></i>
                <i class="layui-icon layui-icon-login-qq"></i>
                <i class="layui-icon layui-icon-login-weibo"></i>
              </div>
            </div>
            <button class="layui-btn layui-btn-sm caller-fr">
              <i class="layui-icon layui-icon-ok"></i>
              已收藏
            </button>
          </div>
          <div class="caller-item">
            <script type="text/html" template="">
              <img src="{{asset('images/portrait.png')}}" alt="" class="caller-img caller-fl">
            </script> <img src="{{asset('images/portrait.png')}}" alt="" class="caller-img caller-fl">
            <div class="caller-main caller-fl">
              <p><strong>胡歌</strong> <em>最近联系：1 小时前</em></p>
              <p class="caller-adds"><i class="layui-icon layui-icon-location"></i>浙江省广州市越秀区中山六路109</p>
              <div class="caller-iconset">
                <i class="layui-icon layui-icon-login-wechat"></i>
                <i class="layui-icon layui-icon-login-qq"></i>
                <i class="layui-icon layui-icon-login-weibo"></i>
              </div>
            </div>
            <button class="layui-btn layui-btn-sm layui-btn layui-btn-primary caller-fr">
              已收藏
            </button>
          </div>
        </div>
        <div id="demo-template-caller1"><div class="layui-box layui-laypage layui-laypage-default" id="layui-laypage-2"><a href="javascript:;" class="layui-laypage-prev layui-disabled" data-page="0">上一页</a><span class="layui-laypage-curr"><em class="layui-laypage-em"></em><em>1</em></span><a href="javascript:;" data-page="2">2</a><a href="javascript:;" data-page="3">3</a><a href="javascript:;" data-page="4">4</a><a href="javascript:;" data-page="5">5</a><span class="layui-laypage-spr">…</span><a href="javascript:;" class="layui-laypage-last" title="尾页" data-page="7">7</a><a href="javascript:;" class="layui-laypage-next" data-page="2">下一页</a></div></div>
      </div>
    </div><script>
    layui.use(['admin', 'laypage'], function(){
      var $ = layui.$
      ,admin = layui.admin
      ,laypage = layui.laypage;

      laypage.render({
        elem: 'demo-template-caller1'
        ,count: 70 //数据总数
      });
    });
    </script></div>
      </div>
@stop
