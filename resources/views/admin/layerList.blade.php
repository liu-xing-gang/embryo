@extends('admin.common.layout')
@section('content')
<div class="layui-body" id="LAY_app_body">
    <div class="layadmin-tabsbody-item layui-show"><div class="layui-card layadmin-header">
  <div class="layui-breadcrumb" lay-filter="breadcrumb" style="visibility: visible;">
    <a lay-href="">主页</a><span lay-separator="">/</span>
    <a><cite>组件</cite></a><span lay-separator="">/</span>
    <a href="http://layer.layui.com/" target="_blank">layer</a><span lay-separator="">/</span>
    <a><cite>功能演示</cite></a>
  </div>
</div><style>
/* 这段样式只是用于演示 */
#LAY-component-layer-list .layui-card-body{padding-top: 15px;}
</style><div class="layui-fluid" id="LAY-component-layer-list">
  <div class="layui-row layui-col-space15">
    <div class="layui-col-md12">
      <div class="layui-card demo-component-layer">
        <div class="layui-card-header">弹层之美</div>
        <div class="layui-card-body">

          <blockquote class="layui-elem-quote">
            layer 是 layui 中最广为人知的组件，它可以轻松应对 Web 应用开发中的各类复杂的弹出交互。有人说使用 layer 是一种情怀，一旦用上了，就离不开了。有多少人是因为 layer 才选择 layui 的呢，有一种信仰，叫：无条件相信
          </blockquote>

        </div>
      </div>

      <div class="layui-card">
        <div class="layui-card-header">弹层类型</div>
        <div class="layui-card-body">

          <div class="layui-btn-container layadmin-layer-demo">
            <button class="layui-btn layui-btn-primary" data-type="test1">Alert</button>
            <button class="layui-btn layui-btn-primary" data-type="test2">Confirm</button>
            <button class="layui-btn layui-btn-primary" data-type="test3">Msg</button>
            <button class="layui-btn layui-btn-primary" data-type="test4">Tips</button>
            <button class="layui-btn layui-btn-primary" data-type="test5">Page</button>
            <button class="layui-btn layui-btn-primary" data-type="test6">Iframe</button>
            <button class="layui-btn layui-btn-primary" data-type="test7">Prompt</button>
            <button class="layui-btn layui-btn-primary" data-type="test8">Tab</button>
            <button class="layui-btn layui-btn-primary" data-type="test9">Photos</button>
          </div>

        </div>
      </div>
      <div class="layui-card">
        <div class="layui-card-header">常规使用</div>
        <div class="layui-card-body">

          <div class="layui-btn-container layadmin-layer-demo">
            <button class="layui-btn layui-btn-primary" data-type="test10">信息框</button>
            <button class="layui-btn layui-btn-primary" data-type="test11">询问层</button>
            <button class="layui-btn layui-btn-primary" data-type="test12">提示层</button>
            <button class="layui-btn layui-btn-primary" data-type="test13">墨绿深蓝风</button>
            <button class="layui-btn layui-btn-primary" data-type="test14">捕获页</button>
            <button class="layui-btn layui-btn-primary" data-type="test15">页面层</button>
            <button class="layui-btn layui-btn-primary" data-type="test16">自定风格</button>
            <button class="layui-btn layui-btn-primary" data-type="test17">tips层1</button>
            <button class="layui-btn layui-btn-primary" data-type="test18">tips层2</button>
            <button class="layui-btn layui-btn-primary" data-type="test19">iframe层</button>
            <button class="layui-btn layui-btn-primary" data-type="test20">iframe窗</button>
            <button class="layui-btn layui-btn-primary" data-type="test21">加载层1</button>
            <button class="layui-btn layui-btn-primary" data-type="test22">加载层2</button>
            <button class="layui-btn layui-btn-primary" data-type="test23">prompt层</button>
            <button class="layui-btn layui-btn-primary" data-type="test8">tab层</button>
            <button class="layui-btn layui-btn-primary" data-type="test9">相册层</button>
          </div>

        </div>
      </div>
    </div>
    <div class="layui-col-md12">
      <div class="layui-card">
        <div class="layui-card-header">信息框</div>
        <div class="layui-card-body">

          <div class="layui-btn-container layadmin-layer-demo">
            <button class="layui-btn layui-btn-primary" data-type="test26">例1</button>
            <button class="layui-btn layui-btn-primary" data-type="test27">例2</button>
            <button class="layui-btn layui-btn-primary" data-type="test28">例3</button>
            <button class="layui-btn layui-btn-primary" data-type="test29">例4</button>
            <button class="layui-btn layui-btn-primary" data-type="test30">例5</button>
            <button class="layui-btn layui-btn-primary" data-type="test31">例6</button>

          </div>

        </div>
      </div>
    </div>
    <div class="layui-col-md12">
      <div class="layui-card">
        <div class="layui-card-header">页面层与iframe层</div>
        <div class="layui-card-body">

          <div class="layui-btn-container layadmin-layer-demo">
            <button class="layui-btn layui-btn-primary" data-type="test33">自定义页面</button>
            <button class="layui-btn layui-btn-primary" data-type="test35" id="LAY_layer_iframe_demo">iframe父子通讯</button>
            <button class="layui-btn layui-btn-primary" data-type="test36">禁止iframe滚动条</button>
          </div>

        </div>
      </div>
    </div>
    <div class="layui-col-md12">
      <div class="layui-card">
        <div class="layui-card-header">加载层</div>
        <div class="layui-card-body">

          <div class="layui-btn-container layadmin-layer-demo">
            <button class="layui-btn layui-btn-primary" data-type="test37">风格1</button>
            <button class="layui-btn layui-btn-primary" data-type="test38">风格2</button>
            <button class="layui-btn layui-btn-primary" data-type="test39">风格3</button>
            <button class="layui-btn layui-btn-primary" data-type="test40">风格4</button>
          </div>

        </div>
      </div>
    </div>
    <div class="layui-col-md12">
      <div class="layui-card">
        <div class="layui-card-header">tips层</div>
        <div class="layui-card-body">

          <div class="layui-btn-container layadmin-layer-demo">
            <button class="layui-btn layui-btn-primary" data-type="test41">显示在上</button>
            <button class="layui-btn layui-btn-primary" data-type="test42">显示在右</button>
            <button class="layui-btn layui-btn-primary" data-type="test43">显示在下</button>
            <button class="layui-btn layui-btn-primary" data-type="test44">显示在左</button>
            <button class="layui-btn layui-btn-primary" data-type="test45">不销毁上一个tips</button>
          </div>

        </div>
      </div>
    </div>
    <div class="layui-col-md12">
      <div class="layui-card">
        <div class="layui-card-header">其它示例</div>
        <div class="layui-card-body">

          <div class="layui-btn-container layadmin-layer-demo">
            <button class="layui-btn layui-btn-primary" data-type="test47">最大化弹出</button>
            <button class="layui-btn layui-btn-primary" data-type="test48">显示在正上方</button>
          </div>

        </div>
      </div>
    </div>
  </div>
