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
                    <a><cite>我的资料</cite></a>
                </div>
            </div>
            <div class="layui-fluid">
                <div class="layui-row layui-col-space15">
                    <div class="layui-col-md12">
                        <div class="layui-card">
                            <div class="layui-card-header">设置我的资料</div>
                            <div class="layui-card-body" pad15="">
                                {{ csrf_field() }}
                                <form action="" class="layui-form">
                                    <div class="layui-form" lay-filter="">
                                        <div class="layui-form-item">
                                            <label class="layui-form-label">我的角色</label>
                                            <div class="layui-input-inline">
                                                <select name="role" lay-verify="">
                                                    <option value="1" selected="">超级管理员</option>
                                                    <option value="2" disabled="">普通管理员</option>
                                                    <option value="3" disabled="">审核员</option>
                                                    <option value="4" disabled="">编辑人员</option>
                                                </select>
                                                <div class="layui-unselect layui-form-select">
                                                    <div class="layui-select-title"><input type="text" placeholder="请选择" value="超级管理员" readonly="" class="layui-input layui-unselect"><i class="layui-edge"></i></div>
                                                    <dl class="layui-anim layui-anim-upbit">
                                                        <dd lay-value="1" class="layui-this">超级管理员</dd>
                                                        <dd lay-value="2" class=" layui-disabled">普通管理员</dd>
                                                        <dd lay-value="3" class=" layui-disabled">审核员</dd>
                                                        <dd lay-value="4" class=" layui-disabled">编辑人员</dd>
                                                    </dl>
                                                </div>
                                            </div>
                                            <div class="layui-form-mid layui-word-aux">当前角色不可更改为其它角色</div>
                                        </div>
                                        <div class="layui-form-item">
                                            <label class="layui-form-label">用户名</label>
                                            <div class="layui-input-inline">
                                                <input type="text" name="username" value="{{ $basic->name }}" readonly="" class="layui-input">
                                            </div>
                                            <div class="layui-form-mid layui-word-aux">不可修改。一般用于后台登入名</div>
                                        </div>

                                        <div class="layui-form-item">
                                            <label class="layui-form-label">性别</label>
                                            <div class="layui-input-block">
                                                <input type="radio" name="sex" value="0" title="男" @if($basic->gender == 0) checked @endif>
                                                <div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i>
                                                    <div>男</div>
                                                </div>
                                                <input type="radio" name="sex" value="1" title="女" @if($basic->gender == 1) checked @endif>
                                                <div class="layui-unselect layui-form-radio layui-form-radioed"><i class="layui-anim layui-icon"></i>
                                                    <div>女</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="layui-form-item">
                                            <label class="layui-form-label">头像</label>
                                            <div class="layui-input-inline">
                                                <input name="avatar" lay-verify="required" id="LAY_avatarSrc" placeholder="图片地址" value="http://cdn.layui.com/avatar/168.jpg" class="layui-input">
                                            </div>
                                            <div class="layui-input-inline layui-btn-container" style="width: auto;">
                                                <button type="button" class="layui-btn layui-btn-primary" id="LAY_avatarUpload">
                                                    <i class="layui-icon"></i>上传图片
                                                </button>
                                                <input class="layui-upload-file" type="file" accept="undefined" name="file">
                                                <button class="layui-btn layui-btn-primary" layadmin-event="avartatPreview">查看图片</button>
                                            </div>
                                        </div>
                                        <div class="layui-form-item">
                                            <label class="layui-form-label">手机</label>
                                            <div class="layui-input-inline">
                                            <input type="text" name="phone" value="{{ $basic->phone }}" lay-verify="phone" autocomplete="off" class="layui-input">
                                            </div>
                                        </div>
                                        <div class="layui-form-item">
                                            <label class="layui-form-label">邮箱</label>
                                            <div class="layui-input-inline">
                                                <input type="text" name="email" value="{{ $basic->email }}" lay-verify="email" autocomplete="off" class="layui-input">
                                            </div>
                                        </div>
                                        <div class="layui-form-item layui-form-text">
                                            <label class="layui-form-label">备注</label>
                                            <div class="layui-input-block">
                                                <textarea name="remarks" placeholder="请输入内容" class="layui-textarea">{{ $basic->remarks }}</textarea>
                                            </div>
                                        </div>
                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                <button class="layui-btn" lay-submit="" lay-filter="setmyinfo">确认修改</button>
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
            //监听提交
            form.on('submit(setmyinfo)', function(data) {
                data.field._token = $('input[name=_token]').val()
                $.ajax({
                    type: 'POST',
                    url: '/admin/basic/set',
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
