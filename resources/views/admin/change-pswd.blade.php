<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('layui-v2.4.3/css/layui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <style>
        .layui-body {
            left: 0;
            margin-bottom: 50px;
        }

        .layadmin-header {
            display: block;
        }
    </style>
</head>

<body>
    <div class="layui-body" id="LAY_app_body">
        <div class="layadmin-tabsbody-item layui-show">
            <div class="layui-card layadmin-header">
                <div class="layui-breadcrumb" lay-filter="breadcrumb" style="visibility: visible;">
                    <a lay-href="">主页</a><span lay-separator="">/</span>
                    <a><cite>设置</cite></a><span lay-separator="">/</span>
                    <a><cite>我的密码</cite></a>
                </div>
            </div>
            <div class="layui-fluid">
                <div class="layui-row layui-col-space15">
                    <div class="layui-col-md12">
                        <div class="layui-card">
                            <div class="layui-card-header">修改密码</div>
                            <div class="layui-card-body" pad15="">
                                {{ csrf_field() }}
                                <form action="" class="layui-form">
                                    <div class="layui-form" lay-filter="">
                                        <div class="layui-form-item">
                                            <label class="layui-form-label">当前密码</label>
                                            <div class="layui-input-inline">
                                                <input type="password" name="oldPassword" lay-verify="required" lay-vertype="tips" class="layui-input">
                                                <span class="pswd-error" style="display: none; position: absolute; color: red;right: -65px;top: 8px;">密码错误</span>
                                            </div>
                                        </div>
                                        <div class="layui-form-item">
                                            <label class="layui-form-label">新密码</label>
                                            <div class="layui-input-inline">
                                                <input type="password" name="password" lay-verify="pass" lay-vertype="tips" autocomplete="off" id="LAY_password" class="layui-input">
                                            </div>
                                            <div class="layui-form-mid layui-word-aux">6到16个字符</div>
                                        </div>
                                        <div class="layui-form-item">
                                            <label class="layui-form-label">确认新密码</label>
                                            <div class="layui-input-inline">
                                                <input type="password" name="repassword" lay-verify="repass" lay-vertype="tips" autocomplete="off" class="layui-input">
                                            </div>
                                        </div>
                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                <button class="layui-btn" lay-submit="" lay-filter="setmypass">确认修改</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('layui-v2.4.3/layui.js') }}"></script>
    <script>
        layui.use(['form', 'layer'], function() {
            var form = layui.form,
                $ = layui.jquery,
                layer = layui.layer

            form.render();

            // function setPswd(){
            //     if($('input[name=oldPassword]').val() === '') return false
            //     $.ajax({
            //         type: 'POST',
            //         url: '/admin/pswd/reset',
            //         data: {oldPassword: $('input[name=oldPassword]').val(), _token: $('input[name=_token]').val()},
            //         success: function(res) {
            //             if(res.code != '00'){
            //                 $('.pswd-error').hide()
            //             } else {
            //                 $('.pswd-error').show()
            //             }
            //         }
            //     })
            // }

            // $('input[name=oldPassword]').on("input propertychange",function(event){
            //     setPswd()
            // });

            //监听提交
            form.on('submit(setmypass)', function(data) {
                data.field._token = $('input[name=_token]').val()
                $.ajax({
                    type: 'POST',
                    url: '/admin/pswd/reset',
                    data: data.field,
                    success: function(res) {
                        layer.msg(res.message)
                        if (res.code != '11') {
                            return false
                        }
                    }
                })

                return false;
            });
        });
    </script>
</body>

</html>
