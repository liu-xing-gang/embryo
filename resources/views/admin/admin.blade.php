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
                <a data-url="/admin/personalpage" data-param="index|main" target="workspace" style="display: flex; align-items: center; justify-content: center;">
                {{-- <img src="{{ asset('images/admin-logo.png') }}"> --}}
               App Logo
                </a>
                <div class="foldsider"><i class="fa fa-toggle-on"></i></div>
            </div>
            <section class="module-menu pull-left">
                <ul>
                    <li data-param="page"><a>控制台</a></li>
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
                </div>
                <div class="operate">
                    <li><a href="../" target="_blank" class="home" title="新窗口打开前台首页">&nbsp;</a></li>
                    <i></i>
                    <li><a href="/logout" class="prompt" title="安全退出管理中心">&nbsp;</a></li>
                </div>
            </div>
        </nav>
    </div>
    <div class="admin-main start_home">
        <div class="admin-main-left">
            <div class="admincj_nav">
                <section class="navLeftTab">
                    <div class="item current index" data-type="home">
                        <div class="tit"><a data-url="/admin/personalpage" data-param="index|main" target="workspace"><i class="nav_icon i_home"></i><h4>首页</h4></a></div>
                    </div>
                </section>
                <section class="navLeftTab" id="adminNavTabs_menuplatform" style="display: none;">
                    <div class="item">
                        <div class="tit"><a><i class="nav_icon icon_01_system"></i><h4>系统</h4></a></div>
                        <div class="sub-menu" style="top: 0px; ">
                            <ul>
                                <li class="curr"><s></s><a data-url="/admin/siteSetting" data-param="menuplatform|01" target="workspace">网站设置</a></li>
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
                <section class="navLeftTab" id="adminNavTabs_page" style="display: none;">
                    <div class="item">
                        <div class="tit"><a data-url="/admin/caller" data-param="page|04" target="workspace"><i class="nav_icon icon_05_banner"></i><h4>列表1</h4></a></div>
                    </div>
                    <div class="item">
                        <div class="tit"><a data-url="/admin/goodslist" data-param="page|05" target="workspace"><i class="nav_icon icon_05_banner"></i><h4>列表2</h4></a></div>
                    </div>
                </section>

            </div>

        </div>
        <div class="admin-main-right"></div>
    </div>
    <script src="{{ asset('js/jquery-1.9.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery.cookie.js') }}"></script>
    <script src="{{ asset('js/adminIndex.js') }}"></script>
    <script>
        $('.prompt').on('click', function () {
            $.cookie("dscActionParam",null)
            $.cookie("dscUrl",null)
            $.cookie("XSRF-TOKEN",null)
            $.cookie("laravel_session",null)
        })
    </script>
</body>

</html>
