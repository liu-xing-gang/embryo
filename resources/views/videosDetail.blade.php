@extends('layout') @section('banner') @stop @section('content')
<link href="{{ asset('videojs/video-js.css') }}" rel="stylesheet">
<style>
    @media(max-width: 768px) {
        .example_video_1-dimensions {
            height: 200px;
        }
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
                <video id="my-player" class="video-js vjs-default-skin player vjs-big-play-centered" controls preload="none" width="800" height="450" poster="http://vjs.zencdn.net/v/oceans.png" data-setup="{}">
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

        var videoMp4 = document.querySelector('video');
        if (window.MediaSource) {
            var mediaSource = new MediaSource();
            videoMp4.src = URL.createObjectURL(mediaSource);
            mediaSource.addEventListener('sourceopen', sourceOpen);
        } else {
            console.log("The Media Source Extensions API is not supported.")
        }

        function sourceOpen(e) {
            URL.revokeObjectURL(videoMp4.src);
            // 设置 媒体的编码类型
            // var mime = 'video/webm; codecs="vorbis, vp8"';
            // var mime = 'video/mp2t;codecs="avc1.42E01E,mp4a.40.2"'
            var mime = 'video/mp4; codecs="avc1.42E01E, mp4a.40.2"'
            var mediaSource = e.target;
            var sourceBuffer = mediaSource.addSourceBuffer(mime);
            var videoUrl = '/show'

            var formData = new FormData();
            formData.append("_token", $('input[name=_token]').val());

            var opts = {
                method:"POST",   //请求方法
                body:formData,   //请求体
        // 　　　　　headers: {
        // 　　　　 'Accept': 'application/json',
        // 　　　　 'Content-Type': 'application/json',
        // 　　　　 },

            }
            fetch(videoUrl, opts)
                .then(function(response) {
                    return response.arrayBuffer();
                })
                .then(function(arrayBuffer) {
                    sourceBuffer.addEventListener('updateend', function(e) {
                        if (!sourceBuffer.updating && mediaSource.readyState === 'open') {
                            mediaSource.endOfStream();
                            videoMp4.play().then(function() {}).catch(function(err) {
                                console.log(err)
                            });
                        }
                    });
                    sourceBuffer.appendBuffer(arrayBuffer);
                });
        }
        // videojs
        var player = videojs('my-player')
    })
</script>
@stop