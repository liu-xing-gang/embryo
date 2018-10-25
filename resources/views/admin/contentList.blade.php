@extends('admin.common.layout') @section('content')
<div class="layui-body" id="LAY_app_body">
    <div class="layadmin-tabsbody-item layui-show">
        <div class="layui-card layadmin-header">
            <div class="layui-breadcrumb" lay-filter="breadcrumb" style="visibility: visible;">
                <a lay-href="">主页</a><span lay-separator="">/</span>
                <a><cite>应用</cite></a><span lay-separator="">/</span>
                <a><cite>文章列表</cite></a>
            </div>
        </div>
        <div class="layui-fluid">
            <div class="layui-card">
                <div class="layui-form layui-card-header layuiadmin-card-header-auto" lay-filter="app-content-list">
                    <div class="layui-form-item">
                        <div class="layui-inline">
                            <label class="layui-form-label">文章ID</label>
                            <div class="layui-input-inline">
                                <input type="text" name="id" placeholder="请输入" autocomplete="off" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-inline">
                            <label class="layui-form-label">作者</label>
                            <div class="layui-input-inline">
                                <input type="text" name="author" placeholder="请输入" autocomplete="off" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-inline">
                            <label class="layui-form-label">标题</label>
                            <div class="layui-input-inline">
                                <input type="text" name="title" placeholder="请输入" autocomplete="off" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-inline">
                            <label class="layui-form-label">文章标签</label>
                            <div class="layui-input-inline">
                                <select name="label">
                <option value="">请选择标签</option>
                <option value="0">美食</option>
                <option value="1">新闻</option>
                <option value="2">八卦</option>
                <option value="3">体育</option>
                <option value="4">音乐</option>
              </select>
                                <div class="layui-unselect layui-form-select">
                                    <div class="layui-select-title"><input type="text" placeholder="请选择标签" value="" readonly="" class="layui-input layui-unselect"><i class="layui-edge"></i></div>
                                    <dl class="layui-anim layui-anim-upbit">
                                        <dd lay-value="" class="layui-select-tips">请选择标签</dd>
                                        <dd lay-value="0" class="">美食</dd>
                                        <dd lay-value="1" class="">新闻</dd>
                                        <dd lay-value="2" class="">八卦</dd>
                                        <dd lay-value="3" class="">体育</dd>
                                        <dd lay-value="4" class="">音乐</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="layui-inline">
                            <button class="layui-btn layuiadmin-btn-list" lay-submit="" lay-filter="LAY-app-contlist-search">
              <i class="layui-icon layui-icon-search layuiadmin-button-btn"></i>
            </button>
                        </div>
                    </div>
                </div>

                <div class="layui-card-body">
                    <div style="padding-bottom: 10px;">
                        <button class="layui-btn layuiadmin-btn-list" data-type="batchdel">删除</button>
                        <button class="layui-btn layuiadmin-btn-list" data-type="add">添加</button>
                    </div>
                    <table id="LAY-app-content-list" lay-filter="LAY-app-content-list"></table>
                    <div class="layui-form layui-border-box layui-table-view" lay-filter="LAY-table-27" style=" ">
                        <div class="layui-table-box">
                            <div class="layui-table-header">
                                <table cellspacing="0" cellpadding="0" border="0" class="layui-table">
                                    <thead>
                                        <tr>
                                            <th data-field="0" data-key="27-0-0" data-unresize="true" class=" layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-27-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary" lay-filter="layTableAllChoose">
                                                    <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                </div>
                                            </th>
                                            <th data-field="id" data-key="27-0-1" class=" layui-unselect">
                                                <div class="layui-table-cell laytable-cell-27-0-1"><span>文章ID</span><span class="layui-table-sort layui-inline"><i class="layui-edge layui-table-sort-asc" title="升序"></i><i class="layui-edge layui-table-sort-desc" title="降序"></i></span></div>
                                            </th>
                                            <th data-field="label" data-key="27-0-2" data-minwidth="100" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-2"><span>文章标签</span></div>
                                            </th>
                                            <th data-field="title" data-key="27-0-3" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-3"><span>文章标题</span></div>
                                            </th>
                                            <th data-field="author" data-key="27-0-4" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-4"><span>作者</span></div>
                                            </th>
                                            <th data-field="uploadtime" data-key="27-0-5" class=" layui-unselect">
                                                <div class="layui-table-cell laytable-cell-27-0-5"><span>上传时间</span><span class="layui-table-sort layui-inline"><i class="layui-edge layui-table-sort-asc" title="升序"></i><i class="layui-edge layui-table-sort-desc" title="降序"></i></span></div>
                                            </th>
                                            <th data-field="status" data-key="27-0-6" data-minwidth="80" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-6" align="center"><span>发布状态</span></div>
                                            </th>
                                            <th data-field="7" data-key="27-0-7" data-minwidth="150" class=" layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-27-0-7" align="center"><span>操作</span></div>
                                            </th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="layui-table-body layui-table-main">
                                <table cellspacing="0" cellpadding="0" border="0" class="layui-table">
                                    <tbody>
                                        <tr data-index="0" class="">
                                            <td data-field="0" data-key="27-0-0" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-27-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                    <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                </div>
                                            </td>
                                            <td data-field="id" data-key="27-0-1" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-1">001</div>
                                            </td>
                                            <td data-field="label" data-key="27-0-2" data-minwidth="100" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-2">美食</div>
                                            </td>
                                            <td data-field="title" data-key="27-0-3" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-3">舌尖上的中国第一季</div>
                                            </td>
                                            <td data-field="author" data-key="27-0-4" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-4">作者-1</div>
                                            </td>
                                            <td data-field="uploadtime" data-key="27-0-5" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-5">20121204</div>
                                            </td>
                                            <td data-field="status" data-key="27-0-6" align="center" data-content="true" data-minwidth="80" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-6"> <button class="layui-btn layui-btn-xs">已发布</button> </div>
                                            </td>
                                            <td data-field="7" data-key="27-0-7" align="center" data-off="true" data-minwidth="150" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-27-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                    </div>
                                            </td>
                                        </tr>
                                        <tr data-index="1" class="">
                                            <td data-field="0" data-key="27-0-0" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-27-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                    <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                </div>
                                            </td>
                                            <td data-field="id" data-key="27-0-1" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-1">002</div>
                                            </td>
                                            <td data-field="label" data-key="27-0-2" data-minwidth="100" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-2">美食</div>
                                            </td>
                                            <td data-field="title" data-key="27-0-3" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-3">舌尖上的中国第二季</div>
                                            </td>
                                            <td data-field="author" data-key="27-0-4" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-4">作者-2</div>
                                            </td>
                                            <td data-field="uploadtime" data-key="27-0-5" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-5">20141204</div>
                                            </td>
                                            <td data-field="status" data-key="27-0-6" align="center" data-content="false" data-minwidth="80" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-6"> <button class="layui-btn layui-btn-primary layui-btn-xs">待修改</button> </div>
                                            </td>
                                            <td data-field="7" data-key="27-0-7" align="center" data-off="true" data-minwidth="150" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-27-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                    </div>
                                            </td>
                                        </tr>
                                        <tr data-index="2" class="">
                                            <td data-field="0" data-key="27-0-0" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-27-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                    <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                </div>
                                            </td>
                                            <td data-field="id" data-key="27-0-1" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-1">003</div>
                                            </td>
                                            <td data-field="label" data-key="27-0-2" data-minwidth="100" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-2">美食</div>
                                            </td>
                                            <td data-field="title" data-key="27-0-3" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-3">舌尖上的中国第三季</div>
                                            </td>
                                            <td data-field="author" data-key="27-0-4" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-4">作者-3</div>
                                            </td>
                                            <td data-field="uploadtime" data-key="27-0-5" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-5">20161204</div>
                                            </td>
                                            <td data-field="status" data-key="27-0-6" align="center" data-content="false" data-minwidth="80" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-6"> <button class="layui-btn layui-btn-primary layui-btn-xs">待修改</button> </div>
                                            </td>
                                            <td data-field="7" data-key="27-0-7" align="center" data-off="true" data-minwidth="150" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-27-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                    </div>
                                            </td>
                                        </tr>
                                        <tr data-index="3" class="">
                                            <td data-field="0" data-key="27-0-0" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-27-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                    <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                </div>
                                            </td>
                                            <td data-field="id" data-key="27-0-1" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-1">004</div>
                                            </td>
                                            <td data-field="label" data-key="27-0-2" data-minwidth="100" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-2">历史</div>
                                            </td>
                                            <td data-field="title" data-key="27-0-3" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-3">诸葛亮骂王朗</div>
                                            </td>
                                            <td data-field="author" data-key="27-0-4" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-4">作者-1</div>
                                            </td>
                                            <td data-field="uploadtime" data-key="27-0-5" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-5">20180201</div>
                                            </td>
                                            <td data-field="status" data-key="27-0-6" align="center" data-content="false" data-minwidth="80" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-6"> <button class="layui-btn layui-btn-primary layui-btn-xs">待修改</button> </div>
                                            </td>
                                            <td data-field="7" data-key="27-0-7" align="center" data-off="true" data-minwidth="150" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-27-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                    </div>
                                            </td>
                                        </tr>
                                        <tr data-index="4" class="">
                                            <td data-field="0" data-key="27-0-0" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-27-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                    <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                </div>
                                            </td>
                                            <td data-field="id" data-key="27-0-1" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-1">005</div>
                                            </td>
                                            <td data-field="label" data-key="27-0-2" data-minwidth="100" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-2">新闻</div>
                                            </td>
                                            <td data-field="title" data-key="27-0-3" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-3">新时代特色中国梦</div>
                                            </td>
                                            <td data-field="author" data-key="27-0-4" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-4">作者-1</div>
                                            </td>
                                            <td data-field="uploadtime" data-key="27-0-5" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-5">20180512</div>
                                            </td>
                                            <td data-field="status" data-key="27-0-6" align="center" data-content="false" data-minwidth="80" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-6"> <button class="layui-btn layui-btn-primary layui-btn-xs">待修改</button> </div>
                                            </td>
                                            <td data-field="7" data-key="27-0-7" align="center" data-off="true" data-minwidth="150" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-27-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                    </div>
                                            </td>
                                        </tr>
                                        <tr data-index="5" class="">
                                            <td data-field="0" data-key="27-0-0" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-27-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                    <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                </div>
                                            </td>
                                            <td data-field="id" data-key="27-0-1" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-1">006</div>
                                            </td>
                                            <td data-field="label" data-key="27-0-2" data-minwidth="100" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-2">新闻</div>
                                            </td>
                                            <td data-field="title" data-key="27-0-3" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-3">新时代特色中国梦</div>
                                            </td>
                                            <td data-field="author" data-key="27-0-4" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-4">作者-2</div>
                                            </td>
                                            <td data-field="uploadtime" data-key="27-0-5" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-5">20180514</div>
                                            </td>
                                            <td data-field="status" data-key="27-0-6" align="center" data-content="false" data-minwidth="80" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-6"> <button class="layui-btn layui-btn-primary layui-btn-xs">待修改</button> </div>
                                            </td>
                                            <td data-field="7" data-key="27-0-7" align="center" data-off="true" data-minwidth="150" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-27-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                    </div>
                                            </td>
                                        </tr>
                                        <tr data-index="6" class="">
                                            <td data-field="0" data-key="27-0-0" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-27-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                    <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                </div>
                                            </td>
                                            <td data-field="id" data-key="27-0-1" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-1">007</div>
                                            </td>
                                            <td data-field="label" data-key="27-0-2" data-minwidth="100" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-2">体育</div>
                                            </td>
                                            <td data-field="title" data-key="27-0-3" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-3">皇马大战利物浦</div>
                                            </td>
                                            <td data-field="author" data-key="27-0-4" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-4">作者-3</div>
                                            </td>
                                            <td data-field="uploadtime" data-key="27-0-5" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-5">20180515</div>
                                            </td>
                                            <td data-field="status" data-key="27-0-6" align="center" data-content="false" data-minwidth="80" class="">
                                                <div class="layui-table-cell laytable-cell-27-0-6"> <button class="layui-btn layui-btn-primary layui-btn-xs">待修改</button> </div>
                                            </td>
                                            <td data-field="7" data-key="27-0-7" align="center" data-off="true" data-minwidth="150" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-27-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                    </div>
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
                                                <th data-field="0" data-key="27-0-0" data-unresize="true" class=" layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-27-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary" lay-filter="layTableAllChoose">
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
                                                <td data-field="0" data-key="27-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-27-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr data-index="1" class="">
                                                <td data-field="0" data-key="27-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-27-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr data-index="2" class="">
                                                <td data-field="0" data-key="27-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-27-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr data-index="3" class="">
                                                <td data-field="0" data-key="27-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-27-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr data-index="4" class="">
                                                <td data-field="0" data-key="27-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-27-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr data-index="5" class="">
                                                <td data-field="0" data-key="27-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-27-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr data-index="6" class="">
                                                <td data-field="0" data-key="27-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-27-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
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
                                                <th data-field="7" data-key="27-0-7" data-minwidth="150" class=" layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-27-0-7" align="center"><span>操作</span></div>
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
                                                <td data-field="7" data-key="27-0-7" align="center" data-off="true" data-minwidth="150" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-27-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="1" class="">
                                                <td data-field="7" data-key="27-0-7" align="center" data-off="true" data-minwidth="150" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-27-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="2" class="">
                                                <td data-field="7" data-key="27-0-7" align="center" data-off="true" data-minwidth="150" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-27-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="3" class="">
                                                <td data-field="7" data-key="27-0-7" align="center" data-off="true" data-minwidth="150" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-27-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="4" class="">
                                                <td data-field="7" data-key="27-0-7" align="center" data-off="true" data-minwidth="150" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-27-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="5" class="">
                                                <td data-field="7" data-key="27-0-7" align="center" data-off="true" data-minwidth="150" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-27-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="6" class="">
                                                <td data-field="7" data-key="27-0-7" align="center" data-off="true" data-minwidth="150" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-27-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="layui-table-page">
                            <div id="layui-table-page27">
                                <div class="layui-box layui-laypage layui-laypage-default" id="layui-laypage-8"><a href="javascript:;" class="layui-laypage-prev layui-disabled" data-page="0"><i class="layui-icon"></i></a><span class="layui-laypage-curr"><em class="layui-laypage-em"></em><em>1</em></span><a href="javascript:;" data-page="2">2</a>
                                    <a
                                        href="javascript:;" data-page="3">3</a><span class="layui-laypage-spr">…</span><a href="javascript:;" class="layui-laypage-last" title="尾页" data-page="10">10</a><a href="javascript:;" class="layui-laypage-next" data-page="2"><i class="layui-icon"></i></a>
                                        <span
                                            class="layui-laypage-skip">到第<input type="text" min="1" value="1" class="layui-input">页<button type="button" class="layui-laypage-btn">确定</button></span><span class="layui-laypage-count">共 100 条</span><span class="layui-laypage-limits"><select lay-ignore=""><option value="10" selected="">10 条/页</option><option value="15">15 条/页</option><option value="20">20 条/页</option><option value="25">25 条/页</option><option value="30">30 条/页</option></select></span></div>
                            </div>
                        </div>
                        <style>
                            .laytable-cell-27-0-0 {
                                width: 48px;
                            }

                            .laytable-cell-27-0-1 {
                                width: 100px;
                            }

                            .laytable-cell-27-0-2 {}

                            .laytable-cell-27-0-3 {}

                            .laytable-cell-27-0-4 {}

                            .laytable-cell-27-0-5 {}

                            .laytable-cell-27-0-6 {}

                            .laytable-cell-27-0-7 {}
                        </style>
                    </div>
                    <script type="text/html" id="buttonTpl">
                        @{{# if(d.status){ }}
                        <button class="layui-btn layui-btn-xs">已发布</button> @{{# } else { }}
                        <button class="layui-btn layui-btn-primary layui-btn-xs">待修改</button> @{{# } }}
                    </script>
                    <script type="text/html" id="table-content-list">
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

                form.render(null, 'app-content-list');

                //监听搜索
                form.on('submit(LAY-app-contlist-search)', function(data) {
                    var field = data.field;

                    //执行重载
                    table.reload('LAY-app-content-list', {
                        where: field
                    });
                });

                var active = {
                    batchdel: function() {
                            var checkStatus = table.checkStatus('LAY-app-content-list'),
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
                                table.reload('LAY-app-content-list');
                                layer.msg('已删除');
                            });
                        }

                        //添加
                        ,
                    add: function(othis) {
                        admin.popup({
                            title: '添加文章',
                            area: ['550px', '550px'],
                            id: 'LAY-popup-content-add',
                            success: function(layero, index) {
                                view(this.id).render('app/content/listform').done(function() {
                                    form.render(null, 'layuiadmin-app-form-list');

                                    //监听提交
                                    form.on('submit(layuiadmin-app-form-submit)', function(data) {
                                        var field = data.field; //获取提交的字段

                                        //提交 Ajax 成功后，关闭当前弹层并重载表格
                                        //$.ajax({});
                                        layui.table.reload('LAY-app-content-list'); //重载表格
                                        layer.close(index); //执行关闭
                                    });
                                });
                            }
                        });
                    }
                };

                $('.layui-btn.layuiadmin-btn-list').on('click', function() {
                    var type = $(this).data('type');
                    active[type] ? active[type].call(this) : '';
                });

            });
        </script>
    </div>
</div>
@stop
