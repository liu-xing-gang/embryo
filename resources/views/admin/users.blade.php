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
                    <a><cite>用户</cite></a><span lay-separator="">/</span>
                    <a><cite>网站用户</cite></a>
                </div>
            </div>
            <div class="layui-fluid">
                <div class="layui-card">
                    <div class="layui-form layui-card-header layuiadmin-card-header-auto" lay-filter="layadmin-userfront-formlist">
                        <div class="layui-form-item">
                            <div class="layui-inline">
                                <label class="layui-form-label">ID</label>
                                <div class="layui-input-block">
                                    <input type="text" name="id" placeholder="请输入" autocomplete="off" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-inline">
                                <label class="layui-form-label">用户名</label>
                                <div class="layui-input-block">
                                    <input type="text" name="username" placeholder="请输入" autocomplete="off" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-inline">
                                <label class="layui-form-label">邮箱</label>
                                <div class="layui-input-block">
                                    <input type="text" name="email" placeholder="请输入" autocomplete="off" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-inline">
                                <label class="layui-form-label">性别</label>
                                <div class="layui-input-block">
                                    <select name="sex">
                  <option value="0">不限</option>
                  <option value="1">男</option>
                  <option value="2">女</option>
                </select>
                                    <div class="layui-unselect layui-form-select">
                                        <div class="layui-select-title"><input type="text" placeholder="请选择" value="不限" readonly="" class="layui-input layui-unselect"><i class="layui-edge"></i></div>
                                        <dl class="layui-anim layui-anim-upbit">
                                            <dd lay-value="0" class="layui-this">不限</dd>
                                            <dd lay-value="1" class="">男</dd>
                                            <dd lay-value="2" class="">女</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <div class="layui-inline">
                                <button class="layui-btn layuiadmin-btn-useradmin" lay-submit="" lay-filter="LAY-user-front-search">
                <i class="layui-icon layui-icon-search layuiadmin-button-btn"></i>
              </button>
                            </div>
                        </div>
                    </div>

                    <div class="layui-card-body">
                        <div style="padding-bottom: 10px;">
                            <button class="layui-btn layuiadmin-btn-useradmin" data-type="batchdel">删除</button>
                            <button class="layui-btn layuiadmin-btn-useradmin" data-type="add">添加</button>
                        </div>

                        <table id="LAY-user-manage" lay-filter="LAY-user-manage"></table>
                        <div class="layui-form layui-border-box layui-table-view" lay-filter="LAY-table-50" style=" height:306px;">
                            <div class="layui-table-box">
                                <div class="layui-table-header">
                                    <table cellspacing="0" cellpadding="0" border="0" class="layui-table">
                                        <thead>
                                            <tr>
                                                <th data-field="0" data-key="50-0-0" data-unresize="true" class=" layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-50-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary" lay-filter="layTableAllChoose">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </th>
                                                <th data-field="id" data-key="50-0-1" class=" layui-unselect">
                                                    <div class="layui-table-cell laytable-cell-50-0-1"><span>ID</span><span class="layui-table-sort layui-inline"><i class="layui-edge layui-table-sort-asc" title="升序"></i><i class="layui-edge layui-table-sort-desc" title="降序"></i></span></div>
                                                </th>
                                                <th data-field="username" data-key="50-0-2" data-minwidth="100" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-2"><span>用户名</span></div>
                                                </th>
                                                <th data-field="avatar" data-key="50-0-3" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-3"><span>头像</span></div>
                                                </th>
                                                <th data-field="phone" data-key="50-0-4" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-4"><span>手机</span></div>
                                                </th>
                                                <th data-field="email" data-key="50-0-5" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-5"><span>邮箱</span></div>
                                                </th>
                                                <th data-field="sex" data-key="50-0-6" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-6"><span>性别</span></div>
                                                </th>
                                                <th data-field="ip" data-key="50-0-7" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-7"><span>IP</span></div>
                                                </th>
                                                <th data-field="jointime" data-key="50-0-8" class=" layui-unselect">
                                                    <div class="layui-table-cell laytable-cell-50-0-8"><span>加入时间</span><span class="layui-table-sort layui-inline"><i class="layui-edge layui-table-sort-asc" title="升序"></i><i class="layui-edge layui-table-sort-desc" title="降序"></i></span></div>
                                                </th>
                                                <th data-field="9" data-key="50-0-9" class=" layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-50-0-9" align="center"><span>操作</span></div>
                                                </th>
                                                <th class="layui-table-patch">
                                                    <div class="layui-table-cell" style="width: 17px;"></div>
                                                </th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="layui-table-body layui-table-main" style="height: 224px;">
                                    <table cellspacing="0" cellpadding="0" border="0" class="layui-table">
                                        <tbody>
                                            <tr data-index="0" class="">
                                                <td data-field="0" data-key="50-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-50-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                                <td data-field="id" data-key="50-0-1" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-1">001</div>
                                                </td>
                                                <td data-field="username" data-key="50-0-2" data-minwidth="100" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-2">用户-1</div>
                                                </td>
                                                <td data-field="avatar" data-key="50-0-3" data-content="https://wx4.sinaimg.cn/mw1024/5db11ff4gy1fmx4keaw9pj20dw08caa4.jpg" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-3"> <img style="display: inline-block; width: 50%; height: 100%;" src="https://wx4.sinaimg.cn/mw1024/5db11ff4gy1fmx4keaw9pj20dw08caa4.jpg"> </div>
                                                </td>
                                                <td data-field="phone" data-key="50-0-4" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-4">12345678901</div>
                                                </td>
                                                <td data-field="email" data-key="50-0-5" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-5">11111@qq.com</div>
                                                </td>
                                                <td data-field="sex" data-key="50-0-6" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-6">男</div>
                                                </td>
                                                <td data-field="ip" data-key="50-0-7" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-7">1111111</div>
                                                </td>
                                                <td data-field="jointime" data-key="50-0-8" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-8">20171204</div>
                                                </td>
                                                <td data-field="9" data-key="50-0-9" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-50-0-9"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="1" class="">
                                                <td data-field="0" data-key="50-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-50-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                                <td data-field="id" data-key="50-0-1" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-1">002</div>
                                                </td>
                                                <td data-field="username" data-key="50-0-2" data-minwidth="100" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-2">用户-2</div>
                                                </td>
                                                <td data-field="avatar" data-key="50-0-3" data-content="https://wx4.sinaimg.cn/mw1024/5db11ff4gy1fmx4keaw9pj20dw08caa4.jpg" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-3"> <img style="display: inline-block; width: 50%; height: 100%;" src="https://wx4.sinaimg.cn/mw1024/5db11ff4gy1fmx4keaw9pj20dw08caa4.jpg"> </div>
                                                </td>
                                                <td data-field="phone" data-key="50-0-4" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-4">12345678901</div>
                                                </td>
                                                <td data-field="email" data-key="50-0-5" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-5">11111@qq.com</div>
                                                </td>
                                                <td data-field="sex" data-key="50-0-6" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-6">男</div>
                                                </td>
                                                <td data-field="ip" data-key="50-0-7" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-7">1111111</div>
                                                </td>
                                                <td data-field="jointime" data-key="50-0-8" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-8">20171204</div>
                                                </td>
                                                <td data-field="9" data-key="50-0-9" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-50-0-9"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="2">
                                                <td data-field="0" data-key="50-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-50-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary" checked="">
                                                        <div class="layui-unselect layui-form-checkbox layui-form-checked" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                                <td data-field="id" data-key="50-0-1" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-1">003</div>
                                                </td>
                                                <td data-field="username" data-key="50-0-2" data-minwidth="100" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-2">用户-3</div>
                                                </td>
                                                <td data-field="avatar" data-key="50-0-3" data-content="https://wx2.sinaimg.cn/mw690/5db11ff4gy1fmx4kec5bvj20eb0h3mxh.jpg" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-3"> <img style="display: inline-block; width: 50%; height: 100%;" src="https://wx2.sinaimg.cn/mw690/5db11ff4gy1fmx4kec5bvj20eb0h3mxh.jpg"> </div>
                                                </td>
                                                <td data-field="phone" data-key="50-0-4" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-4">12345678901</div>
                                                </td>
                                                <td data-field="email" data-key="50-0-5" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-5">11111@qq.com</div>
                                                </td>
                                                <td data-field="sex" data-key="50-0-6" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-6">女</div>
                                                </td>
                                                <td data-field="ip" data-key="50-0-7" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-7">1111111</div>
                                                </td>
                                                <td data-field="jointime" data-key="50-0-8" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-8">20171011</div>
                                                </td>
                                                <td data-field="9" data-key="50-0-9" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-50-0-9"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="3" class="">
                                                <td data-field="0" data-key="50-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-50-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                                <td data-field="id" data-key="50-0-1" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-1">004</div>
                                                </td>
                                                <td data-field="username" data-key="50-0-2" data-minwidth="100" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-2">用户-4</div>
                                                </td>
                                                <td data-field="avatar" data-key="50-0-3" data-content="https://wx4.sinaimg.cn/mw1024/5db11ff4gy1fmx4keaw9pj20dw08caa4.jpg" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-3"> <img style="display: inline-block; width: 50%; height: 100%;" src="https://wx4.sinaimg.cn/mw1024/5db11ff4gy1fmx4keaw9pj20dw08caa4.jpg"> </div>
                                                </td>
                                                <td data-field="phone" data-key="50-0-4" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-4">12345678901</div>
                                                </td>
                                                <td data-field="email" data-key="50-0-5" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-5">11111@qq.com</div>
                                                </td>
                                                <td data-field="sex" data-key="50-0-6" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-6">男</div>
                                                </td>
                                                <td data-field="ip" data-key="50-0-7" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-7">1111111</div>
                                                </td>
                                                <td data-field="jointime" data-key="50-0-8" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-8">20160505</div>
                                                </td>
                                                <td data-field="9" data-key="50-0-9" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-50-0-9"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="4" class="">
                                                <td data-field="0" data-key="50-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-50-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                                <td data-field="id" data-key="50-0-1" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-1">005</div>
                                                </td>
                                                <td data-field="username" data-key="50-0-2" data-minwidth="100" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-2">用户-5</div>
                                                </td>
                                                <td data-field="avatar" data-key="50-0-3" data-content="https://wx2.sinaimg.cn/mw690/5db11ff4gy1fmx4kec5bvj20eb0h3mxh.jpg" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-3"> <img style="display: inline-block; width: 50%; height: 100%;" src="https://wx2.sinaimg.cn/mw690/5db11ff4gy1fmx4kec5bvj20eb0h3mxh.jpg"> </div>
                                                </td>
                                                <td data-field="phone" data-key="50-0-4" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-4">12345678901</div>
                                                </td>
                                                <td data-field="email" data-key="50-0-5" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-5">11111@qq.com</div>
                                                </td>
                                                <td data-field="sex" data-key="50-0-6" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-6">男</div>
                                                </td>
                                                <td data-field="ip" data-key="50-0-7" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-7">1111111</div>
                                                </td>
                                                <td data-field="jointime" data-key="50-0-8" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-8">20171204</div>
                                                </td>
                                                <td data-field="9" data-key="50-0-9" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-50-0-9"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="5" class="">
                                                <td data-field="0" data-key="50-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-50-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                                <td data-field="id" data-key="50-0-1" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-1">006</div>
                                                </td>
                                                <td data-field="username" data-key="50-0-2" data-minwidth="100" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-2">用户-6</div>
                                                </td>
                                                <td data-field="avatar" data-key="50-0-3" data-content="https://wx2.sinaimg.cn/mw690/5db11ff4gy1fmx4kec5bvj20eb0h3mxh.jpg" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-3"> <img style="display: inline-block; width: 50%; height: 100%;" src="https://wx2.sinaimg.cn/mw690/5db11ff4gy1fmx4kec5bvj20eb0h3mxh.jpg"> </div>
                                                </td>
                                                <td data-field="phone" data-key="50-0-4" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-4">12345678901</div>
                                                </td>
                                                <td data-field="email" data-key="50-0-5" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-5">11111@qq.com</div>
                                                </td>
                                                <td data-field="sex" data-key="50-0-6" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-6">男</div>
                                                </td>
                                                <td data-field="ip" data-key="50-0-7" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-7">1111111</div>
                                                </td>
                                                <td data-field="jointime" data-key="50-0-8" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-8">20171204</div>
                                                </td>
                                                <td data-field="9" data-key="50-0-9" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-50-0-9"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="6">
                                                <td data-field="0" data-key="50-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-50-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                                <td data-field="id" data-key="50-0-1" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-1">007</div>
                                                </td>
                                                <td data-field="username" data-key="50-0-2" data-minwidth="100" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-2">用户-7</div>
                                                </td>
                                                <td data-field="avatar" data-key="50-0-3" data-content="https://wx3.sinaimg.cn/mw690/5db11ff4gy1fmx4keca8ag208g06iglw.gif" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-3"> <img style="display: inline-block; width: 50%; height: 100%;" src="https://wx3.sinaimg.cn/mw690/5db11ff4gy1fmx4keca8ag208g06iglw.gif"> </div>
                                                </td>
                                                <td data-field="phone" data-key="50-0-4" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-4">12345678901</div>
                                                </td>
                                                <td data-field="email" data-key="50-0-5" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-5">11111@qq.com</div>
                                                </td>
                                                <td data-field="sex" data-key="50-0-6" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-6">男</div>
                                                </td>
                                                <td data-field="ip" data-key="50-0-7" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-7">1111111</div>
                                                </td>
                                                <td data-field="jointime" data-key="50-0-8" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-8">20180210</div>
                                                </td>
                                                <td data-field="9" data-key="50-0-9" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-50-0-9"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="7">
                                                <td data-field="0" data-key="50-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-50-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                                <td data-field="id" data-key="50-0-1" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-1">008</div>
                                                </td>
                                                <td data-field="username" data-key="50-0-2" data-minwidth="100" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-2">用户-8</div>
                                                </td>
                                                <td data-field="avatar" data-key="50-0-3" data-content="https://wx2.sinaimg.cn/mw690/5db11ff4gy1fmx4kec5bvj20eb0h3mxh.jpg" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-3"> <img style="display: inline-block; width: 50%; height: 100%;" src="https://wx2.sinaimg.cn/mw690/5db11ff4gy1fmx4kec5bvj20eb0h3mxh.jpg"> </div>
                                                </td>
                                                <td data-field="phone" data-key="50-0-4" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-4">12345678901</div>
                                                </td>
                                                <td data-field="email" data-key="50-0-5" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-5">11111@qq.com</div>
                                                </td>
                                                <td data-field="sex" data-key="50-0-6" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-6">女</div>
                                                </td>
                                                <td data-field="ip" data-key="50-0-7" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-7">1111111</div>
                                                </td>
                                                <td data-field="jointime" data-key="50-0-8" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-8">20171204</div>
                                                </td>
                                                <td data-field="9" data-key="50-0-9" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-50-0-9"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="8">
                                                <td data-field="0" data-key="50-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-50-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                                <td data-field="id" data-key="50-0-1" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-1">009</div>
                                                </td>
                                                <td data-field="username" data-key="50-0-2" data-minwidth="100" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-2">用户-9</div>
                                                </td>
                                                <td data-field="avatar" data-key="50-0-3" data-content="https://wx2.sinaimg.cn/mw690/5db11ff4gy1fmx4kec5bvj20eb0h3mxh.jpg" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-3"> <img style="display: inline-block; width: 50%; height: 100%;" src="https://wx2.sinaimg.cn/mw690/5db11ff4gy1fmx4kec5bvj20eb0h3mxh.jpg"> </div>
                                                </td>
                                                <td data-field="phone" data-key="50-0-4" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-4">12345678901</div>
                                                </td>
                                                <td data-field="email" data-key="50-0-5" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-5">11111@qq.com</div>
                                                </td>
                                                <td data-field="sex" data-key="50-0-6" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-6">女</div>
                                                </td>
                                                <td data-field="ip" data-key="50-0-7" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-7">1111111</div>
                                                </td>
                                                <td data-field="jointime" data-key="50-0-8" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-8">20171204</div>
                                                </td>
                                                <td data-field="9" data-key="50-0-9" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-50-0-9"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="9">
                                                <td data-field="0" data-key="50-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-50-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                                <td data-field="id" data-key="50-0-1" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-1">010</div>
                                                </td>
                                                <td data-field="username" data-key="50-0-2" data-minwidth="100" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-2">用户-10</div>
                                                </td>
                                                <td data-field="avatar" data-key="50-0-3" data-content="https://wx4.sinaimg.cn/mw1024/5db11ff4gy1fmx4keaw9pj20dw08caa4.jpg" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-3"> <img style="display: inline-block; width: 50%; height: 100%;" src="https://wx4.sinaimg.cn/mw1024/5db11ff4gy1fmx4keaw9pj20dw08caa4.jpg"> </div>
                                                </td>
                                                <td data-field="phone" data-key="50-0-4" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-4">12345678901</div>
                                                </td>
                                                <td data-field="email" data-key="50-0-5" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-5">11111@qq.com</div>
                                                </td>
                                                <td data-field="sex" data-key="50-0-6" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-6">男</div>
                                                </td>
                                                <td data-field="ip" data-key="50-0-7" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-7">1111111</div>
                                                </td>
                                                <td data-field="jointime" data-key="50-0-8" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-8">20170719</div>
                                                </td>
                                                <td data-field="9" data-key="50-0-9" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-50-0-9"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="10">
                                                <td data-field="0" data-key="50-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-50-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                                <td data-field="id" data-key="50-0-1" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-1">011</div>
                                                </td>
                                                <td data-field="username" data-key="50-0-2" data-minwidth="100" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-2">用户-11</div>
                                                </td>
                                                <td data-field="avatar" data-key="50-0-3" data-content="https://wx2.sinaimg.cn/mw690/5db11ff4gy1fmx4kec5bvj20eb0h3mxh.jpg" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-3"> <img style="display: inline-block; width: 50%; height: 100%;" src="https://wx2.sinaimg.cn/mw690/5db11ff4gy1fmx4kec5bvj20eb0h3mxh.jpg"> </div>
                                                </td>
                                                <td data-field="phone" data-key="50-0-4" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-4">12345678901</div>
                                                </td>
                                                <td data-field="email" data-key="50-0-5" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-5">11111@qq.com</div>
                                                </td>
                                                <td data-field="sex" data-key="50-0-6" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-6">男</div>
                                                </td>
                                                <td data-field="ip" data-key="50-0-7" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-7">1111111</div>
                                                </td>
                                                <td data-field="jointime" data-key="50-0-8" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-8">20171204</div>
                                                </td>
                                                <td data-field="9" data-key="50-0-9" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-50-0-9"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="11">
                                                <td data-field="0" data-key="50-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-50-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                                <td data-field="id" data-key="50-0-1" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-1">012</div>
                                                </td>
                                                <td data-field="username" data-key="50-0-2" data-minwidth="100" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-2">用户-12</div>
                                                </td>
                                                <td data-field="avatar" data-key="50-0-3" data-content="https://wx2.sinaimg.cn/mw690/5db11ff4gy1fmx4kec5bvj20eb0h3mxh.jpg" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-3"> <img style="display: inline-block; width: 50%; height: 100%;" src="https://wx2.sinaimg.cn/mw690/5db11ff4gy1fmx4kec5bvj20eb0h3mxh.jpg"> </div>
                                                </td>
                                                <td data-field="phone" data-key="50-0-4" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-4">12345678901</div>
                                                </td>
                                                <td data-field="email" data-key="50-0-5" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-5">11111@qq.com</div>
                                                </td>
                                                <td data-field="sex" data-key="50-0-6" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-6">女</div>
                                                </td>
                                                <td data-field="ip" data-key="50-0-7" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-7">1111111</div>
                                                </td>
                                                <td data-field="jointime" data-key="50-0-8" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-8">20171204</div>
                                                </td>
                                                <td data-field="9" data-key="50-0-9" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-50-0-9"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="12">
                                                <td data-field="0" data-key="50-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-50-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary" checked="">
                                                        <div class="layui-unselect layui-form-checkbox layui-form-checked" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                                <td data-field="id" data-key="50-0-1" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-1">013</div>
                                                </td>
                                                <td data-field="username" data-key="50-0-2" data-minwidth="100" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-2">用户-13</div>
                                                </td>
                                                <td data-field="avatar" data-key="50-0-3" data-content="https://wx2.sinaimg.cn/mw690/5db11ff4gy1fmx4kec5bvj20eb0h3mxh.jpg" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-3"> <img style="display: inline-block; width: 50%; height: 100%;" src="https://wx2.sinaimg.cn/mw690/5db11ff4gy1fmx4kec5bvj20eb0h3mxh.jpg"> </div>
                                                </td>
                                                <td data-field="phone" data-key="50-0-4" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-4">12345678901</div>
                                                </td>
                                                <td data-field="email" data-key="50-0-5" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-5">11111@qq.com</div>
                                                </td>
                                                <td data-field="sex" data-key="50-0-6" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-6">女</div>
                                                </td>
                                                <td data-field="ip" data-key="50-0-7" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-7">1111111</div>
                                                </td>
                                                <td data-field="jointime" data-key="50-0-8" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-8">20171204</div>
                                                </td>
                                                <td data-field="9" data-key="50-0-9" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-50-0-9"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="13">
                                                <td data-field="0" data-key="50-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-50-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                                <td data-field="id" data-key="50-0-1" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-1">014</div>
                                                </td>
                                                <td data-field="username" data-key="50-0-2" data-minwidth="100" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-2">用户-14</div>
                                                </td>
                                                <td data-field="avatar" data-key="50-0-3" data-content="https://wx3.sinaimg.cn/mw690/5db11ff4gy1fmx4keca8ag208g06iglw.gif" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-3"> <img style="display: inline-block; width: 50%; height: 100%;" src="https://wx3.sinaimg.cn/mw690/5db11ff4gy1fmx4keca8ag208g06iglw.gif"> </div>
                                                </td>
                                                <td data-field="phone" data-key="50-0-4" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-4">12345678901</div>
                                                </td>
                                                <td data-field="email" data-key="50-0-5" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-5">11111@qq.com</div>
                                                </td>
                                                <td data-field="sex" data-key="50-0-6" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-6">男</div>
                                                </td>
                                                <td data-field="ip" data-key="50-0-7" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-7">1111111</div>
                                                </td>
                                                <td data-field="jointime" data-key="50-0-8" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-8">20171204</div>
                                                </td>
                                                <td data-field="9" data-key="50-0-9" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-50-0-9"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="14">
                                                <td data-field="0" data-key="50-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-50-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                                <td data-field="id" data-key="50-0-1" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-1">015</div>
                                                </td>
                                                <td data-field="username" data-key="50-0-2" data-minwidth="100" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-2">用户-15</div>
                                                </td>
                                                <td data-field="avatar" data-key="50-0-3" data-content="https://wx2.sinaimg.cn/mw690/5db11ff4gy1fmx4kec5bvj20eb0h3mxh.jpg" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-3"> <img style="display: inline-block; width: 50%; height: 100%;" src="https://wx2.sinaimg.cn/mw690/5db11ff4gy1fmx4kec5bvj20eb0h3mxh.jpg"> </div>
                                                </td>
                                                <td data-field="phone" data-key="50-0-4" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-4">12345678901</div>
                                                </td>
                                                <td data-field="email" data-key="50-0-5" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-5">11111@qq.com</div>
                                                </td>
                                                <td data-field="sex" data-key="50-0-6" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-6">男</div>
                                                </td>
                                                <td data-field="ip" data-key="50-0-7" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-7">1111111</div>
                                                </td>
                                                <td data-field="jointime" data-key="50-0-8" class="">
                                                    <div class="layui-table-cell laytable-cell-50-0-8">20171204</div>
                                                </td>
                                                <td data-field="9" data-key="50-0-9" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-50-0-9"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="layui-table-fixed layui-table-fixed-l">
                                    <div class="layui-table-header">
                                        <table cellspacing="0" cellpadding="0" border="0" class="layui-table">
                                            <thead>
                                                <tr>
                                                    <th data-field="0" data-key="50-0-0" data-unresize="true" class=" layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-50-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary" lay-filter="layTableAllChoose">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                    <div class="layui-table-body" style="height: 207px;">
                                        <table cellspacing="0" cellpadding="0" border="0" class="layui-table">
                                            <tbody>
                                                <tr data-index="0" class="">
                                                    <td data-field="0" data-key="50-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-50-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="1" class="">
                                                    <td data-field="0" data-key="50-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-50-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="2">
                                                    <td data-field="0" data-key="50-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-50-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary" checked="">
                                                            <div class="layui-unselect layui-form-checkbox layui-form-checked" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="3" class="">
                                                    <td data-field="0" data-key="50-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-50-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="4" class="">
                                                    <td data-field="0" data-key="50-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-50-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="5" class="">
                                                    <td data-field="0" data-key="50-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-50-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="6">
                                                    <td data-field="0" data-key="50-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-50-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="7">
                                                    <td data-field="0" data-key="50-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-50-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="8">
                                                    <td data-field="0" data-key="50-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-50-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="9">
                                                    <td data-field="0" data-key="50-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-50-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="10">
                                                    <td data-field="0" data-key="50-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-50-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="11">
                                                    <td data-field="0" data-key="50-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-50-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="12">
                                                    <td data-field="0" data-key="50-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-50-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary" checked="">
                                                            <div class="layui-unselect layui-form-checkbox layui-form-checked" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="13">
                                                    <td data-field="0" data-key="50-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-50-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="14">
                                                    <td data-field="0" data-key="50-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-50-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="layui-table-fixed layui-table-fixed-r" style="right: 16px;">
                                    <div class="layui-table-header">
                                        <table cellspacing="0" cellpadding="0" border="0" class="layui-table">
                                            <thead>
                                                <tr>
                                                    <th data-field="9" data-key="50-0-9" class=" layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-50-0-9" align="center"><span>操作</span></div>
                                                    </th>
                                                </tr>
                                            </thead>
                                        </table>
                                        <div class="layui-table-mend"></div>
                                    </div>
                                    <div class="layui-table-body" style="height: 207px;">
                                        <table cellspacing="0" cellpadding="0" border="0" class="layui-table">
                                            <tbody>
                                                <tr data-index="0" class="">
                                                    <td data-field="9" data-key="50-0-9" align="center" data-off="true" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-50-0-9"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                            </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="1" class="">
                                                    <td data-field="9" data-key="50-0-9" align="center" data-off="true" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-50-0-9"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                            </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="2">
                                                    <td data-field="9" data-key="50-0-9" align="center" data-off="true" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-50-0-9"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                            </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="3" class="">
                                                    <td data-field="9" data-key="50-0-9" align="center" data-off="true" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-50-0-9"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                            </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="4" class="">
                                                    <td data-field="9" data-key="50-0-9" align="center" data-off="true" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-50-0-9"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                            </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="5" class="">
                                                    <td data-field="9" data-key="50-0-9" align="center" data-off="true" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-50-0-9"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                            </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="6">
                                                    <td data-field="9" data-key="50-0-9" align="center" data-off="true" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-50-0-9"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                            </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="7">
                                                    <td data-field="9" data-key="50-0-9" align="center" data-off="true" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-50-0-9"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                            </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="8">
                                                    <td data-field="9" data-key="50-0-9" align="center" data-off="true" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-50-0-9"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                            </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="9">
                                                    <td data-field="9" data-key="50-0-9" align="center" data-off="true" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-50-0-9"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                            </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="10">
                                                    <td data-field="9" data-key="50-0-9" align="center" data-off="true" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-50-0-9"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                            </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="11">
                                                    <td data-field="9" data-key="50-0-9" align="center" data-off="true" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-50-0-9"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                            </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="12">
                                                    <td data-field="9" data-key="50-0-9" align="center" data-off="true" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-50-0-9"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                            </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="13">
                                                    <td data-field="9" data-key="50-0-9" align="center" data-off="true" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-50-0-9"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                            </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="14">
                                                    <td data-field="9" data-key="50-0-9" align="center" data-off="true" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-50-0-9"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                            </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="layui-table-page">
                                <div id="layui-table-page50">
                                    <div class="layui-box layui-laypage layui-laypage-default" id="layui-laypage-30"><a href="javascript:;" class="layui-laypage-prev layui-disabled" data-page="0"><i class="layui-icon"></i></a><span class="layui-laypage-curr"><em class="layui-laypage-em"></em><em>1</em></span><a href="javascript:;"
                                            data-page="2">2</a><a href="javascript:;" data-page="3">3</a><a href="javascript:;" class="layui-laypage-last" title="尾页" data-page="4">4</a><a href="javascript:;" class="layui-laypage-next" data-page="2"><i class="layui-icon"></i></a>
                                        <span
                                            class="layui-laypage-skip">到第<input type="text" min="1" value="1" class="layui-input">页<button type="button" class="layui-laypage-btn">确定</button></span><span class="layui-laypage-count">共 100 条</span><span class="layui-laypage-limits"><select lay-ignore=""><option value="10">10 条/页</option><option value="20">20 条/页</option><option value="30" selected="">30 条/页</option><option value="40">40 条/页</option><option value="50">50 条/页</option><option value="60">60 条/页</option><option value="70">70 条/页</option><option value="80">80 条/页</option><option value="90">90 条/页</option></select></span></div>
                                </div>
                            </div>
                            <style>
                                .laytable-cell-50-0-0 {
                                    width: 48px;
                                }

                                .laytable-cell-50-0-1 {
                                    width: 100px;
                                }

                                .laytable-cell-50-0-2 {}

                                .laytable-cell-50-0-3 {
                                    width: 100px;
                                }

                                .laytable-cell-50-0-4 {}

                                .laytable-cell-50-0-5 {}

                                .laytable-cell-50-0-6 {
                                    width: 80px;
                                }

                                .laytable-cell-50-0-7 {}

                                .laytable-cell-50-0-8 {}

                                .laytable-cell-50-0-9 {
                                    width: 150px;
                                }
                            </style>
                        </div>
                        <script type="text/html" id="imgTpl">
                            <img style="display: inline-block; width: 50%; height: 100%;" src={ { d.avatar }}>
                        </script>
                        <script type="text/html" id="table-useradmin-webuser">
                            <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a>
                            <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>
                        </script>
                    </div>
                </div>
            </div>
            <script>
                layui.use('useradmin', layui.factory('useradmin')).use(['admin', 'useradmin', 'table'], function() {
                    var $ = layui.$,
                        admin = layui.admin,
                        view = layui.view,
                        table = layui.table,
                        form = layui.form;

                    form.render(null, 'layadmin-userfront-formlist');

                    //监听搜索
                    form.on('submit(LAY-user-front-search)', function(data) {
                        var field = data.field;

                        //执行重载
                        table.reload('LAY-user-manage', {
                            where: field
                        });
                    });

                    //事件
                    var active = {
                        batchdel: function() {
                            var checkStatus = table.checkStatus('LAY-user-manage'),
                                checkData = checkStatus.data; //得到选中的数据

                            if (checkData.length === 0) {
                                return layer.msg('请选择数据');
                            }

                            layer.prompt({
                                formType: 1,
                                title: '敏感操作，请验证口令'
                            }, function(value, index) {
                                layer.close(index);

                                layer.confirm('确定删除吗？', function(index) {

                                    //执行 Ajax 后重载
                                    /*
                                    admin.req({
                                      url: 'xxx'
                                      //,……
                                    });
                                    */
                                    table.reload('LAY-user-manage');
                                    layer.msg('已删除');
                                });
                            });
                        },
                        add: function() {
                            admin.popup({
                                title: '添加用户',
                                area: ['500px', '450px'],
                                id: 'LAY-popup-user-add',
                                success: function(layero, index) {
                                    view(this.id).render('user/user/userform').done(function() {
                                        form.render(null, 'layuiadmin-form-useradmin');

                                        //监听提交
                                        form.on('submit(LAY-user-front-submit)', function(data) {
                                            var field = data.field; //获取提交的字段

                                            //提交 Ajax 成功后，关闭当前弹层并重载表格
                                            //$.ajax({});
                                            layui.table.reload('LAY-user-manage'); //重载表格
                                            layer.close(index); //执行关闭
                                        });
                                    });
                                }
                            });
                        }
                    };

                    $('.layui-btn.layuiadmin-btn-useradmin').on('click', function() {
                        var type = $(this).data('type');
                        active[type] ? active[type].call(this) : '';
                    });
                });
            </script>
        </div>
    </div>

    <script src="{{ asset('layui-v2.4.3/layui.js') }}"></script>
</body>

</html>
