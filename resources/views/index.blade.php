@extends('layout')

    @section('content')
    <section class="layui-container">
        <h5 class="h-label">推荐区</h5>
        <section class="layui-row layui-col-space20">
            <aside class="layui-col-md8">
                <ul class="l-list">
                    @foreach($d as $i)
                    <li>
                        <a href="/articles/{{$i->article_id}}">
                            <article>
                                <h1 class="a-title">{{$i->article_subject}}</h1>
                                <p class="a-bar">
                                    <span>{{$i->created_at}}</span>
                                    <span class="pull-right">分享</span>
                                </p>
                                <div class="a-cont">
                                    <div class="clamp">{!! $i->article_content !!}</div>
                                </div>
                            </article>
                        </a>
                    </li>
                    @endforeach
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
    @stop


