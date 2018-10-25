@extends('admin.common.layout')
@section('content')
<div class="layui-body" id="LAY_app_body">
    <div class="layadmin-tabsbody-item layui-show"><div class="layui-card layadmin-header">
  <div class="layui-breadcrumb" lay-filter="breadcrumb" style="visibility: visible;">
    <a lay-href="">主页</a><span lay-separator="">/</span>
    <a><cite>应用</cite></a><span lay-separator="">/</span>
    <a><cite>分类管理</cite></a>
  </div>
</div><div class="layui-fluid">
  <div class="layui-card">
    <div class="layui-card-header layuiadmin-card-header-auto">
      <button class="layui-btn layuiadmin-btn-tags" data-type="add">添加</button>
    </div>
    <div class="layui-card-body">
      <table id="LAY-app-content-tags" lay-filter="LAY-app-content-tags"></table><div class="layui-form layui-border-box layui-table-view" lay-filter="LAY-table-2" style=" "><div class="layui-table-box"><div class="layui-table-header"><table cellspacing="0" cellpadding="0" border="0" class="layui-table"><thead><tr><th data-field="0" data-key="2-0-0" data-unresize="true" class=" layui-table-col-special"><div class="layui-table-cell laytable-cell-2-0-0 laytable-cell-numbers"><span></span></div></th><th data-field="id" data-key="2-0-1" class=" layui-unselect"><div class="layui-table-cell laytable-cell-2-0-1"><span>ID</span><span class="layui-table-sort layui-inline"><i class="layui-edge layui-table-sort-asc" title="升序"></i><i class="layui-edge layui-table-sort-desc" title="降序"></i></span></div></th><th data-field="tags" data-key="2-0-2" data-minwidth="100" class=""><div class="layui-table-cell laytable-cell-2-0-2"><span>分类名</span></div></th><th data-field="3" data-key="2-0-3" class=" layui-table-col-special"><div class="layui-table-cell laytable-cell-2-0-3" align="center"><span>操作</span></div></th></tr></thead></table></div><div class="layui-table-body layui-table-main"><table cellspacing="0" cellpadding="0" border="0" class="layui-table"><tbody><tr data-index="0" class=""><td data-field="0" data-key="2-0-0" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-2-0-0 laytable-cell-numbers">1</div></td><td data-field="id" data-key="2-0-1" class=""><div class="layui-table-cell laytable-cell-2-0-1">001</div></td><td data-field="tags" data-key="2-0-2" data-minwidth="100" class=""><div class="layui-table-cell laytable-cell-2-0-2">美食</div></td><td data-field="3" data-key="2-0-3" align="center" data-off="true" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-2-0-3"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a> </div></td></tr><tr data-index="1" class=""><td data-field="0" data-key="2-0-0" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-2-0-0 laytable-cell-numbers">2</div></td><td data-field="id" data-key="2-0-1" class=""><div class="layui-table-cell laytable-cell-2-0-1">002</div></td><td data-field="tags" data-key="2-0-2" data-minwidth="100" class=""><div class="layui-table-cell laytable-cell-2-0-2">新闻</div></td><td data-field="3" data-key="2-0-3" align="center" data-off="true" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-2-0-3"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a> </div></td></tr><tr data-index="2"><td data-field="0" data-key="2-0-0" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-2-0-0 laytable-cell-numbers">3</div></td><td data-field="id" data-key="2-0-1" class=""><div class="layui-table-cell laytable-cell-2-0-1">003</div></td><td data-field="tags" data-key="2-0-2" data-minwidth="100" class=""><div class="layui-table-cell laytable-cell-2-0-2">八卦</div></td><td data-field="3" data-key="2-0-3" align="center" data-off="true" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-2-0-3"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a> </div></td></tr><tr data-index="3"><td data-field="0" data-key="2-0-0" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-2-0-0 laytable-cell-numbers">4</div></td><td data-field="id" data-key="2-0-1" class=""><div class="layui-table-cell laytable-cell-2-0-1">004</div></td><td data-field="tags" data-key="2-0-2" data-minwidth="100" class=""><div class="layui-table-cell laytable-cell-2-0-2">体育</div></td><td data-field="3" data-key="2-0-3" align="center" data-off="true" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-2-0-3"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a> </div></td></tr><tr data-index="4"><td data-field="0" data-key="2-0-0" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-2-0-0 laytable-cell-numbers">5</div></td><td data-field="id" data-key="2-0-1" class=""><div class="layui-table-cell laytable-cell-2-0-1">005</div></td><td data-field="tags" data-key="2-0-2" data-minwidth="100" class=""><div class="layui-table-cell laytable-cell-2-0-2">音乐</div></td><td data-field="3" data-key="2-0-3" align="center" data-off="true" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-2-0-3"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a> </div></td></tr></tbody></table></div><div class="layui-table-fixed layui-table-fixed-l"><div class="layui-table-header"><table cellspacing="0" cellpadding="0" border="0" class="layui-table"><thead><tr><th data-field="0" data-key="2-0-0" data-unresize="true" class=" layui-table-col-special"><div class="layui-table-cell laytable-cell-2-0-0 laytable-cell-numbers"><span></span></div></th></tr></thead></table></div><div class="layui-table-body" style="height: auto;"><table cellspacing="0" cellpadding="0" border="0" class="layui-table"><tbody><tr data-index="0" class=""><td data-field="0" data-key="2-0-0" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-2-0-0 laytable-cell-numbers">1</div></td></tr><tr data-index="1" class=""><td data-field="0" data-key="2-0-0" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-2-0-0 laytable-cell-numbers">2</div></td></tr><tr data-index="2"><td data-field="0" data-key="2-0-0" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-2-0-0 laytable-cell-numbers">3</div></td></tr><tr data-index="3"><td data-field="0" data-key="2-0-0" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-2-0-0 laytable-cell-numbers">4</div></td></tr><tr data-index="4"><td data-field="0" data-key="2-0-0" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-2-0-0 laytable-cell-numbers">5</div></td></tr></tbody></table></div></div><div class="layui-table-fixed layui-table-fixed-r layui-hide" style="right: -1px;"><div class="layui-table-header"><table cellspacing="0" cellpadding="0" border="0" class="layui-table"><thead><tr><th data-field="3" data-key="2-0-3" class=" layui-table-col-special"><div class="layui-table-cell laytable-cell-2-0-3" align="center"><span>操作</span></div></th></tr></thead></table><div class="layui-table-mend"></div></div><div class="layui-table-body" style="height: auto;"><table cellspacing="0" cellpadding="0" border="0" class="layui-table"><tbody><tr data-index="0" class=""><td data-field="3" data-key="2-0-3" align="center" data-off="true" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-2-0-3"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a> </div></td></tr><tr data-index="1" class=""><td data-field="3" data-key="2-0-3" align="center" data-off="true" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-2-0-3"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a> </div></td></tr><tr data-index="2"><td data-field="3" data-key="2-0-3" align="center" data-off="true" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-2-0-3"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a> </div></td></tr><tr data-index="3"><td data-field="3" data-key="2-0-3" align="center" data-off="true" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-2-0-3"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a> </div></td></tr><tr data-index="4"><td data-field="3" data-key="2-0-3" align="center" data-off="true" class="layui-table-col-special"><div class="layui-table-cell laytable-cell-2-0-3"> <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a> </div></td></tr></tbody></table></div></div></div><style>.laytable-cell-2-0-0{ width: 40px; }.laytable-cell-2-0-1{ width: 100px; }.laytable-cell-2-0-2{  }.laytable-cell-2-0-3{ width: 150px; }</style></div>
      <script type="text/html" id="layuiadmin-app-cont-tagsbar">
        <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a>
        <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>
      </script>
    </div>
  </div>
</div><script>
layui.use('contlist', layui.factory('contlist')).use(['admin', 'contlist', 'table'], function(){
  var $ = layui.$
  ,admin = layui.admin
  ,view = layui.view
  ,table = layui.table
  ,form = layui.form;

  var active = {
    add: function(){
      admin.popup({
        title: '添加分类'
        ,area: ['450px', '200px']
        ,id: 'LAY-popup-content-tags'
        ,success: function(layero, index){
          view(this.id).render('app/content/tagsform').done(function(){
            form.render(null, 'layuiadmin-form-tags');

            //监听提交
            form.on('submit(layuiadmin-app-tags-submit)', function(data){
              var field = data.field; //获取提交的字段

              //提交 Ajax 成功后，关闭当前弹层并重载表格
              //$.ajax({});
              layui.table.reload('LAY-app-content-tags'); //重载表格
              layer.close(index); //执行关闭
            });
          });
        }
      });
    }
  }
  $('.layui-btn.layuiadmin-btn-tags').on('click', function(){
    var type = $(this).data('type');
    active[type] ? active[type].call(this) : '';
  });
});
</script></div>
  </div>
@stop
