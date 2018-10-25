@extends('admin.common.layout')
@section('content')
<div class="layui-body" id="LAY_app_body">
    <div class="layadmin-tabsbody-item layui-show"><div class="layui-card layadmin-header">
  <div class="layui-breadcrumb" lay-filter="breadcrumb" style="visibility: visible;">
    <a lay-href="">主页</a><span lay-separator="">/</span>
    <a><cite>组件</cite></a><span lay-separator="">/</span>
    <a><cite>表单</cite></a><span lay-separator="">/</span>
    <a><cite>表单元素</cite></a>
  </div>
</div><style>
/* 这段样式只是用于演示 */

</style><div class="layui-fluid">
  <div class="layui-row layui-col-space15">
    <div class="layui-col-md6">
      <div class="layui-card">
        <div class="layui-card-header">输入框</div>
        <div class="layui-card-body layui-row layui-col-space10">
          <div class="layui-col-md12">
            <input type="text" name="title" placeholder="请输入标题" autocomplete="off" class="layui-input">
          </div>
          <div class="layui-col-md6">
            <input type="text" name="title" placeholder="用户名" autocomplete="off" class="layui-input">
          </div>
          <div class="layui-col-md6">
            <input type="password" name="title" placeholder="密码" autocomplete="off" class="layui-input">
          </div>
        </div>
      </div>
      <div class="layui-card layui-form" lay-filter="component-form-element">
        <div class="layui-card-header">下拉选择框</div>
        <div class="layui-card-body layui-row layui-col-space10">
          <div class="layui-col-md6">
            <select name="city" lay-verify="">
              <option value="">请选择一个城市</option>
              <option value="010">北京</option>
              <option value="021">上海</option>
              <option value="0571">杭州</option>
            </select><div class="layui-unselect layui-form-select"><div class="layui-select-title"><input type="text" placeholder="请选择一个城市" value="" readonly="" class="layui-input layui-unselect"><i class="layui-edge"></i></div><dl class="layui-anim layui-anim-upbit"><dd lay-value="" class="layui-select-tips">请选择一个城市</dd><dd lay-value="010" class="">北京</dd><dd lay-value="021" class="">上海</dd><dd lay-value="0571" class="">杭州</dd></dl></div>
          </div>
          <div class="layui-col-md6">
            <select name="city" lay-verify="">
              <option value="010">北京</option>
              <option value="021" disabled="">上海（禁用效果）</option>
              <option value="0571" selected="">杭州</option>
            </select><div class="layui-unselect layui-form-select"><div class="layui-select-title"><input type="text" placeholder="请选择" value="杭州" readonly="" class="layui-input layui-unselect"><i class="layui-edge"></i></div><dl class="layui-anim layui-anim-upbit"><dd lay-value="010" class="">北京</dd><dd lay-value="021" class=" layui-disabled">上海（禁用效果）</dd><dd lay-value="0571" class="layui-this">杭州</dd></dl></div>
          </div>
          <div class="layui-col-md6">
            <select name="quiz">
              <option value="">请选择</option>
              <optgroup label="城市记忆">
                <option value="你工作的第一个城市">你工作的第一个城市？</option>
              </optgroup>
              <optgroup label="学生时代">
                <option value="你的工号">你的工号？</option>
                <option value="你最喜欢的老师">你最喜欢的老师？</option>
              </optgroup>
            </select><div class="layui-unselect layui-form-select"><div class="layui-select-title"><input type="text" placeholder="请选择" value="" readonly="" class="layui-input layui-unselect"><i class="layui-edge"></i></div><dl class="layui-anim layui-anim-upbit layui-select-group"><dd lay-value="" class="layui-select-tips">请选择</dd><dt>城市记忆</dt><dd lay-value="你工作的第一个城市" class="">你工作的第一个城市？</dd><dt>学生时代</dt><dd lay-value="你的工号" class="">你的工号？</dd><dd lay-value="你最喜欢的老师" class="">你最喜欢的老师？</dd></dl></div>
          </div>
          <div class="layui-col-md6">
            <select name="city" lay-verify="required" lay-search="">
              <option value="">带搜索的选择框</option>
              <option value="1">layer</option>
              <option value="2">form</option>
              <option value="3">layim</option>
              <option value="4">element</option>
              <option value="5">laytpl</option>
              <option value="6">upload</option>
              <option value="7">laydate</option>
              <option value="8">laypage</option>
              <option value="9">flow</option>
              <option value="10">util</option>
              <option value="11">code</option>
              <option value="12">tree</option>
              <option value="13">layedit</option>
              <option value="14">nav</option>
              <option value="15">tab</option>
              <option value="16">table</option>
              <option value="17">select</option>
              <option value="18">checkbox</option>
              <option value="19">switch</option>
              <option value="20">radio</option>
            </select><div class="layui-form-select"><div class="layui-select-title"><input type="text" placeholder="带搜索的选择框" value="" class="layui-input"><i class="layui-edge"></i></div><dl class="layui-anim layui-anim-upbit"><dd lay-value="" class="layui-select-tips">带搜索的选择框</dd><dd lay-value="1" class="">layer</dd><dd lay-value="2" class="">form</dd><dd lay-value="3" class="">layim</dd><dd lay-value="4" class="">element</dd><dd lay-value="5" class="">laytpl</dd><dd lay-value="6" class="">upload</dd><dd lay-value="7" class="">laydate</dd><dd lay-value="8" class="">laypage</dd><dd lay-value="9" class="">flow</dd><dd lay-value="10" class="">util</dd><dd lay-value="11" class="">code</dd><dd lay-value="12" class="">tree</dd><dd lay-value="13" class="">layedit</dd><dd lay-value="14" class="">nav</dd><dd lay-value="15" class="">tab</dd><dd lay-value="16" class="">table</dd><dd lay-value="17" class="">select</dd><dd lay-value="18" class="">checkbox</dd><dd lay-value="19" class="">switch</dd><dd lay-value="20" class="">radio</dd></dl></div>
          </div>
          <div class="layui-col-md12">
            <select name="city" lay-verify="">
              <option value="">请选择一个城市</option>
              <option value="010">北京</option>
              <option value="021">上海</option>
              <option value="0571">杭州</option>
            </select><div class="layui-unselect layui-form-select"><div class="layui-select-title"><input type="text" placeholder="请选择一个城市" value="" readonly="" class="layui-input layui-unselect"><i class="layui-edge"></i></div><dl class="layui-anim layui-anim-upbit"><dd lay-value="" class="layui-select-tips">请选择一个城市</dd><dd lay-value="010" class="">北京</dd><dd lay-value="021" class="">上海</dd><dd lay-value="0571" class="">杭州</dd></dl></div>
          </div>
        </div>
      </div>
      <div class="layui-card layui-form" lay-filter="component-form-element">
        <div class="layui-card-header">复选框</div>
        <div class="layui-card-body layui-row layui-col-space10">
          <div class="layui-col-md12">
            <input type="checkbox" name="" title="写作" checked=""><div class="layui-unselect layui-form-checkbox layui-form-checked"><span>写作</span><i class="layui-icon layui-icon-ok"></i></div>
            <input type="checkbox" name="" title="发呆"><div class="layui-unselect layui-form-checkbox"><span>发呆</span><i class="layui-icon layui-icon-ok"></i></div>
            <input type="checkbox" name="" title="禁用" disabled=""><div class="layui-unselect layui-form-checkbox layui-checkbox-disbaled layui-disabled"><span>禁用</span><i class="layui-icon layui-icon-ok"></i></div>
          </div>
          <div class="layui-col-md12">
            <input type="checkbox" name="" title="写作" lay-skin="primary" checked=""><div class="layui-unselect layui-form-checkbox layui-form-checked" lay-skin="primary"><span>写作</span><i class="layui-icon layui-icon-ok"></i></div>
            <input type="checkbox" name="" title="发呆" lay-skin="primary"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><span>发呆</span><i class="layui-icon layui-icon-ok"></i></div>
            <input type="checkbox" name="" title="禁用" lay-skin="primary" disabled=""><div class="layui-unselect layui-form-checkbox layui-checkbox-disbaled layui-disabled" lay-skin="primary"><span>禁用</span><i class="layui-icon layui-icon-ok"></i></div>
            <input type="checkbox" name="" lay-skin="primary"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
          </div>
        </div>
      </div>
      <div class="layui-card layui-form" lay-filter="component-form-element">
        <div class="layui-card-header">开关</div>
        <div class="layui-card-body layui-row layui-col-space10">
          <div class="layui-col-md12">
            <input type="checkbox" name="xxx" lay-skin="switch"><div class="layui-unselect layui-form-switch" lay-skin="_switch"><em></em><i></i></div>
            <input type="checkbox" name="yyy" lay-skin="switch" lay-text="ON|OFF" checked=""><div class="layui-unselect layui-form-switch layui-form-onswitch" lay-skin="_switch"><em>ON</em><i></i></div>
            <input type="checkbox" name="zzz" lay-skin="switch" lay-text="开启|关闭"><div class="layui-unselect layui-form-switch" lay-skin="_switch"><em>关闭</em><i></i></div>
            <input type="checkbox" name="aaa" lay-skin="switch" disabled=""><div class="layui-unselect layui-form-switch layui-checkbox-disbaled layui-disabled" lay-skin="_switch"><em></em><i></i></div>
          </div>
        </div>
      </div>
      <div class="layui-card layui-form" lay-filter="component-form-element">
        <div class="layui-card-header">单选框</div>
        <div class="layui-card-body layui-row layui-col-space10">
          <div class="layui-col-md12">
            <input type="radio" name="sex" value="nan" title="男"><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><div>男</div></div>
            <input type="radio" name="sex" value="nv" title="女" checked=""><div class="layui-unselect layui-form-radio layui-form-radioed"><i class="layui-anim layui-icon"></i><div>女</div></div>
            <input type="radio" name="sex" value="" title="中性" disabled=""><div class="layui-unselect layui-form-radio layui-radio-disbaled layui-disabled"><i class="layui-anim layui-icon"></i><div>中性</div></div>
          </div>
        </div>
      </div>
    </div>
    <div class="layui-col-md6">
      <div class="layui-card">
        <div class="layui-card-header">文本域</div>
        <div class="layui-card-body layui-row layui-col-space10">
          <div class="layui-col-md12">
            <textarea name="" placeholder="请输入" class="layui-textarea"></textarea>
          </div>
        </div>
      </div>
      <div class="layui-card">
        <div class="layui-card-header">响应式组合</div>
        <div class="layui-card-body">
          <form class="layui-form" action="" lay-filter="component-form-element">
            <div class="layui-row layui-col-space10 layui-form-item">
              <div class="layui-col-lg6">
                <label class="layui-form-label">员工姓名：</label>
                <div class="layui-input-block">
                  <input type="text" name="fullname" lay-verify="required" placeholder="" autocomplete="off" class="layui-input">
                </div>
              </div>
              <div class="layui-col-lg6">
                <label class="layui-form-label">技术工种：</label>
                <div class="layui-input-block">
                  <select name="type" lay-verify="required" lay-filter="aihao">
                    <option value=""></option>
                    <option value="0">前端工程师</option>
                    <option value="1">Node.js工程师</option>
                    <option value="2">PHP工程师</option>
                    <option value="3">Java工程师</option>
                    <option value="4">运维</option>
                    <option value="4">视觉设计师</option>
                  </select><div class="layui-unselect layui-form-select"><div class="layui-select-title"><input type="text" placeholder="请选择" value="" readonly="" class="layui-input layui-unselect"><i class="layui-edge"></i></div><dl class="layui-anim layui-anim-upbit"><dd lay-value="" class="layui-select-tips">请选择</dd><dd lay-value="0" class="">前端工程师</dd><dd lay-value="1" class="">Node.js工程师</dd><dd lay-value="2" class="">PHP工程师</dd><dd lay-value="3" class="">Java工程师</dd><dd lay-value="4" class="">运维</dd><dd lay-value="4" class="">视觉设计师</dd></dl></div>
                </div>
              </div>
            </div>
            <div class="layui-form-item">
              <label class="layui-form-label">兴趣爱好：</label>
              <div class="layui-input-block">
                <input type="checkbox" name="interest[write]" title="写作"><div class="layui-unselect layui-form-checkbox"><span>写作</span><i class="layui-icon layui-icon-ok"></i></div>
                <input type="checkbox" name="interest[read]" title="阅读"><div class="layui-unselect layui-form-checkbox"><span>阅读</span><i class="layui-icon layui-icon-ok"></i></div>
                <input type="checkbox" name="interest[code]" title="代码" checked=""><div class="layui-unselect layui-form-checkbox layui-form-checked"><span>代码</span><i class="layui-icon layui-icon-ok"></i></div>
                <input type="checkbox" name="interest[dreaming]" title="做梦"><div class="layui-unselect layui-form-checkbox"><span>做梦</span><i class="layui-icon layui-icon-ok"></i></div>
              </div>
            </div>
            <div class="layui-form-item">
              <label class="layui-form-label">是否婚姻：</label>
              <div class="layui-input-block">
                <input type="checkbox" name="marriage" lay-skin="switch" lay-text="是|否"><div class="layui-unselect layui-form-switch" lay-skin="_switch"><em>否</em><i></i></div>
              </div>
            </div>
            <div class="layui-form-item">
              <label class="layui-form-label">所属职称：</label>
              <div class="layui-input-block">
                <input type="radio" name="role" value="" title="经理"><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><div>经理</div></div>
                <input type="radio" name="role" value="" title="主管"><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><div>主管</div></div>
                <input type="radio" name="role" value="" title="码农" checked=""><div class="layui-unselect layui-form-radio layui-form-radioed"><i class="layui-anim layui-icon"></i><div>码农</div></div>
                <input type="radio" name="role" value="" title="端水"><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><div>端水</div></div>
              </div>
            </div>
            <div class="layui-form-item">
              <label class="layui-form-label">其它信息：</label>
              <div class="layui-input-block">
                <textarea name="other" placeholder="" class="layui-textarea"></textarea>
              </div>
            </div>
            <div class="layui-form-item">
              <label class="layui-form-label"> </label>
              <div class="layui-input-block">
                <input type="checkbox" name="" title="同意" lay-skin="primary" checked=""><div class="layui-unselect layui-form-checkbox layui-form-checked" lay-skin="primary"><span>同意</span><i class="layui-icon layui-icon-ok"></i></div>
              </div>
            </div>
            <div class="layui-form-item">
              <div class="layui-input-block">
                <button class="layui-btn" lay-submit="" lay-filter="component-form-element">立即提交</button>
                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div><script>
layui.use(['admin', 'form'], function(){
  var $ = layui.$
  ,admin = layui.admin
  ,element = layui.element
  ,form = layui.form;

  form.render(null, 'component-form-element');
  element.render('breadcrumb', 'breadcrumb');

  form.on('submit(component-form-element)', function(data){
    layer.msg(JSON.stringify(data.field));
    return false;
  });
});
</script></div>
  </div>
@stop
