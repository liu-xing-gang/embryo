<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>layuiAdmin pro - 通用后台管理模板系统（单页面专业版）</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="{{asset('layui-v2.4.3/css/layui.css')}}" media="all">
    <link id="layuicss-layuiAdmin" rel="stylesheet" href="{{asset('css/admin.css')}}" media="all">
    <link rel="stylesheet" href="{{asset('css/login.css')}}" media="all">
    <script src="{{asset('layui-v2.4.3/layui.js')}}"></script>

</head>

<body layadmin-themealias="default" class="layui-layout-body">
    <div id="LAY_app" class="layadmin-tabspage-none">
        <div class="layadmin-user-login layadmin-user-display-show" id="LAY-user-login" style="display: none;">
            <div class="layadmin-user-login-main">
                <div class="layadmin-user-login-box layadmin-user-login-header">
                    <h2>layuiAdmin</h2>
                    <p>layui 官方出品的单页面后台管理模板系统</p>
                </div>
                <div class="layadmin-user-login-box layadmin-user-login-body layui-form">

                    <script type="text/html" template="">
                        @{{# if(layui.router().search.type === 'resetpass'){ }}
                        <div class="layui-form-item">
                            <label class="layadmin-user-login-icon layui-icon layui-icon-password" for="LAY-user-login-password"></label>
                            <input type="password" name="password" id="LAY-user-login-password" lay-verify="pass" placeholder="新密码" class="layui-input">
                        </div>
                        <div class="layui-form-item">
                            <label class="layadmin-user-login-icon layui-icon layui-icon-password" for="LAY-user-login-repass"></label>
                            <input type="password" name="repass" id="LAY-user-login-repass" lay-verify="required" placeholder="确认密码" class="layui-input">
                        </div>
                        <div class="layui-form-item">
                            <button class="layui-btn layui-btn-fluid" lay-submit lay-filter="LAY-user-forget-resetpass">重置新密码</button>
                        </div>
                        @{{# } else @{ }}
                        <div class="layui-form-item">
                            <label class="layadmin-user-login-icon layui-icon layui-icon-cellphone" for="LAY-user-login-cellphone"></label>
                            <input type="text" name="cellphone" id="LAY-user-login-cellphone" lay-verify="phone" placeholder="请输入注册时的手机号" class="layui-input">
                        </div>
                        <div class="layui-form-item">
                            <div class="layui-row">
                                <div class="layui-col-xs7">
                                    <label class="layadmin-user-login-icon layui-icon layui-icon-vercode" for="LAY-user-login-vercode"></label>
                                    <input type="text" name="vercode" id="LAY-user-login-vercode" lay-verify="required" placeholder="图形验证码" class="layui-input">
                                </div>
                                <div class="layui-col-xs5">
                                    <div style="margin-left: 10px;">
                                        <img src="https://www.oschina.net/action/user/captcha" class="layadmin-user-login-codeimg" id="LAY-user-get-vercode">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <div class="layui-row">
                                <div class="layui-col-xs7">
                                    <label class="layadmin-user-login-icon layui-icon layui-icon-vercode" for="LAY-user-login-smscode"></label>
                                    <input type="text" name="vercode" id="LAY-user-login-smscode" lay-verify="required" placeholder="短信验证码" class="layui-input">
                                </div>
                                <div class="layui-col-xs5">
                                    <div style="margin-left: 10px;">
                                        <button type="button" class="layui-btn layui-btn-primary layui-btn-fluid" id="LAY-user-forget-getsmscode">获取验证码</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <button class="layui-btn layui-btn-fluid" lay-submit lay-filter="LAY-user-forget-submit">找回密码</button>
                        </div>
                        @{{# } }}
                    </script>
                    <div class="layui-form-item"> <label class="layadmin-user-login-icon layui-icon layui-icon-cellphone" for="LAY-user-login-cellphone"></label> <input type="text" name="cellphone" id="LAY-user-login-cellphone" lay-verify="phone" placeholder="请输入注册时的手机号" class="layui-input">                        </div>
                    <div class="layui-form-item">
                        <div class="layui-row">
                            <div class="layui-col-xs7"> <label class="layadmin-user-login-icon layui-icon layui-icon-vercode" for="LAY-user-login-vercode"></label> <input type="text" name="vercode" id="LAY-user-login-vercode" lay-verify="required" placeholder="图形验证码" class="layui-input">                                </div>
                            <div class="layui-col-xs5">
                                <div style="margin-left: 10px;"> <img src="https://www.oschina.net/action/user/captcha" class="layadmin-user-login-codeimg" id="LAY-user-get-vercode"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <div class="layui-row">
                            <div class="layui-col-xs7"> <label class="layadmin-user-login-icon layui-icon layui-icon-vercode" for="LAY-user-login-smscode"></label> <input type="text" name="vercode" id="LAY-user-login-smscode" lay-verify="required" placeholder="短信验证码" class="layui-input">                                </div>
                            <div class="layui-col-xs5">
                                <div style="margin-left: 10px;"> <button type="button" class="layui-btn layui-btn-primary layui-btn-fluid" id="LAY-user-forget-getsmscode">获取验证码</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="layui-form-item"> <button class="layui-btn layui-btn-fluid" lay-submit="" lay-filter="LAY-user-forget-submit">找回密码</button> </div>

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

        </div>
        <script>
            layui.use(['admin', 'form', 'user'], function() {
                var $ = layui.$,
                    setter = layui.setter,
                    admin = layui.admin,
                    form = layui.form,
                    router = layui.router();

                form.render();

                //发送短信验证码
                admin.sendAuthCode({
                    elem: '#LAY-user-forget-getsmscode',
                    elemPhone: '#LAY-user-login-cellphone',
                    elemVercode: '#LAY-user-login-vercode',
                    ajax: {
                        url: './json/user/sms.js' //实际使用请改成服务端真实接口
                    }
                });

                //找回密码下一步
                form.on('submit(LAY-user-forget-submit)', function(obj) {
                    var field = obj.field;

                    //请求接口
                    admin.req({
                        url: './json/user/forget.js' //实际使用请改成服务端真实接口
                            ,
                        data: field,
                        done: function(res) {
                            location.hash = router.href + '/type=resetpass';
                        }
                    });

                    return false;
                });

                //重置密码
                form.on('submit(LAY-user-forget-resetpass)', function(obj) {
                    var field = obj.field;

                    //确认密码
                    if (field.password !== field.repass) {
                        return layer.msg('两次密码输入不一致');
                    }

                    //请求接口
                    admin.req({
                        url: './json/user/resetpass.js' //实际使用请改成服务端真实接口
                            ,
                        data: field,
                        done: function(res) {
                            layer.msg('密码已成功重置', {
                                offset: '15px',
                                icon: 1,
                                time: 1000
                            }, function() {
                                location.hash = '/user/login'; //跳转到登入页
                            });
                        }
                    });

                    return false;
                });

            });
        </script>
    </div>

    <script>
        layui.config({
            base: './dist/' //指定 layuiAdmin 项目路径
                ,
            version: '1.1.0'
        }).use('index', function() {
            var layer = layui.layer,
                admin = layui.admin;
            layer.ready(function() {
                admin.popup({
                    content: '单页面专业版默认未开启“多标签”功能，实际运用时，你可以自定义是否开启',
                    area: '300px',
                    btnAlign: 'c',
                    shade: false
                });
            });
        });
    </script>





    <style id="LAY_layadmin_theme">
        .layui-side-menu,
        .layadmin-pagetabs .layui-tab-title li:after,
        .layadmin-pagetabs .layui-tab-title li.layui-this:after,
        .layui-layer-admin .layui-layer-title,
        .layadmin-side-shrink .layui-side-menu .layui-nav>.layui-nav-item>.layui-nav-child {
            background-color: #20222A !important;
        }

        .layui-nav-tree .layui-this,
        .layui-nav-tree .layui-this>a,
        .layui-nav-tree .layui-nav-child dd.layui-this,
        .layui-nav-tree .layui-nav-child dd.layui-this a {
            background-color: #009688 !important;
        }

        .layui-layout-admin .layui-logo {
            background-color: #20222A !important;
        }
    </style>
    <div class="layui-layer-move"></div>
</body>

</html>
