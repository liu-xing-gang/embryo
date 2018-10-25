<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('layui-v2.4.3/css/layui.css')}}">
    <style>
        html,
        body {
            background-color: #f2f2f2;
        }

        header {
            position: sticky;
            top: 0;
            z-index: 2;
        }

        .nav {
            height: 60px;
            background-color: #fff;
        }

        .box-shadow {
            box-shadow: rgb(136, 136, 136) 0px 0px 4px;
        }

        .logo {
            display: block;
            width: 115px;
            height: 34px;
            position: absolute;
            left: 15px;
            top: 13px;
        }

        .nav ul {
            float: left;
            position: relative;
            left: 128px;
        }

        .nav ul li {
            position: relative;
            float: left;
            padding: 0 14px;
            font-size: 14px;
        }

        .nav ul li a {
            line-height: 60px;
        }

        .nav ul li a:hover {
            color: #EB0028;
        }

        .search {
            position: absolute;
            top: 50%;
            right: 15px;
            padding: 4px 8px;
            border-radius: 20px;
            transform: translateY(-50%);
            -webkit-transform: translateY(-50%);
            background: #f2f2f2;
        }

        .search input {
            width: 100px;
            border: none;
            vertical-align: middle;
            outline: none;
            background: none;
            font-size: 12px;
        }

        .search button {
            border: none;
            background: none;
            vertical-align: text-top;
        }

        .banner {
            position: relative;
            overflow: hidden;
            margin: 0 auto;
        }

        .banner img {
            display: block;
            width: 100%;
            height: auto;
            margin: 0 auto;
        }

        .h-label {
            margin: 15px 0;
        }

        .l-list li {
            margin-bottom: 15px;
            background-color: #fff;
        }

        .l-list li:last-child {
            margin-bottom: 0;
        }

        .l-list-r .r-item {
            background-color: #fff;
        }

        .l-list-r .layui-card {
            margin-top: 15px;
        }

        .pull-right {
            float: right;
        }

        .a-cont {
            margin: 15px 15px 0;
            padding-bottom: 15px;
        }

        .a-link img {
            display: block;
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .a-title {
            padding: 15px;
            font-size: 18px;
        }

        .a-bar {
            padding: 0 15px;
        }

        .a-bar {
            font-size: 12px;
        }

        .a-bar .someone {
            font-size: 14px;
        }

        .r-table {
            display: table;
            width: 100%;
            /* position: sticky;
            top: 60px; */
            /* z-index: 2;
            box-shadow: 0 0 10px 0 hsla(0, 6%, 58%, .6);
            -webkit-box-shadow: 0 0 10px 0 hsla(0, 6%, 58%, .6);
            -moz-box-shadow: 0 0 10px 0 hsla(0, 6%, 58%, .6); */
            /* border-radius: 5px; */
        }

        .r-table .r-table-cell {
            display: table-cell;
            vertical-align: middle;
            padding: 15px 10px;
        }

        .r-table .r-table-cell:last-child {
            padding-left: 0;
        }

        .r-box {
            width: 56px;
            height: 56px;
            margin: 0 auto;
        }

        .img-responsive {
            display: block;
            max-width: 100%;
            height: auto;
        }

        .paddl15 {
            padding-left: 15px;
        }

        .lh16 {
            line-height: 1.6;
        }

        .btn-toggle{display: none; float: right; margin: 10px 15px 0 0; width: 40px; height: 40px; text-align: center; line-height: 40px;}
        .menu{display: block;}

        @media(max-width: 768px){
            .header .layui-container{
                padding: 0;
            }
            .header .navbar{
                box-shadow: 0 0 1px 0 hsla(0, 6%, 58%, .6);
                -webkit-box-shadow: 0 0 1px 0 hsla(0, 6%, 58%, .6);
                -moz-box-shadow: 0 0 1px 0 hsla(0, 6%, 58%, .6);
            }

            .nav ul{float: none; left: auto; right: auto; background-color: #fff;}
            .nav ul li{float: none;}
            .btn-toggle{display: block;}
            .menu{display: none; position: relative; top: 60px;}
            .active .menu{display: block;}
            .active .search{display: block;}
        }


    </style>
</head>

<body>
    <header class="header">
        <nav class="nav box-shadow">
            <div class="layui-container">
                <a href="#" class="logo" style="display: flex; align-items: center; justify-content: center;">logo<img src="{{asset('images/')}}" alt="" class="img-responsive"></a>
                <a class="btn-toggle"><i class="layui-icon layui-icon-down"></i></a>
                <section class="menu">
                    <ul class="navbar">
                        <li><a href="">首页</a></li>
                        <li><a href="">link2</a></li>
                        <li><a href="">link3</a></li>
                        <li><a href="">link4</a></li>
                        <li class="layui-clear"></li>
                    </ul>
                    <div class="search">
                        <input type="text" placeholder="请输入搜索内容"><button><i class="layui-icon layui-icon-search"></i></button>
                    </div>
                    <div class="layui-clear"></div>
                </section>
            </div>
        </nav>
    </header>
    <section class="banner layui-container">
        <img src="{{asset('images/banner-1.jpg')}}" alt="">
    </section>
    <section class="layui-container">
        <h5 class="h-label">推荐区</h5>
        <section class="layui-row layui-col-space20">
            <aside class="layui-col-md8">
                <ul class="l-list">
                    <li>
                        <article>
                            <h1 class="a-title">这是一个标题</h1>
                            <p class="a-bar">
                                <span class="someone">Tom Cat</span> |
                                <span>2018-10-24</span>
                                <span class="pull-right">分享</span>
                            </p>
                            <div class="a-cont">
                                <a href="" class="a-link"><img src="{{ asset('images/a1.png') }}" alt=""></a>
                            </div>
                        </article>
                    </li>
                    <li>
                        <article>
                            <h1 class="a-title">这是一个标题</h1>
                            <p class="a-bar">
                                <span class="someone">Tom Cat</span> |
                                <span>2018-10-24</span>
                                <span class="pull-right">分享</span>
                            </p>
                            <div class="a-cont">
                                <a href="" class="a-link"><img src="{{ asset('images/a2.jpg') }}" alt=""></a>
                            </div>
                        </article>
                    </li>
                </ul>
            </aside>
            <aside class="layui-col-md4">
                <section class="l-list-r">
                    <div class="r-item r-table">
                        <div class="r-table-cell">
                            <div class="r-box"><img class="img-responsive" src="{{ asset('images/avatar1.png') }}" alt=""></div>
                        </div>
                        <div class="r-table-cell paddl15 lh16">
                            <div class="r-text"><a href="/admin/login">登录</a></div>
                            <div class="r-text">Welcome! Stranger</div>
                        </div>
                    </div>
                    <div class="r-item layui-card">
                        <div class="layui-card-header">卡片面板</div>
                        <div class="layui-card-body">
                            结合 layui 的栅格系统<br> 轻松实现响应式布局
                        </div>
                    </div>
                </section>
            </aside>
        </section>
    </section>

    <script src="{{asset('layui-v2.4.3/layui.js')}}"></script>
    <script>
        layui.use('jquery', function () {
            var $ = layui.$

            $('.btn-toggle').on('click', function () {
                $('.menu').fadeToggle('normal', function () {
                    $('.header').toggleClass('active')
                    $('.btn-toggle').find('.layui-icon').toggleClass('layui-icon-down layui-icon-up')
                })
            })
        })
    </script>
</body>

</html>
