$(document).ready(function () {

    //没有cookie默认选择起始页
    if ($.cookie('dscActionParam') == null) {
        index($(".admin-logo a"))
    } else {
        openItem($.cookie('dscActionParam'));
    }


    //logo点击跳转到首页
    function index(o) {
        var url = o.data('url');
        var param = o.data('param');
        $(".admin-main").addClass("start_home");
        $('.admin-main').hasClass('fold') === true ? $('.admin-main').removeClass('fold') : null
        $(".module-menu").find("li").removeClass("active");
        $('.navLeftTab').eq(0).show().siblings().hide()
        loadEach()
        openItem(param);
    }
    $(".admin-logo a").on("click", function () {
        index($(this))
    });

    //顶部管理员信息展开
    function adminSetup() {
        var hoverTimer, outTimer;
        $('#admin-manager-btn,.manager-menu,.admincp-map').mouseenter(function () {
            clearTimeout(outTimer);
            hoverTimer = setTimeout(function () {
                $('.manager-menu').show();
                $('#admin-manager-btn i').removeClass().addClass("arrow-close");
            }, 200);
        });

        $('#admin-manager-btn,.manager-menu,.admincp-map').mouseleave(function () {
            clearTimeout(hoverTimer);
            outTimer = setTimeout(function () {
                $('.manager-menu').hide();
                $('#admin-manager-btn i').removeClass().addClass("arrow");
            }, 100);
        });
    }
    adminSetup();

    // 计算一级级菜单距离
    function loadEach() {
        $('.admincj_nav').find('.navLeftTab').each(function () {
            var _this = $(this);
            _this.find('.item > .tit > a').each(function (i) {
                $(this).parent().next().css('top', (-68) * i + 'px');
            });
        });
    }
    loadEach();

    //顶部导航栏菜单切换
    $(".module-menu li").on("click", function () {
        $(".admin-main-left").animate({
            "scrollTop": 0
        })

        // 菜单一级二级的判断
        var modules = $(this).data("param");
        var items = $("#adminNavTabs_" + modules).find(".item");
        var first_item = items.first();
        var first_a = first_item.find('.sub-menu').find('li > a:first');
        items.find('.sub-menu').hide();
        $(this).addClass("active").siblings().removeClass("active");
        $(".admin-main").removeClass("start_home");
        $("#adminNavTabs_" + modules).show().siblings().hide();
        $('.item').not('.index').removeClass('current')
        first_item.addClass('current');

        // 只有一级菜单或有一级二级
        var length = first_item.find('.sub-menu').length
        switch (length) {
            case 0:
                $('.admin-main').addClass('narrow')
                var param = first_item.find('.tit a').data("param");
                var url = first_item.find('.tit a').data("url");
                loadUrl(url);
                $.cookie('dscActionParam', param, {
                    expires: 1,
                    path: '/'
                });
                break;
            default:

                $('.admin-main').removeClass('narrow');
                first_item.find('.sub-menu').show()

                if ($('.admin-main').hasClass('fold') === true) {
                    first_item.find('.sub-menu').hide()
                }

                first_a.click();
        }

    });

    // 点击一级菜单
    $('.navLeftTab .item .tit a').on('click', function (e) {
        $('.sub-menu').hide()
        $(this).closest('.item').addClass('current').siblings().removeClass('current')

        // 只有一级菜单或有一级二级
        var length = $(this).closest('.item').find('.sub-menu').length
        switch (length) {
            case 0:
                var param = $(this).data("param");
                var url = $(this).data("url");
                loadUrl(url);
                $.cookie('dscActionParam', param, {
                    expires: 1,
                    path: '/'
                });

                $('.admin-main').addClass('narrow')
                break;
            default:
                $(this).closest('.item').find('.sub-menu').show().find('li').eq(0).addClass('curr').siblings().removeClass('curr')
                var first_a = $(this).closest('.item').find('.sub-menu').find('li > a:first')
                var param = first_a.data("param");
                var url = first_a.data("url");
                first_a.parent().addClass('curr').siblings().removeClass('curr')
                loadUrl(url);
                $.cookie('dscActionParam', param, {
                    expires: 1,
                    path: '/'
                });
                $('.admin-main').removeClass('narrow');
        }
    })

    // 点击二级菜单
    $(".sub-menu li a").on("click", function (e) {
        e.stopPropagation()
        var param = $(this).data("param");
        var url = $(this).data("url");

        $(this).parent().addClass('curr').siblings().removeClass('curr')

        $('.admin-main').hasClass('fold') === true ? $(this).closest('.sub-menu').hide() : null

        loadUrl(url);
        $.cookie('dscActionParam', param, {
            expires: 1,
            path: '/'
        });
    });

    // 切换左侧菜单样式二
    $(".foldsider").click(function () {

        var leftdiv = $(".admin-main");
        if (leftdiv.hasClass("fold")) {
            leftdiv.removeClass("fold");
            $(this).find("i.fa").removeClass("fa-toggle-off").addClass("fa-toggle-on");
            leftdiv.find(".current").children(".sub-menu").show();

            loadEach();
        } else {
            leftdiv.addClass("fold");
            $(this).find("i.fa").removeClass("fa-toggle-on").addClass("fa-toggle-off");
            leftdiv.find(".sub-menu").hide();
            leftdiv.find(".sub-menu").css("top", "0px");
        }

        $('.item.current').not('.index').find('.sub-menu').length === 0 ? $('.admin-main').addClass('narrow') : $('.admin-main').removeClass('narrow')

    });

    // 左侧菜单样式二 -- 鼠标移入移出
    var foldHoverTimer, foldOutTimer, foldHoverTimer2
    $(document).on("mouseenter", ".fold .tit", function () {

        var $this = $(this);
        var items = $this.parents(".item");

        var length = items.find(".sub-menu").find("li").length;
        items.parent().find(".item:gt(5)").find(".sub-menu").css("top", -((40 * length) - 68));
        $this.next().show();
        items.addClass("current");
        items.siblings(".item").removeClass("current");
    });

    $(document).on("mouseleave", ".fold .tit", function () {
        var _this = $(this);
        clearTimeout(foldHoverTimer);
        foldOutTimer = setTimeout(function () {
            _this.next().hide();
        });

        // 每次移除菜单恢复初始态
        var param = $.cookie('dscActionParam')
        $('.navLeftTab').each(function () {
            $(this).find('a').each(function (index) {
                if ($(this).data('param') === param)
                    $(this).parents('.item').addClass('current').siblings().removeClass('current');
            })
        })
    });

    $(document).on("mouseenter", ".fold .sub-menu", function () {
        clearTimeout(foldOutTimer);
        var $this = $(this);
        foldHoverTimer2 = setTimeout(function () {
            $this.show();
        });
        $(this).parents('.item').addClass('current').siblings().removeClass('current');
    });

    $(document).on("mouseleave", ".fold .sub-menu", function () {
        var $this = $(this);
        $this.hide();
        // 每次移除菜单恢复初始态
        var param = $.cookie('dscActionParam')
        $('.navLeftTab').each(function () {
            $(this).find('a').each(function (index) {
                if ($(this).data('param') === param)
                    $(this).parents('.item').addClass('current').siblings().removeClass('current');
            })
        })
    });

    //上传管理员头像
    $("#_pic").change(function () {
        var actionUrl = "index.php?act=upload_store_img";
        $("#fileForm").ajaxSubmit({
            type: "POST",
            dataType: "json",
            url: actionUrl,
            data: {
                "action": "TemporaryImage"
            },
            success: function (data) {
                if (data.error == "0") {} else if (data.error == "1") {
                    $(".avatar img").attr("src", data.content);
                }
            },
            async: true
        });
    });

    /*  @author-bylu 添加快捷菜单 start  */
    $('.admincp-map-nav li').click(function () {
        var i = $(this).index();
        $(this).addClass('selected');
        $(this).siblings().removeClass('selected');
        $('.admincp-map-div').eq(i).show();
        $('.admincp-map-div').eq(i).siblings('.admincp-map-div').hide();
    });

    $('.admincp-map-div dd i').click(function () {
        var auth_name = $(this).prev('a').text();
        var auth_href = $(this).prev('a').attr('href');
        if (!$(this).parent('dd').hasClass('selected')) {

            if ($('.admincp-map-div dd.selected').length >= 10) {
                return false;
            }

            $(this).parent('dd').addClass('selected');
            $('.quick_link ul').append('<li class="tl"><a href="' + auth_href + '" data-url="' + auth_href + '" data-param="" target="workspace">' + auth_name + '</a></li>')

            $.post('index.php?act=auth_menu', {
                'type': 'add',
                'auth_name': auth_name,
                'auth_href': auth_href
            });

        } else {
            $(this).parent('dd').removeClass('selected');
            $('.quick_link ul li').each(function (k, v) {
                if (auth_name == $(v).text()) {
                    $(v).remove();
                }
            });
            $.post('index.php?act=auth_menu', {
                'type': 'del',
                'auth_name': auth_name,
                'auth_href': auth_href
            });
        }
    });

    $('.add_nav,.sitemap').click(function () {
        $('#allMenu').show();
    });

    //消息通知
    function message() {
        var hoverTimer, outTimer;
        $('.msg,#msg_Container').mouseenter(function () {
            clearTimeout(outTimer);
            hoverTimer = setTimeout(function () {
                $('#msg_Container').show();
            }, 200);
        });

        $('.msg,#msg_Container').mouseleave(function () {
            clearTimeout(hoverTimer);
            outTimer = setTimeout(function () {
                $('#msg_Container').hide();
            }, 100);
        });
    }
    message();

    function openItem(param, home) {
        //若cookie值不存在，则跳出iframe框架
        // if (!$.cookie('dscActionParam')) {
        //     top.location.href = location.href;
        // }

        if (param == "index|main") {
            $(".admin-main").addClass("start_home");
        } else {
            $(".admin-main").removeClass("start_home");
        }

        var $this = $('div[id^="adminNavTabs_"]').find('a[data-param="' + param + '"]');

        $('.navLeftTab').each(function () {
            $(this).find('a').each(function (index) {
                if ($(this).data('param') === param)
                    $this = $(this)
            })
        })

        var url = $this.data('url');
        data_str = param.split('|');

        if (home == 0) {
            $this.parents('.admin-main').removeClass('start_home');
        }

        if ($this.parents(".admin-main").hasClass("fold")) {
            $this.parents('.sub-menu').hide();
        } else {
            $this.parents('.sub-menu').show();
        }
        $this.parents('.item').addClass('current').siblings().removeClass('current');
        $this.parents('li').addClass('curr').siblings().removeClass('curr');
        $this.parents('.navLeftTab').show().siblings().hide();
        $('li[data-param="' + data_str[0] + '"]').addClass('active').siblings().removeClass('active');
        // 只有一级菜单
        $('.item.current').not('.index').find('.sub-menu').length === 0 ? $('.admin-main').addClass('narrow') : $('.admin-main').removeClass('narrow')

        $.cookie('dscActionParam', data_str[0] + '|' + data_str[1], {
            expires: 1,
            path: '/'
        });

        loadUrl(url)
    }

    function loadUrl(url) {
        $.cookie('dscUrl', url, {
            expires: 1,
            path: '/'
        });

        $('.admin-main-right iframe[name="workspace"]').remove()

        var iframe = '<iframe src="' + url + '" id="workspace" name="workspace" frameborder="0" width="100%" height="100%" scrolling="yes" style="height: 100%;"></iframe>'
        $('.admin-main-right').append(iframe).fadeIn()

        //防止页面后退
        try{
            if (window.history && window.history.pushState) {
                $(window).on('popstate', function () {
                    window.history.pushState('forward', null, '#');
                    window.history.forward(1);
                });
            }
            window.history.pushState('forward', null, '#'); //在IE中必须得有这两行
            window.history.forward(1);
        }
        catch(e){}



    }

});
