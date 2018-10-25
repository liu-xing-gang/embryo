@extends('admin.common.layout') @section('content')
<div class="layui-body" id="LAY_app_body">
    <div class="layadmin-tabsbody-item layui-show">
        <div class="layui-card layadmin-header">
            <div class="layui-breadcrumb" lay-filter="breadcrumb" style="visibility: visible;">
                <a lay-href="">主页</a><span lay-separator="">/</span>
                <a><cite>应用</cite></a><span lay-separator="">/</span>
                <a><cite>评论管理</cite></a>
            </div>
        </div>
        <div class="layui-fluid">
            <div class="layui-card">
                <div class="layui-form layui-card-header layuiadmin-card-header-auto" lay-filter="app-content-comment">
                    <div class="layui-form-item">
                        <div class="layui-inline">
                            <label class="layui-form-label">ID</label>
                            <div class="layui-input-inline">
                                <input type="text" name="cid" placeholder="请输入" autocomplete="off" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-inline">
                            <label class="layui-form-label">评论者</label>
                            <div class="layui-input-inline">
                                <input type="text" name="username" placeholder="请输入" autocomplete="off" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-inline">
                            <label class="layui-form-label">评论内容</label>
                            <div class="layui-input-inline">
                                <input type="text" name="content" placeholder="请输入" autocomplete="off" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-inline">
                            <button class="layui-btn layuiadmin-btn-comm" data-type="reload" lay-submit="" lay-filter="LAY-app-contcomm-search">
            <i class="layui-icon layui-icon-search layuiadmin-button-btn"></i>
          </button>
                        </div>
                    </div>
                </div>
                <div class="layui-card-body">
                    <div style="padding-bottom: 10px;">
                        <button class="layui-btn layuiadmin-btn-comm" data-type="batchdel">删除</button>
                    </div>
                    <table id="LAY-app-content-comm" lay-filter="LAY-app-content-comm"></table>
                    <div class="layui-form layui-border-box layui-table-view" lay-filter="LAY-table-3" style=" ">
                        <div class="layui-table-box">
                            <div class="layui-table-header">
                                <table cellspacing="0" cellpadding="0" border="0" class="layui-table">
                                    <thead>
                                        <tr>
                                            <th data-field="0" data-key="3-0-0" data-unresize="true" class=" layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-3-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary" lay-filter="layTableAllChoose">
                                                    <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                </div>
                                            </th>
                                            <th data-field="id" data-key="3-0-1" class=" layui-unselect">
                                                <div class="layui-table-cell laytable-cell-3-0-1"><span>ID</span><span class="layui-table-sort layui-inline"><i class="layui-edge layui-table-sort-asc" title="升序"></i><i class="layui-edge layui-table-sort-desc" title="降序"></i></span></div>
                                            </th>
                                            <th data-field="reviewers" data-key="3-0-2" data-minwidth="100" class="">
                                                <div class="layui-table-cell laytable-cell-3-0-2"><span>评论者</span></div>
                                            </th>
                                            <th data-field="content" data-key="3-0-3" data-minwidth="100" class="">
                                                <div class="layui-table-cell laytable-cell-3-0-3"><span>评论内容</span></div>
                                            </th>
                                            <th data-field="commtime" data-key="3-0-4" data-minwidth="100" class=" layui-unselect">
                                                <div class="layui-table-cell laytable-cell-3-0-4"><span>评论时间</span><span class="layui-table-sort layui-inline"><i class="layui-edge layui-table-sort-asc" title="升序"></i><i class="layui-edge layui-table-sort-desc" title="降序"></i></span></div>
                                            </th>
                                            <th data-field="5" data-key="3-0-5" class=" layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-3-0-5" align="center"><span>操作</span></div>
                                            </th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="layui-table-body layui-table-main">
                                <table cellspacing="0" cellpadding="0" border="0" class="layui-table">
                                    <tbody>
                                        <tr data-index="0">
                                            <td data-field="0" data-key="3-0-0" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-3-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                    <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                </div>
                                            </td>
                                            <td data-field="id" data-key="3-0-1" class="">
                                                <div class="layui-table-cell laytable-cell-3-0-1">001</div>
                                            </td>
                                            <td data-field="reviewers" data-key="3-0-2" data-minwidth="100" class="">
                                                <div class="layui-table-cell laytable-cell-3-0-2">赵</div>
                                            </td>
                                            <td data-field="content" data-key="3-0-3" data-minwidth="100" class="">
                                                <div class="layui-table-cell laytable-cell-3-0-3">我又爱上编程了</div>
                                            </td>
                                            <td data-field="commtime" data-key="3-0-4" data-minwidth="100" class="">
                                                <div class="layui-table-cell laytable-cell-3-0-4">20160312</div>
                                            </td>
                                            <td data-field="5" data-key="3-0-5" align="center" data-off="true" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-3-0-5"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                    </div>
                                            </td>
                                        </tr>
                                        <tr data-index="1">
                                            <td data-field="0" data-key="3-0-0" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-3-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                    <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                </div>
                                            </td>
                                            <td data-field="id" data-key="3-0-1" class="">
                                                <div class="layui-table-cell laytable-cell-3-0-1">002</div>
                                            </td>
                                            <td data-field="reviewers" data-key="3-0-2" data-minwidth="100" class="">
                                                <div class="layui-table-cell laytable-cell-3-0-2">钱</div>
                                            </td>
                                            <td data-field="content" data-key="3-0-3" data-minwidth="100" class="">
                                                <div class="layui-table-cell laytable-cell-3-0-3">女生出门要小心</div>
                                            </td>
                                            <td data-field="commtime" data-key="3-0-4" data-minwidth="100" class="">
                                                <div class="layui-table-cell laytable-cell-3-0-4">20160821</div>
                                            </td>
                                            <td data-field="5" data-key="3-0-5" align="center" data-off="true" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-3-0-5"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                    </div>
                                            </td>
                                        </tr>
                                        <tr data-index="2">
                                            <td data-field="0" data-key="3-0-0" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-3-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                    <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                </div>
                                            </td>
                                            <td data-field="id" data-key="3-0-1" class="">
                                                <div class="layui-table-cell laytable-cell-3-0-1">003</div>
                                            </td>
                                            <td data-field="reviewers" data-key="3-0-2" data-minwidth="100" class="">
                                                <div class="layui-table-cell laytable-cell-3-0-2">孙</div>
                                            </td>
                                            <td data-field="content" data-key="3-0-3" data-minwidth="100" class="">
                                                <div class="layui-table-cell laytable-cell-3-0-3">框架就用layui</div>
                                            </td>
                                            <td data-field="commtime" data-key="3-0-4" data-minwidth="100" class="">
                                                <div class="layui-table-cell laytable-cell-3-0-4">20161212</div>
                                            </td>
                                            <td data-field="5" data-key="3-0-5" align="center" data-off="true" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-3-0-5"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                    </div>
                                            </td>
                                        </tr>
                                        <tr data-index="3">
                                            <td data-field="0" data-key="3-0-0" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-3-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                    <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                </div>
                                            </td>
                                            <td data-field="id" data-key="3-0-1" class="">
                                                <div class="layui-table-cell laytable-cell-3-0-1">004</div>
                                            </td>
                                            <td data-field="reviewers" data-key="3-0-2" data-minwidth="100" class="">
                                                <div class="layui-table-cell laytable-cell-3-0-2">李</div>
                                            </td>
                                            <td data-field="content" data-key="3-0-3" data-minwidth="100" class="">
                                                <div class="layui-table-cell laytable-cell-3-0-3">心姐么么哒</div>
                                            </td>
                                            <td data-field="commtime" data-key="3-0-4" data-minwidth="100" class="">
                                                <div class="layui-table-cell laytable-cell-3-0-4">20170311</div>
                                            </td>
                                            <td data-field="5" data-key="3-0-5" align="center" data-off="true" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-3-0-5"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                    </div>
                                            </td>
                                        </tr>
                                        <tr data-index="4">
                                            <td data-field="0" data-key="3-0-0" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-3-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                    <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                </div>
                                            </td>
                                            <td data-field="id" data-key="3-0-1" class="">
                                                <div class="layui-table-cell laytable-cell-3-0-1">005</div>
                                            </td>
                                            <td data-field="reviewers" data-key="3-0-2" data-minwidth="100" class="">
                                                <div class="layui-table-cell laytable-cell-3-0-2">周</div>
                                            </td>
                                            <td data-field="content" data-key="3-0-3" data-minwidth="100" class="">
                                                <div class="layui-table-cell laytable-cell-3-0-3">希望明天是个好天气</div>
                                            </td>
                                            <td data-field="commtime" data-key="3-0-4" data-minwidth="100" class="">
                                                <div class="layui-table-cell laytable-cell-3-0-4">20170612</div>
                                            </td>
                                            <td data-field="5" data-key="3-0-5" align="center" data-off="true" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-3-0-5"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                    </div>
                                            </td>
                                        </tr>
                                        <tr data-index="5">
                                            <td data-field="0" data-key="3-0-0" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-3-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                    <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                </div>
                                            </td>
                                            <td data-field="id" data-key="3-0-1" class="">
                                                <div class="layui-table-cell laytable-cell-3-0-1">006</div>
                                            </td>
                                            <td data-field="reviewers" data-key="3-0-2" data-minwidth="100" class="">
                                                <div class="layui-table-cell laytable-cell-3-0-2">吴</div>
                                            </td>
                                            <td data-field="content" data-key="3-0-3" data-minwidth="100" class="">
                                                <div class="layui-table-cell laytable-cell-3-0-3">我又爱上编程了</div>
                                            </td>
                                            <td data-field="commtime" data-key="3-0-4" data-minwidth="100" class="">
                                                <div class="layui-table-cell laytable-cell-3-0-4">20171112</div>
                                            </td>
                                            <td data-field="5" data-key="3-0-5" align="center" data-off="true" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-3-0-5"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                    </div>
                                            </td>
                                        </tr>
                                        <tr data-index="6">
                                            <td data-field="0" data-key="3-0-0" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-3-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                    <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                </div>
                                            </td>
                                            <td data-field="id" data-key="3-0-1" class="">
                                                <div class="layui-table-cell laytable-cell-3-0-1">007</div>
                                            </td>
                                            <td data-field="reviewers" data-key="3-0-2" data-minwidth="100" class="">
                                                <div class="layui-table-cell laytable-cell-3-0-2">郑</div>
                                            </td>
                                            <td data-field="content" data-key="3-0-3" data-minwidth="100" class="">
                                                <div class="layui-table-cell laytable-cell-3-0-3">女生出门要小心</div>
                                            </td>
                                            <td data-field="commtime" data-key="3-0-4" data-minwidth="100" class="">
                                                <div class="layui-table-cell laytable-cell-3-0-4">20171230</div>
                                            </td>
                                            <td data-field="5" data-key="3-0-5" align="center" data-off="true" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-3-0-5"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                    </div>
                                            </td>
                                        </tr>
                                        <tr data-index="7">
                                            <td data-field="0" data-key="3-0-0" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-3-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                    <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                </div>
                                            </td>
                                            <td data-field="id" data-key="3-0-1" class="">
                                                <div class="layui-table-cell laytable-cell-3-0-1">008</div>
                                            </td>
                                            <td data-field="reviewers" data-key="3-0-2" data-minwidth="100" class="">
                                                <div class="layui-table-cell laytable-cell-3-0-2">王</div>
                                            </td>
                                            <td data-field="content" data-key="3-0-3" data-minwidth="100" class="">
                                                <div class="layui-table-cell laytable-cell-3-0-3">框架就用layui</div>
                                            </td>
                                            <td data-field="commtime" data-key="3-0-4" data-minwidth="100" class="">
                                                <div class="layui-table-cell laytable-cell-3-0-4">20180112</div>
                                            </td>
                                            <td data-field="5" data-key="3-0-5" align="center" data-off="true" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-3-0-5"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                    </div>
                                            </td>
                                        </tr>
                                        <tr data-index="8">
                                            <td data-field="0" data-key="3-0-0" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-3-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                    <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                </div>
                                            </td>
                                            <td data-field="id" data-key="3-0-1" class="">
                                                <div class="layui-table-cell laytable-cell-3-0-1">009</div>
                                            </td>
                                            <td data-field="reviewers" data-key="3-0-2" data-minwidth="100" class="">
                                                <div class="layui-table-cell laytable-cell-3-0-2">冯</div>
                                            </td>
                                            <td data-field="content" data-key="3-0-3" data-minwidth="100" class="">
                                                <div class="layui-table-cell laytable-cell-3-0-3">心姐么么哒</div>
                                            </td>
                                            <td data-field="commtime" data-key="3-0-4" data-minwidth="100" class="">
                                                <div class="layui-table-cell laytable-cell-3-0-4">20180221</div>
                                            </td>
                                            <td data-field="5" data-key="3-0-5" align="center" data-off="true" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-3-0-5"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                    </div>
                                            </td>
                                        </tr>
                                        <tr data-index="9">
                                            <td data-field="0" data-key="3-0-0" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-3-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                    <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                </div>
                                            </td>
                                            <td data-field="id" data-key="3-0-1" class="">
                                                <div class="layui-table-cell laytable-cell-3-0-1">010</div>
                                            </td>
                                            <td data-field="reviewers" data-key="3-0-2" data-minwidth="100" class="">
                                                <div class="layui-table-cell laytable-cell-3-0-2">陈</div>
                                            </td>
                                            <td data-field="content" data-key="3-0-3" data-minwidth="100" class="">
                                                <div class="layui-table-cell laytable-cell-3-0-3">希望明天是个好天气</div>
                                            </td>
                                            <td data-field="commtime" data-key="3-0-4" data-minwidth="100" class="">
                                                <div class="layui-table-cell laytable-cell-3-0-4">20180312</div>
                                            </td>
                                            <td data-field="5" data-key="3-0-5" align="center" data-off="true" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-3-0-5"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                    </div>
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
                                                <th data-field="0" data-key="3-0-0" data-unresize="true" class=" layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-3-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary" lay-filter="layTableAllChoose">
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
                                            <tr data-index="0">
                                                <td data-field="0" data-key="3-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-3-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr data-index="1">
                                                <td data-field="0" data-key="3-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-3-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr data-index="2">
                                                <td data-field="0" data-key="3-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-3-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr data-index="3">
                                                <td data-field="0" data-key="3-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-3-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr data-index="4">
                                                <td data-field="0" data-key="3-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-3-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr data-index="5">
                                                <td data-field="0" data-key="3-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-3-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr data-index="6">
                                                <td data-field="0" data-key="3-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-3-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr data-index="7">
                                                <td data-field="0" data-key="3-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-3-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr data-index="8">
                                                <td data-field="0" data-key="3-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-3-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr data-index="9">
                                                <td data-field="0" data-key="3-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-3-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="layui-table-fixed layui-table-fixed-r layui-hide" style="right: -1px;">
                                <div class="layui-table-header">
                                    <table cellspacing="0" cellpadding="0" border="0" class="layui-table">
                                        <thead>
                                            <tr>
                                                <th data-field="5" data-key="3-0-5" class=" layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-3-0-5" align="center"><span>操作</span></div>
                                                </th>
                                            </tr>
                                        </thead>
                                    </table>
                                    <div class="layui-table-mend"></div>
                                </div>
                                <div class="layui-table-body" style="height: auto;">
                                    <table cellspacing="0" cellpadding="0" border="0" class="layui-table">
                                        <tbody>
                                            <tr data-index="0">
                                                <td data-field="5" data-key="3-0-5" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-3-0-5"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="1">
                                                <td data-field="5" data-key="3-0-5" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-3-0-5"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="2">
                                                <td data-field="5" data-key="3-0-5" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-3-0-5"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="3">
                                                <td data-field="5" data-key="3-0-5" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-3-0-5"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="4">
                                                <td data-field="5" data-key="3-0-5" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-3-0-5"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="5">
                                                <td data-field="5" data-key="3-0-5" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-3-0-5"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="6">
                                                <td data-field="5" data-key="3-0-5" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-3-0-5"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="7">
                                                <td data-field="5" data-key="3-0-5" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-3-0-5"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="8">
                                                <td data-field="5" data-key="3-0-5" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-3-0-5"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="9">
                                                <td data-field="5" data-key="3-0-5" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-3-0-5"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="layui-table-page">
                            <div id="layui-table-page3">
                                <div class="layui-box layui-laypage layui-laypage-default" id="layui-laypage-1"><a href="javascript:;" class="layui-laypage-prev layui-disabled" data-page="0"><i class="layui-icon"></i></a><span class="layui-laypage-curr"><em class="layui-laypage-em"></em><em>1</em></span><a href="javascript:;" data-page="2">2</a>
                                    <a
                                        href="javascript:;" data-page="3">3</a><span class="layui-laypage-spr">…</span><a href="javascript:;" class="layui-laypage-last" title="尾页" data-page="10">10</a><a href="javascript:;" class="layui-laypage-next" data-page="2"><i class="layui-icon"></i></a>
                                        <span
                                            class="layui-laypage-skip">到第<input type="text" min="1" value="1" class="layui-input">页<button type="button" class="layui-laypage-btn">确定</button></span><span class="layui-laypage-count">共 100 条</span><span class="layui-laypage-limits"><select lay-ignore=""><option value="10" selected="">10 条/页</option><option value="15">15 条/页</option><option value="20">20 条/页</option><option value="25">25 条/页</option><option value="30">30 条/页</option></select></span></div>
                            </div>
                        </div>
                        <style>
                            .laytable-cell-3-0-0 {
                                width: 48px;
                            }

                            .laytable-cell-3-0-1 {
                                width: 100px;
                            }

                            .laytable-cell-3-0-2 {}

                            .laytable-cell-3-0-3 {}

                            .laytable-cell-3-0-4 {}

                            .laytable-cell-3-0-5 {
                                width: 150px;
                            }
                        </style>
                    </div>
                    <script type="text/html" id="table-content-com">
                        <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a>
                        <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>
                    </script>
                </div>
            </div>
        </div>
        <script>
            layui.use('contlist', layui.factory('contlist')).use(['admin', 'contlist', 'table'], function() {
                var $ = layui.$,
                    admin = layui.admin,
                    view = layui.view,
                    table = layui.table,
                    form = layui.form;

                form.render(null, 'app-content-comment');

                //监听搜索
                form.on('submit(LAY-app-contcomm-search)', function(data) {
                    var field = data.field;

                    //执行重载
                    table.reload('LAY-app-content-comm', {
                        where: field
                    });
                });

                //点击事件
                var active = {
                    batchdel: function() {
                        var checkStatus = table.checkStatus('LAY-app-content-comm'),
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
                            table.reload('LAY-app-content-comm');
                            layer.msg('已删除');
                        });
                    }
                }

                $('.layui-btn.layuiadmin-btn-comm').on('click', function() {
                    var type = $(this).data('type');
                    active[type] ? active[type].call(this) : '';
                });
            });
        </script>
    </div>
</div>
@stop
