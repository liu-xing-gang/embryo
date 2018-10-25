{{--
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> --}} {{-- html:4s 与html:4t与html:5line-height不一样 --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cssreset-min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body style="overflow: hidden;">
    <div class="admin-header">
        <nav class="navbar clearfloat">
            <div class="admin-logo pull-left">
                <a data-url="/admin/grid4" data-param="component|grid4" target="workspace" style="display: flex; align-items: center; justify-content: center;">
                {{-- <img src="{{ asset('images/admin-logo.png') }}"> --}}
               App Logo
                </a>
                <div class="foldsider"><i class="fa fa-toggle-on"></i></div>
            </div>
            <section class="module-menu pull-left">
                <ul>
                    <li data-param="component"><a>组件</a></li>
                    <li data-param="page"><a>页面</a></li>
                    <li data-param="application"><a>应用</a></li>
                    <li data-param="menushopping"><a>用户</a></li>
                    <li data-param="menuplatform"><a>设置</a></li>
                </ul>
            </section>
            <div class="admin-header-right pull-right">
                <div class="manager">
                    <dl>
                        <dt class="name">admin</dt>
                        <dd class="group">超级管理员</dd>
                    </dl>
                    <span class="avatar">
                            <form action="index.php" id="fileForm" method="post" enctype="multipart/form-data" runat="server">
                                <input name="img" type="file" class="admin-avatar-file" id="_pic" title="设置管理员头像">
                            </form>
                        <img nctype="admin_avatar" src="{{ asset('images/admin.jpg') }}">
                        </span>
                    <div id="admin-manager-btn" class="admin-manager-btn"><i class="arrow"></i></div>
                    <div class="manager-menu" style="display: none;">
                        <div class="title">
                            <h4>最后登录</h4>
                            <a href="privilege.php?act=edit&amp;id=59" target="workspace" class="edit_pwd">修改密码</a>
                        </div>
                        <div class="login-date">
                            <strong>2018-09-26 09:27:58</strong>
                            <span>(IP:127.0.0.1)</span>
                        </div>
                        <div class="title mt10">
                            <h4>常用操作</h4>
                            <a class="add_nav">添加菜单</a>
                        </div>
                        <div class="quick_link">
                            <ul>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="operate">
                    <li style="position: relative;">
                        <a href="javascript:void(0);" class="msg" title="查看消息">&nbsp;</a><s id="total">2</s>

                        <div id="msg_Container" style="display: none; top: 48px;">
                            <div class="item">
                                <h3>提示1</h3>
                                <div class="msg_content" ectype="orderMsg">
                                    <p><a href="javascript:void(0);" data-url="order.php?act=list&amp;composite_status=101" data-param="menushopping|02_order_list" target="workspace" class="message">待发货订单</a> <span class="tiptool">（<em id="no_paid">2</em>）</span></p>
                                    <p><a href="javascript:void(0);" data-url="order.php?act=return_list" data-param="menushopping|12_back_apply" target="workspace" class="message">待处理退换货订单</a> <span class="tiptool">（<em id="no_change">0</em>）</span></p>
                                    <p><a href="javascript:void(0);" data-url="order.php?act=list" data-param="menushopping|02_order_list" target="workspace" class="message">您有新订单</a> <span class="tiptool">（<em id="new_orders">0</em>）</span></p>
                                    <p><a href="javascript:void(0);" data-url="order.php?act=list" data-param="menushopping|02_order_list" target="workspace" class="message">您有新付款的订单</a> <span class="tiptool">（<em id="new_paid">0</em>）</span></p>
                                </div>
                            </div>
                            <div class="item">
                                <h3>提示2</h3>
                                <div class="msg_content" ectype="sellerMsg">
                                    <p><a href="javascript:void(0);" data-url="merchants_users_list.php?act=list" data-param="menushopping|02_merchants_users_list" target="workspace" class="message">未审核商家</a> <span class="tiptool">（<em id="shop_account">0</em>）</span></p>
                                    <p><a href="javascript:void(0);" data-url="merchants_account.php?act=list&amp;act_type=account_log&amp;handler=2&amp;rawals=1" data-param="menushopping|12_seller_account" target="workspace" class="message">待审核商家提现</a>                                        <span class="tiptool">（<em id="wait_cash">0</em>）</span></p>
                                </div>
                            </div>
                            <div class="item">
                                <h3>提示3</h3>
                                <div class="msg_content" ectype="advMsg">
                                    <p><a href="javascript:void(0);" data-url="ads.php?act=list" data-param="menuplatform|ad_list" target="workspace" class="message">广告位即将到期</a> <span class="tiptool">（<em id="advance_date">0</em>）</span></p>
                                </div>
                            </div>

                        </div>
                    </li>
                    <i></i>
                    <li><a href="../" target="_blank" class="home" title="新窗口打开前台首页">&nbsp;</a></li>
                    <i></i>
                    <li><a href="index.php?act=clear_cache" class="clear" target="workspace" title="清除缓存">&nbsp;</a></li>
                    <i></i>
                    <li><a href="/login" class="prompt" title="安全退出管理中心">&nbsp;</a></li>
                </div>
            </div>
        </nav>
    </div>

    <div class="admin-main start_home">
        <div class="admin-main-left">
            <div class="admincj_nav">
                <section class="navLeftTab">
                    <div class="item current index" data-type="home">
                        <div class="tit"><a data-url="/" data-param="index|main" target="workspace"><i class="nav_icon i_home"></i><h4>首页</h4></a></div>
                    </div>
                </section>
                <section class="navLeftTab" id="adminNavTabs_menuplatform" style="display: none;">
                    <div class="item">
                        <div class="tit"><a><i class="nav_icon icon_01_system"></i><h4>系统</h4></a></div>
                        <div class="sub-menu" style="top: 0px; ">
                            <ul>
                                <li class="curr"><s></s><a data-url="/admin/siteSetting" data-param="menuplatform|01" target="workspace">网站设置</a></li>
                                <li><s></s><a data-url="/admin/mailSetting" data-param="menuplatform|02" target="workspace">邮件服务</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="tit"><a><i class="nav_icon icon_05_banner"></i><h4>我的</h4></a></div>
                        <div class="sub-menu" style="top: -68px;">
                            <ul>
                                <li class="curr"><s></s><a data-url="/admin/basic" data-param="menuplatform|ad_list" target="workspace">基本资料</a></li>
                                <li><s></s><a data-url="/admin/changePswd" data-param="menuplatform|ad_position" target="workspace">修改密码</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section class="navLeftTab" id="adminNavTabs_menushopping" style="display:none;">
                    <div class="item">
                        <div class="tit"><a data-url="/admin/users" data-param="menushopping|ad_list222" target="workspace"><i class="nav_icon icon_02_cat_and_goods1"></i><h4>网站用户</h4></a></div>
                    </div>
                    <div class="item">
                        <div class="tit"><a data-url="/admin/administrators" data-param="menushopping|ad_list33333" target="workspace"><i class="nav_icon icon_02_goods_storage2"></i><h4>后台用户</h4></a></div>
                    </div>
                    <div class="item">
                        <div class="tit"><a data-url="/admin/roles" data-param="menushopping|ad_list444" target="workspace"><i class="nav_icon icon_02_goods_storage3"></i><h4>角色管理</h4></a></div>
                    </div>
                </section>
                <section class="navLeftTab" id="adminNavTabs_component" style="display: none;">
                    <div class="item">
                        <div class="tit"><a><i class="nav_icon icon_01_system"></i><h4>栅格</h4></a></div>
                        <div class="sub-menu" style="top: 0px; ">
                            <ul>
                                <li class="curr"><s></s><a data-url="/admin/grid1" data-param="component|grid1" target="workspace">等比例列表排列</a></li>
                                <li><s></s><a data-url="/admin/grid2" data-param="component|grid2" target="workspace">按移动端排列</a></li>
                                <li><s></s><a data-url="/admin/grid3" data-param="component|grid3" target="workspace">移动桌面端组合</a></li>
                                <li><s></s><a data-url="/admin/grid4" data-param="component|grid4" target="workspace">全端复杂组合</a></li>
                                <li><s></s><a data-url="/admin/grid5" data-param="component|grid5" target="workspace">低于桌面堆叠排列</a></li>
                                <li><s></s><a data-url="/admin/grid6" data-param="component|grid6" target="workspace">九宫格</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="tit"><a data-url="/admin/button" data-param="component|button" target="workspace"><i class="nav_icon icon_05_banner"></i><h4>按钮</h4></a></div>
                    </div>
                    <div class="item">
                        <div class="tit"><a><i class="nav_icon icon_05_banner"></i><h4>表单</h4></a></div>
                        <div class="sub-menu" style="top: -68px;">
                            <ul>
                                <li class="curr"><s></s><a data-url="/admin/form/element" data-param="component|element" target="workspace">表单元素</a></li>
                                <li><s></s><a data-url="/admin/form/group" data-param="component|group" target="workspace">表单组合</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="tit"><a data-url="/admin/nav" data-param="component|nav" target="workspace"><i class="nav_icon icon_05_banner"></i><h4>导航</h4></a></div>
                    </div>
                    <div class="item">
                        <div class="tit"><a data-url="/admin/tabs" data-param="component|tabs" target="workspace"><i class="nav_icon icon_05_banner"></i><h4>选项卡</h4></a></div>
                    </div>
                    <div class="item">
                        <div class="tit"><a data-url="/admin/progress" data-param="component|progress" target="workspace"><i class="nav_icon icon_05_banner"></i><h4>进度条</h4></a></div>
                    </div>
                    <div class="item">
                        <div class="tit"><a data-url="/admin/panel" data-param="component|panel" target="workspace"><i class="nav_icon icon_05_banner"></i><h4>面板</h4></a></div>
                    </div>
                    <div class="item">
                        <div class="tit"><a data-url="/admin/badge" data-param="component|badge" target="workspace"><i class="nav_icon icon_05_banner"></i><h4>徽章</h4></a></div>
                    </div>
                    <div class="item">
                        <div class="tit"><a data-url="/admin/timeline" data-param="component|timeline" target="workspace"><i class="nav_icon icon_05_banner"></i><h4>时间线</h4></a></div>
                    </div>
                    <div class="item">
                        <div class="tit"><a data-url="/admin/anim" data-param="component|anim" target="workspace"><i class="nav_icon icon_05_banner"></i><h4>动画</h4></a></div>
                    </div>
                    <div class="item">
                        <div class="tit"><a><i class="nav_icon icon_05_banner"></i><h4>通用弹层</h4></a></div>
                        <div class="sub-menu" style="">
                            <ul>
                                <li class="curr"><s></s><a data-url="/admin/layer/list" data-param="component|layer1" target="workspace">功能演示</a></li>
                                <li><s></s><a data-url="/admin/layer/demo" data-param="component|layer2" target="workspace">特殊示例</a></li>
                                <li><s></s><a data-url="/admin/layer/theme" data-param="component|layer3" target="workspace">风格定制</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="item">
                        <div class="tit"><a><i class="nav_icon icon_05_banner"></i><h4>日期时间</h4></a></div>
                        <div class="sub-menu" style="">
                            <ul>
                                <li class="curr"><s></s><a data-url="/admin/laydate/demo1" data-param="component|laydate-demo1" target="workspace">功能演示一</a></li>
                                <li><s></s><a data-url="/admin/laydate/demo2" data-param="component|laydate-demo2" target="workspace">功能演示二</a></li>
                                <li><s></s><a data-url="/admin/laydate/theme" data-param="component|laydate-theme" target="workspace">设定主题</a></li>
                                <li><s></s><a data-url="/admin/laydate/special-demo" data-param="component|laydate-theme" target="workspace">特殊示例</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="tit"><a><i class="nav_icon icon_05_banner"></i><h4>表格</h4></a></div>
                    </div>
                    <div class="item">
                        <div class="tit"><a><i class="nav_icon icon_05_banner"></i><h4>分页</h4></a></div>
                        <div class="sub-menu" style="">
                            <ul>
                                <li class="curr"><s></s><a data-url="/admin/laypage/demo1" data-param="component|laypage-demo1" target="workspace">功能演示一</a></li>
                                <li><s></s><a data-url="/admin/laypage/demo2" data-param="component|laypage-demo2" target="workspace">功能演示二</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="tit"><a><i class="nav_icon icon_05_banner"></i><h4>上传</h4></a></div>
                        <div class="sub-menu" style="">
                            <ul>
                                <li class="curr"><s></s><a data-url="/admin/upload/demo1" data-param="component|upload-demo1" target="workspace">功能演示一</a></li>
                                <li><s></s><a data-url="/admin/upload/demo2" data-param="component|upload-demo2" target="workspace">功能演示二</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="tit"><a data-url="/admin/colorpicker" data-param="component|colorpicker" target="workspace"><i class="nav_icon icon_05_banner"></i><h4>颜色选择器</h4></a></div>
                    </div>
                    <div class="item">
                        <div class="tit"><a data-url="/admin/slider" data-param="component|slider" target="workspace"><i class="nav_icon icon_05_banner"></i><h4>滑块组件</h4></a></div>
                    </div>
                    <div class="item">
                        <div class="tit"><a data-url="/admin/rate" data-param="component|rate" target="workspace"><i class="nav_icon icon_05_banner"></i><h4>评分</h4></a></div>
                    </div>
                    <div class="item">
                        <div class="tit"><a data-url="/admin/carousel" data-param="component|carousel" target="workspace"><i class="nav_icon icon_05_banner"></i><h4>轮播</h4></a></div>
                    </div>
                    <div class="item">
                        <div class="tit"><a data-url="/admin/flow" data-param="component|flow" target="workspace"><i class="nav_icon icon_05_banner"></i><h4>流加载</h4></a></div>
                    </div>
                    <div class="item">
                        <div class="tit"><a data-url="/admin/util" data-param="component|util" target="workspace"><i class="nav_icon icon_05_banner"></i><h4>工具</h4></a></div>
                    </div>
                    <div class="item">
                        <div class="tit"><a data-url="/admin/code" data-param="component|code" target="workspace"><i class="nav_icon icon_05_banner"></i><h4>代码修饰</h4></a></div>
                    </div>
                </section>
                <section class="navLeftTab" id="adminNavTabs_page" style="display: none;">
                    <div class="item">
                        <div class="tit"><a data-url="/admin/personalpage" data-param="page|01" target="workspace"><i class="nav_icon icon_01_system"></i><h4>个人主页</h4></a></div>

                    </div>
                    <div class="item">
                        <div class="tit"><a data-url="/admin/addresslist" data-param="page|03" target="workspace"><i class="nav_icon icon_05_banner"></i><h4>通讯录</h4></a></div>
                    </div>
                    <div class="item">
                        <div class="tit"><a data-url="/admin/caller" data-param="page|04" target="workspace"><i class="nav_icon icon_05_banner"></i><h4>客户列表</h4></a></div>
                    </div>
                    <div class="item">
                        <div class="tit"><a data-url="/admin/goodslist" data-param="page|05" target="workspace"><i class="nav_icon icon_05_banner"></i><h4>商品列表</h4></a></div>
                    </div>
                    <div class="item">
                        <div class="tit"><a data-url="/admin/msgboard" data-param="page|06" target="workspace"><i class="nav_icon icon_05_banner"></i><h4>留言板</h4></a></div>
                    </div>
                    <div class="item">
                        <div class="tit"><a data-url="/admin/search" data-param="page|07" target="workspace"><i class="nav_icon icon_05_banner"></i><h4>搜索结果</h4></a></div>
                    </div>
                    {{-- <div class="item">
                        <div class="tit"><a data-url="/admin/reg" data-param="page|08" target="workspace"><i class="nav_icon icon_05_banner"></i><h4>注册</h4></a></div>
                    </div>
                    <div class="item">
                        <div class="tit"><a data-url="/admin/login" data-param="page|09" target="workspace"><i class="nav_icon icon_05_banner"></i><h4>登入</h4></a></div>
                    </div>
                    <div class="item">
                        <div class="tit"><a data-url="/admin/forget" data-param="page|10" target="workspace"><i class="nav_icon icon_05_banner"></i><h4>忘记密码</h4></a></div>
                    </div> --}}
                    <div class="item">
                        <div class="tit"><a data-url="/admin/404" data-param="page|404" target="workspace"><i class="nav_icon icon_05_banner"></i><h4>404</h4></a></div>
                    </div>
                    <div class="item">
                        <div class="tit"><a data-url="/admin/error" data-param="page|11" target="workspace"><i class="nav_icon icon_05_banner"></i><h4>错误提示</h4></a></div>
                    </div>
                </section>
                <section class="navLeftTab" id="adminNavTabs_application" style="display: none;">
                    <div class="item">
                        <div class="tit"><a><i class="nav_icon icon_01_system"></i><h4>内容系统</h4></a></div>
                        <div class="sub-menu" style="top: 0px; ">
                            <ul>
                                <li class="curr"><s></s><a data-url="/admin/content/list" data-param="application|01" target="workspace">文章列表</a></li>
                                <li><s></s><a data-url="/admin/content/tags" data-param="application|02" target="workspace">分类管理</a></li>
                                <li><s></s><a data-url="/admin/content/comment" data-param="application|03" target="workspace">评论管理</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="tit"><a><i class="nav_icon icon_05_banner"></i><h4>社区系统</h4></a></div>
                        <div class="sub-menu" style="top: -68px;">
                            <ul>
                                <li class="curr"><s></s><a data-url="/admin/forum/list" data-param="application|forumList" target="workspace">帖子列表</a></li>
                                <li><s></s><a data-url="/admin/forum/replys" data-param="application|forumReplys" target="workspace">回帖列表</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="tit"><a data-url="/admin/message" data-param="application|message" target="workspace"><i class="nav_icon icon_05_banner"></i><h4>消息中心</h4></a></div>
                    </div>
                    <div class="item">
                        <div class="tit"><a data-url="/admin/workorder/list" data-param="application|workorderList" target="workspace"><i class="nav_icon icon_05_banner"></i><h4>工单系统</h4></a></div>
                    </div>
                </section>
            </div>

        </div>
        <div class="admin-main-right">
            {{-- <iframe src="/" id="workspace" name="workspace" frameborder="0" width="100%" height="100%" scrolling="yes" style="height: 100%;"></iframe> --}}
        </div>
        </main>
        <footer></footer>
        <script src="{{ asset('js/jquery-1.9.1.min.js') }}"></script>
        <script src="{{ asset('js/jquery.cookie.js') }}"></script>
        <script src="{{ asset('js/adminIndex.js') }}"></script>
</body>

</html>
