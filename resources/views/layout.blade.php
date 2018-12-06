<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('layui-v2.4.3/css/layui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    @section('header')
    <header class="header">
        <nav class="nav box-shadow">
            <div class="layui-container">
                <a href="/" class="logo" style="display: flex; align-items: center; justify-content: center;">logo<img src="" alt="" class="img-responsive"></a>
                <a class="btn-toggle"><i class="layui-icon layui-icon-down"></i></a>
                <section class="menu">
                    <ul class="navbar">
                        <li><a href="/">首页</a></li>
                        <li><a href="/articles">文章</a></li>
                        <li><a href="/plays">影视</a></li>
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
    @show

    @section('banner')
    <section class="banner layui-container">
        {{-- <img src="{{asset('images/a2.jpg')}}" alt=""> --}}
    </section>
    @show

    @section('content')
    <section class="layui-container">
        <h5 class="h-label">推荐区</h5>
        <section class="layui-row layui-col-space20">
            <aside class="layui-col-md8">
                <ul class="l-list">

                </ul>
            </aside>
            <aside class="layui-col-md4">
                <section class="l-list-r">
                    <div class="r-item r-table">
                        <div class="r-table-cell">
                            <div class="r-box"><img class="img-responsive" src="{{ asset('images/avatar1.png') }}" alt=""></div>
                        </div>
                        <div class="r-table-cell paddl15 lh16">
                            <div class="r-text"><a href="/login">登录</a></div>
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
    @show

    @section('footer')
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
    @show
</body>

</html>
