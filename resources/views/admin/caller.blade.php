@extends('admin.common.layout') @section('content')
<style>
    .layadmin-caller .caller-contar .caller-img {
        width: 120px;
        height: 120px;
        border: 1px solid #e5e5e5;
        border-radius: 5px;
    }

    .layadmin-caller .caller-contar .caller-item .caller-main p {
        line-height: initial;
        padding: 0;
    }

    .demo-template-caller1 {
        text-align: center;
    }

    .clamp {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 3;
        text-align: justify;
    }

    /* 隐藏最小化按钮 */
    .layui-layer-min {
        display: none!important;
    }

    /* ueditor 最小高度 */
    .edui-default .edui-editor-iframeholder {
        min-height: initial;
    }

    .edui-editor {
        max-width: 100%!important;
    }

    .layui-layer {
        z-index: 999!important;
    }

    .layui-layer-shade {
        z-index: 998!important;
    }

    .layadmin-caller .caller-contar .caller-item {
        padding: 15px 0;
    }

    .layadmin-caller {
        padding: 30px 30px 0;
    }

    .layadmin-caller .caller-contar {
        padding-bottom: 0;
    }

    #demo-template-caller1 {
        text-align: center;
    }

    .layui-laypage a,
    .layui-laypage span {
        margin: 0 -1px 0px 0;
    }

    .layui-layer-content,
    #test-template {
        overflow-x: hidden;
    }

    #test-template, #test-template-2{
        display: none;
    }

    .p-curr {
        background-color: #009688!important;
        color: #fff!important;
    }
    #editor2{width: 100%!important;}
</style>
<div class="layui-body" id="LAY_app_body">
    <div class="layadmin-tabsbody-item layui-show">
        <div class="layui-card layadmin-header">
            <div class="layui-breadcrumb" lay-filter="breadcrumb" style="visibility: visible;">
                <a lay-href="">Articles</a>
            </div>
        </div>
        <div class="layui-fluid">
            <div class="layadmin-caller">
                <section style="margin-bottom: 15px;">
                    <div class="layui-btn-group">
                        <button class="layui-btn layui-btn-sm" id="btn-add">添加<i class="layui-icon">&#xe654;</i></button>
                        <button class="layui-btn layui-btn-sm" id="btn-edit">编辑<i class="layui-icon">&#xe642;</i></b</button>
                        <button class="layui-btn layui-btn-sm" id="btn-del">删除<i class="layui-icon">&#xe640;</i></button>
                    </div>
                </section>
                <div class="layui-form caller-seach" action="" style="padding-bottom: 15px;">
                    <i class="layui-icon layui-icon-search caller-seach-icon caller-icon"></i>
                    <input type="text" name="title" required="" lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input caller-pl32">
                    <i class="layui-icon layui-icon-close caller-dump-icon caller-icon"></i>
                </div>
                <div class="layui-form" action="">
                    <div class="caller-contar">
                        {{ csrf_field() }}

                        {{-- 文章列表 --}}
                        @foreach($articles as $article)
                        <div class="caller-item">
                            <img src="{{asset('images/li.jpg')}}" alt="" class="caller-img caller-fl">
                            <div class="caller-main caller-fl" style="width: 80%;">
                                <div style="padding: 15px 0;" class="c-title">{{ $article->article_subject }}</div>
                                <div class="caller-iconset  clamp c-content">{!! $article->article_content !!}</div>
                            </div>
                            <span class="caller-fr"><input type="checkbox" lay-skin="primary" title="" value="{{ $article->article_id }}"></span>
                        </div>
                        @endforeach

                        <div id="demo-template-caller1">
                            <div class="layui-box layui-laypage layui-laypage-default" id="layui-laypage-2">

                                {{-- 分页 --}}
                                @for($i=0; $i<$articles->total()/$page_size; $i++)
                                    @if($articles->currentPage() == ($i+1))
                                        <a href="{{ $articles->url($i+1) }}" class="p-curr">{{ $i+1 }}</a>
                                    @else
                                        <a href="{{ $articles->url($i+1) }}">{{ $i+1 }}</a>
                                    @endif
                                @endfor

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div id="test-template">
    <form form class="layui-form" action="">
        <div class="layui-form" action="" style="margin: 15px 15px 0 0;">
            <div class="layui-form-item">
                <label class="layui-form-label">标题</label>
                <div class="layui-input-block">
                    <input type="text" name="title" required lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item layui-form-text">
                <label class="layui-form-label">内容</label>
                <div class="layui-input-block">
                    <textarea name="desc" required lay-verify="required" placeholder="请输入内容" class="layui-textarea" id="editor" style="height: 200px;" ></textarea>
                </div>
            </div>
            <div class="layui-form-item">
                <div class="layui-input-block">
                    <button class="layui-btn" lay-submit lay-filter="articleAddForm">立即提交</button>
                    <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                </div>
            </div>
        </div>
    </form>
