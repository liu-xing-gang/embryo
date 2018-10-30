@extends('index')
@section('content')
<div class="layui-container">
    <style>
        #LAY-component-grid-stack .layui-card-body {
            display: flex;
            justify-content: center;
            flex-direction: column;
            text-align: center;
            height: 200px;
        }
    </style>
    <div class="layui-fluid" id="LAY-component-grid-stack" style="padding: 10px 0 0 0;">
        <div class="layui-row layui-col-space10">
            @foreach($data as $article)
            <div class="layui-col-md4">
                    <a href="/articles/{{ $article->article_id }}">
                    <div class="layui-card">
                    <div class="layui-card-header">{{ $article->article_subject }}</div>
                        <div class="layui-card-body">
                            <div class="clamp">{{ $article->article_content }}</div>
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
