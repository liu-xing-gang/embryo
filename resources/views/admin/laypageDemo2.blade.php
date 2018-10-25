@extends('admin.common.layout')
@section('content')
<div class="layui-body" id="LAY_app_body">
    <div class="layadmin-tabsbody-item layui-show"><div class="layui-card layadmin-header">
    <div class="layui-breadcrumb" lay-filter="breadcrumb" style="visibility: visible;">
      <a lay-href="">主页</a><span lay-separator="">/</span>
      <a><cite>组件</cite></a><span lay-separator="">/</span>
      <a><cite>分页演示二</cite></a>
    </div>
  </div><div class="layui-fluid">
    <div class="layui-row layui-col-space15">
      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">显示完整功能</div>
          <div class="layui-card-body">
            <div id="test-laypage-demo7"><div class="layui-box layui-laypage layui-laypage-default" id="layui-laypage-46"><span class="layui-laypage-count">共 100 条</span><a href="javascript:;" class="layui-laypage-prev layui-disabled" data-page="0">上一页</a><span class="layui-laypage-curr"><em class="layui-laypage-em"></em><em>1</em></span><a href="javascript:;" data-page="2">2</a><a href="javascript:;" data-page="3">3</a><a href="javascript:;" data-page="4">4</a><a href="javascript:;" data-page="5">5</a><span class="layui-laypage-spr">…</span><a href="javascript:;" class="layui-laypage-last" title="尾页" data-page="10">10</a><a href="javascript:;" class="layui-laypage-next" data-page="2">下一页</a><span class="layui-laypage-limits"><select lay-ignore=""><option value="10" selected="">10 条/页</option><option value="20">20 条/页</option><option value="30">30 条/页</option><option value="40">40 条/页</option><option value="50">50 条/页</option></select></span><span class="layui-laypage-skip">到第<input type="text" min="1" value="1" class="layui-input">页<button type="button" class="layui-laypage-btn">确定</button></span></div></div>
          </div>
        </div>
      </div>

      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">自定义排版</div>
          <div class="layui-card-body">
            <div id="test-laypage-demo8"><div class="layui-box layui-laypage layui-laypage-default" id="layui-laypage-47"><span class="layui-laypage-limits"><select lay-ignore=""><option value="10" selected="">10 条/页</option><option value="20">20 条/页</option><option value="30">30 条/页</option><option value="40">40 条/页</option><option value="50">50 条/页</option></select></span><a href="javascript:;" class="layui-laypage-prev layui-disabled" data-page="0">上一页</a><span class="layui-laypage-curr"><em class="layui-laypage-em"></em><em>1</em></span><a href="javascript:;" data-page="2">2</a><a href="javascript:;" data-page="3">3</a><a href="javascript:;" data-page="4">4</a><a href="javascript:;" data-page="5">5</a><span class="layui-laypage-spr">…</span><a href="javascript:;" class="layui-laypage-last" title="尾页" data-page="100">100</a><a href="javascript:;" class="layui-laypage-next" data-page="2">下一页</a></div></div>
            <div id="test-laypage-demo9"><div class="layui-box layui-laypage layui-laypage-default" id="layui-laypage-48"><a href="javascript:;" class="layui-laypage-prev layui-disabled" data-page="0">上一页</a><a href="javascript:;" class="layui-laypage-next" data-page="2">下一页</a><span class="layui-laypage-curr"><em class="layui-laypage-em"></em><em>1</em></span><a href="javascript:;" data-page="2">2</a><a href="javascript:;" data-page="3">3</a><a href="javascript:;" data-page="4">4</a><a href="javascript:;" data-page="5">5</a><span class="layui-laypage-spr">…</span><a href="javascript:;" class="layui-laypage-last" title="尾页" data-page="100">100</a></div></div>
            <div id="test-laypage-demo10"><div class="layui-box layui-laypage layui-laypage-default" id="layui-laypage-49"><span class="layui-laypage-curr"><em class="layui-laypage-em"></em><em>1</em></span><a href="javascript:;" data-page="2">2</a><a href="javascript:;" data-page="3">3</a><a href="javascript:;" data-page="4">4</a><a href="javascript:;" data-page="5">5</a><span class="layui-laypage-spr">…</span><a href="javascript:;" class="layui-laypage-last" title="尾页" data-page="100">100</a><span class="layui-laypage-count">共 1000 条</span></div></div>
          </div>
        </div>
      </div>

      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">自定义每页条数的选择项</div>
          <div class="layui-card-body">
            <div id="test-laypage-demo11"><div class="layui-box layui-laypage layui-laypage-default" id="layui-laypage-50"><a href="javascript:;" class="layui-laypage-prev layui-disabled" data-page="0">上一页</a><span class="layui-laypage-curr"><em class="layui-laypage-em"></em><em>1</em></span><a href="javascript:;" data-page="2">2</a><a href="javascript:;" data-page="3">3</a><a href="javascript:;" data-page="4">4</a><a href="javascript:;" data-page="5">5</a><span class="layui-laypage-spr">…</span><a href="javascript:;" class="layui-laypage-last" title="尾页" data-page="10">10</a><a href="javascript:;" class="layui-laypage-next" data-page="2">下一页</a></div></div>
          </div>
        </div>
      </div>

      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">将一段已知数组分页展示</div>
          <div class="layui-card-body">
            <div id="test-laypage-demo20"><div class="layui-box layui-laypage layui-laypage-default" id="layui-laypage-51"><a href="javascript:;" class="layui-laypage-prev layui-disabled" data-page="0">上一页</a><span class="layui-laypage-curr"><em class="layui-laypage-em"></em><em>1</em></span><a href="javascript:;" data-page="2">2</a><a href="javascript:;" data-page="3">3</a><a href="javascript:;" data-page="4">4</a><a href="javascript:;" class="layui-laypage-next" data-page="2">下一页</a></div></div>
            <ul id="test-laypage-biuuu_city_list"><li>北京</li><li>上海</li><li>广州</li><li>深圳</li><li>杭州</li><li>长沙</li><li>合肥</li><li>宁夏</li><li>成都</li><li>西安</li></ul>
          </div>
        </div>
      </div>

    </div>
  </div><script>
  layui.use(['admin', 'laypage'], function(){
    var laypage = layui.laypage;

    //完整功能
    laypage.render({
      elem: 'test-laypage-demo7'
      ,count: 100
      ,layout: ['count', 'prev', 'page', 'next', 'limit', 'skip']
      ,jump: function(obj){
        console.log(obj)
      }
    });

    //自定义排版
    laypage.render({
      elem: 'test-laypage-demo8'
      ,count: 1000
      ,layout: ['limit', 'prev', 'page', 'next']
    });
    laypage.render({
      elem: 'test-laypage-demo9'
      ,count: 1000
      ,layout: ['prev', 'next', 'page']
    });
    laypage.render({
      elem: 'test-laypage-demo10'
      ,count: 1000
      ,layout: ['page', 'count']
    });

    //自定义每页条数的选择项
    laypage.render({
      elem: 'test-laypage-demo11'
      ,count: 1000
      ,limit: 100
      ,limits: [100, 300, 500]
    });


    //将一段数组分页展示

    //测试数据
    var testLayPageData = [
      '北京',
      '上海',
      '广州',
      '深圳',
      '杭州',
      '长沙',
      '合肥',
      '宁夏',
      '成都',
      '西安',
      '南昌',
      '上饶',
      '沈阳',
      '济南',
      '厦门',
      '福州',
      '九江',
      '宜春',
      '赣州',
      '宁波',
      '绍兴',
      '无锡',
      '苏州',
      '徐州',
      '东莞',
      '佛山',
      '中山',
      '成都',
      '武汉',
      '青岛',
      '天津',
      '重庆',
      '南京',
      '九江',
      '香港',
      '澳门',
      '台北'
    ];

    //调用分页
    laypage.render({
      elem: 'test-laypage-demo20'
      ,count: testLayPageData.length
      ,jump: function(obj){
        //模拟渲染
        document.getElementById('test-laypage-biuuu_city_list').innerHTML = function(){
          var arr = []
          ,thisData = testLayPageData.concat().splice(obj.curr*obj.limit - obj.limit, obj.limit);
          layui.each(thisData, function(index, item){
            arr.push('<li>'+ item +'</li>');
          });
          return arr.join('');
        }();
      }
    });

  });
  </script></div>
  </div>
@stop