</div><script>
layui.use(['admin', 'layer'], function(){
  var $ = layui.$
  ,admin = layui.admin
  ,element = layui.element
  ,layer = layui.layer;

  element.render();

  /* 触发弹层 */
  var active = {
    test1: function(){
      layer.alert('你好，体验者');
    }
    ,test2: function(){
      layer.confirm('您是如何看待前端开发？', {
        btn: ['重要','奇葩'] //按钮
      }, function(){
        layer.msg('的确很重要', {icon: 1});
      }, function(){
        layer.msg('也可以这样', {
          time: 20000, //20s后自动关闭
          btn: ['明白了', '知道了']
        });
      });
    }
    ,test3: function(){
      layer.msg('玩命提示中');
    }
    ,test4: function(){
      layer.tips('Hi，我是一个提示', this, {tips: 1});
    }
    ,test5: function(){
       layer.open({
        title:'页面层'
        ,type: 1
        //,skin: 'layui-layer-rim'
        ,shadeClose: true
        ,area: admin.screen() < 2 ? ['80%', '300px'] : ['700px', '500px']
        ,content: '<div style="padding: 20px;">放入任意HTML</div>'
      });
    }
    ,test6: function(){
      layer.open({
        type: 2
        ,content: 'http://fly.layui.com/'
        ,shadeClose: true
        ,area: admin.screen() < 2 ? ['100%', '80%'] : ['375px', '500px']
        ,maxmin: true
      });
    }
    ,test7: function(){
      layer.prompt({title: '输入任何口令，并确认', formType: 1}, function(pass, index){
        layer.close(index);
        layer.prompt({title: '随便写点啥，并确认', formType: 2}, function(text, index){
          layer.close(index);
          layer.msg('演示完毕！您的口令：'+ pass +'<br>您最后写下了：'+text);
        });
      });
    }
    ,test8: function(){
      layer.tab({
        area: admin.screen() < 2 ? ['100%', '80%'] : ['600px', '300px'],
        tab: [{
          title: 'TAB1',
          content: '<div style="padding:20px;">内容1</div>'
        }, {
          title: 'TAB2',
          content: '<div style="padding:20px;">内容2</div>'
        }]
      });
    }
    ,test9: function(){
      $.getJSON('./json/layer/photos.js', function(json){
        layer.photos({
          photos: json //格式见API文档手册页
        });
      });
    }
    ,test10: function(){
      var icon = -1;
      (function changeIcon(){
        var index = layer.alert('Hi，你好！ 点击确认更换图标', {
          icon: icon,
          shadeClose: true,
          title: icon === -1 ? '初体验 - layer '+layer.v : 'icon：'+icon + ' - layer '+layer.v
        }, changeIcon);
        if(8 === ++icon) layer.close(index);
      }());
    }
    ,test11: function(){
      layer.confirm('真的吗？', function(index){
        layer.msg('哦')
        layer.close(index);
      });
    }
    ,test12: function(){
      layer.msg('玩了命提示中');
    }
    ,test13: function(){
      //墨绿深蓝风
      layer.alert('墨绿风格，点击确认看深蓝', {
        skin: 'layui-layer-molv'
        ,closeBtn: 0
      }, function(){
        layer.alert('偶吧深蓝style', {
          skin: 'layui-layer-lan'
          ,closeBtn: 0
          ,anim: 4
        });
      });
    }
    ,test14: function(){
      layer.open({
        type: 1,
        shade: false,
        title: false,
        content: $('.demo-component-layer'),
        cancel: function(){
          setTimeout(function(){
            layer.tips('捕获就是从页面已经存在的元素上，包裹 layer 的结构，从而弹出显示。是不是比较好玩呢？', '.demo-component-layer', {
              tips: 3, time: 5000
            });
          }, 300);
        }
      });
    }
    ,test15: function(){
      layer.open({
        type: 1,
        skin: 'layui-layer-rim',
        area: ['420px', '240px'],
        content: '<div style="padding: 10px;">任意html内容</div>'
      });
    }
    ,test16: function(){
      layer.open({
        type: 1,
        skin: 'layui-layer-admin',
        closeBtn: false,
        area: '350px',
        anim: 5,
        shadeClose: true,
        content: '<div style="padding:20px;">即传入skin:"样式名"，然后你就可以为所欲为了。你怎么样给她整容都行</div>'
      });
    }
    ,test17: function(){
      layer.tips('Hi，我是tips', this, {
        tips: 1
      });
    }
    ,test18: function(){
      layer.tips('我是另外一个tips，只不过我长得跟之前那位稍有些不一样。', this, {
        tips: [3, '#2F9688'],
        time: 4000
      });
    }
    ,test19: function(){
      layer.open({
        type: 2,
        title: '贤心博客',
        shadeClose: true,
        shade: 0.8,
        area: ['375px', '500px'],
        content: 'http://sentsin.com/'
      });
    }
    ,test20: function(){
      layer.open({
        type: 2,
        title: '百度一下',
        shade: false,
        maxmin: true,
        area: ['90%', '90%'],
        content: 'http://www.baidu.com/'
      });
    }
    ,test21: function(){
      var ii = layer.load(0, {shade: false});
      setTimeout(function(){
        layer.close(ii)
      }, 3000);
    }
    ,test22: function(){
      var iii = layer.load(1, {
        shade: [0.1,'#fff']
      });
      setTimeout(function(){
        layer.close(iii)
      }, 3000);
    }
    ,test23: function(){
      layer.prompt({title: '写点什么吧'}, function(value, index){
        layer.msg('你写下了：'+ value, {
          icon: 6
          ,shade: 0.9
        }, function(){
          layer.close(index);
        });
      });
    }

    ,test26: function(){
      layer.alert('见到你真的很高兴', {icon: 6});
    }
    ,test27: function(){
      layer.msg('你确定你很帅么？', {
        time: 0 //不自动关闭
        ,btn: ['必须啊', '丑到爆']
        ,yes: function(index){
          layer.close(index);
          layer.msg('雅蠛蝶 O.o', {
            icon: 6
            ,time: 0
            ,btn: ['嗷','嗷','嗷']
          });
        }
      });
    }
    ,test28: function(){
      layer.msg('这是最常用的吧');
    }
    ,test29: function(){
      layer.msg('并不十分开心。。', {icon: 5});
    }
    ,test30: function(){
      layer.msg('玩命卖萌中', function(){
        layer.msg('卖完了');
      });
    }
    ,test31: function(){
      layer.confirm('真的删除吗？', function(){
        layer.msg('正在删除', {icon: 16}, function(){
          layer.msg('成功删除', {icon: 1})
        });
      });
    }

    ,test33: function(){
      layer.open({
        type: 1,
        title: false,
        closeBtn: 0,
        shadeClose: true,
        skin: 'yourClass',
        content: '<div style="padding: 20px; width: 260px; height: 180px;">自定义HTML内容</div>'
      });
    }

    ,test35: function(){
      layer.open({
        type: 2,
        area: ['700px', '450px'],
        fixed: false,
        maxmin: true,
        content: layui.setter.base + 'views/iframe/layer/iframe.html'
      });
    }
    ,test36: function(){
      layer.open({
        type: 2,
        area: ['360px', '500px'],
        skin: 'layui-layer-rim',
        content: ['http://sentsin.com/', 'no']
      });
    }
    ,test37: function(){
      layer.load();
      setTimeout(function(){
        layer.closeAll('loading');
      }, 2000);
    }
    ,test38: function(){
      layer.load(1);
      setTimeout(function(){
        layer.closeAll('loading');
      }, 2000);
    }
    ,test39: function(){
      layer.load(2);
      setTimeout(function(){
        layer.closeAll('loading');
      }, 2000);
    }
    ,test40: function(){
      layer.msg('加载中', {
        icon: 16
        ,shade: 0.01
      });
    }
    ,test41: function(){
      layer.tips('上', this, {
        tips: [1, '#000']
      });
    }
    ,test42: function(){
      layer.tips('默认就是向右的，3秒后关闭', this);
    }
    ,test43: function(){
      layer.tips('下', this, {
        tips: 3
      });
    }
    ,test44: function(){
      layer.tips('在很久很久以前，在很久很久以前，在很久很久以前……', this, {
        tips: [4, '#78BA32']
      });
    }
    ,test45: function(){
      layer.tips('不会销毁之前的', this, {tipsMore: true});
    }

    ,test47: function(){
      var index = layer.open({
        type: 2,
        content: 'http://baidu.com',
        area: ['300px', '300px'],
        maxmin: true
      });
      layer.full(index);
    }
    ,test48: function(){
      layer.msg('灵活运用 offset', {
        offset: 't',
        anim: 6
      });
    }
  };


  $('#LAY-component-layer-list .layadmin-layer-demo .layui-btn').on('click', function(){
    var type = $(this).data('type');
    active[type] && active[type].call(this);
  });

});
</script></div>
  </div>
@stop