</div>
<div id="test-template-2">
        <form form class="layui-form" action="">
            <div class="layui-form" action="" style="margin: 15px 15px 0 0;">
                <div class="layui-form-item">
                    <label class="layui-form-label">标题</label>
                    <div class="layui-input-block">
                        <input type="text" name="title" required lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input" id="title2">
                    </div>
                </div>
                <div class="layui-form-item layui-form-text">
                    <label class="layui-form-label">内容</label>
                    <div class="layui-input-block">
                        <textarea name="desc" required lay-verify="required" placeholder="请输入内容" class="layui-textarea" id="editor2" style="height: 200px;" ></textarea>
                    </div>
                </div>
                <div class="layui-form-item">
                    <div class="layui-input-block">
                        <button class="layui-btn" lay-submit lay-filter="articleEditForm">立即提交</button>
                        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
<script type="text/javascript" src="{{ asset('ueditor/ueditor.config.js') }}"></script>
<script type="text/javascript" src="{{ asset('ueditor/ueditor.all.js') }}"></script>
<script>
    layui.use(['form', 'layer'], function() {
        var form = layui.form,
            $ = layui.jquery,
            layer = layui.layer,
            index = new Number,
            index2 = new Number

        form.render();

        var ue = UE.getEditor('editor', {
            initialFrameHeight: 160,
            scaleEnabled: true,
            toolbars: [
                [
                    'undo', //撤销
                    'redo', //重做
                    'bold', //加粗
                    'indent', //首行缩进
                    'italic', //斜体
                    'underline', //下划线
                    'strikethrough', //删除线
                    'source', //源代码
                    'horizontal', //分隔线
                    'time', //时间
                    'date', //日期
                    'cleardoc', //清空文档
                    'insertparagraphbeforetable', //"表格前插入行"
                    'fontfamily', //字体
                    'fontsize', //字号
                    'paragraph', //段落格式
                    'insertimage', //多图上传
                    'emotion', //表情
                    'spechars', //特殊字符
                    'justifyleft', //居左对齐
                    'justifyright', //居右对齐
                    'justifycenter', //居中对齐
                    'justifyjustify', //两端对齐
                    'forecolor', //字体颜色
                    'backcolor', //背景色
                    'insertorderedlist', //有序列表
                    'insertunorderedlist', //无序列表
                    'attachment', //附件
                    'lineheight', //行间距
                    'edittip ', //编辑提示
                    'background', //背景
                    'inserttable', //插入表格
                    'edittable', //表格属性
                ]
            ],
        })

        $('#btn-add').on('click', function() {
            index = layer.open({
                type: 1,
                title: '添加',
                shadeClose: true,
                shade: false,
                maxmin: true, //开启最大化最小化按钮
                area: ['800px', '450px'],
                content: $('#test-template'),
                end: function() {}
            });
        })

        $('#btn-del').on('click', function() {
            var n = $('.layui-form-checked').length,
                ids = [];
            $.each($('.layui-form-checked'), function (i,val) {
                ids.push($(val).closest('.caller-item').find('input[type=checkbox]').val())
            });
            if(n === 0) {
                layer.msg('请至少选择一项！')
                return false
            }
            //询问框
            layer.confirm('已选中'+n+'项，确定要删除吗？', {
                btn: ['确定', '取消'] //按钮
            }, function() {
                $.ajax({
                    type: 'POST',
                    url: '/admin/articles/del',
                    data: {ids: ids, _token: $('input[name=_token]').val()},
                    success: function(res) {
                        if (res.code === true) {
                            layer.msg('删除成功!', {
                                icon: 1,
                                time: 1000
                            }, function() {
                                window.location.reload()
                            });

                        }
                    }
                })
            }, function() {
                // layer.msg('取消了', {
                //     time: 2000, //20s后自动关闭
                //     btn: ['明白了', '知道了']
                // });
                $("input[type=checkbox]").prop("checked", false);
                form.render('checkbox');
            });
        })

        $('#btn-edit').on('click', function () {
            if($('.layui-form-checked').length != 1) {
                layer.msg('请选择 1 个进行编辑！')
                return false
            }

            var ue2 = UE.getEditor('editor2', {
                initialFrameHeight: 160,
                scaleEnabled: true,
                toolbars: [
                    [
                        'undo', //撤销
                        'redo', //重做
                        'bold', //加粗
                        'indent', //首行缩进
                        'italic', //斜体
                        'underline', //下划线
                        'strikethrough', //删除线
                        'source', //源代码
                        'horizontal', //分隔线
                        'time', //时间
                        'date', //日期
                        'cleardoc', //清空文档
                        'insertparagraphbeforetable', //"表格前插入行"
                        'fontfamily', //字体
                        'fontsize', //字号
                        'paragraph', //段落格式
                        'insertimage', //多图上传
                        'emotion', //表情
                        'spechars', //特殊字符
                        'justifyleft', //居左对齐
                        'justifyright', //居右对齐
                        'justifycenter', //居中对齐
                        'justifyjustify', //两端对齐
                        'forecolor', //字体颜色
                        'backcolor', //背景色
                        'insertorderedlist', //有序列表
                        'insertunorderedlist', //无序列表
                        'attachment', //附件
                        'lineheight', //行间距
                        'edittip ', //编辑提示
                        'background', //背景
                        'inserttable', //插入表格
                        'edittable', //表格属性
                    ]
                ],
            })

            ue2.ready(function() {
                var el = $('.layui-form-checked').closest('.caller-item')
                $('#title2').val(el.find('.c-title').text())
                //设置编辑器的内容
                ue2.setContent(el.find('.c-content').html());
                // //获取html内容，返回: <p>hello</p>
                // var html = ue.getContent();
                // //获取纯文本内容，返回: hello
                // var txt = ue.getContentTxt();
            });

            index2 = layer.open({
                type: 1,
                title: '编辑',
                shadeClose: true,
                shade: false,
                maxmin: true, //开启最大化最小化按钮
                area: ['800px', '450px'],
                content: $('#test-template-2'),
                end: function () {
                    UE.getEditor('editor2').destroy()

                    $("input[type=checkbox]").prop("checked", false);
                    form.render('checkbox');
                }
            });
        })

        form.on('submit(articleAddForm)', function(data) {
            data.field._token = $('input[name=_token]').val()
            $.ajax({
                type: 'POST',
                url: '/admin/articles/add',
                data: data.field,
                success: function(res) {
                    if (res.code === true) {
                        layer.close(index)
                        layer.msg('添加成功!', {
                            icon: 1,
                            time: 1000
                        }, function() {
                            window.location.reload()
                        });

                    }
                }
            })

            return false
        })

        form.on('submit(articleEditForm)', function(data) {
            data.field._token = $('input[name=_token]').val()
            data.field.id = $('.layui-form-checked').closest('.caller-item').find('input[type=checkbox]').val()
            $.ajax({
                type: 'POST',
                url: '/admin/articles/edit',
                data: data.field,
                success: function(res) {
                    if (res.code === true) {
                        layer.close(index2)
                        layer.msg('编辑成功!', {
                            icon: 1,
                            time: 1000
                        }, function() {
                            window.location.reload()
                        });
                    }
                }
            })

            return false
        })


    })
</script>
@stop
