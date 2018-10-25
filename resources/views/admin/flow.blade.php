@extends('admin.common.layout')
@section('content')
<div class="layui-body" id="LAY_app_body">
    <div class="layadmin-tabsbody-item layui-show"><style>
    #LAY-flow-demo .flow-default{width: 600px; height: 400px; overflow: auto; font-size: 0;}
    #LAY-flow-demo .flow-default li{display: inline-block; margin: 0 5px; font-size: 14px; width: 48%;  margin-bottom: 10px; height: 100px; line-height: 100px; text-align: center; background-color: #eee;}
    #LAY-flow-demo .flow-default img{width: 100%; height: 100%;}
    #LAY-flow-demo .site-demo-flow{width: 600px; height: 300px; overflow: auto; text-align: center;}
    #LAY-flow-demo .site-demo-flow img{width: 40%; height: 200px; margin: 0 2px 5px 0; border: none;}

    @media screen and (max-width: 768px) {
      #LAY-flow-demo .flow-default,
      #LAY-flow-demo .site-demo-flow{width: 100%;}
      #LAY-flow-demo .flow-default li{width: 45%}
      #LAY-flow-demo .site-demo-flow img{height: 150px;}
    }
  </style><div class="layui-card layadmin-header">
    <div class="layui-breadcrumb" lay-filter="breadcrumb" style="visibility: visible;">
      <a lay-href="">主页</a><span lay-separator="">/</span>
      <a><cite>组件</cite></a><span lay-separator="">/</span>
      <a><cite>流加载</cite></a>
    </div>
  </div><div class="layui-fluid" id="LAY-flow-demo">
    <div class="layui-row layui-col-space15">
      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">信息流 - 滚动加载</div>
          <div class="layui-card-body">
            <ul class="flow-default" id="test-flow-auto"><li>1</li><li>2</li><li>3</li><li>4</li><li>5</li><li>6</li><li>7</li><li>8</li><li>9</li><li>10</li><li>11</li><li>12</li><li>13</li><li>14</li><li>15</li><li>16</li><li>17</li><li>18</li><li>19</li><li>20</li><li>21</li><li>22</li><li>23</li><li>24</li><div class="layui-flow-more"><a href="javascript:;"><cite>加载更多</cite></a></div></ul>
          </div>
        </div>
      </div>

      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">信息流 - 手工加载</div>
          <div class="layui-card-body">
            <ul class="flow-default" style="height: 300px;" id="test-flow-manual"><li><img src="http://s17.mogucdn.com/p2/161011/upload_279h87jbc9l0hkl54djjjh42dc7i1_800x480.jpg?v=1"></li><li><img src="http://s17.mogucdn.com/p2/161011/upload_279h87jbc9l0hkl54djjjh42dc7i1_800x480.jpg?v=2"></li><li><img src="http://s17.mogucdn.com/p2/161011/upload_279h87jbc9l0hkl54djjjh42dc7i1_800x480.jpg?v=3"></li><li><img src="http://s17.mogucdn.com/p2/161011/upload_279h87jbc9l0hkl54djjjh42dc7i1_800x480.jpg?v=4"></li><li><img src="http://s17.mogucdn.com/p2/161011/upload_279h87jbc9l0hkl54djjjh42dc7i1_800x480.jpg?v=5"></li><li><img src="http://s17.mogucdn.com/p2/161011/upload_279h87jbc9l0hkl54djjjh42dc7i1_800x480.jpg?v=6"></li><li><img src="http://s17.mogucdn.com/p2/161011/upload_279h87jbc9l0hkl54djjjh42dc7i1_800x480.jpg?v=7"></li><li><img src="http://s17.mogucdn.com/p2/161011/upload_279h87jbc9l0hkl54djjjh42dc7i1_800x480.jpg?v=8"></li><li><img lay-src="http://s17.mogucdn.com/p2/161011/upload_279h87jbc9l0hkl54djjjh42dc7i1_800x480.jpg?v=9"></li><li><img lay-src="http://s17.mogucdn.com/p2/161011/upload_279h87jbc9l0hkl54djjjh42dc7i1_800x480.jpg?v=10"></li><li><img lay-src="http://s17.mogucdn.com/p2/161011/upload_279h87jbc9l0hkl54djjjh42dc7i1_800x480.jpg?v=11"></li><li><img lay-src="http://s17.mogucdn.com/p2/161011/upload_279h87jbc9l0hkl54djjjh42dc7i1_800x480.jpg?v=12"></li><div class="layui-flow-more"><a href="javascript:;"><cite>加载更多</cite></a></div></ul>
          </div>
        </div>
      </div>

      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">图片懒加载</div>
          <div class="layui-card-body">
            <div class="site-demo-flow" id="test-flow-lazyimg">
              <img src="https://gw.alicdn.com/bao/uploaded/i2/701696736/TB2PNl5ahQa61Bjy0FhXXaalFXa_!!701696736.jpg_400x400q90.jpg?t=1523290753265">
              <img src="https://gw.alicdn.com/bao/uploaded/i2/162734861/TB2V5rsX_gc61BjSZFkXXcTkFXa_!!162734861.jpg_400x400q90.jpg?t=1523290753265">
              <img src="https://gw.alicdn.com/bao/uploaded/i4/69476562/TB2htq4XTka61BjSszfXXXN8pXa_!!69476562.jpg_400x400q90.jpg?t=1523290753265">
              <img src="https://gw.alicdn.com/bao/uploaded/i1/180558071/TB2sy6jXMQc61BjSZFGXXa1DFXa_!!180558071.jpg_400x400q90.jpg?t=1523290753265">
              <img lay-src="https://gw.alicdn.com/bao/uploaded/i2/701696736/TB2PNl5ahQa61Bjy0FhXXaalFXa_!!701696736.jpg_400x400q90.jpg?t=1523290753265">
              <img lay-src="https://gw.alicdn.com/bao/uploaded/i3/285892163/TB2qu2HX9Zb61BjSZPfXXaU.pXa_!!285892163.jpg_400x400q90.jpg?t=1523290753265">
              <img lay-src="https://gw.alicdn.com/bao/uploaded/i2/704998060/TB2S.gAXTgc61BjSZFkXXcTkFXa_!!704998060.jpg_400x400q90.jpg?t=1523290753265">
              <img lay-src="https://gw.alicdn.com/bao/uploaded/i3/117202952/TB25lckX_AX61Bjy0FcXXaSlFXa_!!117202952.jpg_400x400q90.jpg?t=1523290753265">
              <img lay-src="https://gw.alicdn.com/bao/uploaded/i2/162734861/TB2qijoX9Zb61BjSZPfXXaU.pXa_!!162734861.jpg_400x400q90.jpg?t=1523290753265">
              <img lay-src="https://gw.alicdn.com/bao/uploaded/i3/96216586/TB2S7EfXHMc61BjSZFFXXaDLFXa_!!96216586.jpg_400x400q90.jpg?t=1523290753265">
              <img lay-src="https://gw.alicdn.com/bao/uploaded/i8/TB1jSSFNFXXXXcoXFXXYXGcGpXX_M2.SS2_400x400q90.jpg?t=1523290753265">
              <img lay-src="https://gw.alicdn.com/bao/uploaded/i2/162734861/TB2ylbsX37c61BjSZFKXXb6hFXa_!!162734861.jpg_400x400q90.jpg?t=1523290753265">
              <img lay-src="https://gw.alicdn.com/bao/uploaded/i2/117202952/TB2FdyZajUd61BjSZPcXXc6hXXa_!!117202952.jpg_400x400q90.jpg?t=1523290753265">
              <img lay-src="https://gw.alicdn.com/bao/uploaded/i4/777105914/TB2t.qbXZwb61Bjy0FfXXXvlpXa_!!777105914.jpg_400x400q90.jpg?t=1523290753265">
              <img lay-src="https://gw.alicdn.com/bao/uploaded/i4/TB1XzupNFXXXXcpXXXXXXXXXXXX_!!0-item_pic.jpg_400x400q90.jpg?t=1523290753265">
            </div>
          </div>
        </div>
      </div>

    </div>
  </div><script>
  layui.use(['admin', 'flow'], function(){
    var flow = layui.flow;

    flow.load({
      elem: '#test-flow-auto' //流加载容器
      ,scrollElem: '#test-flow-auto' //滚动条所在元素，一般不用填，此处只是演示需要。
      ,done: function(page, next){ //执行下一页的回调

        //模拟数据插入
        setTimeout(function(){
          var lis = [];
          for(var i = 0; i < 8; i++){
            lis.push('<li>'+ ( (page-1)*8 + i + 1 ) +'</li>')
          }

          //执行下一页渲染，第二参数为：满足“加载更多”的条件，即后面仍有分页
          //pages为Ajax返回的总页数，只有当前页小于总页数的情况下，才会继续出现加载更多
          next(lis.join(''), page < 10); //假设总页数为 10
        }, 500);
      }
    });

    flow.load({
      elem: '#test-flow-manual' //流加载容器
      ,scrollElem: '#test-flow-manual' //滚动条所在元素，一般不用填，此处只是演示需要。
      ,isAuto: false
      ,isLazyimg: true
      ,done: function(page, next){ //加载下一页
        //模拟插入
        setTimeout(function(){
          var lis = [];
          for(var i = 0; i < 6; i++){
            lis.push('<li><img lay-src="http://s17.mogucdn.com/p2/161011/upload_279h87jbc9l0hkl54djjjh42dc7i1_800x480.jpg?v='+ ( (page-1)*6 + i + 1 ) +'"></li>')
          }
          next(lis.join(''), page < 6); //假设总页数为 6
        }, 500);
      }
    });

    //按屏加载图片
    flow.lazyimg({
      elem: '#test-flow-lazyimg img'
      ,scrollElem: '#test-flow-lazyimg' //一般不用设置，此处只是演示需要。
    });

  });
  </script></div>
  </div>
@stop
