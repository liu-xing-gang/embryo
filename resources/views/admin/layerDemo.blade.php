@extends('admin.common.layout')
@section('content')
<div class="layui-body" id="LAY_app_body">
    <div class="layadmin-tabsbody-item layui-show"><div class="layui-card layadmin-header">
  <div class="layui-breadcrumb" lay-filter="breadcrumb" style="visibility: visible;">
    <a lay-href="">主页</a><span lay-separator="">/</span>
    <a><cite>组件</cite></a><span lay-separator="">/</span>
    <a href="http://layer.layui.com/" target="_blank">layer</a><span lay-separator="">/</span>
    <a><cite>特殊示例</cite></a>
  </div>
</div><style>
/* 这段样式只是用于演示 */
#LAY-component-layer-special-demo .layui-card-body{padding-top: 15px;}
</style><div class="layui-fluid" id="LAY-component-layer-special-demo">
  <div class="layui-row layui-col-space15">
    <div class="layui-col-md12">
      <div class="layui-card">
        <div class="layui-card-header">场景</div>
        <div class="layui-card-body">

          <div class="layui-btn-container layadmin-layer-demo">
            <button data-method="setTop" class="layui-btn layui-btn-primary">多窗口模式，层叠置顶</button>
            <button data-method="confirmTrans" class="layui-btn layui-btn-primary">配置一个透明的询问框</button>
            <button data-method="notice" class="layui-btn layui-btn-primary">示范一个公告层</button>
          </div>

        </div>
      </div>
    </div>
    <div class="layui-col-md12">
      <div class="layui-card">
        <div class="layui-card-header">坐标</div>
        <div class="layui-card-body">

          <div class="layui-btn-container layadmin-layer-demo">
            <button data-method="offset" data-type="t" class="layui-btn layui-btn-primary">上弹出</button>
            <button data-method="offset" data-type="r" class="layui-btn layui-btn-primary">右弹出</button>
            <button data-method="offset" data-type="b" class="layui-btn layui-btn-primary">下弹出</button>
            <button data-method="offset" data-type="l" class="layui-btn layui-btn-primary">左弹出</button>
            <button data-method="offset" data-type="lt" class="layui-btn layui-btn-primary">左上弹出</button>
            <button data-method="offset" data-type="lb" class="layui-btn layui-btn-primary">左下弹出</button>
            <button data-method="offset" data-type="rt" class="layui-btn layui-btn-primary">右上弹出</button>
            <button data-method="offset" data-type="rb" class="layui-btn layui-btn-primary">右下弹出</button>
            <button data-method="offset" data-type="auto" class="layui-btn layui-btn-primary">居中弹出</button>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
{{-- <script src="{{ asset('layui-v2.4.3/layui.js') }}"></script> --}}
<script>
// layui.use(['layer', 'jquery', 'element', 'router'], function(){
//   var $ = layui.jquery
// //   ,admin = layui.admin
//   ,element = layui.element
//   ,router = layui.router();

//   element.render();

//   var active = {
//     setTop: function(){
//       var that = this;
//       layer.open({
//         type: 1
//         ,title: '当你选择该窗体时，即会在最顶端'
//         ,area: ['390px', '260px']
//         ,shade: 0
//         ,maxmin: true
//         ,offset: [
//           Math.random()*($(window).height()-300)
//           ,Math.random()*($(window).width()-390)
//         ]
//         ,content: '<div style="padding: 20px;">当你的页面有很多很多layer窗口，你需要像Window窗体那样，点击某个窗口，该窗体就置顶在上面，那么layer.setTop()可以来轻松实现。它采用巧妙的逻辑，以使这种置顶的性能达到最优。</div>'
//         ,btn: ['继续弹出', '全部关闭']
//         ,yes: function(){
//           $(that).click();
//         }
//         ,btn2: function(){
//           layer.closeAll();
//         }

//         ,zIndex: layer.zIndex
//         ,success: function(layero){
//           layer.setTop(layero);
//         }
//       });
//     }
//     ,confirmTrans: function(){
//       layer.closeAll();
//       layer.msg('大部分参数都是可以公用的<br>合理搭配，展示不一样的风格', {
//         time: 20*1000,
//         btn: ['明白了', '知道了', '哦']
//       });
//     }
//     ,notice: function(){
//       layer.closeAll();
//       layer.open({
//         type: 1
//         ,title: false
//         ,closeBtn: false
//         ,area: '300px;'
//         ,shade: 0.8
//         ,id: 'LAY_layuipro'
//         ,btn: ['火速围观', '残忍拒绝']
//         ,btnAlign: 'c'
//         ,moveType: 1 //拖拽模式，0或者1
//         ,content: '<div style="padding: 50px; line-height: 22px; background-color: #393D49; color: #fff; font-weight: 300;">你知道吗？亲！<br>layer ≠ layui<br><br>layer只是作为Layui的一个弹层模块，由于其用户基数较大，所以常常会有人以为layui是layerui<br><br>layer虽然已被 Layui 收编为内置的弹层模块，但仍然会作为一个独立组件全力维护、升级。<br><br>我们此后的征途是星辰大海 ^_^</div>'
//         ,success: function(layero){
//           var btn = layero.find('.layui-layer-btn');
//           btn.find('.layui-layer-btn0').attr({
//             href: 'http://www.layui.com/'
//             ,target: '_blank'
//           });
//         }
//       });
//     }
//     ,offset: function(othis){
//       var type = othis.data('type')
//       ,text = othis.text();

