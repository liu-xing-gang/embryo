@extends('admin.common.layout')
@section('content')
<div class="layui-body" id="LAY_app_body">
        <div class="layadmin-tabsbody-item layui-show"><script type="text/html" template="">
      <link rel="stylesheet" href="@{{ layui.setter.base }}style/template.css?v=@{{ layui.admin.v }}-1" media="all">
    </script> <link rel="stylesheet" href="./dist/style/template.css?v=1.1.0 pro-1" media="all"> <div class="layui-card layadmin-header">
      <div class="layui-breadcrumb" lay-filter="breadcrumb" style="visibility: visible;">
        <a lay-href="">主页</a><span lay-separator="">/</span>
        <a><cite>页面</cite></a><span lay-separator="">/</span>
        <a><cite>搜索结果</cite></a>
      </div>
    </div><div class="layui-fluid">
      <div class="layui-row layui-col-space15">
        <div class="layui-col-md12">
          <div class="layui-card layadmin-serach-main">
            <div class="layui-card-header">
              <p style="font-size: 18px;">
                <span style="color: #01AAED">关键词</span> 查询到
                <strong>66</strong> 个结果
              </p>
              <p class="layadmin-font-em">耗时：350ms</p>
            </div>
            <div class="layui-card-body">

              <ul class="layadmin-serach-list layui-text">
                <li>
                  <div class="layui-serachlist-text">
                    <h3><a href="http://www.layui.com/admin/" target="_blank">心姐是男是女？</a></h3>
                    <p>江湖上关于<em>心姐</em> 的性别一直是个谜。。江湖上关于心姐的性别一直是个谜。。江湖上关于心姐的性别一直是个谜。。江湖上关于心姐的性别一直是个谜。。江湖上关于心姐的性别一直是个谜。。江湖上关于心姐的性别一直是个谜。。江湖上关于心姐的性别一直是个谜。。江湖上关于心姐的性别一直是个谜。。江湖上关于心姐的性别一直是个谜。。江湖上关于心姐的性别一直是个谜。。</p>
                  </div>
                </li>
                <li>
                  <a href="http://www.layui.com/admin/" target="_blank" class="layui-serachlist-cover">
                    <script type="text/html" template="">
                      <img src="{{asset('images/layui-logo.jpg')}}">
                    </script> <img src="{{asset('images/layui-logo.jpg')}}">
                  </a>
                  <div class="layui-serachlist-text">
                    <h3><a href="http://www.layui.com/admin/" target="_blank">layuiAdmin 成为国内颇受欢迎的通用后台模板解决方案</a></h3>
                    <p>作为 layui 官方推出的后台模板，从初版的饱受争议，到后续的埋头丰富，逐步用行动赢得了许多人的关注。目前 layuiAdmin 在国内后台系统应用市场，占据了相当大的份额，几乎已成为开发者的不二选择。这得益于 layui 本身所积累的用户规模，更得益于开发团队的付出，用我们的方式，用心做好一款产品。</p>
                  </div>
                </li>
                <li>
                  <div class="layui-serachlist-text">
                    <h3><a href="http://www.layui.com/admin/" target="_blank">心姐是男是女？</a></h3>
                    <p>江湖上关于<em>心姐</em> 的性别一直是个谜。。江湖上关于心姐的性别一直是个谜。。江湖上关于心姐的性别一直是个谜。。江湖上关于心姐的性别一直是个谜。。江湖上关于心姐的性别一直是个谜。。江湖上关于心姐的性别一直是个谜。。江湖上关于心姐的性别一直是个谜。。江湖上关于心姐的性别一直是个谜。。江湖上关于心姐的性别一直是个谜。。江湖上关于心姐的性别一直是个谜。。</p>
                    <p>
                      <span class="layui-badge layui-bg-green">前端</span>
                      <span class="layui-badge layui-bg-blue">性别</span>
                      <span class="layui-badge layui-bg-orange">谜</span>
                    </p>
                  </div>
                </li>
                <li>
                  <div class="layui-serachlist-text">
                    <h3>
                      <span class="layui-badge">热点</span>
                      <a href="http://www.layui.com/admin/" target="_blank">layuiAdmin 通用后台模板</a>
                    </h3>
                    <p>作为 layui 官方推出的后台模板，从初版的饱受争议，到后续的埋头丰富，逐步用行动赢得了许多人的关注。目前 layuiAdmin 在国内后台系统应用市场，占据了相当大的份额，几乎已成为开发者的不二选择。这得益于 layui 本身所积累的用户规模，更得益于开发团队的付出，用我们的方式，用心做好一款产品。</p>
                  </div>
                </li>
                <li>
                  <div class="layui-serachlist-text">
                    <h3><a href="http://www.layui.com/admin/" target="_blank">心姐是男是女？</a></h3>
                    <p>江湖上关于<em>心姐</em> 的性别一直是个谜。。江湖上关于心姐的性别一直是个谜。。江湖上关于心姐的性别一直是个谜。。江湖上关于心姐的性别一直是个谜。。江湖上关于心姐的性别一直是个谜。。江湖上关于心姐的性别一直是个谜。。江湖上关于心姐的性别一直是个谜。。江湖上关于心姐的性别一直是个谜。。江湖上关于心姐的性别一直是个谜。。江湖上关于心姐的性别一直是个谜。。</p>
                  </div>
                </li>
              </ul>
              <div id="LAY-template-search-page" style="text-align: center;"><div class="layui-box layui-laypage layui-laypage-default" id="layui-laypage-1"><a href="javascript:;" class="layui-laypage-prev layui-disabled" data-page="0">上一页</a><span class="layui-laypage-curr"><em class="layui-laypage-em"></em><em>1</em></span><a href="javascript:;" data-page="2">2</a><a href="javascript:;" data-page="3">3</a><a href="javascript:;" data-page="4">4</a><a href="javascript:;" data-page="5">5</a><span class="layui-laypage-spr">…</span><a href="javascript:;" class="layui-laypage-last" title="尾页" data-page="7">7</a><a href="javascript:;" class="layui-laypage-next" data-page="2">下一页</a></div></div>

            </div>
          </div>
        </div>
      </div>
    </div><script>
    layui.use(['admin', 'laypage'], function(){
      var laypage = layui.laypage;

      laypage.render({
        elem: 'LAY-template-search-page'
        ,count: 66
        ,jump: function(obj, first){
          if(!first){
            layer.msg('第'+ obj.curr +'页');
          }
        }
      });
    });
    </script></div>
      </div>
@stop