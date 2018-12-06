@extends('layout')
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
            <div class="layui-col-md3">
                    <a href="/articles/{{ $article->article_id }}">
                    <div class="layui-card">
                    <div class="layui-card-header">{{ $article->article_subject }}</div>
                        <div class="layui-card-body">
                            <div class="clamp">{!! $article->article_content !!}</div>
                        </div>

                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <div class="layui-row txt-center">
                <div class="layui-box layui-laypage layui-laypage-default" id="layui-laypage-2">
            @for($i=0; $i<$data->total()/$page_size; $i++)
                                    @if($data->currentPage() == ($i+1))
                                        <a href="{{ $data->url($i+1) }}" class="p-curr">{{ $i+1 }}</a>
                                    @else
                                        <a href="{{ $data->url($i+1) }}">{{ $i+1 }}</a>
                                    @endif
                                @endfor
                </div>
        </div>
    </div>
</div>

</div>
@stop
