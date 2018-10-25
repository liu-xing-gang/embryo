@extends('admin.common.layout')
@section('content')
<div class="layui-body" id="LAY_app_body">
    <div class="layadmin-tabsbody-item layui-show"><div class="layui-card layadmin-header">
    <div class="layui-breadcrumb" lay-filter="breadcrumb" style="visibility: visible;">
      <a lay-href="">主页</a><span lay-separator="">/</span>
      <a><cite>组件</cite></a><span lay-separator="">/</span>
      <a><cite>分页演示一</cite></a>
    </div>
  </div><div class="layui-fluid">
    <div class="layui-row layui-col-space15">
      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">总页数低于页码总数</div>
          <div class="layui-card-body">
            <div id="test-laypage-demo0"><div class="layui-box layui-laypage layui-laypage-default" id="layui-laypage-22"><a href="javascript:;" class="layui-laypage-prev layui-disabled" data-page="0">上一页</a><span class="layui-laypage-curr"><em class="layui-laypage-em"></em><em>1</em></span><a href="javascript:;" data-page="2">2</a><a href="javascript:;" data-page="3">3</a><a href="javascript:;" data-page="4">4</a><a href="javascript:;" data-page="5">5</a><a href="javascript:;" class="layui-laypage-next" data-page="2">下一页</a></div></div>
          </div>
        </div>
      </div>

      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">总页数大于页码总数</div>
          <div class="layui-card-body">
            <div id="test-laypage-demo1"><div class="layui-box layui-laypage layui-laypage-default" id="layui-laypage-23"><a href="javascript:;" class="layui-laypage-prev layui-disabled" data-page="0">上一页</a><span class="layui-laypage-curr"><em class="layui-laypage-em"></em><em>1</em></span><a href="javascript:;" data-page="2">2</a><a href="javascript:;" data-page="3">3</a><a href="javascript:;" data-page="4">4</a><a href="javascript:;" data-page="5">5</a><span class="layui-laypage-spr">…</span><a href="javascript:;" class="layui-laypage-last" title="尾页" data-page="7">7</a><a href="javascript:;" class="layui-laypage-next" data-page="2">下一页</a></div></div>
          </div>
        </div>
      </div>

      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">自定义主题 - 颜色随意定义</div>
          <div class="layui-card-body">
            <div id="test-laypage-demo2"><div class="layui-box layui-laypage layui-laypage-molv" id="layui-laypage-24"><a href="javascript:;" class="layui-laypage-prev layui-disabled" data-page="0">上一页</a><span class="layui-laypage-curr"><em class="layui-laypage-em" style="background-color:#1E9FFF;"></em><em>1</em></span><a href="javascript:;" data-page="2">2</a><a href="javascript:;" data-page="3">3</a><a href="javascript:;" data-page="4">4</a><a href="javascript:;" data-page="5">5</a><span class="layui-laypage-spr">…</span><a href="javascript:;" class="layui-laypage-last" title="尾页" data-page="10">10</a><a href="javascript:;" class="layui-laypage-next" data-page="2">下一页</a></div></div>
            <div id="test-laypage-demo2-1"><div class="layui-box layui-laypage layui-laypage-molv" id="layui-laypage-25"><a href="javascript:;" class="layui-laypage-prev layui-disabled" data-page="0">上一页</a><span class="layui-laypage-curr"><em class="layui-laypage-em" style="background-color:#FF5722;"></em><em>1</em></span><a href="javascript:;" data-page="2">2</a><a href="javascript:;" data-page="3">3</a><a href="javascript:;" data-page="4">4</a><a href="javascript:;" data-page="5">5</a><span class="layui-laypage-spr">…</span><a href="javascript:;" class="layui-laypage-last" title="尾页" data-page="10">10</a><a href="javascript:;" class="layui-laypage-next" data-page="2">下一页</a></div></div>
            <div id="test-laypage-demo2-2"><div class="layui-box layui-laypage layui-laypage-molv" id="layui-laypage-26"><a href="javascript:;" class="layui-laypage-prev layui-disabled" data-page="0">上一页</a><span class="layui-laypage-curr"><em class="layui-laypage-em" style="background-color:#FFB800;"></em><em>1</em></span><a href="javascript:;" data-page="2">2</a><a href="javascript:;" data-page="3">3</a><a href="javascript:;" data-page="4">4</a><a href="javascript:;" data-page="5">5</a><span class="layui-laypage-spr">…</span><a href="javascript:;" class="layui-laypage-last" title="尾页" data-page="10">10</a><a href="javascript:;" class="layui-laypage-next" data-page="2">下一页</a></div></div>
          </div>
        </div>
      </div>

      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">自定义首页、尾页、上一页、下一页文本</div>
          <div class="layui-card-body">
            <div id="test-laypage-demo3"><div class="layui-box layui-laypage layui-laypage-default" id="layui-laypage-27"><a href="javascript:;" class="layui-laypage-prev layui-disabled" data-page="0"><em>←</em></a><span class="layui-laypage-curr"><em class="layui-laypage-em"></em><em>1</em></span><a href="javascript:;" data-page="2">2</a><a href="javascript:;" data-page="3">3</a><a href="javascript:;" data-page="4">4</a><a href="javascript:;" data-page="5">5</a><span class="layui-laypage-spr">…</span><a href="javascript:;" class="layui-laypage-last" title="尾页" data-page="10">尾页</a><a href="javascript:;" class="layui-laypage-next" data-page="2"><em>→</em></a></div></div>
          </div>
        </div>
      </div>

      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">不显示首页尾页</div>
          <div class="layui-card-body">
            <div id="test-laypage-demo4"><div class="layui-box layui-laypage layui-laypage-default" id="layui-laypage-28"><a href="javascript:;" class="layui-laypage-prev layui-disabled" data-page="0">上一页</a><span class="layui-laypage-curr"><em class="layui-laypage-em"></em><em>1</em></span><a href="javascript:;" data-page="2">2</a><a href="javascript:;" data-page="3">3</a><a href="javascript:;" data-page="4">4</a><a href="javascript:;" data-page="5">5</a><a href="javascript:;" class="layui-laypage-next" data-page="2">下一页</a></div></div>
          </div>
        </div>
      </div>

      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">开启HASH</div>
          <div class="layui-card-body">
            <div id="test-laypage-demo5"><div class="layui-box layui-laypage layui-laypage-default" id="layui-laypage-29"><a href="javascript:;" class="layui-laypage-prev layui-disabled" data-page="0">上一页</a><span class="layui-laypage-curr"><em class="layui-laypage-em"></em><em>1</em></span><a href="javascript:;" data-page="2">2</a><a href="javascript:;" data-page="3">3</a><a href="javascript:;" data-page="4">4</a><a href="javascript:;" data-page="5">5</a><span class="layui-laypage-spr">…</span><a href="javascript:;" class="layui-laypage-last" title="尾页" data-page="50">50</a><a href="javascript:;" class="layui-laypage-next" data-page="2">下一页</a></div></div>
          </div>
        </div>
      </div>

      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">只显示上一页、下一页</div>
          <div class="layui-card-body">
            <div id="test-laypage-demo6"><div class="layui-box layui-laypage layui-laypage-default" id="layui-laypage-30"><a href="javascript:;" class="layui-laypage-prev layui-disabled" data-page="0">上一页</a><a href="javascript:;" class="layui-laypage-next" data-page="2">下一页</a></div></div>
          </div>
        </div>
      </div>
    </div>
  </div><script>
  layui.use(['admin', 'laypage'], function(){
    var laypage = layui.laypage;

    //总页数低于页码总数
    laypage.render({
      elem: 'test-laypage-demo0'
      ,count: 50 //数据总数
    });

    //总页数大于页码总数
    laypage.render({
      elem: 'test-laypage-demo1'
      ,count: 70 //数据总数
      ,jump: function(obj){
        console.log(obj)
      }
    });

    //自定义样式
    laypage.render({
      elem: 'test-laypage-demo2'
      ,count: 100
      ,theme: '#1E9FFF'
    });
    laypage.render({
      elem: 'test-laypage-demo2-1'
      ,count: 100
      ,theme: '#FF5722'
    });
    laypage.render({
      elem: 'test-laypage-demo2-2'
      ,count: 100
      ,theme: '#FFB800'
    });

    //自定义首页、尾页、上一页、下一页文本
    laypage.render({
      elem: 'test-laypage-demo3'
      ,count: 100
      ,first: '首页'
      ,last: '尾页'
      ,prev: '<em>←</em>'
      ,next: '<em>→</em>'
    });

    //不显示首页尾页
    laypage.render({
      elem: 'test-laypage-demo4'
      ,count: 100
      ,first: false
      ,last: false
    });

    //开启HASH
    laypage.render({
      elem: 'test-laypage-demo5'
      ,count: 500
      ,curr: location.hash.replace('#!fenye=', '') //获取hash值为fenye的当前页
      ,hash: 'fenye' //自定义hash值
    });

    //只显示上一页、下一页
    laypage.render({
      elem: 'test-laypage-demo6'
      ,count: 50
      ,layout: ['prev', 'next']
      ,jump: function(obj, first){
        if(!first){
          layer.msg('第 '+ obj.curr +' 页');
        }
      }
    });

  });
  </script></div>
  </div>
@stop
