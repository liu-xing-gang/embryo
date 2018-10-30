@extends('index')
@section('banner')
@stop
@section('content')
<div class="layui-container" style="top: 15px;">
    <article class="layui-card">
        <div class="layui-card-header">{{ $article->article_subject }}</div>
        <div class="layui-card-body">
            <div class="clamp">{{ $article->article_content }}</div>
        </div>
    </article>
</div>

@stop
