@extends('admin.common.layout')
@section('content')
{{-- <div id="LAY_app" class="layadmin-tabspage-none layadmin-side-shrink"><div class="layui-layout layui-layout-admin"> --}}
    {{-- header --}}
    {{-- <div class="layui-header">
      <!-- 头部区域 -->
      <ul class="layui-nav layui-layout-left">
        <li class="layui-nav-item layadmin-flexible" lay-unselect="">
          <a href="javascript:;" layadmin-event="flexible" title="侧边伸缩">
            <i class="layui-icon layui-icon-shrink-right" id="LAY_app_flexible"></i>
          </a>
        </li>
        <!--<li class="layui-nav-item layui-this layui-hide-xs layui-hide-sm layui-show-md-inline-block">
          <a lay-href="" title="">
            控制台
          </a>
        </li>-->
        <li class="layui-nav-item layui-hide-xs" lay-unselect="">
          <a href="http://www.layui.com/admin/" target="_blank" title="前台">
            <i class="layui-icon layui-icon-website"></i>
          </a>
        </li>
        <li class="layui-nav-item" lay-unselect="">
          <a href="javascript:;" layadmin-event="refresh" title="刷新">
            <i class="layui-icon layui-icon-refresh-3"></i>
          </a>
        </li>
        <li class="layui-nav-item layui-hide-xs" lay-unselect="">
          <input type="text" placeholder="搜索..." autocomplete="off" class="layui-input layui-input-search" layadmin-event="serach" lay-action="template/search/keywords=">
        </li>
      <span class="layui-nav-bar" style="width: 0px; left: 198px; opacity: 0; top: 48px;"></span></ul>
      <ul class="layui-nav layui-layout-right" lay-filter="layadmin-layout-right">

        <li class="layui-nav-item" lay-unselect="">
          <a lay-href="app/message/" layadmin-event="message">
            <i class="layui-icon layui-icon-notice"></i>

            <!-- 如果有新消息，则显示小圆点 -->
            <script type="text/html" template="" lay-url="./json/message/new.js">
            @{{# if(d.data.newmsg){ }}
              <span class="layui-badge-dot"></span>
            @{{# } }}
            </script>  <span class="layui-badge-dot"></span>

          </a>
        </li>
        <li class="layui-nav-item layui-hide-xs" lay-unselect="">
          <a href="javascript:;" layadmin-event="theme">
            <i class="layui-icon layui-icon-theme"></i>
          </a>
        </li>
        <li class="layui-nav-item layui-hide-xs" lay-unselect="">
          <a href="javascript:;" layadmin-event="note">
            <i class="layui-icon layui-icon-note"></i>
          </a>
        </li>
        <li class="layui-nav-item layui-hide-xs" lay-unselect="">
          <a href="javascript:;" layadmin-event="fullscreen">
            <i class="layui-icon layui-icon-screen-full"></i>
          </a>
        </li>
        <li class="layui-nav-item" lay-unselect="">
          <script type="text/html" template="" lay-url="./json/user/session.js" lay-done="layui.element.render('nav', 'layadmin-layout-right');">
            <a href="javascript:;">
              <cite>@{{ d.data.username }}</cite>
            </a>
            <dl class="layui-nav-child">
              <dd><a lay-href="set/user/info">基本资料</a></dd>
              <dd><a lay-href="set/user/password">修改密码</a></dd>
              <hr>
              <dd layadmin-event="logout" style="text-align: center;"><a>退出</a></dd>
            </dl>
          </script> <a href="javascript:;"> <cite>贤心</cite> <span class="layui-nav-more"></span></a> <dl class="layui-nav-child"> <dd><a lay-href="set/user/info">基本资料</a></dd> <dd><a lay-href="set/user/password">修改密码</a></dd> <hr> <dd layadmin-event="logout" style="text-align: center;"><a>退出</a></dd> </dl>
        </li>

        <li class="layui-nav-item layui-hide-xs" lay-unselect="">
          <a href="javascript:;" layadmin-event="about"><i class="layui-icon layui-icon-more-vertical"></i></a>
        </li>
        <li class="layui-nav-item layui-show-xs-inline-block layui-hide-sm" lay-unselect="">
          <a href="javascript:;" layadmin-event="more"><i class="layui-icon layui-icon-more-vertical"></i></a>
        </li>
      <span class="layui-nav-bar"></span></ul>
    </div> --}}


    <!-- 侧边菜单 -->
    {{-- <div class="layui-side layui-side-menu">
      <div class="layui-side-scroll">
        <script type="text/html" template="" lay-url="./json/menu.js?v=@{{ layui.admin.v }}" lay-done="layui.element.render('nav', 'layadmin-system-side-menu');" id="TPL_layout">

          <div class="layui-logo" lay-href="">
            <span>@{{ layui.setter.name || 'layuiAdmin' }}</span>
          </div>

          <ul class="layui-nav layui-nav-tree" lay-shrink="all" id="LAY-system-side-menu" lay-filter="layadmin-system-side-menu">
          @{{#
            var path =  layui.router().path
            ,pathURL = layui.admin.correctRouter(path.join('/'))
            ,dataName = layui.setter.response.dataName;

            layui.each(d[dataName], function(index, item){
              var hasChildren = typeof item.list === 'object' && item.list.length > 0
              ,classSelected = function(){
                var match = path[0] == item.name || (index == 0 && !path[0])
                || (item.jump && pathURL == layui.admin.correctRouter(item.jump)) || item.spread;
                if(match){
                  return hasChildren ? 'layui-nav-itemed' : 'layui-this';
                }
                return '';
              }
              ,url = (item.jump && typeof item.jump === 'string') ? item.jump : item.name;
          }}
            <li data-name="@{{ item.name || '' }}" data-jump="@{{ item.jump || '' }}" class="layui-nav-item @{{ classSelected() }}">
              <a href="javascript:;" @{{ hasChildren ? '' : 'lay-href="'+ url +'"' }} lay-tips="@{{ item.title }}" lay-direction="2">
                <i class="layui-icon @{{ item.icon }}"></i>
                <cite>@{{ item.title }}</cite>
              </a>
              @{{# if(hasChildren){ }}
                <dl class="layui-nav-child">
                @{{# layui.each(item.list, function(index2, item2){
                  var hasChildren2 = typeof item2.list == 'object' && item2.list.length > 0
                  ,classSelected2 = function(){
                    var match = (path[0] == item.name && path[1] == item2.name)
                    || (item2.jump && pathURL == layui.admin.correctRouter(item2.jump)) || item2.spread;
                    if(match){
                      return hasChildren2 ? 'layui-nav-itemed' : 'layui-this';
                    }
                    return '';
                  }
                  ,url2 = (item2.jump && typeof item2.jump === 'string')
                    ? item2.jump
                  : [item.name, item2.name, ''].join('/');
                }}
                  <dd  data-name="@{{ item2.name || '' }}"  data-jump="@{{ item2.jump || '' }}"
                  @{{ classSelected2() ? ('class="'+ classSelected2() +'"') : '' }}>
                    <a href="javascript:;" @{{ hasChildren2 ? '' : 'lay-href="'+ url2 +'"' }}>@{{ item2.title }}</a>
                    @{{# if(hasChildren2){ }}
                      <dl class="layui-nav-child">
                        @{{# layui.each(item2.list, function(index3, item3){
                          var match = (path[0] == item.name && path[1] == item2.name && path[2] == item3.name)
                          || (item3.jump && pathURL == layui.admin.correctRouter(item3.jump))
                          ,url3 = (item3.jump && typeof item3.jump === 'string')
                            ? item3.jump
                          : [item.name, item2.name, item3.name].join('/')
                        }}
                          <dd data-name="@{{ item3.name || '' }}"  data-jump="@{{ item3.jump || '' }}"
                          @{{ match ? 'class="layui-this"' : '' }}>
                            <a href="javascript:;" lay-href="@{{ url3 }}" @{{ item3.iframe ? 'lay-iframe="true"' : '' }}>@{{ item3.title }}</a>
                          </dd>
                        @{{# }); }}
                      </dl>
                    @{{# } }}
                  </dd>
              @{{# }); }}
              </dl>
              @{{# } }}
            </li>
          @{{# }); }}
          </ul>
        </script> <div class="layui-logo" lay-href=""> <span>layuiAdmin Pro</span> </div> <ul class="layui-nav layui-nav-tree" lay-shrink="all" id="LAY-system-side-menu" lay-filter="layadmin-system-side-menu">  <li data-name="" data-jump="" class="layui-nav-item"> <a href="javascript:;" lay-tips="主页" lay-direction="2"> <i class="layui-icon layui-icon-home"></i> <cite>主页</cite> <span class="layui-nav-more"></span></a>  <dl class="layui-nav-child">  <dd data-name="" data-jump="/"> <a href="javascript:;" lay-href="/">控制台</a>  </dd>  <dd data-name="homepage1" data-jump="home/homepage1"> <a href="javascript:;" lay-href="home/homepage1">主页一</a>  </dd>  <dd data-name="homepage2" data-jump="home/homepage2"> <a href="javascript:;" lay-href="home/homepage2">主页二</a>  </dd>  </dl>  </li>  <li data-name="component" data-jump="" class="layui-nav-item layui-nav-itemed"> <a href="javascript:;" lay-tips="组件" lay-direction="2"> <i class="layui-icon layui-icon-component"></i> <cite>组件</cite> <span class="layui-nav-more"></span></a>  <dl class="layui-nav-child">  <dd data-name="grid" data-jump="" class="layui-nav-itemed"> <a href="javascript:;">栅格<span class="layui-nav-more"></span></a>  <dl class="layui-nav-child">  <dd data-name="list" data-jump=""> <a href="javascript:;" lay-href="component/grid/list">等比例列表排列</a> </dd>  <dd data-name="mobile" data-jump=""> <a href="javascript:;" lay-href="component/grid/mobile">按移动端排列</a> </dd>  <dd data-name="mobile-pc" data-jump=""> <a href="javascript:;" lay-href="component/grid/mobile-pc">移动桌面端组合</a> </dd>  <dd data-name="all" data-jump=""> <a href="javascript:;" lay-href="component/grid/all">全端复杂组合</a> </dd>  <dd data-name="stack" data-jump=""> <a href="javascript:;" lay-href="component/grid/stack">低于桌面堆叠排列</a> </dd>  <dd data-name="speed-dial" data-jump="" class=""> <a href="javascript:;" lay-href="component/grid/speed-dial">九宫格</a> </dd>  </dl>  </dd>  <dd data-name="button" data-jump=""> <a href="javascript:;" lay-href="component/button/">按钮</a>  </dd>  <dd data-name="form" data-jump=""> <a href="javascript:;">表单<span class="layui-nav-more"></span></a>  <dl class="layui-nav-child">  <dd data-name="element" data-jump=""> <a href="javascript:;" lay-href="component/form/element">表单元素</a> </dd>  <dd data-name="group" data-jump=""> <a href="javascript:;" lay-href="component/form/group">表单组合</a> </dd>  </dl>  </dd>  <dd data-name="nav" data-jump=""> <a href="javascript:;" lay-href="component/nav/">导航</a>  </dd>  <dd data-name="tabs" data-jump=""> <a href="javascript:;" lay-href="component/tabs/">选项卡</a>  </dd>  <dd data-name="progress" data-jump="" class="layui-this"> <a href="javascript:;" lay-href="component/progress/">进度条</a>  </dd>  <dd data-name="panel" data-jump=""> <a href="javascript:;" lay-href="component/panel/">面板</a>  </dd>  <dd data-name="badge" data-jump=""> <a href="javascript:;" lay-href="component/badge/">徽章</a>  </dd>  <dd data-name="timeline" data-jump=""> <a href="javascript:;" lay-href="component/timeline/">时间线</a>  </dd>  <dd data-name="anim" data-jump=""> <a href="javascript:;" lay-href="component/anim/">动画</a>  </dd>  <dd data-name="auxiliar" data-jump=""> <a href="javascript:;" lay-href="component/auxiliar/">辅助</a>  </dd>  <dd data-name="layer" data-jump=""> <a href="javascript:;">通用弹层<span class="layui-nav-more"></span></a>  <dl class="layui-nav-child">  <dd data-name="list" data-jump=""> <a href="javascript:;" lay-href="component/layer/list">功能演示</a> </dd>  <dd data-name="special-demo" data-jump=""> <a href="javascript:;" lay-href="component/layer/special-demo">特殊示例</a> </dd>  <dd data-name="theme" data-jump=""> <a href="javascript:;" lay-href="component/layer/theme">风格定制</a> </dd>  </dl>  </dd>  <dd data-name="laydate" data-jump=""> <a href="javascript:;">日期时间<span class="layui-nav-more"></span></a>  <dl class="layui-nav-child">  <dd data-name="demo1" data-jump=""> <a href="javascript:;" lay-href="component/laydate/demo1">功能演示一</a> </dd>  <dd data-name="demo2" data-jump=""> <a href="javascript:;" lay-href="component/laydate/demo2">功能演示二</a> </dd>  <dd data-name="theme" data-jump=""> <a href="javascript:;" lay-href="component/laydate/theme">设定主题</a> </dd>  <dd data-name="special-demo" data-jump=""> <a href="javascript:;" lay-href="component/laydate/special-demo">特殊示例</a> </dd>  </dl>  </dd>  <dd data-name="table" data-jump=""> <a href="javascript:;">表格<span class="layui-nav-more"></span></a>  <dl class="layui-nav-child">  <dd data-name="simple" data-jump=""> <a href="javascript:;" lay-href="component/table/simple">简单数据表格</a> </dd>  <dd data-name="auto" data-jump=""> <a href="javascript:;" lay-href="component/table/auto">列宽自动分配</a> </dd>  <dd data-name="data" data-jump=""> <a href="javascript:;" lay-href="component/table/data">赋值已知数据</a> </dd>  <dd data-name="tostatic" data-jump=""> <a href="javascript:;" lay-href="component/table/tostatic">转化静态表格</a> </dd>  <dd data-name="page" data-jump=""> <a href="javascript:;" lay-href="component/table/page">开启分页</a> </dd>  <dd data-name="resetPage" data-jump=""> <a href="javascript:;" lay-href="component/table/resetPage">自定义分页</a> </dd>  <dd data-name="toolbar" data-jump=""> <a href="javascript:;" lay-href="component/table/toolbar">开启头部工具栏</a> </dd>  <dd data-name="totalRow" data-jump=""> <a href="javascript:;" lay-href="component/table/totalRow">开启合计行</a> </dd>  <dd data-name="height" data-jump=""> <a href="javascript:;" lay-href="component/table/height">高度最大适应</a> </dd>  <dd data-name="checkbox" data-jump=""> <a href="javascript:;" lay-href="component/table/checkbox">开启复选框</a> </dd>  <dd data-name="radio" data-jump=""> <a href="javascript:;" lay-href="component/table/radio">开启单选框</a> </dd>  <dd data-name="cellEdit" data-jump=""> <a href="javascript:;" lay-href="component/table/cellEdit">开启单元格编辑</a> </dd>  <dd data-name="form" data-jump=""> <a href="javascript:;" lay-href="component/table/form">加入表单元素</a> </dd>  <dd data-name="style" data-jump=""> <a href="javascript:;" lay-href="component/table/style">设置单元格样式</a> </dd>  <dd data-name="fixed" data-jump=""> <a href="javascript:;" lay-href="component/table/fixed">固定列</a> </dd>  <dd data-name="operate" data-jump=""> <a href="javascript:;" lay-href="component/table/operate">数据操作</a> </dd>  <dd data-name="parseData" data-jump=""> <a href="javascript:;" lay-href="component/table/parseData">解析任意数据格式</a> </dd>  <dd data-name="onrow" data-jump=""> <a href="javascript:;" lay-href="component/table/onrow">监听行事件</a> </dd>  <dd data-name="reload" data-jump=""> <a href="javascript:;" lay-href="component/table/reload">数据表格的重载</a> </dd>  <dd data-name="initSort" data-jump=""> <a href="javascript:;" lay-href="component/table/initSort">设置初始排序</a> </dd>  <dd data-name="cellEvent" data-jump=""> <a href="javascript:;" lay-href="component/table/cellEvent">监听单元格事件</a> </dd>  <dd data-name="thead" data-jump=""> <a href="javascript:;" lay-href="component/table/thead">复杂表头</a> </dd>  </dl>  </dd>  <dd data-name="laypage" data-jump=""> <a href="javascript:;">分页<span class="layui-nav-more"></span></a>  <dl class="layui-nav-child">  <dd data-name="demo1" data-jump=""> <a href="javascript:;" lay-href="component/laypage/demo1">功能演示一</a> </dd>  <dd data-name="demo2" data-jump=""> <a href="javascript:;" lay-href="component/laypage/demo2">功能演示二</a> </dd>  </dl>  </dd>  <dd data-name="upload" data-jump=""> <a href="javascript:;">上传<span class="layui-nav-more"></span></a>  <dl class="layui-nav-child">  <dd data-name="demo1" data-jump=""> <a href="javascript:;" lay-href="component/upload/demo1">功能演示一</a> </dd>  <dd data-name="demo2" data-jump=""> <a href="javascript:;" lay-href="component/upload/demo2">功能演示二</a> </dd>  </dl>  </dd>  <dd data-name="colorpicker" data-jump=""> <a href="javascript:;" lay-href="component/colorpicker/">颜色选择器</a>  </dd>  <dd data-name="slider" data-jump=""> <a href="javascript:;" lay-href="component/slider/">滑块组件</a>  </dd>  <dd data-name="rate" data-jump=""> <a href="javascript:;" lay-href="component/rate/">评分</a>  </dd>  <dd data-name="carousel" data-jump=""> <a href="javascript:;" lay-href="component/carousel/">轮播</a>  </dd>  <dd data-name="flow" data-jump=""> <a href="javascript:;" lay-href="component/flow/">流加载</a>  </dd>  <dd data-name="util" data-jump=""> <a href="javascript:;" lay-href="component/util/">工具</a>  </dd>  <dd data-name="code" data-jump=""> <a href="javascript:;" lay-href="component/code/">代码修饰</a>  </dd>  <dd data-name="layim" data-jump="senior/im/"> <a href="javascript:;" lay-href="senior/im/">即时聊天</a>  </dd>  </dl>  </li>  <li data-name="template" data-jump="" class="layui-nav-item"> <a href="javascript:;" lay-tips="页面" lay-direction="2"> <i class="layui-icon layui-icon-template"></i> <cite>页面</cite> <span class="layui-nav-more"></span></a>  <dl class="layui-nav-child">  <dd data-name="personalpage" data-jump="template/personalpage"> <a href="javascript:;" lay-href="template/personalpage">个人主页</a>  </dd>  <dd data-name="addresslist" data-jump="template/addresslist"> <a href="javascript:;" lay-href="template/addresslist">通讯录</a>  </dd>  <dd data-name="caller" data-jump="template/caller"> <a href="javascript:;" lay-href="template/caller">客户列表</a>  </dd>  <dd data-name="goodslist" data-jump="template/goodslist"> <a href="javascript:;" lay-href="template/goodslist">商品列表</a>  </dd>  <dd data-name="msgboard" data-jump="template/msgboard"> <a href="javascript:;" lay-href="template/msgboard">留言板</a>  </dd>  <dd data-name="search" data-jump="template/search"> <a href="javascript:;" lay-href="template/search">搜索结果</a>  </dd>  <dd data-name="reg" data-jump="user/reg"> <a href="javascript:;" lay-href="user/reg">注册</a>  </dd>  <dd data-name="login" data-jump="user/login"> <a href="javascript:;" lay-href="user/login">登入</a>  </dd>  <dd data-name="forget" data-jump="user/forget"> <a href="javascript:;" lay-href="user/forget">忘记密码</a>  </dd>  <dd data-name="404" data-jump="template/tips/404"> <a href="javascript:;" lay-href="template/tips/404">404</a>  </dd>  <dd data-name="error" data-jump="template/tips/error"> <a href="javascript:;" lay-href="template/tips/error">错误提示</a>  </dd>  <dd data-name="" data-jump="" class="layui-nav-itemed"> <a href="javascript:;">内嵌页面<span class="layui-nav-more"></span></a>  <dl class="layui-nav-child">  <dd data-name="" data-jump="/iframe/link/baidu"> <a href="javascript:;" lay-href="/iframe/link/baidu">百度一下</a> </dd>  <dd data-name="" data-jump="/iframe/link/layui"> <a href="javascript:;" lay-href="/iframe/link/layui">layui官网</a> </dd>  <dd data-name="" data-jump="/iframe/link/layuiAdmin"> <a href="javascript:;" lay-href="/iframe/link/layuiAdmin">layuiAdmin官网</a> </dd>  </dl>  </dd>  </dl>  </li>  <li data-name="app" data-jump="" class="layui-nav-item"> <a href="javascript:;" lay-tips="应用" lay-direction="2"> <i class="layui-icon layui-icon-app"></i> <cite>应用</cite> <span class="layui-nav-more"></span></a>  <dl class="layui-nav-child">  <dd data-name="content" data-jump=""> <a href="javascript:;">内容系统<span class="layui-nav-more"></span></a>  <dl class="layui-nav-child">  <dd data-name="list" data-jump=""> <a href="javascript:;" lay-href="app/content/list">文章列表</a> </dd>  <dd data-name="tags" data-jump=""> <a href="javascript:;" lay-href="app/content/tags">分类管理</a> </dd>  <dd data-name="comment" data-jump=""> <a href="javascript:;" lay-href="app/content/comment">评论管理</a> </dd>  </dl>  </dd>  <dd data-name="forum" data-jump=""> <a href="javascript:;">社区系统<span class="layui-nav-more"></span></a>  <dl class="layui-nav-child">  <dd data-name="list" data-jump=""> <a href="javascript:;" lay-href="app/forum/list">帖子列表</a> </dd>  <dd data-name="replys" data-jump=""> <a href="javascript:;" lay-href="app/forum/replys">回帖列表</a> </dd>  </dl>  </dd>  <dd data-name="message" data-jump=""> <a href="javascript:;" lay-href="app/message/">消息中心</a>  </dd>  <dd data-name="workorder" data-jump="app/workorder/list"> <a href="javascript:;" lay-href="app/workorder/list">工单系统</a>  </dd>  </dl>  </li>  <li data-name="senior" data-jump="" class="layui-nav-item"> <a href="javascript:;" lay-tips="高级" lay-direction="2"> <i class="layui-icon layui-icon-senior"></i> <cite>高级</cite> <span class="layui-nav-more"></span></a>  <dl class="layui-nav-child">  <dd data-name="im" data-jump=""> <a href="javascript:;" lay-href="senior/im/">通讯系统</a>  </dd>  <dd data-name="echarts" data-jump=""> <a href="javascript:;">Echarts集成<span class="layui-nav-more"></span></a>  <dl class="layui-nav-child">  <dd data-name="line" data-jump=""> <a href="javascript:;" lay-href="senior/echarts/line">折线图</a> </dd>  <dd data-name="bar" data-jump=""> <a href="javascript:;" lay-href="senior/echarts/bar">柱状图</a> </dd>  <dd data-name="map" data-jump=""> <a href="javascript:;" lay-href="senior/echarts/map">地图</a> </dd>  </dl>  </dd>  </dl>  </li>  <li data-name="user" data-jump="" class="layui-nav-item"> <a href="javascript:;" lay-tips="用户" lay-direction="2"> <i class="layui-icon layui-icon-user"></i> <cite>用户</cite> <span class="layui-nav-more"></span></a>  <dl class="layui-nav-child">  <dd data-name="user" data-jump="user/user/list"> <a href="javascript:;" lay-href="user/user/list">网站用户</a>  </dd>  <dd data-name="administrators-list" data-jump="user/administrators/list"> <a href="javascript:;" lay-href="user/administrators/list">后台管理员</a>  </dd>  <dd data-name="administrators-rule" data-jump="user/administrators/role"> <a href="javascript:;" lay-href="user/administrators/role">角色管理</a>  </dd>  </dl>  </li>  <li data-name="set" data-jump="" class="layui-nav-item"> <a href="javascript:;" lay-tips="设置" lay-direction="2"> <i class="layui-icon layui-icon-set"></i> <cite>设置</cite> <span class="layui-nav-more"></span></a>  <dl class="layui-nav-child">  <dd data-name="system" data-jump="" class="layui-nav-itemed"> <a href="javascript:;">系统设置<span class="layui-nav-more"></span></a>  <dl class="layui-nav-child">  <dd data-name="website" data-jump=""> <a href="javascript:;" lay-href="set/system/website">网站设置</a> </dd>  <dd data-name="email" data-jump=""> <a href="javascript:;" lay-href="set/system/email">邮件服务</a> </dd>  </dl>  </dd>  <dd data-name="user" data-jump="" class="layui-nav-itemed"> <a href="javascript:;">我的设置<span class="layui-nav-more"></span></a>  <dl class="layui-nav-child">  <dd data-name="info" data-jump=""> <a href="javascript:;" lay-href="set/user/info">基本资料</a> </dd>  <dd data-name="password" data-jump=""> <a href="javascript:;" lay-href="set/user/password">修改密码</a> </dd>  </dl>  </dd>  </dl>  </li>  <li data-name="get" data-jump="system/get" class="layui-nav-item"> <a href="javascript:;" lay-href="system/get" lay-tips="授权" lay-direction="2"> <i class="layui-icon layui-icon-auz"></i> <cite>授权</cite> </a>  </li>  <span class="layui-nav-bar" style="top: 84px; height: 0px; opacity: 0;"></span></ul>
      </div>
    </div> --}}


    <!-- 页面标签 -->
    {{-- <script type="text/html" template="" lay-done="layui.element.render('nav', 'layadmin-pagetabs-nav')">
      @{{# if(layui.setter.pageTabs){ }}
      <div class="layadmin-pagetabs" id="LAY_app_tabs">
        <div class="layui-icon layadmin-tabs-control layui-icon-prev" layadmin-event="leftPage"></div>
        <div class="layui-icon layadmin-tabs-control layui-icon-next" layadmin-event="rightPage"></div>
        <div class="layui-icon layadmin-tabs-control layui-icon-down">
          <ul class="layui-nav layadmin-tabs-select" lay-filter="layadmin-pagetabs-nav">
            <li class="layui-nav-item" lay-unselect>
              <a href="javascript:;"></a>
              <dl class="layui-nav-child layui-anim-fadein">
                <dd layadmin-event="closeThisTabs"><a href="javascript:;">关闭当前标签页</a></dd>
                <dd layadmin-event="closeOtherTabs"><a href="javascript:;">关闭其它标签页</a></dd>
                <dd layadmin-event="closeAllTabs"><a href="javascript:;">关闭全部标签页</a></dd>
              </dl>
            </li>
          </ul>
        </div>
        <div class="layui-tab" lay-unauto lay-allowClose="true" lay-filter="layadmin-layout-tabs">
          <ul class="layui-tab-title" id="LAY_app_tabsheader">
            <li lay-id="/"><i class="layui-icon layui-icon-home"></i></li>
          </ul>
        </div>
      </div>
      @{{# } }}
    </script> --}}


    <!-- 主体内容 -->
    <div class="layui-body" id="LAY_app_body">
      <div class="layadmin-tabsbody-item layui-show"><div class="layui-card layadmin-header">
    <div class="layui-breadcrumb" lay-filter="breadcrumb" style="visibility: visible;">
      <a lay-href="">主页</a><span lay-separator="">/</span>
      <a><cite>组件</cite></a><span lay-separator="">/</span>
      <a><cite>进度条</cite></a>
    </div>
  </div><style>
  /* 这段样式只是用于演示 */
  .layui-progress{margin: 20px 0;}
  </style><div class="layui-fluid" id="LAY-component-progress">
    <div class="layui-row layui-col-space15">
      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">默认进度条</div>
          <div class="layui-card-body">

            <div class="layui-progress">
              <div class="layui-progress-bar" lay-percent="50%" style="width: 50%;"></div>
            </div>
            <div class="layui-row layui-col-space15">
              <div class="layui-col-xs6">
                <div class="layui-progress">
                  <div class="layui-progress-bar" lay-percent="50%" style="width: 50%;"></div>
                </div>
              </div>
              <div class="layui-col-xs6">
                <div class="layui-progress">
                  <div class="layui-progress-bar" lay-percent="50%" style="width: 50%;"></div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">更多颜色进度条</div>
          <div class="layui-card-body">

            <div class="layui-progress">
              <div class="layui-progress-bar layui-bg-red" lay-percent="20%" style="width: 20%;"></div>
            </div>

            <div class="layui-progress">
              <div class="layui-progress-bar layui-bg-orange" lay-percent="30%" style="width: 30%;"></div>
            </div>

            <div class="layui-progress">
              <div class="layui-progress-bar layui-bg-green" lay-percent="40%" style="width: 40%;"></div>
            </div>

            <div class="layui-progress">
              <div class="layui-progress-bar layui-bg-blue" lay-percent="50%" style="width: 50%;"></div>
            </div>

            <div class="layui-progress">
              <div class="layui-progress-bar layui-bg-cyan" lay-percent="60%" style="width: 60%;"></div>
            </div>

            <div class="layui-progress layui-progress-big">
              <div class="layui-progress-bar" lay-percent="20%" style="width: 20%;"></div>
            </div>
            <div class="layui-progress layui-progress-big">
              <div class="layui-progress-bar layui-bg-green" lay-percent="35%" style="width: 35%;"></div>
            </div>
            <div class="layui-progress layui-progress-big">
              <div class="layui-progress-bar layui-bg-cyan" lay-percent="75%" style="width: 75%;"></div>
            </div>

          </div>
        </div>
      </div>
      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">动态改变进度</div>
          <div class="layui-card-body">

              <div class="layui-progress layui-progress-big" lay-showpercent="true" lay-filter="component-progress-demo">
                <div class="layui-progress-bar layui-bg-red" lay-percent="0%" style="width: 0%;"><span class="layui-progress-text">0%</span></div>
              </div>

              <div class="layui-btn-container" style="margin-top: 20px; margin-bottom: 0;">
                <button class="layui-btn site-demo-active" data-type="setPercent">设置50%</button>
                <button class="layui-btn site-demo-active" data-type="loading">模拟loading</button>
              </div>

          </div>
        </div>
      </div>
      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">显示进度比文本</div>
          <div class="layui-card-body">

            <div class="layui-progress" lay-showpercent="true">
              <div class="layui-progress-bar" lay-percent="20%" style="width: 20%;"><span class="layui-progress-text">20%</span></div>
            </div>
            <div class="layui-progress" lay-showpercent="true">
              <div class="layui-progress-bar" lay-percent="5 / 10" style="width: 50%;"><span class="layui-progress-text">5 / 10</span></div>
            </div>
            <div class="layui-progress layui-progress-big" lay-showpercent="true">
              <div class="layui-progress-bar" lay-percent="70%" style="width: 70%;"><span class="layui-progress-text">70%</span></div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div><script>
  layui.use(['admin'], function(){
    var $ = layui.$
    ,admin = layui.admin
    ,element = layui.element
    ,router = layui.router();

    element.render('progress');

    //触发事件
    var active = {
      setPercent: function(){
        //设置50%进度
        element.progress('component-progress-demo', '50%')
      }
      ,loading: function(othis){
        var DISABLED = 'layui-btn-disabled';
        if(othis.hasClass(DISABLED)) return;

        //模拟loading
        var n = 0, timer = setInterval(function(){
          n = n + Math.random()*10|0;
          if(n>100){
            n = 100;
            clearInterval(timer);
            othis.removeClass(DISABLED);
          }
          element.progress('component-progress-demo', n+'%');
        }, 300+Math.random()*1000);

        othis.addClass(DISABLED);
      }
    };

    $('#LAY-component-progress .site-demo-active').on('click', function(){
      var othis = $(this), type = $(this).data('type');
      active[type] ? active[type].call(this, othis) : '';
    });

  });
  </script></div>
    </div>

    <!-- 辅助元素，一般用于移动设备下遮罩 -->
    <div class="layadmin-body-shade" layadmin-event="shade"></div>

  </div>
{{-- </div> --}}
@stop
