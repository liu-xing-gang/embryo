@extends('index')
@section('banner')
@stop
@section('content')
<style>
    .txt-justify{text-align: justify;}
</style>
<div class="layui-container" style="top: 15px;">
    <article class="layui-card">
        <div class="layui-card-header">{{ $article->article_subject }}</div>
        <div class="layui-card-body">
            <div class="txt-justify">{!! $article->article_content !!}</div>
        </div>
    </article>
</div>
@stop
