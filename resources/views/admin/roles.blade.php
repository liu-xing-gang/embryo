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
                    <a><cite>角色管理</cite></a>
                </div>
            </div>
            <div class="layui-fluid">
                <div class="layui-card">
                    <div class="layui-form layui-card-header layuiadmin-card-header-auto" lay-filter="layadmin-useradminrole-formlist">
                        <div class="layui-form-item">
                            <div class="layui-inline">
                                角色筛选
                            </div>
                            <div class="layui-inline">
                                <select name="rolename" lay-filter="LAY-user-adminrole-type">
                <option value="-1">全部角色</option>
                <option value="0">管理员</option>
                <option value="1">超级管理员</option>
                <option value="2">纠错员</option>
                <option value="3">采购员</option>
                <option value="4">推销员</option>
                <option value="5">运营人员</option>
                <option value="6">编辑</option>
              </select>
                                <div class="layui-unselect layui-form-select">
                                    <div class="layui-select-title"><input type="text" placeholder="请选择" value="全部角色" readonly="" class="layui-input layui-unselect"><i class="layui-edge"></i></div>
                                    <dl class="layui-anim layui-anim-upbit">
                                        <dd lay-value="-1" class="layui-this">全部角色</dd>
                                        <dd lay-value="0" class="">管理员</dd>
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
                    </div>
                    <div class="layui-card-body">
                        <div style="padding-bottom: 10px;">
                            <button class="layui-btn layuiadmin-btn-role" data-type="batchdel">删除</button>
                            <button class="layui-btn layuiadmin-btn-role" data-type="add">添加</button>
                        </div>

                        <table id="LAY-user-back-role" lay-filter="LAY-user-back-role"></table>
                        <div class="layui-form layui-border-box layui-table-view" lay-filter="LAY-table-6" style=" ">
                            <div class="layui-table-box">
                                <div class="layui-table-header">
                                    <table cellspacing="0" cellpadding="0" border="0" class="layui-table">
                                        <thead>
                                            <tr>
                                                <th data-field="0" data-key="6-0-0" data-unresize="true" class=" layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-6-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary" lay-filter="layTableAllChoose">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </th>
                                                <th data-field="id" data-key="6-0-1" class=" layui-unselect">
                                                    <div class="layui-table-cell laytable-cell-6-0-1"><span>ID</span><span class="layui-table-sort layui-inline"><i class="layui-edge layui-table-sort-asc" title="升序"></i><i class="layui-edge layui-table-sort-desc" title="降序"></i></span></div>
                                                </th>
                                                <th data-field="rolename" data-key="6-0-2" class="">
                                                    <div class="layui-table-cell laytable-cell-6-0-2"><span>角色名</span></div>
                                                </th>
                                                <th data-field="limits" data-key="6-0-3" class="">
                                                    <div class="layui-table-cell laytable-cell-6-0-3"><span>拥有权限</span></div>
                                                </th>
                                                <th data-field="descr" data-key="6-0-4" class="">
                                                    <div class="layui-table-cell laytable-cell-6-0-4"><span>具体描述</span></div>
                                                </th>
                                                <th data-field="5" data-key="6-0-5" class=" layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-6-0-5" align="center"><span>操作</span></div>
                                                </th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="layui-table-body layui-table-main">
                                    <table cellspacing="0" cellpadding="0" border="0" class="layui-table">
                                        <tbody>
                                            <tr data-index="0" class="">
                                                <td data-field="0" data-key="6-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-6-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                                <td data-field="id" data-key="6-0-1" class="">
                                                    <div class="layui-table-cell laytable-cell-6-0-1">1</div>
                                                </td>
                                                <td data-field="rolename" data-key="6-0-2" class="">
                                                    <div class="layui-table-cell laytable-cell-6-0-2">超级管理员</div>
                                                </td>
                                                <td data-field="limits" data-key="6-0-3" class="">
                                                    <div class="layui-table-cell laytable-cell-6-0-3">管理所有的管理员</div>
                                                </td>
                                                <td data-field="descr" data-key="6-0-4" class="">
                                                    <div class="layui-table-cell laytable-cell-6-0-4">拥有至高无上的权利</div>
                                                </td>
                                                <td data-field="5" data-key="6-0-5" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-6-0-5"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="1" class="">
                                                <td data-field="0" data-key="6-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-6-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                                <td data-field="id" data-key="6-0-1" class="">
                                                    <div class="layui-table-cell laytable-cell-6-0-1">2</div>
                                                </td>
                                                <td data-field="rolename" data-key="6-0-2" class="">
                                                    <div class="layui-table-cell laytable-cell-6-0-2">管理员</div>
                                                </td>
                                                <td data-field="limits" data-key="6-0-3" class="">
                                                    <div class="layui-table-cell laytable-cell-6-0-3">所有列表的管理</div>
                                                </td>
                                                <td data-field="descr" data-key="6-0-4" class="">
                                                    <div class="layui-table-cell laytable-cell-6-0-4">事情很多，权力很大</div>
                                                </td>
                                                <td data-field="5" data-key="6-0-5" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-6-0-5"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="2">
                                                <td data-field="0" data-key="6-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-6-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                                <td data-field="id" data-key="6-0-1" class="">
                                                    <div class="layui-table-cell laytable-cell-6-0-1">3</div>
                                                </td>
                                                <td data-field="rolename" data-key="6-0-2" class="">
                                                    <div class="layui-table-cell laytable-cell-6-0-2">文章撰写员</div>
                                                </td>
                                                <td data-field="limits" data-key="6-0-3" class="">
                                                    <div class="layui-table-cell laytable-cell-6-0-3">负责文章的编写</div>
                                                </td>
                                                <td data-field="descr" data-key="6-0-4" class="">
                                                    <div class="layui-table-cell laytable-cell-6-0-4">文采第一的人才集合</div>
                                                </td>
                                                <td data-field="5" data-key="6-0-5" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-6-0-5"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="3" class="">
                                                <td data-field="0" data-key="6-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-6-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                                <td data-field="id" data-key="6-0-1" class="">
                                                    <div class="layui-table-cell laytable-cell-6-0-1">4</div>
                                                </td>
                                                <td data-field="rolename" data-key="6-0-2" class="">
                                                    <div class="layui-table-cell laytable-cell-6-0-2">纠错员</div>
                                                </td>
                                                <td data-field="limits" data-key="6-0-3" class="">
                                                    <div class="layui-table-cell laytable-cell-6-0-3">负责文章内容的修改</div>
                                                </td>
                                                <td data-field="descr" data-key="6-0-4" class="">
                                                    <div class="layui-table-cell laytable-cell-6-0-4">暂无</div>
                                                </td>
                                                <td data-field="5" data-key="6-0-5" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-6-0-5"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="4">
                                                <td data-field="0" data-key="6-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-6-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                                <td data-field="id" data-key="6-0-1" class="">
                                                    <div class="layui-table-cell laytable-cell-6-0-1">5</div>
                                                </td>
                                                <td data-field="rolename" data-key="6-0-2" class="">
                                                    <div class="layui-table-cell laytable-cell-6-0-2">统计人员</div>
                                                </td>
                                                <td data-field="limits" data-key="6-0-3" class="">
                                                    <div class="layui-table-cell laytable-cell-6-0-3">对数据进行统计</div>
                                                </td>
                                                <td data-field="descr" data-key="6-0-4" class="">
                                                    <div class="layui-table-cell laytable-cell-6-0-4">暂无</div>
                                                </td>
                                                <td data-field="5" data-key="6-0-5" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-6-0-5"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="5" class="">
                                                <td data-field="0" data-key="6-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-6-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                                <td data-field="id" data-key="6-0-1" class="">
                                                    <div class="layui-table-cell laytable-cell-6-0-1">6</div>
                                                </td>
                                                <td data-field="rolename" data-key="6-0-2" class="">
                                                    <div class="layui-table-cell laytable-cell-6-0-2">评估员</div>
                                                </td>
                                                <td data-field="limits" data-key="6-0-3" class="">
                                                    <div class="layui-table-cell laytable-cell-6-0-3">对统计数据进行评估</div>
                                                </td>
                                                <td data-field="descr" data-key="6-0-4" class="">
                                                    <div class="layui-table-cell laytable-cell-6-0-4">及时捕捉市场发展动态</div>
                                                </td>
                                                <td data-field="5" data-key="6-0-5" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-6-0-5"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="6" class="">
                                                <td data-field="0" data-key="6-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-6-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                                <td data-field="id" data-key="6-0-1" class="">
                                                    <div class="layui-table-cell laytable-cell-6-0-1">7</div>
                                                </td>
                                                <td data-field="rolename" data-key="6-0-2" class="">
                                                    <div class="layui-table-cell laytable-cell-6-0-2">采购员</div>
                                                </td>
                                                <td data-field="limits" data-key="6-0-3" class="">
                                                    <div class="layui-table-cell laytable-cell-6-0-3">负责员工的伙食</div>
                                                </td>
                                                <td data-field="descr" data-key="6-0-4" class="">
                                                    <div class="layui-table-cell laytable-cell-6-0-4">暂无</div>
                                                </td>
                                                <td data-field="5" data-key="6-0-5" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-6-0-5"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="7">
                                                <td data-field="0" data-key="6-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-6-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                                <td data-field="id" data-key="6-0-1" class="">
                                                    <div class="layui-table-cell laytable-cell-6-0-1">8</div>
                                                </td>
                                                <td data-field="rolename" data-key="6-0-2" class="">
                                                    <div class="layui-table-cell laytable-cell-6-0-2">推销员</div>
                                                </td>
                                                <td data-field="limits" data-key="6-0-3" class="">
                                                    <div class="layui-table-cell laytable-cell-6-0-3">介绍销售公司产品</div>
                                                </td>
                                                <td data-field="descr" data-key="6-0-4" class="">
                                                    <div class="layui-table-cell laytable-cell-6-0-4">暂无</div>
                                                </td>
                                                <td data-field="5" data-key="6-0-5" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-6-0-5"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
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
                                                    <th data-field="0" data-key="6-0-0" data-unresize="true" class=" layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-6-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary" lay-filter="layTableAllChoose">
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
                                                    <td data-field="0" data-key="6-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-6-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="1" class="">
                                                    <td data-field="0" data-key="6-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-6-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="2">
                                                    <td data-field="0" data-key="6-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-6-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="3" class="">
                                                    <td data-field="0" data-key="6-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-6-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="4">
                                                    <td data-field="0" data-key="6-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-6-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="5" class="">
                                                    <td data-field="0" data-key="6-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-6-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="6" class="">
                                                    <td data-field="0" data-key="6-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-6-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="7">
                                                    <td data-field="0" data-key="6-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-6-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
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
                                                    <th data-field="5" data-key="6-0-5" class=" layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-6-0-5" align="center"><span>操作</span></div>
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
                                                    <td data-field="5" data-key="6-0-5" align="center" data-off="true" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-6-0-5"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                            </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="1" class="">
                                                    <td data-field="5" data-key="6-0-5" align="center" data-off="true" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-6-0-5"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                            </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="2">
                                                    <td data-field="5" data-key="6-0-5" align="center" data-off="true" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-6-0-5"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                            </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="3" class="">
                                                    <td data-field="5" data-key="6-0-5" align="center" data-off="true" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-6-0-5"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                            </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="4">
                                                    <td data-field="5" data-key="6-0-5" align="center" data-off="true" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-6-0-5"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                            </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="5" class="">
                                                    <td data-field="5" data-key="6-0-5" align="center" data-off="true" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-6-0-5"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                            </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="6" class="">
                                                    <td data-field="5" data-key="6-0-5" align="center" data-off="true" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-6-0-5"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                            </div>
                                                    </td>
                                                </tr>
                                                <tr data-index="7">
                                                    <td data-field="5" data-key="6-0-5" align="center" data-off="true" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-6-0-5"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                            </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <style>
                                .laytable-cell-6-0-0 {
                                    width: 48px;
                                }

                                .laytable-cell-6-0-1 {
                                    width: 80px;
                                }

                                .laytable-cell-6-0-2 {}

                                .laytable-cell-6-0-3 {}

                                .laytable-cell-6-0-4 {}

                                .laytable-cell-6-0-5 {
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

                    form.render(null, 'layadmin-useradminrole-formlist');

                    //搜索角色
                    form.on('select(LAY-user-adminrole-type)', function(data) {
                        //执行重载
                        table.reload('LAY-user-back-role', {
                            where: {
                                role: data.value
                            }
                        });
                    });

                    //事件
                    var active = {
                        batchdel: function() {
                            var checkStatus = table.checkStatus('LAY-user-back-role'),
                                checkData = checkStatus.data; //得到选中的数据

                            if (checkData.length === 0) {
                                return layer.msg('请选择数据');
                            }

                            layer.confirm('确定删除吗？', function(index) {

                                //执行 Ajax 后重载
                                /*
                                admin.req({
                                  url: 'xxx'
                                  //,……
                                });
                                */
                                table.reload('LAY-user-back-role');
                                layer.msg('已删除');
                            });
                        },
                        add: function() {
                            admin.popup({
                                title: '添加新角色',
                                area: ['500px', '480px'],
                                id: 'LAY-popup-user-add',
                                success: function(layero, index) {
                                    view(this.id).render('user/administrators/roleform').done(function() {
                                        form.render(null, 'layuiadmin-form-role');

                                        //监听提交
                                        form.on('submit(LAY-user-role-submit)', function(data) {
                                            var field = data.field; //获取提交的字段

                                            //提交 Ajax 成功后，关闭当前弹层并重载表格
                                            //$.ajax({});
                                            layui.table.reload('LAY-user-back-role'); //重载表格
                                            layer.close(index); //执行关闭
                                        });
                                    });
                                }
                            });
                        }
                    }
                    $('.layui-btn.layuiadmin-btn-role').on('click', function() {
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
