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
                    <a><cite>邮件服务</cite></a>
                </div>
            </div>
            <div class="layui-fluid">
                <div class="layui-row layui-col-space15">
                    <div class="layui-col-md12">
                        <div class="layui-card">
                            <div class="layui-card-header">邮件服务</div>
                            <div class="layui-card-body">

                                <div class="layui-form" wid100="" lay-filter="">
                                    <div class="layui-form-item">
                                        <label class="layui-form-label">SMTP服务器</label>
                                        <div class="layui-input-inline">
                                            <input type="text" name="smtp_server" value="smtp.aliyun.com" class="layui-input">
                                        </div>
                                        <div class="layui-form-mid layui-word-aux">如：smtp.163.com</div>
                                    </div>
                                    <div class="layui-form-item">
                                        <label class="layui-form-label">SMTP端口号</label>
                                        <div class="layui-input-inline" style="width: 80px;">
                                            <input type="text" name="cache" lay-verify="number" value="25" class="layui-input">
                                        </div>
                                        <div class="layui-form-mid layui-word-aux">一般为 25 或 465</div>
                                    </div>
                                    <div class="layui-form-item">
                                        <label class="layui-form-label">发件人邮箱</label>
                                        <div class="layui-input-inline">
                                            <input type="text" name="send_email" value="xianxin@layui-inc.com" lay-verify="email" autocomplete="off" class="layui-input">
                                        </div>
                                    </div>
                                    <div class="layui-form-item">
                                        <label class="layui-form-label">发件人昵称</label>
                                        <div class="layui-input-inline">
                                            <input type="text" name="send_nickname" value="贤心" autocomplete="off" class="layui-input">
                                        </div>
                                    </div>
                                    <div class="layui-form-item">
                                        <label class="layui-form-label">邮箱登入密码</label>
                                        <div class="layui-input-inline">
                                            <input type="password" name="send_nickname" value="123456" autocomplete="off" class="layui-input">
                                        </div>
                                    </div>
                                    <div class="layui-form-item">
                                        <div class="layui-input-block">
                                            <button class="layui-btn" lay-submit="" lay-filter="set_system_email">确认保存</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                layui.use('set', layui.factory('set'));
            </script>
        </div>
    </div>

    <script src="{{ asset('layui-v2.4.3/layui.js') }}"></script>
</body>

</html>
