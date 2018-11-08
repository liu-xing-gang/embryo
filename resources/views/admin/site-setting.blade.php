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
                    <a><cite>网站设置</cite></a>
                </div>
            </div>
            <form class="layui-form" action="">
                <div class="layui-fluid">
                    <div class="layui-row layui-col-space15">
                        {{ csrf_field() }}
                        <div class="layui-col-md12">
                            <div class="layui-card">
                                <div class="layui-card-header">网站设置</div>
                                <div class="layui-card-body" pad15="">
                                    <div class="layui-form-item">
                                        <label class="layui-form-label">网站名称</label>
                                        <div class="layui-input-block">
                                            <input type="text" required lay-verify="required" name="sitename" class="layui-input" value="{{ $site->site_name }}">
                                        </div>
                                    </div>
                                    <div class="layui-form-item">
                                        <label class="layui-form-label">网站域名</label>
                                        <div class="layui-input-block">
                                            <input type="text" name="domain" required lay-verify="required" value="{{ $site->site_domain }}" class="layui-input">
                                        </div>
                                    </div>

                                    <div class="layui-form-item layui-form-text">
                                        <label class="layui-form-label">标题</label>
                                        <div class="layui-input-block">
                                            <textarea name="title" required lay-verify="required" class="layui-textarea">{{ $site->site_title }}</textarea>
                                        </div>
                                    </div>
                                    <div class="layui-form-item layui-form-text">
                                        <label class="layui-form-label">META关键词</label>
                                        <div class="layui-input-block">
                                            <textarea name="keywords" required lay-verify="required" class="layui-textarea" placeholder="多个关键词用英文状态 , 号分割">{{ $site->site_keywords }}</textarea>
                                        </div>
                                    </div>
                                    <div class="layui-form-item layui-form-text">
                                        <label class="layui-form-label">META描述</label>
                                        <div class="layui-input-block">
                                            <textarea name="description" required lay-verify="required" class="layui-textarea">{{ $site->site_description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="layui-form-item layui-form-text">
                                        <label class="layui-form-label">版权信息</label>
                                        <div class="layui-input-block">
                                            <textarea name="copyright" required lay-verify="required" class="layui-textarea">{{ $site->site_copyright }}</textarea>
                                        </div>
                                    </div>
                                    <div class="layui-form-item">
                                        <div class="layui-input-block">
                                            <button class="layui-btn" lay-submit lay-filter="save">立即提交</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>

    <script src="{{ asset('layui-v2.4.3/layui.js') }}"></script>
    <script>
        layui.use(['form', 'layer'], function() {
            var form = layui.form,
                $ = layui.jquery,
                layer = layui.layer

            //监听提交
            form.on('submit(save)', function(data) {
                data.field._token = $('input[name=_token]').val()

                $.ajax({
                    type: 'POST',
                    url: '/admin/site/update',
                    data: data.field,
                    success: function (res) {
                        if(res.code === true){
                            layer.msg('修改成功!')
                        }
                    }
                })

                return false;
            });
        });
    </script>
</body>

</html>
