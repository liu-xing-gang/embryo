<!dcotype html>
<html><head>
        <meta charset="utf-8">
        <title>layuiAdmin pro - 通用后台管理模板系统（单页面专业版）</title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link id="layuicss-layuiAdmin" rel="stylesheet" href="{{asset('layui-v2.4.3/css/layui.css')}}" media="all"></head>
      <link id="layuicss-layuiAdmin" rel="stylesheet" href="{{asset('css/admin.css')}}" media="all"></head>
      <body layadmin-themealias="default" class="layui-layout-body">
        <div id="LAY_app" class="layadmin-tabspage-none"><script type="text/html" template="">
      </script> <link rel="stylesheet" href="{{asset('css/login.css')}}" media="all"> <div class="layadmin-user-login layadmin-user-display-show" id="LAY-user-login" style="display: none;">
        <div class="layadmin-user-login-main">
          <div class="layadmin-user-login-box layadmin-user-login-header">
            <h2>layuiAdmin</h2>
            <p>layui 官方出品的单页面后台管理模板系统</p>
          </div>
          <div class="layadmin-user-login-box layadmin-user-login-body layui-form">
            <div class="layui-form-item">
              <label class="layadmin-user-login-icon layui-icon layui-icon-cellphone" for="LAY-user-login-cellphone"></label>
              <input type="text" name="cellphone" id="LAY-user-login-cellphone" lay-verify="phone" placeholder="手机" class="layui-input">
            </div>
            <div class="layui-form-item">
              <div class="layui-row">
                <div class="layui-col-xs7">
                  <label class="layadmin-user-login-icon layui-icon layui-icon-vercode" for="LAY-user-login-vercode"></label>
                  <input type="text" name="vercode" id="LAY-user-login-vercode" lay-verify="required" placeholder="验证码" class="layui-input">
                </div>
                <div class="layui-col-xs5">
                  <div style="margin-left: 10px;">
                    <button type="button" class="layui-btn layui-btn-primary layui-btn-fluid" id="LAY-user-reg-getsmscode">获取验证码</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="layui-form-item">
              <label class="layadmin-user-login-icon layui-icon layui-icon-password" for="LAY-user-login-password"></label>
              <input type="password" name="password" id="LAY-user-login-password" lay-verify="pass" placeholder="密码" class="layui-input">
            </div>
            <div class="layui-form-item">
              <label class="layadmin-user-login-icon layui-icon layui-icon-password" for="LAY-user-login-repass"></label>
              <input type="password" name="repass" id="LAY-user-login-repass" lay-verify="required" placeholder="确认密码" class="layui-input">
            </div>
            <div class="layui-form-item">
              <label class="layadmin-user-login-icon layui-icon layui-icon-username" for="LAY-user-login-nickname"></label>
              <input type="text" name="nickname" id="LAY-user-login-nickname" lay-verify="nickname" placeholder="昵称" class="layui-input">
            </div>
            <div class="layui-form-item">
              <input type="checkbox" name="agreement" lay-skin="primary" title="同意用户协议" checked=""><div class="layui-unselect layui-form-checkbox layui-form-checked" lay-skin="primary"><span style="height: auto;">同意用户协议</span><i class="layui-icon layui-icon-ok"></i></div>
            </div>
            <div class="layui-form-item">
              <button class="layui-btn layui-btn-fluid" lay-submit="" lay-filter="LAY-user-reg-submit">注 册</button>
            </div>
            <div class="layui-trans layui-form-item layadmin-user-login-other">
              <label>社交账号注册</label>
              <a href="javascript:;"><i class="layui-icon layui-icon-login-qq"></i></a>
              <a href="javascript:;"><i class="layui-icon layui-icon-login-wechat"></i></a>
              <a href="javascript:;"><i class="layui-icon layui-icon-login-weibo"></i></a>

              <a lay-href="/admin/login" class="layadmin-user-jump-change layadmin-link layui-hide-xs">用已有帐号登入</a>
              <a lay-href="/admin" class="layadmin-user-jump-change layadmin-link layui-hide-sm layui-show-xs-inline-block">登入</a>
            </div>
          </div>
        </div>

        <div class="layui-trans layadmin-user-login-footer">

          <p>© 2018 <a href="http://www.layui.com/" target="_blank">layui.com</a></p>
          <p>
            <span><a href="http://www.layui.com/admin/#get" target="_blank">获取授权</a></span>
            <span><a href="http://www.layui.com/admin/pro/" target="_blank">在线演示</a></span>
            <span><a href="http://www.layui.com/admin/" target="_blank">前往官网</a></span>
          </p>
        </div>

      </div><script>
      layui.use(['admin', 'form', 'user'], function(){
        var $ = layui.$
        ,setter = layui.setter
        ,admin = layui.admin
        ,form = layui.form
        ,router = layui.router();

        form.render();

        //发送短信验证码
        admin.sendAuthCode({
          elem: '#LAY-user-reg-getsmscode'
          ,elemPhone: '#LAY-user-login-cellphone'
          ,elemVercode: '#LAY-user-login-vercode'
          ,ajax: {
            url: './json/user/sms.js' //实际使用请改成服务端真实接口
          }
        });

        //提交
        form.on('submit(LAY-user-reg-submit)', function(obj){
          var field = obj.field;

          //确认密码
          if(field.password !== field.repass){
            return layer.msg('两次密码输入不一致');
          }

          //是否同意用户协议
          if(!field.agreement){
            return layer.msg('你必须同意用户协议才能注册');
          }

          //请求接口
          admin.req({
            url: './json/user/reg.js' //实际使用请改成服务端真实接口
            ,data: field
            ,done: function(res){
              layer.msg('注册成功', {
                offset: '15px'
                ,icon: 1
                ,time: 1000
              }, function(){
                location.hash = '/user/login'; //跳转到登入页
              });
            }
          });

          return false;
        });
      });
      </script></div>
        <script src="//res.layui.com/layui/rc/layui.js?t=20180921-1"></script>
        <script>
        layui.config({
          base: './dist/' //指定 layuiAdmin 项目路径
          ,version: '1.1.0'
        }).use('index', function(){
          var layer = layui.layer, admin = layui.admin;
          layer.ready(function(){
            admin.popup({
              content: '单页面专业版默认未开启“多标签”功能，实际运用时，你可以自定义是否开启'
              ,area: '300px'
              ,btnAlign: 'c'
              ,shade: false
            });
          });
        });
        </script>

        {{-- <script>
        var _hmt = _hmt || [];
        (function() {
          var hm = document.createElement("script");
          hm.src = "https://hm.baidu.com/hm.js?d214947968792b839fd669a4decaaffc";
          var s = document.getElementsByTagName("script")[0];
          s.parentNode.insertBefore(hm, s);
        })();
        </script> --}}




      <style id="LAY_layadmin_theme">.layui-side-menu,.layadmin-pagetabs .layui-tab-title li:after,.layadmin-pagetabs .layui-tab-title li.layui-this:after,.layui-layer-admin .layui-layer-title,.layadmin-side-shrink .layui-side-menu .layui-nav>.layui-nav-item>.layui-nav-child{background-color:#20222A !important;}.layui-nav-tree .layui-this,.layui-nav-tree .layui-this>a,.layui-nav-tree .layui-nav-child dd.layui-this,.layui-nav-tree .layui-nav-child dd.layui-this a{background-color:#009688 !important;}.layui-layout-admin .layui-logo{background-color:#20222A !important;}</style><div class="layui-layer-move"></div></body></html>
