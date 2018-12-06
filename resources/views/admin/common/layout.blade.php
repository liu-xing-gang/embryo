<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('videojs/hls_version/video-js.css') }}">
    <link rel="stylesheet" href="{{ asset('layui-v2.4.3/css/layui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/template.css') }}" media="all">
    <style>
        .layui-body {
            left: 0;
            margin-bottom: 50px;
        }

        .layadmin-header {
            display: block;
        }
    </style>
    <script src="{{ asset('layui-v2.4.3/layui.js') }}"></script>
    <script>
        // layui.config({
        //     dir: '/res/layui/' //layui.js 所在路径（注意，如果是script单独引入layui.js，无需设定该参数。），一般情况下可以无视
        //     ,version: false //一般用于更新模块缓存，默认不开启。设为true即让浏览器不缓存。也可以设为一个固定的值，如：201610
        //     ,debug: false //用于开启调试模式，默认false，如果设为true，则JS模块的节点会保留在页面
        //     ,base: '/public' //设定扩展的Layui模块的所在目录，一般用于外部模块扩展
        // });
    </script>
</head>

<body>
    @yield('content')
</body>

</html>