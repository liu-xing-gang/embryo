@extends('admin.common.layout') @section('content')
<div class="layui-body" id="LAY_app_body">
    <div class="layadmin-tabsbody-item layui-show">
        <div class="layui-card layadmin-header">
            <div class="layui-breadcrumb" lay-filter="breadcrumb" style="visibility: visible;">
                <a lay-href="">主页</a><span lay-separator="">/</span>
                <a><cite>应用</cite></a><span lay-separator="">/</span>
                <a><cite>帖子列表</cite></a>
            </div>
        </div>
        <div class="layui-fluid">
            <div class="layui-card">
                <div class="layui-form layui-card-header layuiadmin-card-header-auto" lay-filter="app-forum-list">
                    <div class="layui-form-item">
                        <div class="layui-inline">
                            <label class="layui-form-label">ID</label>
                            <div class="layui-input-block">
                                <input type="text" name="id" placeholder="请输入" autocomplete="off" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-inline">
                            <label class="layui-form-label">发帖人</label>
                            <div class="layui-input-block">
                                <input type="text" name="poster" placeholder="请输入" autocomplete="off" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-inline">
                            <label class="layui-form-label">发帖内容</label>
                            <div class="layui-input-block">
                                <input type="text" name="content" placeholder="请输入" autocomplete="off" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-inline">
                            <label class="layui-form-label">帖子状态</label>
                            <div class="layui-input-block">
                                <select name="top">
              <option value="0">正常</option>
              <option value="1">置顶</option>
              <option value="2">封禁</option>
            </select>
                                <div class="layui-unselect layui-form-select">
                                    <div class="layui-select-title"><input type="text" placeholder="请选择" value="正常" readonly="" class="layui-input layui-unselect"><i class="layui-edge"></i></div>
                                    <dl class="layui-anim layui-anim-upbit">
                                        <dd lay-value="0" class="layui-this">正常</dd>
                                        <dd lay-value="1" class="">置顶</dd>
                                        <dd lay-value="2" class="">封禁</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="layui-inline">
                            <button class="layui-btn layuiadmin-btn-forum-list" lay-submit="" lay-filter="LAY-app-forumlist-search">
            <i class="layui-icon layui-icon-search layuiadmin-button-btn"></i>
          </button>
                        </div>
                    </div>
                </div>

                <div class="layui-card-body">
                    <div style="padding-bottom: 10px;">
                        <button class="layui-btn layuiadmin-btn-forum-list" data-type="batchdel">删除</button>
                    </div>
                    <table id="LAY-app-forum-list" lay-filter="LAY-app-forum-list"></table>
                    <div class="layui-form layui-border-box layui-table-view" lay-filter="LAY-table-30" style=" ">
                        <div class="layui-table-box">
                            <div class="layui-table-header">
                                <table cellspacing="0" cellpadding="0" border="0" class="layui-table">
                                    <thead>
                                        <tr>
                                            <th data-field="0" data-key="30-0-0" data-unresize="true" class=" layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-30-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary" lay-filter="layTableAllChoose">
                                                    <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                </div>
                                            </th>
                                            <th data-field="id" data-key="30-0-1" class=" layui-unselect">
                                                <div class="layui-table-cell laytable-cell-30-0-1"><span>ID</span><span class="layui-table-sort layui-inline"><i class="layui-edge layui-table-sort-asc" title="升序"></i><i class="layui-edge layui-table-sort-desc" title="降序"></i></span></div>
                                            </th>
                                            <th data-field="poster" data-key="30-0-2" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-2"><span>发帖人</span></div>
                                            </th>
                                            <th data-field="avatar" data-key="30-0-3" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-3"><span>头像</span></div>
                                            </th>
                                            <th data-field="content" data-key="30-0-4" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-4"><span>发帖内容</span></div>
                                            </th>
                                            <th data-field="posttime" data-key="30-0-5" class=" layui-unselect">
                                                <div class="layui-table-cell laytable-cell-30-0-5"><span>发帖时间</span><span class="layui-table-sort layui-inline"><i class="layui-edge layui-table-sort-asc" title="升序"></i><i class="layui-edge layui-table-sort-desc" title="降序"></i></span></div>
                                            </th>
                                            <th data-field="top" data-key="30-0-6" data-minwidth="80" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-6" align="center"><span>置顶</span></div>
                                            </th>
                                            <th data-field="7" data-key="30-0-7" class=" layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-30-0-7" align="center"><span>操作</span></div>
                                            </th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="layui-table-body layui-table-main">
                                <table cellspacing="0" cellpadding="0" border="0" class="layui-table">
                                    <tbody>
                                        <tr data-index="0">
                                            <td data-field="0" data-key="30-0-0" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-30-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                    <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                </div>
                                            </td>
                                            <td data-field="id" data-key="30-0-1" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-1">1001</div>
                                            </td>
                                            <td data-field="poster" data-key="30-0-2" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-2">赵</div>
                                            </td>
                                            <td data-field="avatar" data-key="30-0-3" data-content="https://wx4.sinaimg.cn/mw1024/5db11ff4gy1fmx4keaw9pj20dw08caa4.jpg" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-3"> <img style="display: inline-block; width: 50%; height: 100%;" src="https://wx4.sinaimg.cn/mw1024/5db11ff4gy1fmx4keaw9pj20dw08caa4.jpg"> </div>
                                            </td>
                                            <td data-field="content" data-key="30-0-4" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-4">为什么花儿这么么红</div>
                                            </td>
                                            <td data-field="posttime" data-key="30-0-5" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-5">20160805</div>
                                            </td>
                                            <td data-field="top" data-key="30-0-6" align="center" data-content="false" data-minwidth="80" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-6"> <button class="layui-btn layui-btn-primary layui-btn-xs">正常显示</button> </div>
                                            </td>
                                            <td data-field="7" data-key="30-0-7" align="center" data-off="true" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-30-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                    </div>
                                            </td>
                                        </tr>
                                        <tr data-index="1" class="">
                                            <td data-field="0" data-key="30-0-0" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-30-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                    <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                </div>
                                            </td>
                                            <td data-field="id" data-key="30-0-1" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-1">1002</div>
                                            </td>
                                            <td data-field="poster" data-key="30-0-2" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-2">钱</div>
                                            </td>
                                            <td data-field="avatar" data-key="30-0-3" data-content="https://wx4.sinaimg.cn/mw1024/5db11ff4gy1fmx4keaw9pj20dw08caa4.jpg" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-3"> <img style="display: inline-block; width: 50%; height: 100%;" src="https://wx4.sinaimg.cn/mw1024/5db11ff4gy1fmx4keaw9pj20dw08caa4.jpg"> </div>
                                            </td>
                                            <td data-field="content" data-key="30-0-4" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-4">喜欢胡歌，赞赞赞</div>
                                            </td>
                                            <td data-field="posttime" data-key="30-0-5" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-5">20161205</div>
                                            </td>
                                            <td data-field="top" data-key="30-0-6" align="center" data-content="true" data-minwidth="80" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-6"> <button class="layui-btn layui-btn-xs">已置顶</button> </div>
                                            </td>
                                            <td data-field="7" data-key="30-0-7" align="center" data-off="true" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-30-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                    </div>
                                            </td>
                                        </tr>
                                        <tr data-index="2" class="">
                                            <td data-field="0" data-key="30-0-0" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-30-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                    <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                </div>
                                            </td>
                                            <td data-field="id" data-key="30-0-1" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-1">1003</div>
                                            </td>
                                            <td data-field="poster" data-key="30-0-2" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-2">孙</div>
                                            </td>
                                            <td data-field="avatar" data-key="30-0-3" data-content="https://wx4.sinaimg.cn/mw1024/5db11ff4gy1fmx4keaw9pj20dw08caa4.jpg" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-3"> <img style="display: inline-block; width: 50%; height: 100%;" src="https://wx4.sinaimg.cn/mw1024/5db11ff4gy1fmx4keaw9pj20dw08caa4.jpg"> </div>
                                            </td>
                                            <td data-field="content" data-key="30-0-4" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-4">明天就要考试了，好紧张，求保佑</div>
                                            </td>
                                            <td data-field="posttime" data-key="30-0-5" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-5">20170405</div>
                                            </td>
                                            <td data-field="top" data-key="30-0-6" align="center" data-content="false" data-minwidth="80" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-6"> <button class="layui-btn layui-btn-primary layui-btn-xs">正常显示</button> </div>
                                            </td>
                                            <td data-field="7" data-key="30-0-7" align="center" data-off="true" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-30-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                    </div>
                                            </td>
                                        </tr>
                                        <tr data-index="3" class="">
                                            <td data-field="0" data-key="30-0-0" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-30-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                    <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                </div>
                                            </td>
                                            <td data-field="id" data-key="30-0-1" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-1">1004</div>
                                            </td>
                                            <td data-field="poster" data-key="30-0-2" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-2">李</div>
                                            </td>
                                            <td data-field="avatar" data-key="30-0-3" data-content="https://wx4.sinaimg.cn/mw1024/5db11ff4gy1fmx4keaw9pj20dw08caa4.jpg" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-3"> <img style="display: inline-block; width: 50%; height: 100%;" src="https://wx4.sinaimg.cn/mw1024/5db11ff4gy1fmx4keaw9pj20dw08caa4.jpg"> </div>
                                            </td>
                                            <td data-field="content" data-key="30-0-4" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-4">希望明天是个好天气</div>
                                            </td>
                                            <td data-field="posttime" data-key="30-0-5" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-5">20171005</div>
                                            </td>
                                            <td data-field="top" data-key="30-0-6" align="center" data-content="false" data-minwidth="80" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-6"> <button class="layui-btn layui-btn-primary layui-btn-xs">正常显示</button> </div>
                                            </td>
                                            <td data-field="7" data-key="30-0-7" align="center" data-off="true" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-30-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                    </div>
                                            </td>
                                        </tr>
                                        <tr data-index="4">
                                            <td data-field="0" data-key="30-0-0" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-30-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                    <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                </div>
                                            </td>
                                            <td data-field="id" data-key="30-0-1" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-1">1005</div>
                                            </td>
                                            <td data-field="poster" data-key="30-0-2" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-2">周</div>
                                            </td>
                                            <td data-field="avatar" data-key="30-0-3" data-content="https://wx4.sinaimg.cn/mw1024/5db11ff4gy1fmx4keaw9pj20dw08caa4.jpg" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-3"> <img style="display: inline-block; width: 50%; height: 100%;" src="https://wx4.sinaimg.cn/mw1024/5db11ff4gy1fmx4keaw9pj20dw08caa4.jpg"> </div>
                                            </td>
                                            <td data-field="content" data-key="30-0-4" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-4">女追男隔层纱，是不是真的</div>
                                            </td>
                                            <td data-field="posttime" data-key="30-0-5" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-5">20180205</div>
                                            </td>
                                            <td data-field="top" data-key="30-0-6" align="center" data-content="false" data-minwidth="80" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-6"> <button class="layui-btn layui-btn-primary layui-btn-xs">正常显示</button> </div>
                                            </td>
                                            <td data-field="7" data-key="30-0-7" align="center" data-off="true" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-30-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                    </div>
                                            </td>
                                        </tr>
                                        <tr data-index="5" class="">
                                            <td data-field="0" data-key="30-0-0" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-30-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                    <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                </div>
                                            </td>
                                            <td data-field="id" data-key="30-0-1" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-1">1006</div>
                                            </td>
                                            <td data-field="poster" data-key="30-0-2" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-2">吴</div>
                                            </td>
                                            <td data-field="avatar" data-key="30-0-3" data-content="https://wx4.sinaimg.cn/mw1024/5db11ff4gy1fmx4keaw9pj20dw08caa4.jpg" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-3"> <img style="display: inline-block; width: 50%; height: 100%;" src="https://wx4.sinaimg.cn/mw1024/5db11ff4gy1fmx4keaw9pj20dw08caa4.jpg"> </div>
                                            </td>
                                            <td data-field="content" data-key="30-0-4" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-4">竟然有人跳楼，年轻人想不开啊！</div>
                                            </td>
                                            <td data-field="posttime" data-key="30-0-5" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-5">20180512</div>
                                            </td>
                                            <td data-field="top" data-key="30-0-6" align="center" data-content="false" data-minwidth="80" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-6"> <button class="layui-btn layui-btn-primary layui-btn-xs">正常显示</button> </div>
                                            </td>
                                            <td data-field="7" data-key="30-0-7" align="center" data-off="true" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-30-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                    </div>
                                            </td>
                                        </tr>
                                        <tr data-index="6" class="">
                                            <td data-field="0" data-key="30-0-0" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-30-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                    <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                </div>
                                            </td>
                                            <td data-field="id" data-key="30-0-1" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-1">1007</div>
                                            </td>
                                            <td data-field="poster" data-key="30-0-2" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-2">郑</div>
                                            </td>
                                            <td data-field="avatar" data-key="30-0-3" data-content="https://wx4.sinaimg.cn/mw1024/5db11ff4gy1fmx4keaw9pj20dw08caa4.jpg" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-3"> <img style="display: inline-block; width: 50%; height: 100%;" src="https://wx4.sinaimg.cn/mw1024/5db11ff4gy1fmx4keaw9pj20dw08caa4.jpg"> </div>
                                            </td>
                                            <td data-field="content" data-key="30-0-4" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-4">大家一定不能学那个年轻人，珍爱生命啊</div>
                                            </td>
                                            <td data-field="posttime" data-key="30-0-5" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-5">20180512</div>
                                            </td>
                                            <td data-field="top" data-key="30-0-6" align="center" data-content="false" data-minwidth="80" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-6"> <button class="layui-btn layui-btn-primary layui-btn-xs">正常显示</button> </div>
                                            </td>
                                            <td data-field="7" data-key="30-0-7" align="center" data-off="true" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-30-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                    </div>
                                            </td>
                                        </tr>
                                        <tr data-index="7" class="">
                                            <td data-field="0" data-key="30-0-0" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-30-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                    <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                </div>
                                            </td>
                                            <td data-field="id" data-key="30-0-1" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-1">1008</div>
                                            </td>
                                            <td data-field="poster" data-key="30-0-2" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-2">王</div>
                                            </td>
                                            <td data-field="avatar" data-key="30-0-3" data-content="https://wx4.sinaimg.cn/mw1024/5db11ff4gy1fmx4keaw9pj20dw08caa4.jpg" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-3"> <img style="display: inline-block; width: 50%; height: 100%;" src="https://wx4.sinaimg.cn/mw1024/5db11ff4gy1fmx4keaw9pj20dw08caa4.jpg"> </div>
                                            </td>
                                            <td data-field="content" data-key="30-0-4" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-4">想知道南昌哪里有好吃的西安肉夹馍</div>
                                            </td>
                                            <td data-field="posttime" data-key="30-0-5" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-5">20180514</div>
                                            </td>
                                            <td data-field="top" data-key="30-0-6" align="center" data-content="false" data-minwidth="80" class="">
                                                <div class="layui-table-cell laytable-cell-30-0-6"> <button class="layui-btn layui-btn-primary layui-btn-xs">正常显示</button> </div>
                                            </td>
                                            <td data-field="7" data-key="30-0-7" align="center" data-off="true" class="layui-table-col-special">
                                                <div class="layui-table-cell laytable-cell-30-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                    </div>
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
                                                <th data-field="0" data-key="30-0-0" data-unresize="true" class=" layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-30-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary" lay-filter="layTableAllChoose">
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
                                                <td data-field="0" data-key="30-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-30-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr data-index="1" class="">
                                                <td data-field="0" data-key="30-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-30-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr data-index="2" class="">
                                                <td data-field="0" data-key="30-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-30-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr data-index="3" class="">
                                                <td data-field="0" data-key="30-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-30-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr data-index="4">
                                                <td data-field="0" data-key="30-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-30-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr data-index="5" class="">
                                                <td data-field="0" data-key="30-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-30-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr data-index="6" class="">
                                                <td data-field="0" data-key="30-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-30-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
                                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr data-index="7" class="">
                                                <td data-field="0" data-key="30-0-0" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-30-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary">
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
                                                <th data-field="7" data-key="30-0-7" class=" layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-30-0-7" align="center"><span>操作</span></div>
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
                                                <td data-field="7" data-key="30-0-7" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-30-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="1" class="">
                                                <td data-field="7" data-key="30-0-7" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-30-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="2" class="">
                                                <td data-field="7" data-key="30-0-7" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-30-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="3" class="">
                                                <td data-field="7" data-key="30-0-7" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-30-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="4">
                                                <td data-field="7" data-key="30-0-7" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-30-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="5" class="">
                                                <td data-field="7" data-key="30-0-7" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-30-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="6" class="">
                                                <td data-field="7" data-key="30-0-7" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-30-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                            <tr data-index="7" class="">
                                                <td data-field="7" data-key="30-0-7" align="center" data-off="true" class="layui-table-col-special">
                                                    <div class="layui-table-cell laytable-cell-30-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>                                                        </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="layui-table-page">
                            <div id="layui-table-page30">
                                <div class="layui-box layui-laypage layui-laypage-default" id="layui-laypage-16"><a href="javascript:;" class="layui-laypage-prev layui-disabled" data-page="0"><i class="layui-icon"></i></a><span class="layui-laypage-curr"><em class="layui-laypage-em"></em><em>1</em></span><a href="javascript:;" data-page="2">2</a>
                                    <a
                                        href="javascript:;" data-page="3">3</a><span class="layui-laypage-spr">…</span><a href="javascript:;" class="layui-laypage-last" title="尾页" data-page="10">10</a><a href="javascript:;" class="layui-laypage-next" data-page="2"><i class="layui-icon"></i></a>
                                        <span
                                            class="layui-laypage-skip">到第<input type="text" min="1" value="1" class="layui-input">页<button type="button" class="layui-laypage-btn">确定</button></span><span class="layui-laypage-count">共 100 条</span><span class="layui-laypage-limits"><select lay-ignore=""><option value="10" selected="">10 条/页</option><option value="15">15 条/页</option><option value="20">20 条/页</option><option value="25">25 条/页</option><option value="30">30 条/页</option></select></span></div>
                            </div>
                        </div>
                        <style>
                            .laytable-cell-30-0-0 {
                                width: 48px;
                            }

                            .laytable-cell-30-0-1 {
                                width: 100px;
                            }

                            .laytable-cell-30-0-2 {}

                            .laytable-cell-30-0-3 {
                                width: 100px;
                            }

                            .laytable-cell-30-0-4 {}

                            .laytable-cell-30-0-5 {}

                            .laytable-cell-30-0-6 {}

                            .laytable-cell-30-0-7 {
                                width: 150px;
                            }
                        </style>
                    </div>
                    <script type="text/html" id="imgTpl">
                        <img style="display: inline-block; width: 50%; height: 100%;" src={ { d.avatar }}>
                    </script>
                    <script type="text/html" id="buttonTpl">
                        @{{# if(d.top == true){ }}
                        <button class="layui-btn layui-btn-xs">已置顶</button> @{{# } else { }}
                        <button class="layui-btn layui-btn-primary layui-btn-xs">正常显示</button> @{{# } }}
                    </script>
                    <script type="text/html" id="table-forum-list">
                        <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a>
                        <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>
                    </script>
                </div>
            </div>
        </div>
        <script>
            layui.use('forum', layui.factory('forum')).use(['admin', 'forum', 'table'], function() {
                var $ = layui.$,
                    form = layui.form,
                    table = layui.table;

                form.render(null, 'app-forum-list');

                //监听搜索
                form.on('submit(LAY-app-forumlist-search)', function(data) {
                    var field = data.field;

                    //执行重载
                    table.reload('LAY-app-forum-list', {
                        where: field
                    });
                });

                //事件
                var active = {
                    batchdel: function() {
                        var checkStatus = table.checkStatus('LAY-app-forum-list'),
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
                            table.reload('LAY-app-forum-list');
                            layer.msg('已删除');
                        });
                    }
                }

                $('.layui-btn.layuiadmin-btn-forum-list').on('click', function() {
                    var type = $(this).data('type');
                    active[type] ? active[type].call(this) : '';
                });
            });
        </script>
    </div>
</div>
@stop
