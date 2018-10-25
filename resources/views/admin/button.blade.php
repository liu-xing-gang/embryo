@extends('admin.common.layout')
@section('content')
<div class="layui-body" id="LAY_app_body">
    <div class="layadmin-tabsbody-item layui-show"><div class="layui-card layadmin-header">
  <div class="layui-breadcrumb" lay-filter="breadcrumb" style="visibility: visible;">
    <a lay-href="">主页</a><span lay-separator="">/</span>
    <a><cite>组件</cite></a><span lay-separator="">/</span>
    <a><cite>按钮</cite></a>
  </div>
</div><div class="layui-fluid">
  <div class="layui-row layui-col-space15">
    <div class="layui-col-md6">
      <div class="layui-card">
        <div class="layui-card-header">按钮主题</div>
        <div class="layui-card-body">
          <div class="layui-btn-container">
            <button class="layui-btn layui-btn-primary">原始按钮</button>
            <button class="layui-btn">默认按钮</button>
            <button class="layui-btn layui-btn-normal">百搭按钮</button>
            <button class="layui-btn layui-btn-warm">暖色按钮</button>
            <button class="layui-btn layui-btn-danger">警告按钮</button>
            <button class="layui-btn layui-btn-disabled">禁用按钮</button>
          </div>
        </div>
      </div>
      <div class="layui-card">
        <div class="layui-card-header">按钮尺寸</div>
        <div class="layui-card-body">
          <div class="layui-btn-container">
            <button class="layui-btn layui-btn-primary layui-btn-lg">大型按钮</button>
            <button class="layui-btn layui-btn-primary">默认按钮</button>
            <button class="layui-btn layui-btn-primary layui-btn-sm">小型按钮</button>
            <button class="layui-btn layui-btn-primary layui-btn-xs">迷你按钮</button>

            <br>

            <button class="layui-btn layui-btn-lg">大型按钮</button>
            <button class="layui-btn">默认按钮</button>
            <button class="layui-btn layui-btn-sm">小型按钮</button>
            <button class="layui-btn layui-btn-xs">迷你按钮</button>

            <br>

            <button class="layui-btn layui-btn-lg layui-btn-normal">大型按钮</button>
            <button class="layui-btn layui-btn-normal">默认按钮</button>
            <button class="layui-btn layui-btn-sm layui-btn-normal">小型按钮</button>
            <button class="layui-btn layui-btn-xs layui-btn-normal">迷你按钮</button>
          </div>
        </div>
      </div>
      <div class="layui-card">
        <div class="layui-card-header">按钮图标</div>
        <div class="layui-card-body">
          <div class="layui-btn-container">
            <button class="layui-btn"><i class="layui-icon"></i></button>
            <button class="layui-btn"><i class="layui-icon"></i></button>
            <button class="layui-btn"><i class="layui-icon"></i></button>
            <button class="layui-btn"><i class="layui-icon"></i></button>
            <button class="layui-btn"><i class="layui-icon"></i></button>
            <button class="layui-btn"><i class="layui-icon"></i></button>

            <br>

            <button class="layui-btn layui-btn-danger"><i class="layui-icon"></i></button>
            <button class="layui-btn layui-btn-danger"><i class="layui-icon"></i></button>
            <button class="layui-btn layui-btn-danger"><i class="layui-icon"></i></button>
            <button class="layui-btn layui-btn-danger"><i class="layui-icon"></i></button>
            <button class="layui-btn layui-btn-danger"><i class="layui-icon"></i></button>
            <button class="layui-btn layui-btn-danger"><i class="layui-icon"></i></button>

            <br>

            <button class="layui-btn layui-btn-primary layui-btn-sm"><i class="layui-icon"></i></button>
            <button class="layui-btn layui-btn-primary layui-btn-sm"><i class="layui-icon"></i></button>
            <button class="layui-btn layui-btn-primary layui-btn-sm"><i class="layui-icon"></i></button>
            <button class="layui-btn layui-btn-primary layui-btn-sm"><i class="layui-icon"></i></button>
            <button class="layui-btn layui-btn-primary layui-btn-sm"><i class="layui-icon"></i></button>
            <button class="layui-btn layui-btn-primary layui-btn-sm"><i class="layui-icon"></i></button>

            <br>

            <button class="layui-btn layui-btn-sm"><i class="layui-icon"></i></button>
            <button class="layui-btn layui-btn-sm"><i class="layui-icon"></i></button>
            <button class="layui-btn layui-btn-sm"><i class="layui-icon"></i></button>
            <button class="layui-btn layui-btn-sm"><i class="layui-icon"></i></button>
            <button class="layui-btn layui-btn-sm"><i class="layui-icon"></i></button>
            <button class="layui-btn layui-btn-sm"><i class="layui-icon"></i></button>

            <br>

            <button class="layui-btn layui-btn-normal layui-btn-sm"><i class="layui-icon"></i></button>
            <button class="layui-btn layui-btn-normal layui-btn-sm"><i class="layui-icon"></i></button>
            <button class="layui-btn layui-btn-normal layui-btn-sm"><i class="layui-icon"></i></button>
            <button class="layui-btn layui-btn-normal layui-btn-sm"><i class="layui-icon"></i></button>
            <button class="layui-btn layui-btn-normal layui-btn-sm"><i class="layui-icon"></i></button>
            <button class="layui-btn layui-btn-normal layui-btn-sm"><i class="layui-icon"></i></button>
          </div>
        </div>
      </div>
    </div>
    <div class="layui-col-md6">
      <div class="layui-card">
        <div class="layui-card-header">按钮圆角</div>
        <div class="layui-card-body">
          <div class="layui-btn-container">
            <button class="layui-btn layui-btn-primary layui-btn-radius">原始按钮</button>
            <button class="layui-btn layui-btn-radius">默认按钮</button>
            <button class="layui-btn layui-btn-normal layui-btn-radius">百搭按钮</button>
            <button class="layui-btn layui-btn-warm layui-btn-radius">暖色按钮</button>
            <button class="layui-btn layui-btn-danger layui-btn-radius">警告按钮</button>
            <button class="layui-btn layui-btn-disabled layui-btn-radius">禁用按钮</button>
          </div>
        </div>
      </div>
      <div class="layui-card">
        <div class="layui-card-header">按钮混搭</div>
        <div class="layui-card-body">
          <div class="layui-btn-container">
            <button class="layui-btn layui-btn-lg layui-btn-primary layui-btn-radius">大型加圆角</button>
            <a href="http://www.layui.com/doc/element/button.html" class="layui-btn" target="_blank">跳转的按钮</a>
            <button class="layui-btn layui-btn-sm layui-btn-normal"><i class="layui-icon"></i> 删除</button>
            <button class="layui-btn layui-btn-xs layui-btn-disabled"><i class="layui-icon"></i> 分享</button>

          </div>
        </div>
      </div>
      <div class="layui-card">
        <div class="layui-card-header">按钮组合</div>
        <div class="layui-card-body">
          <div class="layui-btn-container">
            <div class="layui-btn-group">
              <button class="layui-btn">增加</button>
              <button class="layui-btn ">编辑</button>
              <button class="layui-btn">删除</button>
            </div>
          </div>
          <div class="layui-btn-container">
            <div class="layui-btn-group">
              <button class="layui-btn layui-btn-sm"><i class="layui-icon"></i></button>
              <button class="layui-btn layui-btn-sm"><i class="layui-icon"></i></button>
              <button class="layui-btn layui-btn-sm"><i class="layui-icon"></i></button>
              <button class="layui-btn layui-btn-sm"><i class="layui-icon"></i></button>
            </div>
            <div class="layui-btn-group">
              <button class="layui-btn layui-btn-primary layui-btn-sm">文字</button>
              <button class="layui-btn layui-btn-primary layui-btn-sm"><i class="layui-icon"></i></button>
              <button class="layui-btn layui-btn-primary layui-btn-sm"><i class="layui-icon"></i></button>
              <button class="layui-btn layui-btn-primary layui-btn-sm"><i class="layui-icon"></i></button>
            </div>
          </div>
        </div>
      </div>
      <div class="layui-card">
        <div class="layui-card-header">按钮铺满</div>
        <div class="layui-card-body">
          <div class="layui-btn-container">
            <button class="layui-btn layui-btn-fluid">好雨知时节</button>
            <button class="layui-btn layui-btn-fluid">当春乃发生</button>
            <button class="layui-btn layui-btn-fluid">随风潜入夜</button>
            <button class="layui-btn layui-btn-fluid">润物细无声</button>
          </div>
        </div>
      </div>
    </div>

  </div>
</div><script>
layui.use(['admin'], function(){
  var $ = layui.$
  ,admin = layui.admin
  ,element = layui.element;

});
</script></div>
  </div>
@stop
