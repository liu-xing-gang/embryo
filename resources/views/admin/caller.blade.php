@extends('admin.common.layout') @section('content')
<style>
    .layadmin-caller .caller-contar .caller-img {
        width: 120px;
        height: 120px;
        border: 1px solid #e5e5e5;
        border-radius: 5px;
    }

    .clamp {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 3;
        text-align: justify;
    }

    .layadmin-caller .caller-contar .caller-item .caller-main p {
        line-height: initial;
        padding: 0;
    }

    .demo-template-caller1 {
        text-align: center;
    }

    /* 隐藏最小化按钮 */

    .layui-layer-min {
        display: none!important;
    }

    /* ueditor 最小高度 */

    #test-template {
        display: none;
    }

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
        padding: 0 0 15px 0;
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
</style>
<div class="layui-body" id="LAY_app_body">
    <div class="layadmin-tabsbody-item layui-show">

        <div class="layui-card layadmin-header">
            <div class="layui-breadcrumb" lay-filter="breadcrumb" style="visibility: visible;">
                <a lay-href="">主页</a><span lay-separator="">/</span>
                <a><cite>页面</cite></a><span lay-separator="">/</span>
                <a><cite>客户列表</cite></a>
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
                        <div class="caller-item">
                            <img src="{{asset('images/li.jpg')}}" alt="" class="caller-img caller-fl">
                            <div class="caller-main caller-fl" style="width: 80%;">
                                <div style="padding: 15px 0;">李小龙 · 截拳道 ...</div>
                                <div class="caller-iconset  clamp">
                                    <p>
                                        截拳道，指的是不拘于形式，思想上成熟的觉悟，以水为本质而攻击，反击；将一切化解于无形。是武术宗师李小龙生前创立的一类现代武术体系，由于李小龙的过早逝去，使得很多人并不了解截拳道。
                                    </p>
                                </div>
                            </div>
                            <span class="caller-fr"><input type="checkbox" name="like1[read]" lay-skin="primary" title=""></span>
                        </div>
                        <div id="demo-template-caller1">
                            <div class="layui-box layui-laypage layui-laypage-default" id="layui-laypage-2">
                                <a href="javascript:;" class="layui-laypage-prev layui-disabled" data-page="0">上一页</a>
                                <span class="layui-laypage-curr"><em class="layui-laypage-em"></em><em>1</em></span>
                                <a href="javascript:;" data-page="2">2</a><a href="javascript:;" data-page="3">3</a>
                                <a href="javascript:;" data-page="4">4</a><a href="javascript:;" data-page="5">5</a>
                                <span class="layui-laypage-spr">…</span>
                                <a href="javascript:;" class="layui-laypage-last" title="尾页" data-page="7">7</a>
                                <a href="javascript:;" class="layui-laypage-next" data-page="2">下一页</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div id="test-template">
    <div class="layui-form" action="" style="margin: 15px 15px 0 0;">
        <div class="layui-form-item">
            <label class="layui-form-label">输入框</label>
            <div class="layui-input-block">
                <input type="text" name="title" required lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
            </div>
        </div>

        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">文本域</label>
            <div class="layui-input-block" id="editor-container">
                <textarea name="desc" placeholder="请输入内容" class="layui-textarea" id="editor" style="height: 200px;"></textarea>
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-input-block">
                <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ asset('ueditor/ueditor.config.js') }}"></script>
<script type="text/javascript" src="{{ asset('ueditor/ueditor.all.js') }}"></script>
<script>
    layui.use(['form', 'layer'], function() {
        var form = layui.form,
            $ = layui.jquery,
            layer = layui.layer

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
            layer.open({
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
            //询问框
            layer.confirm('确定要删除吗？', {
                btn: ['确定', '取消'] //按钮
            }, function() {
                layer.msg('删除成功', {
                    icon: 1
                });
            }, function() {
                layer.msg('取消了', {
                    time: 2000, //20s后自动关闭
                    // btn: ['明白了', '知道了']
                });
            });

        })
    })
</script>
@stop
