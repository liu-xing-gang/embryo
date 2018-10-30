@extends('index')
@section('content')
<div class="layui-container">
    <style>
        /* 这段样式只是用于演示 */

        #LAY-component-grid-stack .layui-card-body {
            display: flex;
            justify-content: center;
            flex-direction: row;
            text-align: center;
            height: 200px;
        }

        .img-responsive {
            display: block;
            width: 80px;
            height: 80px;
            margin-right: 15px;
        }
    </style>
    <div class="layui-fluid" id="LAY-component-grid-stack" style="padding: 10px 0 0 0;">
        <div class="layui-row layui-col-space10">
            @foreach($data as $video)
            <div class="layui-col-md4">
                <a href="/plays/{{ $video->video_id }}">
                    <div class="layui-card">
                    <div class="layui-card-header">{{ $video->video_title }}</div>
                        <div class="layui-card-body">
                            <img src="{{ asset('images/v1.jpg') }}" alt="" class="img-responsive">
                            <div style="text-align: justify;" class="">
                            <div class="clamp">{{ $video->video_description }}</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>

</div>
@stop
