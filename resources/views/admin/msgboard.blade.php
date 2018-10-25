@extends('admin.common.layout')
@section('content')
<div class="layui-body" id="LAY_app_body">
        <div class="layadmin-tabsbody-item layui-show"><script type="text/html" template="">
      <link rel="stylesheet" href="@{{ layui.setter.base }}style/template.css?v=@{{ layui.admin.v }}-1" media="all">
    </script> <link rel="stylesheet" href="./dist/style/template.css?v=1.1.0 pro-1" media="all"> <div class="layui-card layadmin-header">
      <div class="layui-breadcrumb" lay-filter="breadcrumb" style="visibility: visible;">
        <a lay-href="">主页</a><span lay-separator="">/</span>
        <a><cite>页面</cite></a><span lay-separator="">/</span>
        <a><cite>留言板</cite></a>
      </div>
    </div><div class="layui-fluid layadmin-message-fluid">
      <div class="layui-row">
        <div class="layui-col-md12">
          <div class="layui-form">
            <div class="layui-form-item layui-form-text">
              <div class="layui-input-block">
                <textarea name="desc" placeholder="请输入内容" class="layui-textarea"></textarea>
              </div>
            </div>

            <div class="layui-form-item" style="overflow: hidden;">
              <div class="layui-input-block layui-input-right">
                <button class="layui-btn" lay-submit="" lay-filter="formDemo">发表</button>
              </div>
              <div class="layadmin-messag-icon">
                <a href="javascript:;"><i class="layui-icon layui-icon-face-smile-b"></i></a>
                <a href="javascript:;"><i class="layui-icon layui-icon-picture"></i></a>
                <a href="javascript:;"><i class="layui-icon layui-icon-link"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="layui-col-md12 layadmin-homepage-list-imgtxt message-content">
           <div class="media-body">
              <a href="javascript:;" class="media-left" style="float: left;">
                <script type="text/html" template="">
                  <img src="{{asset('images/portrait.png')}}" height="46px" width="46px">
                </script> <img src="{{asset('images/portrait.png')}}" height="46px" width="46px">
              </a>
              <div class="pad-btm">
                <p class="fontColor"><a href="javascript:;">胡歌</a></p>
                <p class="min-font">
                  <span class="layui-breadcrumb" lay-separator="-">
                    <a href="javascript:;" class="layui-icon layui-icon-cellphone"></a>
                    <a href="javascript:;">从移动</a>
                    <a href="javascript:;">11分钟前</a>
                  </span>
                </p>
             </div>
              <p class="message-text">历经打磨，@索尼中国 再献新作品—OLED电视A8F完美诞生。很开心一起参加了A8F的“首映礼”！[鼓掌]正如我们演员对舞台的热爱，索尼对科技与艺术的追求才创造出了让人惊喜的作品。作为A1兄弟款，A8F沿袭了黑科技“屏幕发声技术”和高清画质，色彩的出众表现和高端音质，让人在体验的时候如同身临其境。A8F，这次的“视帝”要颁发给你！  索尼官网预售： O网页链接 索尼旗舰店预售：</p>
           </div>
           <div class="media-body">
              <a href="javascript:;" class="media-left" style="float: left;">
                 <script type="text/html" template="">
                  <img src="{{asset('images/portrait.png')}}" height="46px" width="46px">
                </script> <img src="{{asset('images/portrait.png')}}" height="46px" width="46px">
              </a>
              <div class="pad-btm">
                <p class="fontColor"><a href="javascript:;">胡歌</a></p>
                <p class="min-font">
                  <span class="layui-breadcrumb" lay-separator="-">
                    <a href="javascript:;" class="layui-icon layui-icon-cellphone"></a>
                    <a href="javascript:;">从移动</a>
                    <a href="javascript:;">11分钟前</a>
                  </span>
                </p>
             </div>
              <p class="message-text">历经打磨，@索尼中国 再献新作品—OLED电视A8F完美诞生。很开心一起参加了A8F的“首映礼”！[鼓掌]正如我们演员对舞台的热爱，索尼对科技与艺术的追求才创造出了让人惊喜的作品。作为A1兄弟款，A8F沿袭了黑科技“屏幕发声技术”和高清画质，色彩的出众表现和高端音质，让人在体验的时候如同身临其境。A8F，这次的“视帝”要颁发给你！  索尼官网预售： O网页链接 索尼旗舰店预售：</p>
           </div>
           <div class="layui-row message-content-btn">
              <a href="javascript:;" class="layui-btn">更多</a>
           </div>
         </div>

        </div>
      </div></div>
      </div>
@stop
