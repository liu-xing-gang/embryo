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
                <div class="layadmin-tabsbody-item layui-show"><div class="layui-card layadmin-header">
              <div class="layui-breadcrumb" lay-filter="breadcrumb" style="visibility: visible;">
                <a lay-href="">主页</a><span lay-separator="">/</span>
                <a><cite>设置</cite></a><span lay-separator="">/</span>
                <a><cite>我的密码</cite></a>
              </div>
            </div><div class="layui-fluid">
              <div class="layui-row layui-col-space15">
                <div class="layui-col-md12">
                  <div class="layui-card">
                    <div class="layui-card-header">修改密码</div>
                    <div class="layui-card-body" pad15="">

                      <div class="layui-form" lay-filter="">
                        <div class="layui-form-item">
                          <label class="layui-form-label">当前密码</label>
                          <div class="layui-input-inline">
                            <input type="password" name="oldPassword" lay-verify="required" lay-vertype="tips" class="layui-input">
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

                    </div>
                  </div>
                </div>
              </div>
            </div><script>
            layui.use('set', layui.factory('set'));
            </script></div>
              </div>

    <script src="{{ asset('layui-v2.4.3/layui.js') }}"></script>
    <script>
            layui.use('set', layui.factory('set'));
            </script>
</body>

</html>
