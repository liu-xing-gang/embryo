@extends('admin.common.layout') @section('content')
<div class="layui-body" id="LAY_app_body">
    <div class="layadmin-tabsbody-item layui-show">
        <div class="layui-card layadmin-header">
            <div class="layui-breadcrumb" lay-filter="breadcrumb" style="visibility: visible;">
                <a lay-href="">主页</a><span lay-separator="">/</span>
                <a><cite>消息中心</cite></a>
            </div>
        </div>
        <div class="layui-fluid" id="LAY-app-message">
            <div class="layui-card">
                <div class="layui-tab layui-tab-brief">
                    <ul class="layui-tab-title">
                        <li class="layui-this">全部消息</li>
                        <li>通知<span class="layui-badge">6</span></li>
                        <li>私信</li>
                    </ul>
                    <div class="layui-tab-content">

                        <div class="layui-tab-item layui-show">
                            <div class="LAY-app-message-btns" style="margin-bottom: 10px;">
                                <button class="layui-btn layui-btn-primary layui-btn-sm" data-type="all" data-events="del">删除</button>
                                <button class="layui-btn layui-btn-primary layui-btn-sm" data-type="all" data-events="ready">标记已读</button>
                                <button class="layui-btn layui-btn-primary layui-btn-sm" data-type="all" data-events="readyAll">全部已读</button>
                            </div>

                            <table id="LAY-app-message-all" lay-filter="LAY-app-message-all"></table>
                            <div class="layui-form layui-border-box layui-table-view" lay-filter="LAY-table-38" style=" ">
                                <div class="layui-table-box">
                                    <div class="layui-table-header">
                                        <table cellspacing="0" cellpadding="0" border="0" class="layui-table" lay-skin="line">
                                            <thead>
                                                <tr>
                                                    <th data-field="0" data-key="38-0-0" data-unresize="true" class=" layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-38-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary" lay-filter="layTableAllChoose">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </th>
                                                    <th data-field="title" data-key="38-0-1" data-minwidth="300" class="">
                                                        <div class="layui-table-cell laytable-cell-38-0-1"><span>标题内容</span></div>
                                                    </th>
                                                    <th data-field="time" data-key="38-0-2" class="">
                                                        <div class="layui-table-cell laytable-cell-38-0-2"><span>时间</span></div>
                                                    </th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                    <div class="layui-table-body layui-table-main">
                                        <table cellspacing="0" cellpadding="0" border="0" class="layui-table" lay-skin="line">
                                            <tbody>
                                                <tr data-index="0" class="">
                                                    <td data-field="0" data-key="38-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-38-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                    <td data-field="title" data-key="38-0-1" data-content="你好新朋友，感谢使用 layuiAdmin" data-minwidth="300" class="">
                                                        <div class="layui-table-cell laytable-cell-38-0-1"><a lay-href="app/message/detail/id=123">你好新朋友，感谢使用 layuiAdmin</a></div>
                                                    </td>
                                                    <td data-field="time" data-key="38-0-2" data-content="1510363800000" class="">
                                                        <div class="layui-table-cell laytable-cell-38-0-2">2017-11-11 09:30:00</div>
                                                    </td>
                                                </tr>
                                                <tr data-index="1">
                                                    <td data-field="0" data-key="38-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-38-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                    <td data-field="title" data-key="38-0-1" data-content="贤心发来了一段私信" data-minwidth="300" class="">
                                                        <div class="layui-table-cell laytable-cell-38-0-1"><a lay-href="app/message/detail/id=111">贤心发来了一段私信</a></div>
                                                    </td>
                                                    <td data-field="time" data-key="38-0-2" data-content="1510212370000" class="">
                                                        <div class="layui-table-cell laytable-cell-38-0-2">2017-11-09 15:26:10</div>
                                                    </td>
                                                </tr>
                                                <tr data-index="2">
                                                    <td data-field="0" data-key="38-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-38-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                    <td data-field="title" data-key="38-0-1" data-content="贤心发来了一段私信" data-minwidth="300" class="">
                                                        <div class="layui-table-cell laytable-cell-38-0-1"><a lay-href="app/message/detail/id=111">贤心发来了一段私信</a></div>
                                                    </td>
                                                    <td data-field="time" data-key="38-0-2" data-content="1510212370000" class="">
                                                        <div class="layui-table-cell laytable-cell-38-0-2">2017-11-09 15:26:10</div>
                                                    </td>
                                                </tr>
                                                <tr data-index="3">
                                                    <td data-field="0" data-key="38-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-38-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                    <td data-field="title" data-key="38-0-1" data-content="贤心发来了一段私信" data-minwidth="300" class="">
                                                        <div class="layui-table-cell laytable-cell-38-0-1"><a lay-href="app/message/detail/id=111">贤心发来了一段私信</a></div>
                                                    </td>
                                                    <td data-field="time" data-key="38-0-2" data-content="1510212370000" class="">
                                                        <div class="layui-table-cell laytable-cell-38-0-2">2017-11-09 15:26:10</div>
                                                    </td>
                                                </tr>
                                                <tr data-index="4">
                                                    <td data-field="0" data-key="38-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-38-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                    <td data-field="title" data-key="38-0-1" data-content="贤心发来了一段私信" data-minwidth="300" class="">
                                                        <div class="layui-table-cell laytable-cell-38-0-1"><a lay-href="app/message/detail/id=111">贤心发来了一段私信</a></div>
                                                    </td>
                                                    <td data-field="time" data-key="38-0-2" data-content="1510212370000" class="">
                                                        <div class="layui-table-cell laytable-cell-38-0-2">2017-11-09 15:26:10</div>
                                                    </td>
                                                </tr>
                                                <tr data-index="5">
                                                    <td data-field="0" data-key="38-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-38-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                    <td data-field="title" data-key="38-0-1" data-content="贤心发来了一段私信" data-minwidth="300" class="">
                                                        <div class="layui-table-cell laytable-cell-38-0-1"><a lay-href="app/message/detail/id=111">贤心发来了一段私信</a></div>
                                                    </td>
                                                    <td data-field="time" data-key="38-0-2" data-content="1510212370000" class="">
                                                        <div class="layui-table-cell laytable-cell-38-0-2">2017-11-09 15:26:10</div>
                                                    </td>
                                                </tr>
                                                <tr data-index="6">
                                                    <td data-field="0" data-key="38-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-38-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                    <td data-field="title" data-key="38-0-1" data-content="贤心发来了一段私信" data-minwidth="300" class="">
                                                        <div class="layui-table-cell laytable-cell-38-0-1"><a lay-href="app/message/detail/id=111">贤心发来了一段私信</a></div>
                                                    </td>
                                                    <td data-field="time" data-key="38-0-2" data-content="1510212370000" class="">
                                                        <div class="layui-table-cell laytable-cell-38-0-2">2017-11-09 15:26:10</div>
                                                    </td>
                                                </tr>
                                                <tr data-index="7">
                                                    <td data-field="0" data-key="38-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-38-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                    <td data-field="title" data-key="38-0-1" data-content="贤心发来了一段私信" data-minwidth="300" class="">
                                                        <div class="layui-table-cell laytable-cell-38-0-1"><a lay-href="app/message/detail/id=111">贤心发来了一段私信</a></div>
                                                    </td>
                                                    <td data-field="time" data-key="38-0-2" data-content="1510212370000" class="">
                                                        <div class="layui-table-cell laytable-cell-38-0-2">2017-11-09 15:26:10</div>
                                                    </td>
                                                </tr>
                                                <tr data-index="8">
                                                    <td data-field="0" data-key="38-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-38-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                    <td data-field="title" data-key="38-0-1" data-content="贤心发来了一段私信" data-minwidth="300" class="">
                                                        <div class="layui-table-cell laytable-cell-38-0-1"><a lay-href="app/message/detail/id=111">贤心发来了一段私信</a></div>
                                                    </td>
                                                    <td data-field="time" data-key="38-0-2" data-content="1510212370000" class="">
                                                        <div class="layui-table-cell laytable-cell-38-0-2">2017-11-09 15:26:10</div>
                                                    </td>
                                                </tr>
                                                <tr data-index="9">
                                                    <td data-field="0" data-key="38-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-38-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                    <td data-field="title" data-key="38-0-1" data-content="贤心发来了一段私信" data-minwidth="300" class="">
                                                        <div class="layui-table-cell laytable-cell-38-0-1"><a lay-href="app/message/detail/id=111">贤心发来了一段私信</a></div>
                                                    </td>
                                                    <td data-field="time" data-key="38-0-2" data-content="1507447570000" class="">
                                                        <div class="layui-table-cell laytable-cell-38-0-2">2017-10-08 15:26:10</div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="layui-table-fixed layui-table-fixed-l">
                                        <div class="layui-table-header">
                                            <table cellspacing="0" cellpadding="0" border="0" class="layui-table" lay-skin="line">
                                                <thead>
                                                    <tr>
                                                        <th data-field="0" data-key="38-0-0" data-unresize="true" class=" layui-table-col-special">
                                                            <div class="layui-table-cell laytable-cell-38-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary" lay-filter="layTableAllChoose">
                                                                <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                        <div class="layui-table-body" style="height: auto;">
                                            <table cellspacing="0" cellpadding="0" border="0" class="layui-table" lay-skin="line">
                                                <tbody>
                                                    <tr data-index="0" class="">
                                                        <td data-field="0" data-key="38-0-0" class="layui-table-col-special">
                                                            <div class="layui-table-cell laytable-cell-38-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                                <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr data-index="1">
                                                        <td data-field="0" data-key="38-0-0" class="layui-table-col-special">
                                                            <div class="layui-table-cell laytable-cell-38-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                                <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr data-index="2">
                                                        <td data-field="0" data-key="38-0-0" class="layui-table-col-special">
                                                            <div class="layui-table-cell laytable-cell-38-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                                <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr data-index="3">
                                                        <td data-field="0" data-key="38-0-0" class="layui-table-col-special">
                                                            <div class="layui-table-cell laytable-cell-38-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                                <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr data-index="4">
                                                        <td data-field="0" data-key="38-0-0" class="layui-table-col-special">
                                                            <div class="layui-table-cell laytable-cell-38-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                                <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr data-index="5">
                                                        <td data-field="0" data-key="38-0-0" class="layui-table-col-special">
                                                            <div class="layui-table-cell laytable-cell-38-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                                <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr data-index="6">
                                                        <td data-field="0" data-key="38-0-0" class="layui-table-col-special">
                                                            <div class="layui-table-cell laytable-cell-38-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                                <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr data-index="7">
                                                        <td data-field="0" data-key="38-0-0" class="layui-table-col-special">
                                                            <div class="layui-table-cell laytable-cell-38-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                                <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr data-index="8">
                                                        <td data-field="0" data-key="38-0-0" class="layui-table-col-special">
                                                            <div class="layui-table-cell laytable-cell-38-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                                <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr data-index="9">
                                                        <td data-field="0" data-key="38-0-0" class="layui-table-col-special">
                                                            <div class="layui-table-cell laytable-cell-38-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                                <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="layui-table-page">
                                    <div id="layui-table-page38">
                                        <div class="layui-box layui-laypage layui-laypage-default" id="layui-laypage-22"><a href="javascript:;" class="layui-laypage-prev layui-disabled" data-page="0"><i class="layui-icon"></i></a><span class="layui-laypage-curr"><em class="layui-laypage-em"></em><em>1</em></span><a href="javascript:;"
                                                data-page="2">2</a><a href="javascript:;" data-page="3">3</a><span class="layui-laypage-spr">…</span><a href="javascript:;" class="layui-laypage-last" title="尾页" data-page="6">6</a><a href="javascript:;" class="layui-laypage-next"
                                                data-page="2"><i class="layui-icon"></i></a><span class="layui-laypage-skip">到第<input type="text" min="1" value="1" class="layui-input">页<button type="button" class="layui-laypage-btn">确定</button></span>
                                            <span
                                                class="layui-laypage-count">共 60 条</span><span class="layui-laypage-limits"><select lay-ignore=""><option value="10" selected="">10 条/页</option><option value="20">20 条/页</option><option value="30">30 条/页</option><option value="40">40 条/页</option><option value="50">50 条/页</option><option value="60">60 条/页</option><option value="70">70 条/页</option><option value="80">80 条/页</option><option value="90">90 条/页</option></select></span></div>
                                    </div>
                                </div>
                                <style>
                                    .laytable-cell-38-0-0 {
                                        width: 48px;
                                    }

                                    .laytable-cell-38-0-1 {}

                                    .laytable-cell-38-0-2 {
                                        width: 170px;
                                    }
                                </style>
                            </div>
                        </div>
                        <div class="layui-tab-item" style="">

                            <div class="LAY-app-message-btns" style="margin-bottom: 10px;">
                                <button class="layui-btn layui-btn-primary layui-btn-sm" data-type="notice" data-events="del">删除</button>
                                <button class="layui-btn layui-btn-primary layui-btn-sm" data-type="notice" data-events="ready">标记已读</button>
                                <button class="layui-btn layui-btn-primary layui-btn-sm" data-type="notice" data-events="readyAll">全部已读</button>
                            </div>

                            <table id="LAY-app-message-notice" lay-filter="LAY-app-message-notice"></table>
                            <div class="layui-form layui-border-box layui-table-view" lay-filter="LAY-table-39" style=" ">
                                <div class="layui-table-box">
                                    <div class="layui-table-header">
                                        <table cellspacing="0" cellpadding="0" border="0" class="layui-table" lay-skin="line">
                                            <thead>
                                                <tr>
                                                    <th data-field="0" data-key="39-0-0" data-unresize="true" class=" layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-39-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary" lay-filter="layTableAllChoose">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </th>
                                                    <th data-field="title" data-key="39-0-1" data-minwidth="300" class="">
                                                        <div class="layui-table-cell laytable-cell-39-0-1"><span>标题内容</span></div>
                                                    </th>
                                                    <th data-field="time" data-key="39-0-2" class="">
                                                        <div class="layui-table-cell laytable-cell-39-0-2"><span>时间</span></div>
                                                    </th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                    <div class="layui-table-body layui-table-main">
                                        <table cellspacing="0" cellpadding="0" border="0" class="layui-table" lay-skin="line">
                                            <tbody>
                                                <tr data-index="0">
                                                    <td data-field="0" data-key="39-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-39-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                    <td data-field="title" data-key="39-0-1" data-content="你好新朋友，感谢使用 layuiAdmin" data-minwidth="300" class="">
                                                        <div class="layui-table-cell laytable-cell-39-0-1"><a lay-href="app/message/detail/id=123">你好新朋友，感谢使用 layuiAdmin</a></div>
                                                    </td>
                                                    <td data-field="time" data-key="39-0-2" data-content="1510363800000" class="">
                                                        <div class="layui-table-cell laytable-cell-39-0-2">2017-11-11 09:30:00</div>
                                                    </td>
                                                </tr>
                                                <tr data-index="1">
                                                    <td data-field="0" data-key="39-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-39-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                    <td data-field="title" data-key="39-0-1" data-content="你好新朋友，感谢使用 layuiAdmin" data-minwidth="300" class="">
                                                        <div class="layui-table-cell laytable-cell-39-0-1"><a lay-href="app/message/detail/id=111">你好新朋友，感谢使用 layuiAdmin</a></div>
                                                    </td>
                                                    <td data-field="time" data-key="39-0-2" data-content="1510212370000" class="">
                                                        <div class="layui-table-cell laytable-cell-39-0-2">2017-11-09 15:26:10</div>
                                                    </td>
                                                </tr>
                                                <tr data-index="2">
                                                    <td data-field="0" data-key="39-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-39-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                    <td data-field="title" data-key="39-0-1" data-content="你好新朋友，感谢使用 layuiAdmin" data-minwidth="300" class="">
                                                        <div class="layui-table-cell laytable-cell-39-0-1"><a lay-href="app/message/detail/id=111">你好新朋友，感谢使用 layuiAdmin</a></div>
                                                    </td>
                                                    <td data-field="time" data-key="39-0-2" data-content="1510212370000" class="">
                                                        <div class="layui-table-cell laytable-cell-39-0-2">2017-11-09 15:26:10</div>
                                                    </td>
                                                </tr>
                                                <tr data-index="3">
                                                    <td data-field="0" data-key="39-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-39-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                    <td data-field="title" data-key="39-0-1" data-content="你好新朋友，感谢使用 layuiAdmin" data-minwidth="300" class="">
                                                        <div class="layui-table-cell laytable-cell-39-0-1"><a lay-href="app/message/detail/id=111">你好新朋友，感谢使用 layuiAdmin</a></div>
                                                    </td>
                                                    <td data-field="time" data-key="39-0-2" data-content="1510212370000" class="">
                                                        <div class="layui-table-cell laytable-cell-39-0-2">2017-11-09 15:26:10</div>
                                                    </td>
                                                </tr>
                                                <tr data-index="4">
                                                    <td data-field="0" data-key="39-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-39-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                    <td data-field="title" data-key="39-0-1" data-content="你好新朋友，感谢使用 layuiAdmin" data-minwidth="300" class="">
                                                        <div class="layui-table-cell laytable-cell-39-0-1"><a lay-href="app/message/detail/id=111">你好新朋友，感谢使用 layuiAdmin</a></div>
                                                    </td>
                                                    <td data-field="time" data-key="39-0-2" data-content="1510212370000" class="">
                                                        <div class="layui-table-cell laytable-cell-39-0-2">2017-11-09 15:26:10</div>
                                                    </td>
                                                </tr>
                                                <tr data-index="5">
                                                    <td data-field="0" data-key="39-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-39-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                    <td data-field="title" data-key="39-0-1" data-content="你好新朋友，感谢使用 layuiAdmin" data-minwidth="300" class="">
                                                        <div class="layui-table-cell laytable-cell-39-0-1"><a lay-href="app/message/detail/id=111">你好新朋友，感谢使用 layuiAdmin</a></div>
                                                    </td>
                                                    <td data-field="time" data-key="39-0-2" data-content="1510212370000" class="">
                                                        <div class="layui-table-cell laytable-cell-39-0-2">2017-11-09 15:26:10</div>
                                                    </td>
                                                </tr>
                                                <tr data-index="6">
                                                    <td data-field="0" data-key="39-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-39-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                    <td data-field="title" data-key="39-0-1" data-content="你好新朋友，感谢使用 layuiAdmin" data-minwidth="300" class="">
                                                        <div class="layui-table-cell laytable-cell-39-0-1"><a lay-href="app/message/detail/id=111">你好新朋友，感谢使用 layuiAdmin</a></div>
                                                    </td>
                                                    <td data-field="time" data-key="39-0-2" data-content="1510212370000" class="">
                                                        <div class="layui-table-cell laytable-cell-39-0-2">2017-11-09 15:26:10</div>
                                                    </td>
                                                </tr>
                                                <tr data-index="7">
                                                    <td data-field="0" data-key="39-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-39-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                    <td data-field="title" data-key="39-0-1" data-content="你好新朋友，感谢使用 layuiAdmin" data-minwidth="300" class="">
                                                        <div class="layui-table-cell laytable-cell-39-0-1"><a lay-href="app/message/detail/id=111">你好新朋友，感谢使用 layuiAdmin</a></div>
                                                    </td>
                                                    <td data-field="time" data-key="39-0-2" data-content="1510212370000" class="">
                                                        <div class="layui-table-cell laytable-cell-39-0-2">2017-11-09 15:26:10</div>
                                                    </td>
                                                </tr>
                                                <tr data-index="8">
                                                    <td data-field="0" data-key="39-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-39-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                    <td data-field="title" data-key="39-0-1" data-content="你好新朋友，感谢使用 layuiAdmin" data-minwidth="300" class="">
                                                        <div class="layui-table-cell laytable-cell-39-0-1"><a lay-href="app/message/detail/id=111">你好新朋友，感谢使用 layuiAdmin</a></div>
                                                    </td>
                                                    <td data-field="time" data-key="39-0-2" data-content="1510212370000" class="">
                                                        <div class="layui-table-cell laytable-cell-39-0-2">2017-11-09 15:26:10</div>
                                                    </td>
                                                </tr>
                                                <tr data-index="9">
                                                    <td data-field="0" data-key="39-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-39-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                    <td data-field="title" data-key="39-0-1" data-content="你好新朋友，感谢使用 layuiAdmin" data-minwidth="300" class="">
                                                        <div class="layui-table-cell laytable-cell-39-0-1"><a lay-href="app/message/detail/id=111">你好新朋友，感谢使用 layuiAdmin</a></div>
                                                    </td>
                                                    <td data-field="time" data-key="39-0-2" data-content="1507447570000" class="">
                                                        <div class="layui-table-cell laytable-cell-39-0-2">2017-10-08 15:26:10</div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="layui-table-fixed layui-table-fixed-l">
                                        <div class="layui-table-header">
                                            <table cellspacing="0" cellpadding="0" border="0" class="layui-table" lay-skin="line">
                                                <thead>
                                                    <tr>
                                                        <th data-field="0" data-key="39-0-0" data-unresize="true" class=" layui-table-col-special">
                                                            <div class="layui-table-cell laytable-cell-39-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary" lay-filter="layTableAllChoose">
                                                                <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                        <div class="layui-table-body" style="height: auto;">
                                            <table cellspacing="0" cellpadding="0" border="0" class="layui-table" lay-skin="line">
                                                <tbody>
                                                    <tr data-index="0">
                                                        <td data-field="0" data-key="39-0-0" class="layui-table-col-special">
                                                            <div class="layui-table-cell laytable-cell-39-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                                <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr data-index="1">
                                                        <td data-field="0" data-key="39-0-0" class="layui-table-col-special">
                                                            <div class="layui-table-cell laytable-cell-39-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                                <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr data-index="2">
                                                        <td data-field="0" data-key="39-0-0" class="layui-table-col-special">
                                                            <div class="layui-table-cell laytable-cell-39-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                                <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr data-index="3">
                                                        <td data-field="0" data-key="39-0-0" class="layui-table-col-special">
                                                            <div class="layui-table-cell laytable-cell-39-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                                <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr data-index="4">
                                                        <td data-field="0" data-key="39-0-0" class="layui-table-col-special">
                                                            <div class="layui-table-cell laytable-cell-39-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                                <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr data-index="5">
                                                        <td data-field="0" data-key="39-0-0" class="layui-table-col-special">
                                                            <div class="layui-table-cell laytable-cell-39-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                                <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr data-index="6">
                                                        <td data-field="0" data-key="39-0-0" class="layui-table-col-special">
                                                            <div class="layui-table-cell laytable-cell-39-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                                <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr data-index="7">
                                                        <td data-field="0" data-key="39-0-0" class="layui-table-col-special">
                                                            <div class="layui-table-cell laytable-cell-39-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                                <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr data-index="8">
                                                        <td data-field="0" data-key="39-0-0" class="layui-table-col-special">
                                                            <div class="layui-table-cell laytable-cell-39-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                                <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr data-index="9">
                                                        <td data-field="0" data-key="39-0-0" class="layui-table-col-special">
                                                            <div class="layui-table-cell laytable-cell-39-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                                <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="layui-table-page">
                                    <div id="layui-table-page39">
                                        <div class="layui-box layui-laypage layui-laypage-default" id="layui-laypage-23"><a href="javascript:;" class="layui-laypage-prev layui-disabled" data-page="0"><i class="layui-icon"></i></a><span class="layui-laypage-curr"><em class="layui-laypage-em"></em><em>1</em></span><a href="javascript:;"
                                                data-page="2">2</a><a href="javascript:;" data-page="3">3</a><span class="layui-laypage-spr">…</span><a href="javascript:;" class="layui-laypage-last" title="尾页" data-page="6">6</a><a href="javascript:;" class="layui-laypage-next"
                                                data-page="2"><i class="layui-icon"></i></a><span class="layui-laypage-skip">到第<input type="text" min="1" value="1" class="layui-input">页<button type="button" class="layui-laypage-btn">确定</button></span>
                                            <span
                                                class="layui-laypage-count">共 60 条</span><span class="layui-laypage-limits"><select lay-ignore=""><option value="10" selected="">10 条/页</option><option value="20">20 条/页</option><option value="30">30 条/页</option><option value="40">40 条/页</option><option value="50">50 条/页</option><option value="60">60 条/页</option><option value="70">70 条/页</option><option value="80">80 条/页</option><option value="90">90 条/页</option></select></span></div>
                                    </div>
                                </div>
                                <style>
                                    .laytable-cell-39-0-0 {
                                        width: 48px;
                                    }

                                    .laytable-cell-39-0-1 {}

                                    .laytable-cell-39-0-2 {
                                        width: 170px;
                                    }
                                </style>
                            </div>
                        </div>
                        <div class="layui-tab-item" style="">

                            <div class="LAY-app-message-btns" style="margin-bottom: 10px;">
                                <button class="layui-btn layui-btn-primary layui-btn-sm" data-type="direct" data-events="del">删除</button>
                                <button class="layui-btn layui-btn-primary layui-btn-sm" data-type="direct" data-events="ready">标记已读</button>
                                <button class="layui-btn layui-btn-primary layui-btn-sm" data-type="direct" data-events="readyAll">全部已读</button>
                            </div>

                            <table id="LAY-app-message-direct" lay-filter="LAY-app-message-direct"></table>
                            <div class="layui-form layui-border-box layui-table-view" lay-filter="LAY-table-40" style=" ">
                                <div class="layui-table-box">
                                    <div class="layui-table-header">
                                        <table cellspacing="0" cellpadding="0" border="0" class="layui-table" lay-skin="line">
                                            <thead>
                                                <tr>
                                                    <th data-field="0" data-key="40-0-0" data-unresize="true" class=" layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-40-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary" lay-filter="layTableAllChoose">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </th>
                                                    <th data-field="title" data-key="40-0-1" data-minwidth="300" class="">
                                                        <div class="layui-table-cell laytable-cell-40-0-1"><span>标题内容</span></div>
                                                    </th>
                                                    <th data-field="time" data-key="40-0-2" class="">
                                                        <div class="layui-table-cell laytable-cell-40-0-2"><span>时间</span></div>
                                                    </th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                    <div class="layui-table-body layui-table-main">
                                        <table cellspacing="0" cellpadding="0" border="0" class="layui-table" lay-skin="line">
                                            <tbody>
                                                <tr data-index="0">
                                                    <td data-field="0" data-key="40-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-40-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                    <td data-field="title" data-key="40-0-1" data-content="贤心发来了一段私信" data-minwidth="300" class="">
                                                        <div class="layui-table-cell laytable-cell-40-0-1"><a lay-href="app/message/detail/id=123">贤心发来了一段私信</a></div>
                                                    </td>
                                                    <td data-field="time" data-key="40-0-2" data-content="1510363800000" class="">
                                                        <div class="layui-table-cell laytable-cell-40-0-2">2017-11-11 09:30:00</div>
                                                    </td>
                                                </tr>
                                                <tr data-index="1">
                                                    <td data-field="0" data-key="40-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-40-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                    <td data-field="title" data-key="40-0-1" data-content="贤心发来了一段私信" data-minwidth="300" class="">
                                                        <div class="layui-table-cell laytable-cell-40-0-1"><a lay-href="app/message/detail/id=111">贤心发来了一段私信</a></div>
                                                    </td>
                                                    <td data-field="time" data-key="40-0-2" data-content="1510212370000" class="">
                                                        <div class="layui-table-cell laytable-cell-40-0-2">2017-11-09 15:26:10</div>
                                                    </td>
                                                </tr>
                                                <tr data-index="2">
                                                    <td data-field="0" data-key="40-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-40-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                    <td data-field="title" data-key="40-0-1" data-content="贤心发来了一段私信" data-minwidth="300" class="">
                                                        <div class="layui-table-cell laytable-cell-40-0-1"><a lay-href="app/message/detail/id=111">贤心发来了一段私信</a></div>
                                                    </td>
                                                    <td data-field="time" data-key="40-0-2" data-content="1510212370000" class="">
                                                        <div class="layui-table-cell laytable-cell-40-0-2">2017-11-09 15:26:10</div>
                                                    </td>
                                                </tr>
                                                <tr data-index="3">
                                                    <td data-field="0" data-key="40-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-40-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                    <td data-field="title" data-key="40-0-1" data-content="贤心发来了一段私信" data-minwidth="300" class="">
                                                        <div class="layui-table-cell laytable-cell-40-0-1"><a lay-href="app/message/detail/id=111">贤心发来了一段私信</a></div>
                                                    </td>
                                                    <td data-field="time" data-key="40-0-2" data-content="1510212370000" class="">
                                                        <div class="layui-table-cell laytable-cell-40-0-2">2017-11-09 15:26:10</div>
                                                    </td>
                                                </tr>
                                                <tr data-index="4">
                                                    <td data-field="0" data-key="40-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-40-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                    <td data-field="title" data-key="40-0-1" data-content="贤心发来了一段私信" data-minwidth="300" class="">
                                                        <div class="layui-table-cell laytable-cell-40-0-1"><a lay-href="app/message/detail/id=111">贤心发来了一段私信</a></div>
                                                    </td>
                                                    <td data-field="time" data-key="40-0-2" data-content="1510212370000" class="">
                                                        <div class="layui-table-cell laytable-cell-40-0-2">2017-11-09 15:26:10</div>
                                                    </td>
                                                </tr>
                                                <tr data-index="5">
                                                    <td data-field="0" data-key="40-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-40-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                    <td data-field="title" data-key="40-0-1" data-content="贤心发来了一段私信" data-minwidth="300" class="">
                                                        <div class="layui-table-cell laytable-cell-40-0-1"><a lay-href="app/message/detail/id=111">贤心发来了一段私信</a></div>
                                                    </td>
                                                    <td data-field="time" data-key="40-0-2" data-content="1510212370000" class="">
                                                        <div class="layui-table-cell laytable-cell-40-0-2">2017-11-09 15:26:10</div>
                                                    </td>
                                                </tr>
                                                <tr data-index="6">
                                                    <td data-field="0" data-key="40-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-40-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                    <td data-field="title" data-key="40-0-1" data-content="贤心发来了一段私信" data-minwidth="300" class="">
                                                        <div class="layui-table-cell laytable-cell-40-0-1"><a lay-href="app/message/detail/id=111">贤心发来了一段私信</a></div>
                                                    </td>
                                                    <td data-field="time" data-key="40-0-2" data-content="1510212370000" class="">
                                                        <div class="layui-table-cell laytable-cell-40-0-2">2017-11-09 15:26:10</div>
                                                    </td>
                                                </tr>
                                                <tr data-index="7">
                                                    <td data-field="0" data-key="40-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-40-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                    <td data-field="title" data-key="40-0-1" data-content="贤心发来了一段私信" data-minwidth="300" class="">
                                                        <div class="layui-table-cell laytable-cell-40-0-1"><a lay-href="app/message/detail/id=111">贤心发来了一段私信</a></div>
                                                    </td>
                                                    <td data-field="time" data-key="40-0-2" data-content="1510212370000" class="">
                                                        <div class="layui-table-cell laytable-cell-40-0-2">2017-11-09 15:26:10</div>
                                                    </td>
                                                </tr>
                                                <tr data-index="8">
                                                    <td data-field="0" data-key="40-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-40-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                    <td data-field="title" data-key="40-0-1" data-content="贤心发来了一段私信" data-minwidth="300" class="">
                                                        <div class="layui-table-cell laytable-cell-40-0-1"><a lay-href="app/message/detail/id=111">贤心发来了一段私信</a></div>
                                                    </td>
                                                    <td data-field="time" data-key="40-0-2" data-content="1510212370000" class="">
                                                        <div class="layui-table-cell laytable-cell-40-0-2">2017-11-09 15:26:10</div>
                                                    </td>
                                                </tr>
                                                <tr data-index="9">
                                                    <td data-field="0" data-key="40-0-0" class="layui-table-col-special">
                                                        <div class="layui-table-cell laytable-cell-40-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                            <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                        </div>
                                                    </td>
                                                    <td data-field="title" data-key="40-0-1" data-content="贤心发来了一段私信" data-minwidth="300" class="">
                                                        <div class="layui-table-cell laytable-cell-40-0-1"><a lay-href="app/message/detail/id=111">贤心发来了一段私信</a></div>
                                                    </td>
                                                    <td data-field="time" data-key="40-0-2" data-content="1507447570000" class="">
                                                        <div class="layui-table-cell laytable-cell-40-0-2">2017-10-08 15:26:10</div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="layui-table-fixed layui-table-fixed-l">
                                        <div class="layui-table-header">
                                            <table cellspacing="0" cellpadding="0" border="0" class="layui-table" lay-skin="line">
                                                <thead>
                                                    <tr>
                                                        <th data-field="0" data-key="40-0-0" data-unresize="true" class=" layui-table-col-special">
                                                            <div class="layui-table-cell laytable-cell-40-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary" lay-filter="layTableAllChoose">
                                                                <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                        <div class="layui-table-body" style="height: auto;">
                                            <table cellspacing="0" cellpadding="0" border="0" class="layui-table" lay-skin="line">
                                                <tbody>
                                                    <tr data-index="0">
                                                        <td data-field="0" data-key="40-0-0" class="layui-table-col-special">
                                                            <div class="layui-table-cell laytable-cell-40-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                                <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr data-index="1">
                                                        <td data-field="0" data-key="40-0-0" class="layui-table-col-special">
                                                            <div class="layui-table-cell laytable-cell-40-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                                <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr data-index="2">
                                                        <td data-field="0" data-key="40-0-0" class="layui-table-col-special">
                                                            <div class="layui-table-cell laytable-cell-40-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                                <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr data-index="3">
                                                        <td data-field="0" data-key="40-0-0" class="layui-table-col-special">
                                                            <div class="layui-table-cell laytable-cell-40-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                                <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr data-index="4">
                                                        <td data-field="0" data-key="40-0-0" class="layui-table-col-special">
                                                            <div class="layui-table-cell laytable-cell-40-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                                <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr data-index="5">
                                                        <td data-field="0" data-key="40-0-0" class="layui-table-col-special">
                                                            <div class="layui-table-cell laytable-cell-40-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                                <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr data-index="6">
                                                        <td data-field="0" data-key="40-0-0" class="layui-table-col-special">
                                                            <div class="layui-table-cell laytable-cell-40-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                                <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr data-index="7">
                                                        <td data-field="0" data-key="40-0-0" class="layui-table-col-special">
                                                            <div class="layui-table-cell laytable-cell-40-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                                <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr data-index="8">
                                                        <td data-field="0" data-key="40-0-0" class="layui-table-col-special">
                                                            <div class="layui-table-cell laytable-cell-40-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                                <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr data-index="9">
                                                        <td data-field="0" data-key="40-0-0" class="layui-table-col-special">
                                                            <div class="layui-table-cell laytable-cell-40-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                                <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="layui-table-page">
                                    <div id="layui-table-page40">
                                        <div class="layui-box layui-laypage layui-laypage-default" id="layui-laypage-24"><a href="javascript:;" class="layui-laypage-prev layui-disabled" data-page="0"><i class="layui-icon"></i></a><span class="layui-laypage-curr"><em class="layui-laypage-em"></em><em>1</em></span><a href="javascript:;"
                                                data-page="2">2</a><a href="javascript:;" data-page="3">3</a><span class="layui-laypage-spr">…</span><a href="javascript:;" class="layui-laypage-last" title="尾页" data-page="6">6</a><a href="javascript:;" class="layui-laypage-next"
                                                data-page="2"><i class="layui-icon"></i></a><span class="layui-laypage-skip">到第<input type="text" min="1" value="1" class="layui-input">页<button type="button" class="layui-laypage-btn">确定</button></span>
                                            <span
                                                class="layui-laypage-count">共 60 条</span><span class="layui-laypage-limits"><select lay-ignore=""><option value="10" selected="">10 条/页</option><option value="20">20 条/页</option><option value="30">30 条/页</option><option value="40">40 条/页</option><option value="50">50 条/页</option><option value="60">60 条/页</option><option value="70">70 条/页</option><option value="80">80 条/页</option><option value="90">90 条/页</option></select></span></div>
                                    </div>
                                </div>
                                <style>
                                    .laytable-cell-40-0-0 {
                                        width: 48px;
                                    }

                                    .laytable-cell-40-0-1 {}

                                    .laytable-cell-40-0-2 {
                                        width: 170px;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            layui.use(['admin', 'table', 'util'], function() {
                var $ = layui.$,
                    admin = layui.admin,
                    table = layui.table,
                    element = layui.element;


                var DISABLED = 'layui-btn-disabled'

                    //区分各选项卡中的表格
                    ,
                    tabs = {
                        all: {
                            text: '全部消息',
                            id: 'LAY-app-message-all'
                        },
                        notice: {
                            text: '通知',
                            id: 'LAY-app-message-notice'
                        },
                        direct: {
                            text: '私信',
                            id: 'LAY-app-message-direct'
                        }
                    };

                //标题内容模板
                var tplTitle = function(d) {
                    return '<a lay-href="app/message/detail/id=' + d.id + '">' + d.title;
                };

                //全部消息
                table.render({
                    elem: '#LAY-app-message-all',
                    url: './json/message/all.js' //模拟接口
                        ,
                    page: true,
                    cols: [
                        [{
                            type: 'checkbox',
                            fixed: 'left'
                        }, {
                            field: 'title',
                            title: '标题内容',
                            minWidth: 300,
                            templet: tplTitle
                        }, {
                            field: 'time',
                            title: '时间',
                            width: 170,
                            templet: '<div>@{{ layui.util.timeAgo(d.time) }}</div>'
                        }]
                    ],
                    skin: 'line'
                });

                //通知
                table.render({
                    elem: '#LAY-app-message-notice',
                    url: './json/message/notice.js' //模拟接口
                        ,
                    page: true,
                    cols: [
                        [{
                            type: 'checkbox',
                            fixed: 'left'
                        }, {
                            field: 'title',
                            title: '标题内容',
                            minWidth: 300,
                            templet: tplTitle
                        }, {
                            field: 'time',
                            title: '时间',
                            width: 170,
                            templet: '<div>@{{ layui.util.timeAgo(d.time) }}</div>'
                        }]
                    ],
                    skin: 'line'
                });

                //私信
                table.render({
                    elem: '#LAY-app-message-direct',
                    url: './json/message/direct.js' //模拟接口
                        ,
                    page: true,
                    cols: [
                        [{
                            type: 'checkbox',
                            fixed: 'left'
                        }, {
                            field: 'title',
                            title: '标题内容',
                            minWidth: 300,
                            templet: tplTitle
                        }, {
                            field: 'time',
                            title: '时间',
                            width: 170,
                            templet: '<div>@{{ layui.util.timeAgo(d.time) }}</div>'
                        }]
                    ],
                    skin: 'line'
                });

                //事件处理
                var events = {
                    del: function(othis, type) {
                        var thisTabs = tabs[type],
                            checkStatus = table.checkStatus(thisTabs.id),
                            data = checkStatus.data; //获得选中的数据
                        if (data.length === 0) return layer.msg('未选中行');

                        layer.confirm('确定删除选中的数据吗？', function() {
                            /*
                            admin.req('url', {}, function(){ //请求接口
                              //do somethin
                            });
                            */
                            //此处只是演示，实际应用需把下述代码放入上述Ajax回调中
                            layer.msg('删除成功', {
                                icon: 1
                            });
                            table.reload(thisTabs.id); //刷新表格
                        });
                    },
                    ready: function(othis, type) {
                        var thisTabs = tabs[type],
                            checkStatus = table.checkStatus(thisTabs.id),
                            data = checkStatus.data; //获得选中的数据
                        if (data.length === 0) return layer.msg('未选中行');

                        //此处只是演示
                        layer.msg('标记已读成功', {
                            icon: 1
                        });
                        table.reload(thisTabs.id); //刷新表格
                    },
                    readyAll: function(othis, type) {
                        var thisTabs = tabs[type];

                        //do somethin

                        layer.msg(thisTabs.text + '：全部已读', {
                            icon: 1
                        });
                    }
                };

                $('.LAY-app-message-btns .layui-btn').on('click', function() {
                    var othis = $(this),
                        thisEvent = othis.data('events'),
                        type = othis.data('type');
                    events[thisEvent] && events[thisEvent].call(this, othis, type);
                });
            });
        </script>
    </div>
</div>
@stop