//       layer.open({
//         type: 1
//         ,offset: type
//         ,id: 'layerDemo'+type
//         ,content: '<div style="padding: 20px 100px;">'+ text +'</div>'
//         ,btn: '关闭全部'
//         ,btnAlign: 'c'
//         ,shade: 0
//         ,yes: function(){
//           layer.closeAll();
//         }
//       });
//     }
//   };

//   $('#LAY-component-layer-special-demo .layadmin-layer-demo .layui-btn').on('click', function(){
//     var othis = $(this), method = othis.data('method');
//     active[method] ? active[method].call(this, othis) : '';
//   });
// });
layui.use('layer', function(){ //独立版的layer无需执行这一句
  var $ = layui.jquery, layer = layui.layer; //独立版的layer无需执行这一句

  //触发事件
  var active = {
    setTop: function(){
      var that = this;
      //多窗口模式，层叠置顶
      layer.open({
        type: 2 //此处以iframe举例
        ,title: '当你选择该窗体时，即会在最顶端'
        ,area: ['390px', '260px']
        ,shade: 0
        ,maxmin: true
        ,offset: [ //为了演示，随机坐标
          Math.random()*($(window).height()-300)
          ,Math.random()*($(window).width()-390)
        ]
        ,content: '//layer.layui.com/test/settop.html'
        ,btn: ['继续弹出', '全部关闭'] //只是为了演示
        ,yes: function(){
          $(that).click();
        }
        ,btn2: function(){
          layer.closeAll();
        }

        ,zIndex: layer.zIndex //重点1
        ,success: function(layero){
          layer.setTop(layero); //重点2
        }
      });
    }
    ,confirmTrans: function(){
      //配置一个透明的询问框
      layer.msg('大部分参数都是可以公用的<br>合理搭配，展示不一样的风格', {
        time: 20000, //20s后自动关闭
        btn: ['明白了', '知道了', '哦']
      });
    }
    ,notice: function(){
      //示范一个公告层
      layer.open({
        type: 1
        ,title: false //不显示标题栏
        ,closeBtn: false
        ,area: '300px;'
        ,shade: 0.8
        ,id: 'LAY_layuipro' //设定一个id，防止重复弹出
        ,btn: ['火速围观', '残忍拒绝']
        ,btnAlign: 'c'
        ,moveType: 1 //拖拽模式，0或者1
        ,content: '<div style="padding: 50px; line-height: 22px; background-color: #393D49; color: #fff; font-weight: 300;">你知道吗？亲！<br>layer ≠ layui<br><br>layer只是作为Layui的一个弹层模块，由于其用户基数较大，所以常常会有人以为layui是layerui<br><br>layer虽然已被 Layui 收编为内置的弹层模块，但仍然会作为一个独立组件全力维护、升级。<br><br>我们此后的征途是星辰大海 ^_^</div>'
        ,success: function(layero){
          var btn = layero.find('.layui-layer-btn');
          btn.find('.layui-layer-btn0').attr({
            href: 'http://www.layui.com/'
            ,target: '_blank'
          });
        }
      });
    }
    ,offset: function(othis){
      var type = othis.data('type')
      ,text = othis.text();

      layer.open({
        type: 1
        ,offset: type //具体配置参考：http://www.layui.com/doc/modules/layer.html#offset
        ,id: 'layerDemo'+type //防止重复弹出
        ,content: '<div style="padding: 20px 100px;">'+ text +'</div>'
        ,btn: '关闭全部'
        ,btnAlign: 'c' //按钮居中
        ,shade: 0 //不显示遮罩
        ,yes: function(){
          layer.closeAll();
        }
      });
    }
  };

//   $('#layerDemo .layui-btn').on('click', function(){
//     var othis = $(this), method = othis.data('method');
//     active[method] ? active[method].call(this, othis) : '';
//   });
$('#LAY-component-layer-special-demo .layadmin-layer-demo .layui-btn').on('click', function(){
    var othis = $(this), method = othis.data('method');
    active[method] ? active[method].call(this, othis) : '';
  });

});
</script></div>
  </div>
@stop
