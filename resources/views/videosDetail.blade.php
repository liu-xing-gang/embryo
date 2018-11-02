@extends('index') @section('banner') @stop @section('content')
<link href="{{ asset('videojs/video-js.css') }}" rel="stylesheet">
<style>
    @media(max-width: 768px){
        .example_video_1-dimensions{height: 200px;}
    }
</style>
<script src="{{ asset('videojs/videojs-ie8.min.js') }}"></script>
<script src="{{ asset('videojs/video.js') }}"></script>
<div class="layui-container" style="top: 15px;">
    {{ csrf_field() }}
    <article class="layui-card">
        {{--
        <div class="layui-card-header">{{$video->video_title}}</div> --}}
        <div class="layui-card-body">
            <div style="display: flex; justify-content: center; aligin-items: center;">
                <video id="example_video_1" class="video-js vjs-default-skin player vjs-big-play-centered" controls preload="none" width="800" height="450" poster="http://vjs.zencdn.net/v/oceans.png" data-setup="{}">
                    {{-- <source src="http://vjs.zencdn.net/v/oceans.mp4" type="video/mp4">
                    <source src="http://vjs.zencdn.net/v/oceans.webm" type="video/webm">
                    <source src="http://vjs.zencdn.net/v/oceans.ogv" type="video/ogg">
                    <track kind="captions" src="../shared/example-captions.vtt" srclang="en" label="English"></track>
                    <track kind="subtitles" src="../shared/example-captions.vtt" srclang="en" label="English"></track>
                    <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p> --}}
                </video>
            </div>
        </div>
    </article>
</div>
 @stop @section('footer') @parent
<script>
    layui.use(['jquery', 'layer'], function() {
        var $ = layui.$,
            layer = layui.layer;
        // document.getElementsByTagName('video')[0].src='/show';


        var video = document.getElementsByTagName("video")[0];
        window.URL = window.URL || window.webkitURL;
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "/show", true);
        /*
            正常我们用AJAX请求的是后台的借口
            这里直接请求的是一个.MP4的文件；
            如果你的视频文件和你项目没在同一个域下，会有跨域问题的；
        */
        xhr.responseType = "blob";
        xhr.onload = function() {
            if (this.status == 200) {
                var blob = this.response;
                video.onload = function(e) {
                    window.URL.revokeObjectURL(video.src);
                };
                video.src = window.URL.createObjectURL(blob);
            }
        }
        xhr.send();
    })
</script>
@stop
