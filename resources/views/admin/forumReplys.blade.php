@extends('admin.common.layout')
@section('content')
<div class="layui-body" id="LAY_app_body">
    <div class="layadmin-tabsbody-item layui-show"><div class="layui-card layadmin-header">
  <div class="layui-breadcrumb" lay-filter="breadcrumb" style="visibility: visible;">
    <a lay-href="">主页</a><span lay-separator="">/</span>
    <a><cite>应用</cite></a><span lay-separator="">/</span>
    <a><cite>回帖列表</cite></a>
  </div>
</div><div class="layui-fluid">
  <div class="layui-card">
    <div class="layui-form layui-card-header layuiadmin-card-header-auto" lay-filter="layuiadmin-app-forum-reply">
      <div class="layui-form-item">
        <div class="layui-inline layuiadmin-input-useradmin">
          <label class="layui-form-label">回帖人</label>
          <div class="layui-input-block">
            <input type="text" name="replyer" placeholder="请输入" autocomplete="off" class="layui-input">
          </div>
        </div>
        <div class="layui-inline">
          <label class="layui-form-label">回帖内容</label>
          <div class="layui-input-block">
            <input type="text" name="content" placeholder="请输入" autocomplete="off" class="layui-input">
          </div>
        </div>
        <div class="layui-inline">
          <button class="layui-btn layuiadmin-btn-replys" data-type="reload" lay-submit="" lay-filter="LAY-app-forumreply-search">
            <i class="layui-icon layui-icon-search layuiadmin-button-btn"></i>
          </button>
        </div>
      </div>
    </div>
    <div class="layui-card-body">
      <div style="padding-bottom: 10px;">
        <button class="layui-btn layuiadmin-btn-replys" data-type="batchdel">删除</button>
      </div>
      <table id="LAY-app-forumreply-list" lay-filter="LAY-app-forumreply-list"></table><div class="layui-form layui-border-box layui-table-view" lay-filter="LAY-table-33" style=" "><div class="layui-table-box"><div class="layui-table-header"><table cellspacing="0" cellpadding="0" border="0" class="layui-table"><thead><tr><th data-field="0" data-key="33-0-0" data-unresize="true" class=" layui-table-col-special"><div class="layui-table-cell laytable-cell-33-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary" lay-filter="layTableAllChoose"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div></div></th><th data-field="id" data-key="33-0-1" class=" layui-unselect"><div class="layui-table-cell laytable-cell-33-0-1"><span>ID</span><span class="layui-table-sort layui-inline"><i class="layui-edge layui-table-sort-asc" title="升序"></i><i class="layui-edge layui-table-sort-desc" title="降序"></i></span></div></th><th data-field="replyer" data-key="33-0-2" class=""><div class="layui-table-cell laytable-cell-33-0-2"><span>回帖人</span></div></th><th data-field="cardid" data-key="33-0-3" class=" layui-unselect"><div class="layui-table-cell laytable-cell-33-0-3"><span>回帖ID</span><span class="layui-table-sort layui-inline"><i class="layui-edge layui-table-sort-asc" title="升序"></i><i class="layui-edge layui-table-sort-desc" title="降序"></i></span></div></th><th data-field="avatar" data-key="33-0-4" class=""><div class="layui-table-cell laytable-cell-33-0-4"><span>头像</span></div></th><th data-field="content" data-key="33-0-5" class=""><div class="layui-table-cell laytable-cell-33-0-5"><span>回帖内容</span></div></th><th data-field="replytime" data-key="33-0-6" class=" layui-unselect"><div class="layui-table-cell laytable-cell-33-0-6"><span>回帖时间</span><span class="layui-table-sort layui-inline"><i class="layui-edge layui-table-sort-asc" title="升序"></i><i class="layui-edge layui-table-sort-desc" title="降序"></i></span></div></th><th data-field="7" data-key="33-0-7" class=" layui-table-col-special"><div class="layui-table-cell laytable-cell-33-0-7" align="center"><span>操作</span></div></th></tr></thead></table></div><div class="layui-table-body layui-table-main"><table cellspacing="0" cellpadding="0" border="0" class="layui-table"><tbody><tr data-index="0"><td data-field="0" data-key="33-0-0" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-33-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div></div></td><td data-field="id" data-key="33-0-1" class=""><div class="layui-table-cell laytable-cell-33-0-1">001</div></td><td data-field="replyer" data-key="33-0-2" class=""><div class="layui-table-cell laytable-cell-33-0-2">吴</div></td><td data-field="cardid" data-key="33-0-3" class=""><div class="layui-table-cell laytable-cell-33-0-3">1002</div></td><td data-field="avatar" data-key="33-0-4" data-content="https://wx2.sinaimg.cn/mw690/5db11ff4gy1fmx4kec5bvj20eb0h3mxh.jpg" class=""><div class="layui-table-cell laytable-cell-33-0-4"> <img style="display: inline-block; width: 50%; height: 100%;" src="https://wx2.sinaimg.cn/mw690/5db11ff4gy1fmx4kec5bvj20eb0h3mxh.jpg"> </div></td><td data-field="content" data-key="33-0-5" class=""><div class="layui-table-cell laytable-cell-33-0-5">有眼光，我也喜欢胡歌！</div></td><td data-field="replytime" data-key="33-0-6" class=""><div class="layui-table-cell laytable-cell-33-0-6">20161205</div></td><td data-field="7" data-key="33-0-7" align="center" data-off="true" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-33-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a> </div></td></tr><tr data-index="1" class=""><td data-field="0" data-key="33-0-0" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-33-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div></div></td><td data-field="id" data-key="33-0-1" class=""><div class="layui-table-cell laytable-cell-33-0-1">002</div></td><td data-field="replyer" data-key="33-0-2" class=""><div class="layui-table-cell laytable-cell-33-0-2">郑</div></td><td data-field="cardid" data-key="33-0-3" class=""><div class="layui-table-cell laytable-cell-33-0-3">1002</div></td><td data-field="avatar" data-key="33-0-4" data-content="https://wx2.sinaimg.cn/mw690/5db11ff4gy1fmx4kec5bvj20eb0h3mxh.jpg" class=""><div class="layui-table-cell laytable-cell-33-0-4"> <img style="display: inline-block; width: 50%; height: 100%;" src="https://wx2.sinaimg.cn/mw690/5db11ff4gy1fmx4kec5bvj20eb0h3mxh.jpg"> </div></td><td data-field="content" data-key="33-0-5" class=""><div class="layui-table-cell laytable-cell-33-0-5">同上同上。</div></td><td data-field="replytime" data-key="33-0-6" class=""><div class="layui-table-cell laytable-cell-33-0-6">20161205</div></td><td data-field="7" data-key="33-0-7" align="center" data-off="true" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-33-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a> </div></td></tr><tr data-index="2" class=""><td data-field="0" data-key="33-0-0" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-33-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div></div></td><td data-field="id" data-key="33-0-1" class=""><div class="layui-table-cell laytable-cell-33-0-1">003</div></td><td data-field="replyer" data-key="33-0-2" class=""><div class="layui-table-cell laytable-cell-33-0-2">王</div></td><td data-field="cardid" data-key="33-0-3" class=""><div class="layui-table-cell laytable-cell-33-0-3">1003</div></td><td data-field="avatar" data-key="33-0-4" data-content="https://wx2.sinaimg.cn/mw690/5db11ff4gy1fmx4kec5bvj20eb0h3mxh.jpg" class=""><div class="layui-table-cell laytable-cell-33-0-4"> <img style="display: inline-block; width: 50%; height: 100%;" src="https://wx2.sinaimg.cn/mw690/5db11ff4gy1fmx4kec5bvj20eb0h3mxh.jpg"> </div></td><td data-field="content" data-key="33-0-5" class=""><div class="layui-table-cell laytable-cell-33-0-5">能过一定过，不能过紧张也没用</div></td><td data-field="replytime" data-key="33-0-6" class=""><div class="layui-table-cell laytable-cell-33-0-6">20170405</div></td><td data-field="7" data-key="33-0-7" align="center" data-off="true" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-33-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a> </div></td></tr><tr data-index="3"><td data-field="0" data-key="33-0-0" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-33-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div></div></td><td data-field="id" data-key="33-0-1" class=""><div class="layui-table-cell laytable-cell-33-0-1">004</div></td><td data-field="replyer" data-key="33-0-2" class=""><div class="layui-table-cell laytable-cell-33-0-2">冯</div></td><td data-field="cardid" data-key="33-0-3" class=""><div class="layui-table-cell laytable-cell-33-0-3">1001</div></td><td data-field="avatar" data-key="33-0-4" data-content="https://wx2.sinaimg.cn/mw690/5db11ff4gy1fmx4kec5bvj20eb0h3mxh.jpg" class=""><div class="layui-table-cell laytable-cell-33-0-4"> <img style="display: inline-block; width: 50%; height: 100%;" src="https://wx2.sinaimg.cn/mw690/5db11ff4gy1fmx4kec5bvj20eb0h3mxh.jpg"> </div></td><td data-field="content" data-key="33-0-5" class=""><div class="layui-table-cell laytable-cell-33-0-5">可能因为你流鼻血了。</div></td><td data-field="replytime" data-key="33-0-6" class=""><div class="layui-table-cell laytable-cell-33-0-6">20170405</div></td><td data-field="7" data-key="33-0-7" align="center" data-off="true" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-33-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a> </div></td></tr><tr data-index="4"><td data-field="0" data-key="33-0-0" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-33-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div></div></td><td data-field="id" data-key="33-0-1" class=""><div class="layui-table-cell laytable-cell-33-0-1">005</div></td><td data-field="replyer" data-key="33-0-2" class=""><div class="layui-table-cell laytable-cell-33-0-2">陈</div></td><td data-field="cardid" data-key="33-0-3" class=""><div class="layui-table-cell laytable-cell-33-0-3">1003</div></td><td data-field="avatar" data-key="33-0-4" data-content="https://wx2.sinaimg.cn/mw690/5db11ff4gy1fmx4kec5bvj20eb0h3mxh.jpg" class=""><div class="layui-table-cell laytable-cell-33-0-4"> <img style="display: inline-block; width: 50%; height: 100%;" src="https://wx2.sinaimg.cn/mw690/5db11ff4gy1fmx4kec5bvj20eb0h3mxh.jpg"> </div></td><td data-field="content" data-key="33-0-5" class=""><div class="layui-table-cell laytable-cell-33-0-5">加油加油，看好你</div></td><td data-field="replytime" data-key="33-0-6" class=""><div class="layui-table-cell laytable-cell-33-0-6">20170405</div></td><td data-field="7" data-key="33-0-7" align="center" data-off="true" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-33-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a> </div></td></tr><tr data-index="5"><td data-field="0" data-key="33-0-0" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-33-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div></div></td><td data-field="id" data-key="33-0-1" class=""><div class="layui-table-cell laytable-cell-33-0-1">006</div></td><td data-field="replyer" data-key="33-0-2" class=""><div class="layui-table-cell laytable-cell-33-0-2">褚</div></td><td data-field="cardid" data-key="33-0-3" class=""><div class="layui-table-cell laytable-cell-33-0-3">1005</div></td><td data-field="avatar" data-key="33-0-4" data-content="https://wx2.sinaimg.cn/mw690/5db11ff4gy1fmx4kec5bvj20eb0h3mxh.jpg" class=""><div class="layui-table-cell laytable-cell-33-0-4"> <img style="display: inline-block; width: 50%; height: 100%;" src="https://wx2.sinaimg.cn/mw690/5db11ff4gy1fmx4kec5bvj20eb0h3mxh.jpg"> </div></td><td data-field="content" data-key="33-0-5" class=""><div class="layui-table-cell laytable-cell-33-0-5">纯属放屁</div></td><td data-field="replytime" data-key="33-0-6" class=""><div class="layui-table-cell laytable-cell-33-0-6">20180207</div></td><td data-field="7" data-key="33-0-7" align="center" data-off="true" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-33-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a> </div></td></tr><tr data-index="6"><td data-field="0" data-key="33-0-0" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-33-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div></div></td><td data-field="id" data-key="33-0-1" class=""><div class="layui-table-cell laytable-cell-33-0-1">007</div></td><td data-field="replyer" data-key="33-0-2" class=""><div class="layui-table-cell laytable-cell-33-0-2">卫</div></td><td data-field="cardid" data-key="33-0-3" class=""><div class="layui-table-cell laytable-cell-33-0-3">1005</div></td><td data-field="avatar" data-key="33-0-4" data-content="https://wx2.sinaimg.cn/mw690/5db11ff4gy1fmx4kec5bvj20eb0h3mxh.jpg" class=""><div class="layui-table-cell laytable-cell-33-0-4"> <img style="display: inline-block; width: 50%; height: 100%;" src="https://wx2.sinaimg.cn/mw690/5db11ff4gy1fmx4kec5bvj20eb0h3mxh.jpg"> </div></td><td data-field="content" data-key="33-0-5" class=""><div class="layui-table-cell laytable-cell-33-0-5">可以试试</div></td><td data-field="replytime" data-key="33-0-6" class=""><div class="layui-table-cell laytable-cell-33-0-6">20180207</div></td><td data-field="7" data-key="33-0-7" align="center" data-off="true" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-33-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a> </div></td></tr><tr data-index="7"><td data-field="0" data-key="33-0-0" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-33-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div></div></td><td data-field="id" data-key="33-0-1" class=""><div class="layui-table-cell laytable-cell-33-0-1">006</div></td><td data-field="replyer" data-key="33-0-2" class=""><div class="layui-table-cell laytable-cell-33-0-2">蒋</div></td><td data-field="cardid" data-key="33-0-3" class=""><div class="layui-table-cell laytable-cell-33-0-3">1006</div></td><td data-field="avatar" data-key="33-0-4" data-content="https://wx2.sinaimg.cn/mw690/5db11ff4gy1fmx4kec5bvj20eb0h3mxh.jpg" class=""><div class="layui-table-cell laytable-cell-33-0-4"> <img style="display: inline-block; width: 50%; height: 100%;" src="https://wx2.sinaimg.cn/mw690/5db11ff4gy1fmx4kec5bvj20eb0h3mxh.jpg"> </div></td><td data-field="content" data-key="33-0-5" class=""><div class="layui-table-cell laytable-cell-33-0-5">是啊是啊，太恐怖了。</div></td><td data-field="replytime" data-key="33-0-6" class=""><div class="layui-table-cell laytable-cell-33-0-6">20180512</div></td><td data-field="7" data-key="33-0-7" align="center" data-off="true" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-33-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a> </div></td></tr><tr data-index="8"><td data-field="0" data-key="33-0-0" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-33-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div></div></td><td data-field="id" data-key="33-0-1" class=""><div class="layui-table-cell laytable-cell-33-0-1">007</div></td><td data-field="replyer" data-key="33-0-2" class=""><div class="layui-table-cell laytable-cell-33-0-2">沈</div></td><td data-field="cardid" data-key="33-0-3" class=""><div class="layui-table-cell laytable-cell-33-0-3">1008</div></td><td data-field="avatar" data-key="33-0-4" data-content="https://wx2.sinaimg.cn/mw690/5db11ff4gy1fmx4kec5bvj20eb0h3mxh.jpg" class=""><div class="layui-table-cell laytable-cell-33-0-4"> <img style="display: inline-block; width: 50%; height: 100%;" src="https://wx2.sinaimg.cn/mw690/5db11ff4gy1fmx4kec5bvj20eb0h3mxh.jpg"> </div></td><td data-field="content" data-key="33-0-5" class=""><div class="layui-table-cell laytable-cell-33-0-5">魏家凉皮的凉皮就很不错奥。</div></td><td data-field="replytime" data-key="33-0-6" class=""><div class="layui-table-cell laytable-cell-33-0-6">20180515</div></td><td data-field="7" data-key="33-0-7" align="center" data-off="true" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-33-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a> </div></td></tr></tbody></table></div><div class="layui-table-fixed layui-table-fixed-l"><div class="layui-table-header"><table cellspacing="0" cellpadding="0" border="0" class="layui-table"><thead><tr><th data-field="0" data-key="33-0-0" data-unresize="true" class=" layui-table-col-special"><div class="layui-table-cell laytable-cell-33-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary" lay-filter="layTableAllChoose"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div></div></th></tr></thead></table></div><div class="layui-table-body" style="height: auto;"><table cellspacing="0" cellpadding="0" border="0" class="layui-table"><tbody><tr data-index="0"><td data-field="0" data-key="33-0-0" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-33-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div></div></td></tr><tr data-index="1" class=""><td data-field="0" data-key="33-0-0" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-33-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div></div></td></tr><tr data-index="2" class=""><td data-field="0" data-key="33-0-0" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-33-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div></div></td></tr><tr data-index="3"><td data-field="0" data-key="33-0-0" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-33-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div></div></td></tr><tr data-index="4"><td data-field="0" data-key="33-0-0" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-33-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div></div></td></tr><tr data-index="5"><td data-field="0" data-key="33-0-0" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-33-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div></div></td></tr><tr data-index="6"><td data-field="0" data-key="33-0-0" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-33-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div></div></td></tr><tr data-index="7"><td data-field="0" data-key="33-0-0" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-33-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div></div></td></tr><tr data-index="8"><td data-field="0" data-key="33-0-0" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-33-0-0 laytable-cell-checkbox"><input type="checkbox" name="layTableCheckbox" lay-skin="primary"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div></div></td></tr></tbody></table></div></div><div class="layui-table-fixed layui-table-fixed-r" style="right: -1px;"><div class="layui-table-header"><table cellspacing="0" cellpadding="0" border="0" class="layui-table"><thead><tr><th data-field="7" data-key="33-0-7" class=" layui-table-col-special"><div class="layui-table-cell laytable-cell-33-0-7" align="center"><span>操作</span></div></th></tr></thead></table><div class="layui-table-mend"></div></div><div class="layui-table-body" style="height: auto;"><table cellspacing="0" cellpadding="0" border="0" class="layui-table"><tbody><tr data-index="0"><td data-field="7" data-key="33-0-7" align="center" data-off="true" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-33-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a> </div></td></tr><tr data-index="1" class=""><td data-field="7" data-key="33-0-7" align="center" data-off="true" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-33-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a> </div></td></tr><tr data-index="2" class=""><td data-field="7" data-key="33-0-7" align="center" data-off="true" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-33-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a> </div></td></tr><tr data-index="3"><td data-field="7" data-key="33-0-7" align="center" data-off="true" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-33-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a> </div></td></tr><tr data-index="4"><td data-field="7" data-key="33-0-7" align="center" data-off="true" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-33-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a> </div></td></tr><tr data-index="5"><td data-field="7" data-key="33-0-7" align="center" data-off="true" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-33-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a> </div></td></tr><tr data-index="6"><td data-field="7" data-key="33-0-7" align="center" data-off="true" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-33-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a> </div></td></tr><tr data-index="7"><td data-field="7" data-key="33-0-7" align="center" data-off="true" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-33-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a> </div></td></tr><tr data-index="8"><td data-field="7" data-key="33-0-7" align="center" data-off="true" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-33-0-7"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a> </div></td></tr></tbody></table></div></div></div><div class="layui-table-page"><div id="layui-table-page33"><div class="layui-box layui-laypage layui-laypage-default" id="layui-laypage-17"><a href="javascript:;" class="layui-laypage-prev layui-disabled" data-page="0"><i class="layui-icon"></i></a><span class="layui-laypage-curr"><em class="layui-laypage-em"></em><em>1</em></span><a href="javascript:;" data-page="2">2</a><a href="javascript:;" data-page="3">3</a><span class="layui-laypage-spr">…</span><a href="javascript:;" class="layui-laypage-last" title="尾页" data-page="10">10</a><a href="javascript:;" class="layui-laypage-next" data-page="2"><i class="layui-icon"></i></a><span class="layui-laypage-skip">到第<input type="text" min="1" value="1" class="layui-input">页<button type="button" class="layui-laypage-btn">确定</button></span><span class="layui-laypage-count">共 100 条</span><span class="layui-laypage-limits"><select lay-ignore=""><option value="10" selected="">10 条/页</option><option value="15">15 条/页</option><option value="20">20 条/页</option><option value="25">25 条/页</option><option value="30">30 条/页</option></select></span></div></div></div><style>.laytable-cell-33-0-0{ width: 48px; }.laytable-cell-33-0-1{ width: 100px; }.laytable-cell-33-0-2{  }.laytable-cell-33-0-3{  }.laytable-cell-33-0-4{ width: 100px; }.laytable-cell-33-0-5{ width: 200px; }.laytable-cell-33-0-6{  }.laytable-cell-33-0-7{ width: 150px; }</style></div>
      <script type="text/html" id="imgTpl">
        <img style="display: inline-block; width: 50%; height: 100%;" src= @{{ d.avatar }}>
      </script>
      <script type="text/html" id="table-forum-replys">
        <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a>
        <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>
      </script>
    </div>
  </div>
</div><script>
layui.use('forum', layui.factory('forum')).use(['admin', 'forum', 'table'], function(){
  var $ = layui.$
  ,form = layui.form
  ,table = layui.table;

  form.render(null, 'layuiadmin-app-forum-reply');

  //监听搜索
  form.on('submit(LAY-app-forumreply-search)', function(data){
    var field = data.field;

    //执行重载
    table.reload('LAY-app-forumreply-list', {
      where: field
    });
  });

  var active = {
    batchdel: function(){
      var checkStatus = table.checkStatus('LAY-app-forumreply-list')
      ,checkData = checkStatus.data; //得到选中的数据

      if(checkData.length === 0){
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
        table.reload('LAY-app-forumreply-list');
        layer.msg('已删除');
      });
    }
  }

  $('.layui-btn.layuiadmin-btn-replys').on('click', function(){
    var type = $(this).data('type');
    active[type] ? active[type].call(this) : '';
  });
});
</script></div>
  </div>
@stop