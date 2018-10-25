<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>layuiAdmin</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="{{asset('layui-v2.4.3/css/layui.css')}}" media="all">
    <link id="layuicss-layuiAdmin" rel="stylesheet" href="{{asset('css/admin.css')}}" media="all">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <style>
    .layadmin-user-login{padding: 0; min-height: initial;}
    .layadmin-user-login-footer{padding: 0;}
    #LAY_app{display: flex; align-items: center; justify-content: center;}
    </style>
</head>
<body layadmin-themealias="default" class="layui-layout-body">
    <div id="LAY_app" class="layadmin-tabspage-none">
        <div class="layadmin-user-login layadmin-user-display-show" id="LAY-user-login" style="display: none;">
            <div class="layadmin-user-login-main">
                <div class="layadmin-user-login-box layadmin-user-login-header">
                    <h2>用户登录</h2>
                </div>
                {{ csrf_field() }}
                <div class="layadmin-user-login-box layadmin-user-login-body layui-form">
                    <div class="layui-form-item">
                        <label class="layadmin-user-login-icon layui-icon layui-icon-username" for="LAY-user-login-username"></label>
                        <input type="text" name="username" id="LAY-user-login-username" lay-verify="required" placeholder="用户名" class="layui-input">
                    </div>
                    <div class="layui-form-item">
                        <label class="layadmin-user-login-icon layui-icon layui-icon-password" for="LAY-user-login-password"></label>
                        <input type="password" name="password" id="LAY-user-login-password" lay-verify="required" placeholder="密码" class="layui-input">
                    </div>

                    {{-- <div class="layui-form-item">
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
                    </div> --}}
                    <div class="layui-form-item" style="margin-bottom: 20px;">
                        <input type="checkbox" name="remember" lay-skin="primary" title="记住密码">
                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><span>记住密码</span><i class="layui-icon layui-icon-ok"></i></div>
                        <a href="/admin/forget" class="layadmin-user-jump-change layadmin-link" style="margin-top: 7px;">忘记密码？</a>
                    </div>

                    <div class="layui-form-item">
                        <button class="layui-btn layui-btn-fluid" lay-submit="" lay-filter="LAY-user-login-submit">登 入</button>
                    </div>
                    <div class="layui-trans layui-form-item layadmin-user-login-other">
                        <label>社交账号登入</label>
                        <a href="javascript:;"><i class="layui-icon layui-icon-login-qq"></i></a>
                        <a href="javascript:;"><i class="layui-icon layui-icon-login-wechat"></i></a>
                        <a href="javascript:;"><i class="layui-icon layui-icon-login-weibo"></i></a>
                        <a href="/admin/reg" class="layadmin-user-jump-change layadmin-link">注册帐号</a>
                    </div>
                </div>
            </div>

            <div class="layui-trans layadmin-user-login-footer">
                <p>© 2018 <a href="http://www.shalao3.com/" target="_blank">www.shalao3.com</a></p>
            </div>

        </div>
    </div>
    <script src="{{asset('layui-v2.4.3/layui.js')}}"></script>
    <script>
        layui.use('form', function() {
            var $ = layui.jquery,
                layer =layui.layer,
                form = layui.form

            form.render();

            //提交
            form.on('submit(LAY-user-login-submit)', function(obj) {

                //请求登入接口
                obj.field._token = $.trim($('input[name=_token]').val())
                $.ajax({
                    type: 'POST',
                    url: '/check',
                    data: obj.field,
                    success: function (res) {
                        //登入成功的提示与跳转
                        if(res.code === 1){
                            layer.msg(res.message, {
                                offset: '15px',
                                icon: 1,
                                time: 1000
                            }, function() {
                                window.location.href = '/admin'
                            });
                        } else {
                            layer.msg(res.message, {
                                offset: '15px',
                                icon: 2,
                                time: 1000
                            });
                        }
                    },
                    // error: function (res) {
                    //     layer.msg('error', {
                    //         offset: '15px',
                    //         icon: 2
                    //     });
                    // }
                })

            });


            //实际使用时记得删除该代码
            layer.msg('用户名: test，密码：123456', {
                offset: '15px',
                icon: 1
            });

        });
    </script>
    </div>







</body>

</html>
