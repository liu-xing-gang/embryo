@extends('admin.common.layout')
@section('content')
<div class="layui-body" id="LAY_app_body">
    <div class="layadmin-tabsbody-item layui-show"><div class="layui-card layadmin-header">
    <div class="layui-breadcrumb" lay-filter="breadcrumb" style="visibility: visible;">
      <a lay-href="">主页</a><span lay-separator="">/</span>
      <a><cite>组件</cite></a><span lay-separator="">/</span>
      <a><cite>代码修饰</cite></a>
    </div>
  </div><div class="layui-fluid">
    <div class="layui-row layui-col-space15">
      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">默认修饰</div>
          <div class="layui-card-body">
            <pre class="layui-code layui-box layui-code-view"><h3 class="layui-code-h3">code<a href="http://www.layui.com/doc/modules/code.html" target="_blank">layui.code</a></h3><ol class="layui-code-ol"><li>//在里面存放任意的代码</li><li>Lay.fn.event = function(modName, events, params){</li><li>  var that = this, result = null, filter = events.match(/\(.*\)$/)||[];</li><li>  var set = (events = modName + '.'+ events).replace(filter, ''); </li><li>};</li><li>            </li></ol></pre>
          </div>
        </div>

        <div class="layui-card">
          <div class="layui-card-header">notepad风格</div>
          <div class="layui-card-body">
            <pre class="layui-code layui-box layui-code-view layui-code-notepad" lay-title="JavaScript" lay-skin="notepad"><h3 class="layui-code-h3">JavaScript<a href="http://www.layui.com/doc/modules/code.html" target="_blank">layui.code</a></h3><ol class="layui-code-ol"><li>//代码区域</li><li>Lay.fn.event = function(modName, events, params){</li><li>  var that = this, result = null, filter = events.match(/\(.*\)$/)||[];</li><li>  var set = (events = modName + '.'+ events).replace(filter, ''); </li><li>};</li><li>            </li></ol></pre>
          </div>
        </div>

        <div class="layui-card">
          <div class="layui-card-header">代码中的代码</div>
          <div class="layui-card-body">
            <pre class="layui-code layui-box layui-code-view"><h3 class="layui-code-h3">code<a href="http://www.layui.com/doc/modules/code.html" target="_blank">layui.code</a></h3><ol class="layui-code-ol"><li>//代码区域</li><li>Lay.fn.event = function(modName, events, params){</li><li>  var that = this, result = null, filter = events.match(/\(.*\)$/)||[];</li><li>  var set = (events = modName + '.'+ events).replace(filter, ''); </li><li>};</li><li>      <pre class="layui-code layui-box layui-code-view"><h3 class="layui-code-h3">code<a href="http://www.layui.com/doc/modules/code.html" target="_blank">layui.code</a></h3><ol class="layui-code-ol"><li>//代码区域</li><li>Lay.fn.event = function(modName, events, params){</li><li>  var that = this, result = null, filter = events.match(/\(.*\)$/)||[];</li><li>  var set = (events = modName + '.'+ events).replace(filter, ''); </li><li>};</li><li>      </li></ol></pre></li><li>      </li></ol></pre>

      <pre class="layui-code layui-box layui-code-view layui-code-notepad" lay-skin="notepad"><h3 class="layui-code-h3">code<a href="http://www.layui.com/doc/modules/code.html" target="_blank">layui.code</a></h3><ol class="layui-code-ol"><li>//代码区域</li><li>Lay.fn.event = function(modName, events, params){</li><li>  var that = this, result = null, filter = events.match(/\(.*\)$/)||[];</li><li>  var set = (events = modName + '.'+ events).replace(filter, ''); </li><li>};</li><li>      <pre class="layui-code layui-box layui-code-view layui-code-notepad" lay-skin="notepad"><h3 class="layui-code-h3">code<a href="http://www.layui.com/doc/modules/code.html" target="_blank">layui.code</a></h3><ol class="layui-code-ol"><li>//代码区域</li><li>Lay.fn.event = function(modName, events, params){</li><li>  var that = this, result = null, filter = events.match(/\(.*\)$/)||[];</li><li>  var set = (events = modName + '.'+ events).replace(filter, ''); </li><li>};</li><li><pre class="layui-code layui-box layui-code-view layui-code-notepad" lay-skin="notepad"><h3 class="layui-code-h3">code<a href="http://www.layui.com/doc/modules/code.html" target="_blank">layui.code</a></h3><ol class="layui-code-ol"><li>//代码区域</li><li>Lay.fn.event = function(modName, events, params){</li><li>  var that = this, result = null, filter = events.match(/\(.*\)$/)||[];</li><li>  var set = (events = modName + '.'+ events).replace(filter, ''); </li><li>};</li><li><pre class="layui-code layui-box layui-code-view layui-code-notepad" lay-skin="notepad"><h3 class="layui-code-h3">code<a href="http://www.layui.com/doc/modules/code.html" target="_blank">layui.code</a></h3><ol class="layui-code-ol"><li>//代码区域</li><li>Lay.fn.event = function(modName, events, params){</li><li>  var that = this, result = null, filter = events.match(/\(.*\)$/)||[];</li><li>  var set = (events = modName + '.'+ events).replace(filter, ''); </li><li>};</li><li><pre class="layui-code layui-box layui-code-view layui-code-notepad" lay-skin="notepad"><h3 class="layui-code-h3">code<a href="http://www.layui.com/doc/modules/code.html" target="_blank">layui.code</a></h3><ol class="layui-code-ol"><li>//代码区域</li><li>Lay.fn.event = function(modName, events, params){</li><li>  var that = this, result = null, filter = events.match(/\(.*\)$/)||[];</li><li>  var set = (events = modName + '.'+ events).replace(filter, ''); </li><li>};</li><li>            </li></ol></pre></li><li>            </li></ol></pre></li><li>            </li></ol></pre></li><li>            </li></ol></pre></li><li>            </li></ol></pre>
          </div>
        </div>

        <div class="layui-card">
          <div class="layui-card-header">固定高度</div>
          <div class="layui-card-body">
            <pre class="layui-code layui-box layui-code-view" lay-height="150px"><h3 class="layui-code-h3">code<a href="http://www.layui.com/doc/modules/code.html" target="_blank">layui.code</a></h3><ol class="layui-code-ol" style="max-height: 150px;"><li>//代码区域</li><li>Lay.fn.event = function(modName, events, params){</li><li>  var that = this, result = null, filter = events.match(/\(.*\)$/)||[]; //提取事件过滤器</li><li>  var set = (events = modName + '.'+ events).replace(filter, ''); //获取事件本体名</li><li>  var callback = function(_, item){</li><li>    var res = item &amp;&amp; item.call(that, params);</li><li>    res === false &amp;&amp; result === null &amp;&amp; (result = false);</li><li>  };</li><li>  layui.each(config.event[set], callback);</li><li>  filter[0] &amp;&amp; layui.each(config.event[events], callback); //执行过滤器中的事件</li><li>  return result;</li><li>};</li><li>            </li></ol></pre>
          </div>
        </div>

        <div class="layui-card">
          <div class="layui-card-header">XXX</div>
          <div class="layui-card-body">

          </div>
        </div>

        <div class="layui-card">
          <div class="layui-card-header">XXX</div>
          <div class="layui-card-body">

          </div>
        </div>

        <div class="layui-card">
          <div class="layui-card-header">XXX</div>
          <div class="layui-card-body">

          </div>
        </div>

      </div>
    </div>
  </div><script>
  layui.use(['admin', 'code'], function(){

    layui.code({
      elem: 'pre'
    });

  });
  </script></div>
  </div>
@stop
