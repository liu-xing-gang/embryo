@extends('layout') @section('banner') @stop @section('links') @parent
<link href="{{ asset('videojs/hls_version/video-js.css') }}" rel="stylesheet">
<style>
.vjs-button>.vjs-icon-placeholder:before {line-height: 36px;}
</style>
<script src="{{ asset('videojs/hls_version/video.js') }}"></script>
<script src="{{ asset('videojs/hls_version/videojs-contrib-hls.js') }}"></script>
@stop @section('content')

<div class="layui-container" style="top: 15px;">
    @csrf
    <article class="layui-card">
        <div class="layui-card-header">{{$video->video_title}}</div>
        <div class="layui-card-body">
            <div style="display: flex; justify-content: center; aligin-items: center;">
                <video id="my-player" class="video-js vjs-default-skin vjs-big-play-centered" controls preload="auto" width="800" height="450" poster="http://vjs.zencdn.net/v/oceans.png"></video>
            </div>
        </div>
    </article>
</div>
@stop @section('footer') @parent

<script>
    layui.use('jquery', function() {
        var $ = layui.jquery
        var myPlayer = videojs('my-player', {
            bigPlayButton: true,
            textTrackDisplay: false,
            // posterImage: false,
            errorDisplay: false,
            controlBar: true
        }, function() {
            this.on('loadedmetadata', function() {
                console.log('loadedmetadata');
                //加载到元数据后开始播放视频
                // this.play();
            })
            this.on('ended', function() {
                console.log('ended')
            })
            this.on('firstplay', function() {
                console.log('firstplay')
            })
            this.on('loadstart', function() {
                //开始加载
                console.log('loadstart')
            })
            this.on('loadeddata', function() {
                console.log('loadeddata')
            })
            this.on('seeking', function() {
                //正在去拿视频流的路上
                console.log('seeking')
            })
            this.on('seeked', function() {
                //已经拿到视频流,可以播放
                console.log('seeked')
            })
            this.on('waiting', function() {
                console.log('waiting')
            })
            this.on('pause', function() {
                console.log('pause')
            })
            this.on('play', function() {
                console.log('play')
            })
        })

        $.ajax({
            type: 'POST',
            url: '/show',
            data: {
                _token: $.trim($('input[name=_token]').val())
            },
            success: function(response) {
                myPlayer.src(response)
                myPlayer.load()
            }
        })
    })
</script>
@stop
