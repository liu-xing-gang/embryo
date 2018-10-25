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
                    <a><cite>后台管理员</cite></a>
                </div>
            </div>
            <div class="layui-fluid">
                <div class="layui-card">
                    <div class="layui-form layui-card-header layuiadmin-card-header-auto" lay-filter="layadmin-useradmin-formlist">
                        <div class="layui-form-item">
                            <div class="layui-inline">
                                <label class="layui-form-label">登录名</label>
                                <div class="layui-input-block">
                                    <input type="text" name="loginname" placeholder="请输入" autocomplete="off" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-inline">
                                <label class="layui-form-label">手机</label>
                                <div class="layui-input-block">
                                    <input type="text" name="telphone" placeholder="请输入" autocomplete="off" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-inline">
                                <label class="layui-form-label">邮箱</label>
                                <div class="layui-input-block">
                                    <input type="text" name="email" placeholder="请输入" autocomplete="off" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-inline">
                                <label class="layui-form-label">角色</label>
                                <div class="layui-input-block">
                                    <select name="role">
                  <option value="0">管理员</option>
                  <option value="1">超级管理员</option>
                  <option value="2">纠错员</option>
                  <option value="3">采购员</option>
                  <option value="4">推销员</option>
                  <option value="5">运营人员</option>
                  <option value="6">编辑</option>
                </select>
                                    <div class="layui-unselect layui-form-select">
                                        <div class="layui-select-title"><input type="text" placeholder="请选择" value="管理员" readonly="" class="layui-input layui-unselect"><i class="layui-edge"></i></div>
                                        <dl class="layui-anim layui-anim-upbit">
                                            <dd lay-value="0" class="layui-this">管理员</dd>
                                            <dd lay-value="1" class="">超级管理员</dd>
                                            <dd lay-value="2" class="">纠错员</dd>
                                            <dd lay-value="3" class="">采购员</dd>
                                            <dd lay-value="4" class="">推销员</dd>
                                            <dd lay-value="5" class="">运营人员</dd>
                                            <dd lay-value="6" class="">编辑</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <div class="layui-inline">
                                <button class="layui-btn layuiadmin-btn-admin" lay-submit="" lay-filter="LAY-user-back-search">
                <i class="layui-icon layui-icon-search layuiadmin-button-btn"></i>
              </button>
                            </div>
                        </div>
                    </div>

                    <div class="layui-card-body">
                        <div style="padding-bottom: 10px;">
                            <button class="layui-btn layuiadmin-btn-admin" data-type="batchdel">删除</button>
                            <button class="layui-btn layuiadmin-btn-admin" data-type="add">添加</button>
                        </div>

                        <table id="LAY-user-back-manage" lay-filter="LAY-user-back-manage"></table>
                        <div class="layui-form layui-border-box layui-table-view" lay-filter="LAY-table-60" style=" ">
                            <div class="layui-table-box">
                                <div class="layui-table-header">
                                    <table cellspacing="0" cellpadding="0" border="0" class="layui-table">
                                        <thead>
                                            <tr>
                                                <th data-field="0" data-key="60-0-0" data-unresize="true" class=" layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-60-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary" lay-filter="layTableAllChoose">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </th>
                                                <th data-field="id" data-key="60-0-1" class=" layui-unselect">
                                                    <div class="layui-table-cell laytable-cell-60-0-1"><span>ID</span><span class="layui-table-sort layui-inline"><i class="layui-edge layui-table-sort-asc" title="升序"></i><i class="layui-edge layui-table-sort-desc" title="降序"></i></span></div>
                                                </th>
                                                <th data-field="loginname" data-key="60-0-2" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-2"><span>登录名</span></div>
                                                </th>
                                                <th data-field="telphone" data-key="60-0-3" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-3"><span>手机</span></div>
                                                </th>
                                                <th data-field="email" data-key="60-0-4" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-4"><span>邮箱</span></div>
                                                </th>
                                                <th data-field="role" data-key="60-0-5" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-5"><span>角色</span></div>
                                                </th>
                                                <th data-field="jointime" data-key="60-0-6" class=" layui-unselect">
                                                    <div class="layui-table-cell laytable-cell-60-0-6"><span>加入时间</span><span class="layui-table-sort layui-inline"><i class="layui-edge layui-table-sort-asc" title="升序"></i><i class="layui-edge layui-table-sort-desc" title="降序"></i></span></div>
                                                </th>
                                                <th data-field="check" data-key="60-0-7" data-minwidth="80" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-7" align="center"><span>审核状态</span></div>
                                                </th>
                                                <th data-field="8" data-key="60-0-8" class=" layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-60-0-8" align="center"><span>操作</span></div>
                                                </th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="layui-table-body layui-table-main">
                                    <table cellspacing="0" cellpadding="0" border="0" class="layui-table">
                                        <tbody>
                                            <tr data-index="0" class="">
                                                <td data-field="0" data-key="60-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-60-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                                <td data-field="id" data-key="60-0-1" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-1">1001</div>
                                                </td>
                                                <td data-field="loginname" data-key="60-0-2" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-2">admin</div>
                                                </td>
                                                <td data-field="telphone" data-key="60-0-3" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-3">11111111111</div>
                                                </td>
                                                <td data-field="email" data-key="60-0-4" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-4">111@qq.com</div>
                                                </td>
                                                <td data-field="role" data-key="60-0-5" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-5">超级管理员</div>
                                                </td>
                                                <td data-field="jointime" data-key="60-0-6" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-6">20150217</div>
                                                </td>
                                                <td data-field="check" data-key="60-0-7" align="center" data-content="" data-minwidth="80" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-7"> <button class="layui-btn layui-btn-primary layui-btn-xs">未审核</button> </div>
                                                </td>
                                                <td data-field="8" data-key="60-0-8" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-60-0-8"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-disabled layui-btn-xs"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="1" class="">
                                                <td data-field="0" data-key="60-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-60-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                                <td data-field="id" data-key="60-0-1" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-1">1002</div>
                                                </td>
                                                <td data-field="loginname" data-key="60-0-2" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-2">common-1</div>
                                                </td>
                                                <td data-field="telphone" data-key="60-0-3" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-3">22222222222</div>
                                                </td>
                                                <td data-field="email" data-key="60-0-4" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-4">222@qq.com</div>
                                                </td>
                                                <td data-field="role" data-key="60-0-5" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-5">管理员</div>
                                                </td>
                                                <td data-field="jointime" data-key="60-0-6" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-6">20160217</div>
                                                </td>
                                                <td data-field="check" data-key="60-0-7" align="center" data-content="" data-minwidth="80" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-7"> <button class="layui-btn layui-btn-primary layui-btn-xs">未审核</button> </div>
                                                </td>
                                                <td data-field="8" data-key="60-0-8" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-60-0-8"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="2" class="">
                                                <td data-field="0" data-key="60-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-60-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                                <td data-field="id" data-key="60-0-1" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-1">1003</div>
                                                </td>
                                                <td data-field="loginname" data-key="60-0-2" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-2">common-2</div>
                                                </td>
                                                <td data-field="telphone" data-key="60-0-3" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-3">33333333333</div>
                                                </td>
                                                <td data-field="email" data-key="60-0-4" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-4">333@qq.com</div>
                                                </td>
                                                <td data-field="role" data-key="60-0-5" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-5">管理员</div>
                                                </td>
                                                <td data-field="jointime" data-key="60-0-6" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-6">20161012</div>
                                                </td>
                                                <td data-field="check" data-key="60-0-7" align="center" data-content="" data-minwidth="80" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-7"> <button class="layui-btn layui-btn-primary layui-btn-xs">未审核</button> </div>
                                                </td>
                                                <td data-field="8" data-key="60-0-8" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-60-0-8"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="3" class="">
                                                <td data-field="0" data-key="60-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-60-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                                <td data-field="id" data-key="60-0-1" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-1">1004</div>
                                                </td>
                                                <td data-field="loginname" data-key="60-0-2" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-2">common-3</div>
                                                </td>
                                                <td data-field="telphone" data-key="60-0-3" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-3">44444444444</div>
                                                </td>
                                                <td data-field="email" data-key="60-0-4" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-4">444@qq.com</div>
                                                </td>
                                                <td data-field="role" data-key="60-0-5" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-5">管理员</div>
                                                </td>
                                                <td data-field="jointime" data-key="60-0-6" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-6">20170518</div>
                                                </td>
                                                <td data-field="check" data-key="60-0-7" align="center" data-content="" data-minwidth="80" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-7"> <button class="layui-btn layui-btn-primary layui-btn-xs">未审核</button> </div>
                                                </td>
                                                <td data-field="8" data-key="60-0-8" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-60-0-8"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="4" class="">
                                                <td data-field="0" data-key="60-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-60-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                                <td data-field="id" data-key="60-0-1" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-1">1005</div>
                                                </td>
                                                <td data-field="loginname" data-key="60-0-2" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-2">common-4</div>
                                                </td>
                                                <td data-field="telphone" data-key="60-0-3" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-3">55555555555</div>
                                                </td>
                                                <td data-field="email" data-key="60-0-4" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-4">555@qq.com</div>
                                                </td>
                                                <td data-field="role" data-key="60-0-5" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-5">管理员</div>
                                                </td>
                                                <td data-field="jointime" data-key="60-0-6" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-6">20180101</div>
                                                </td>
                                                <td data-field="check" data-key="60-0-7" align="center" data-content="" data-minwidth="80" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-7"> <button class="layui-btn layui-btn-primary layui-btn-xs">未审核</button> </div>
                                                </td>
                                                <td data-field="8" data-key="60-0-8" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-60-0-8"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="5" class="">
                                                <td data-field="0" data-key="60-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-60-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                                <td data-field="id" data-key="60-0-1" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-1">1006</div>
                                                </td>
                                                <td data-field="loginname" data-key="60-0-2" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-2">common-5</div>
                                                </td>
                                                <td data-field="telphone" data-key="60-0-3" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-3">66666666666</div>
                                                </td>
                                                <td data-field="email" data-key="60-0-4" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-4">666@qq.com</div>
                                                </td>
                                                <td data-field="role" data-key="60-0-5" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-5">管理员</div>
                                                </td>
                                                <td data-field="jointime" data-key="60-0-6" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-6">20160217</div>
                                                </td>
                                                <td data-field="check" data-key="60-0-7" align="center" data-content="" data-minwidth="80" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-7"> <button class="layui-btn layui-btn-primary layui-btn-xs">未审核</button> </div>
                                                </td>
                                                <td data-field="8" data-key="60-0-8" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-60-0-8"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="6" class="">
                                                <td data-field="0" data-key="60-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-60-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                                <td data-field="id" data-key="60-0-1" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-1">1007</div>
                                                </td>
                                                <td data-field="loginname" data-key="60-0-2" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-2">common-6</div>
                                                </td>
                                                <td data-field="telphone" data-key="60-0-3" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-3">77777777777</div>
                                                </td>
                                                <td data-field="email" data-key="60-0-4" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-4">777@qq.com</div>
                                                </td>
                                                <td data-field="role" data-key="60-0-5" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-5">管理员</div>
                                                </td>
                                                <td data-field="jointime" data-key="60-0-6" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-6">20161012</div>
                                                </td>
                                                <td data-field="check" data-key="60-0-7" align="center" data-content="" data-minwidth="80" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-7"> <button class="layui-btn layui-btn-primary layui-btn-xs">未审核</button> </div>
                                                </td>
                                                <td data-field="8" data-key="60-0-8" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-60-0-8"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="7" class="">
                                                <td data-field="0" data-key="60-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-60-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                                <td data-field="id" data-key="60-0-1" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-1">1008</div>
                                                </td>
                                                <td data-field="loginname" data-key="60-0-2" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-2">common-7</div>
                                                </td>
                                                <td data-field="telphone" data-key="60-0-3" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-3">88888888888</div>
                                                </td>
                                                <td data-field="email" data-key="60-0-4" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-4">888@qq.com</div>
                                                </td>
                                                <td data-field="role" data-key="60-0-5" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-5">管理员</div>
                                                </td>
                                                <td data-field="jointime" data-key="60-0-6" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-6">20170518</div>
                                                </td>
                                                <td data-field="check" data-key="60-0-7" align="center" data-content="" data-minwidth="80" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-7"> <button class="layui-btn layui-btn-primary layui-btn-xs">未审核</button> </div>
                                                </td>
                                                <td data-field="8" data-key="60-0-8" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-60-0-8"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="8">
                                                <td data-field="0" data-key="60-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-60-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                                <td data-field="id" data-key="60-0-1" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-1">1009</div>
                                                </td>
                                                <td data-field="loginname" data-key="60-0-2" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-2">common-8</div>
                                                </td>
                                                <td data-field="telphone" data-key="60-0-3" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-3">99999999999</div>
                                                </td>
                                                <td data-field="email" data-key="60-0-4" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-4">999@qq.com</div>
                                                </td>
                                                <td data-field="role" data-key="60-0-5" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-5">管理员</div>
                                                </td>
                                                <td data-field="jointime" data-key="60-0-6" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-6">20180101</div>
                                                </td>
                                                <td data-field="check" data-key="60-0-7" align="center" data-content="" data-minwidth="80" class="">
                                                    <div class="layui-table-cell laytable-cell-60-0-7"> <button class="layui-btn layui-btn-primary layui-btn-xs">未审核</button> </div>
                                                </td>
                                                <td data-field="8" data-key="60-0-8" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-60-0-8"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
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
                                                    <th data-field="0" data-key="60-0-0" data-unresize="true" class=" layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-60-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary" lay-filter="layTableAllChoose">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                    <div class="layui-table-body" style="height: auto;">
                                        <table cellspacing="0" cellpadding="0" border="0" class="layui-table">
                                            <tbody>
                                                <tr data-index="0" class="">
                                                    <td data-field="0" data-key="60-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-60-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="1" class="">
                                                    <td data-field="0" data-key="60-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-60-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="2" class="">
                                                    <td data-field="0" data-key="60-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-60-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="3" class="">
                                                    <td data-field="0" data-key="60-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-60-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="4" class="">
                                                    <td data-field="0" data-key="60-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-60-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="5" class="">
                                                    <td data-field="0" data-key="60-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-60-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="6" class="">
                                                    <td data-field="0" data-key="60-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-60-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="7" class="">
                                                    <td data-field="0" data-key="60-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-60-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="8">
                                                    <td data-field="0" data-key="60-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-60-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="layui-table-fixed layui-table-fixed-r" style="right: -1px;">
                                    <div class="layui-table-header">
                                        <table cellspacing="0" cellpadding="0" border="0" class="layui-table">
                                            <thead>
                                                <tr>
                                                    <th data-field="8" data-key="60-0-8" class=" layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-60-0-8" align="center"><span>操作</span></div>
                                                    </th>
                                                </tr>
                                            </thead>
                                        </table>
                                        <div class="layui-table-mend"></div>
                                    </div>
                                    <div class="layui-table-body" style="height: auto;">
                                        <table cellspacing="0" cellpadding="0" border="0" class="layui-table">
                                            <tbody>
                                                <tr data-index="0" class="">
                                                    <td data-field="8" data-key="60-0-8" align="center" data-off="true" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-60-0-8"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-disabled layui-btn-xs"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                            </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="1" class="">
                                                    <td data-field="8" data-key="60-0-8" align="center" data-off="true" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-60-0-8"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                            </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="2" class="">
                                                    <td data-field="8" data-key="60-0-8" align="center" data-off="true" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-60-0-8"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                            </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="3" class="">
                                                    <td data-field="8" data-key="60-0-8" align="center" data-off="true" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-60-0-8"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                            </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="4" class="">
                                                    <td data-field="8" data-key="60-0-8" align="center" data-off="true" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-60-0-8"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                            </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="5" class="">
                                                    <td data-field="8" data-key="60-0-8" align="center" data-off="true" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-60-0-8"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                            </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="6" class="">
                                                    <td data-field="8" data-key="60-0-8" align="center" data-off="true" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-60-0-8"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                            </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="7" class="">
                                                    <td data-field="8" data-key="60-0-8" align="center" data-off="true" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-60-0-8"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                            </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="8">
                                                    <td data-field="8" data-key="60-0-8" align="center" data-off="true" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-60-0-8"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                            </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <style>
                                .laytable-cell-60-0-0 {
                                    width: 48px;
                                }

                                .laytable-cell-60-0-1 {
                                    width: 80px;
                                }

                                .laytable-cell-60-0-2 {}

                                .laytable-cell-60-0-3 {}

                                .laytable-cell-60-0-4 {}

                                .laytable-cell-60-0-5 {}

                                .laytable-cell-60-0-6 {}

                                .laytable-cell-60-0-7 {}

                                .laytable-cell-60-0-8 {
                                    width: 150px;
                                }
                            </style>
                        </div>
                        <script type="text/html" id="buttonTpl">
                            @{{# if(d.check == true){ }}
                            <button class="layui-btn layui-btn-xs">已审核</button> @{{# } else { }}
                            <button class="layui-btn layui-btn-primary layui-btn-xs">未审核</button> @{{# } }}
                        </script>
                        <script type="text/html" id="table-useradmin-admin">
                            <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> @{{# if(d.role == '超级管理员'){ }}
                            <a class="layui-btn layui-btn-disabled layui-btn-xs"><i class="layui-icon layui-icon-delete"></i>删除</a> @{{# } else { }}
                            <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a> @{{# } }}
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

                    form.render(null, 'layadmin-useradmin-formlist');

                    // 监听搜索
                    form.on('submit(LAY-user-back-search)', function(data) {
                        var field = data.field;

                        // 执行重载
                        table.reload('LAY-user-back-manage', {
                            where: field
                        });
                    });

                    // 事件
                    var active = {
                        batchdel: function() {
                            var checkStatus = table.checkStatus('LAY-user-back-manage'),
                                checkData = checkStatus.data; // 得到选中的数据

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
                                    table.reload('LAY-user-back-manage');
                                    layer.msg('已删除');
                                });
                            });
                        },
                        add: function() {
                            admin.popup({
                                title: '添加管理员',
                                area: ['420px', '450px'],
                                id: 'LAY-popup-useradmin-add',
                                success: function(layero, index) {
                                    view(this.id).render('user/administrators/adminform').done(function() {
                                        form.render(null, 'layuiadmin-form-admin');

                                        //监听提交
                                        form.on('submit(LAY-user-back-submit)', function(data) {
                                            var field = data.field; //获取提交的字段

                                            //提交 Ajax 成功后，关闭当前弹层并重载表格
                                            //$.ajax({});
                                            layui.table.reload('LAY-user-back-manage'); //重载表格
                                            layer.close(index); //执行关闭
                                        });
                                    });
                                }
                            });
                        }
                    }
                    $('.layui-btn.layuiadmin-btn-admin').on('click', function() {
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
