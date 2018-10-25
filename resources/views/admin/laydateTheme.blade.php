@extends('admin.common.layout')
@section('content')
<div class="layui-body" id="LAY_app_body">
    <div class="layadmin-tabsbody-item layui-show"><style>
  .test-laydate-theme-box .layui-inline{margin: 0 20px 20px 0;}

  /* 定制 laydate 皮肤：gbw（由社区提供） */
  .layui-laydate-hint.laydate-theme-gbw,.layui-laydate.laydate-theme-gbw{border:1px solid #FFF;-webkit-box-shadow:0 2px 8px rgba(0,0,0,.15);-moz-box-shadow:0 2px 8px rgba(0,0,0,.15);box-shadow:0 2px 8px rgba(0,0,0,.15)}
  .layui-laydate.laydate-theme-gbw{border-radius:4px;-moz-border-radius:4px;-webkit-border-radius:4px;font-family:"Helvetica Neue For Number",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"PingFang SC","Hiragino Sans GB","Microsoft YaHei","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.5;color:rgba(0,0,0,.65);-webkit-box-sizing:border-box;box-sizing:border-box;margin:0;padding:0;list-style:none;position:absolute;z-index:19850126}
  .laydate-theme-gbw .layui-laydate-header{border-bottom:1px solid #e8e8e8;padding-top:5px}
  .laydate-theme-gbw .layui-laydate-header i{font-size:12px;color:rgba(0,0,0,.45)}
  .laydate-theme-gbw .layui-laydate-header span{color:rgba(0,0,0,.85);font-weight:500}
  .laydate-theme-gbw .layui-laydate-header i:hover,.laydate-theme-gbw .layui-laydate-header span:hover{color:#40a9ff}
  .laydate-theme-gbw .layui-laydate-footer{border-top:0;padding-top:0;height:36px}
  .laydate-theme-gbw .layui-laydate-footer span:hover{color:#40a9ff}
  .laydate-theme-gbw .laydate-footer-btns{top:0}
  .laydate-theme-gbw .layui-laydate-content th{color:rgba(0,0,0,.65)}
  .laydate-theme-gbw .layui-laydate-content td{color:rgba(0,0,0,.65);border-radius:2px;-webkit-transition:background .3s ease;-o-transition:background .3s ease;transition:background .3s ease}
  .laydate-theme-gbw .layui-laydate-content .laydate-day-next,.laydate-theme-gbw .layui-laydate-content .laydate-day-prev{color:rgba(0,0,0,.25)}
  .layui-laydate.laydate-theme-gbw td.layui-this{background-color:transparent!important;border:1px solid #1890ff;border-radius:3px;font-weight:700;color:#1890ff!important}
  .layui-laydate.laydate-theme-gbw li.layui-this{background-color:#1890ff!important;color:#fff!important;border-radius:0;border:0}
  </style><div class="layui-card layadmin-header">
    <div class="layui-breadcrumb" lay-filter="breadcrumb" style="visibility: visible;">
      <a lay-href="">主页</a><span lay-separator="">/</span>
      <a><cite>组件</cite></a><span lay-separator="">/</span>
      <a><cite>日期时间</cite></a>
    </div>
  </div><div class="layui-fluid">
    <div class="layui-row layui-col-space15">
      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">自定义按钮主题</div>
          <div class="layui-card-body" pad15="">
            <div class="layui-form" wid100="">
              <div class="layui-form-item">
                <div class="layui-inline">
                  <label class="layui-form-label">墨绿主题</label>
                  <div class="layui-input-inline">
                    <input type="text" class="layui-input" id="test-laydate-theme-molv" placeholder="yyyy-MM-dd" lay-key="36">
                  </div>
                </div>
                <div class="layui-inline">
                  <label class="layui-form-label">格子主题</label>
                  <div class="layui-input-inline">
                    <input type="text" class="layui-input" id="test-laydate-theme-grid" placeholder="yyyy-MM-dd" lay-key="37">
                  </div>
                </div>
                <div class="layui-inline">
                  <label class="layui-form-label">蓝色主题</label>
                  <div class="layui-input-inline">
                    <input type="text" class="layui-input" id="test-laydate-theme-blue" placeholder="yyyy-MM-dd" lay-key="38">
                  </div>
                </div>
                <div class="layui-inline">
                  <label class="layui-form-label">大红主题</label>
                  <div class="layui-input-inline">
                    <input type="text" class="layui-input" id="test-laydate-theme-red" placeholder="yyyy-MM-dd" lay-key="39">
                  </div>
                </div>
                <div class="layui-inline">
                  <label class="layui-form-label">自定义其它颜色</label>
                  <div class="layui-input-inline">
                    <input type="text" class="layui-input" id="test-laydate-theme-other" placeholder="yyyy-MM-dd" lay-key="40">
                  </div>
                </div>
                <div class="layui-inline">
                  <label class="layui-form-label">定制主题</label>
                  <div class="layui-input-inline">
                    <input type="text" class="layui-input" id="test-laydate-theme-custom" placeholder="yyyy-MM-dd" lay-key="41">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">直接嵌套显示</div>
          <div class="layui-card-body" pad15="">
            <div class="test-laydate-theme-box">
              <div class="layui-inline" id="test-laydate-static-n1" lay-key="42"><div id="layui-laydate42" class="layui-laydate layui-laydate-static"><div class="layui-laydate-main laydate-main-list-0"><div class="layui-laydate-header"><i class="layui-icon laydate-icon laydate-prev-y"></i><i class="layui-icon laydate-icon laydate-prev-m"></i><div class="laydate-set-ym"><span lay-ym="2018-10" lay-type="year">2018年</span><span lay-ym="2018-10" lay-type="month">10月</span></div><i class="layui-icon laydate-icon laydate-next-m"></i><i class="layui-icon laydate-icon laydate-next-y"></i></div><div class="layui-laydate-content"><table><thead><tr><th>日</th><th>一</th><th>二</th><th>三</th><th>四</th><th>五</th><th>六</th></tr></thead><tbody><tr><td class="laydate-day-prev" lay-ymd="2018-9-30">30</td><td lay-ymd="2018-10-1" class="">1</td><td lay-ymd="2018-10-2" class="">2</td><td lay-ymd="2018-10-3" class="">3</td><td lay-ymd="2018-10-4" class="">4</td><td lay-ymd="2018-10-5" class="">5</td><td lay-ymd="2018-10-6" class="">6</td></tr><tr><td lay-ymd="2018-10-7" class="">7</td><td lay-ymd="2018-10-8" class="">8</td><td lay-ymd="2018-10-9" class="">9</td><td lay-ymd="2018-10-10" class="">10</td><td lay-ymd="2018-10-11" class="">11</td><td lay-ymd="2018-10-12" class="">12</td><td lay-ymd="2018-10-13" class="">13</td></tr><tr><td lay-ymd="2018-10-14" class="">14</td><td lay-ymd="2018-10-15" class="">15</td><td lay-ymd="2018-10-16" class="">16</td><td lay-ymd="2018-10-17" class="">17</td><td lay-ymd="2018-10-18" class="">18</td><td class="layui-this" lay-ymd="2018-10-19">19</td><td lay-ymd="2018-10-20" class="">20</td></tr><tr><td lay-ymd="2018-10-21" class="">21</td><td lay-ymd="2018-10-22" class="">22</td><td lay-ymd="2018-10-23" class="">23</td><td lay-ymd="2018-10-24" class="">24</td><td lay-ymd="2018-10-25" class="">25</td><td lay-ymd="2018-10-26" class="">26</td><td lay-ymd="2018-10-27" class="">27</td></tr><tr><td lay-ymd="2018-10-28" class="">28</td><td lay-ymd="2018-10-29" class="">29</td><td lay-ymd="2018-10-30" class="">30</td><td lay-ymd="2018-10-31" class="">31</td><td class="laydate-day-next" lay-ymd="2018-11-1">1</td><td class="laydate-day-next" lay-ymd="2018-11-2">2</td><td class="laydate-day-next" lay-ymd="2018-11-3">3</td></tr><tr><td class="laydate-day-next" lay-ymd="2018-11-4">4</td><td class="laydate-day-next" lay-ymd="2018-11-5">5</td><td class="laydate-day-next" lay-ymd="2018-11-6">6</td><td class="laydate-day-next" lay-ymd="2018-11-7">7</td><td class="laydate-day-next" lay-ymd="2018-11-8">8</td><td class="laydate-day-next" lay-ymd="2018-11-9">9</td><td class="laydate-day-next" lay-ymd="2018-11-10">10</td></tr></tbody></table></div></div><div class="layui-laydate-footer"><div class="laydate-footer-btns"><span lay-type="clear" class="laydate-btns-clear">重置</span><span lay-type="now" class="laydate-btns-now">现在</span><span lay-type="confirm" class="laydate-btns-confirm">确定</span></div></div></div></div>
              <div class="layui-inline" id="test-laydate-static-n2" lay-key="43"><div id="layui-laydate43" class="layui-laydate layui-laydate-static"><div class="layui-laydate-main laydate-main-list-0"><div class="layui-laydate-header"><i class="layui-icon laydate-icon laydate-prev-y"></i><i class="layui-icon laydate-icon laydate-prev-m"></i><div class="laydate-set-ym"><span lay-ym="2018-10" lay-type="month">Oct</span><span lay-ym="2018-10" lay-type="year">2018</span></div><i class="layui-icon laydate-icon laydate-next-m"></i><i class="layui-icon laydate-icon laydate-next-y"></i></div><div class="layui-laydate-content"><table><thead><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class="laydate-day-prev" lay-ymd="2018-9-30">30</td><td lay-ymd="2018-10-1" class="">1</td><td lay-ymd="2018-10-2" class="">2</td><td lay-ymd="2018-10-3" class="">3</td><td lay-ymd="2018-10-4" class="">4</td><td lay-ymd="2018-10-5" class="">5</td><td lay-ymd="2018-10-6" class="">6</td></tr><tr><td lay-ymd="2018-10-7" class="">7</td><td lay-ymd="2018-10-8" class="">8</td><td lay-ymd="2018-10-9" class="">9</td><td lay-ymd="2018-10-10" class="">10</td><td lay-ymd="2018-10-11" class="">11</td><td lay-ymd="2018-10-12" class="">12</td><td lay-ymd="2018-10-13" class="">13</td></tr><tr><td lay-ymd="2018-10-14" class="">14</td><td lay-ymd="2018-10-15" class="">15</td><td lay-ymd="2018-10-16" class="">16</td><td lay-ymd="2018-10-17" class="">17</td><td lay-ymd="2018-10-18" class="">18</td><td class="layui-this" lay-ymd="2018-10-19">19</td><td lay-ymd="2018-10-20" class="">20</td></tr><tr><td lay-ymd="2018-10-21" class="">21</td><td lay-ymd="2018-10-22" class="">22</td><td lay-ymd="2018-10-23" class="">23</td><td lay-ymd="2018-10-24" class="">24</td><td lay-ymd="2018-10-25" class="">25</td><td lay-ymd="2018-10-26" class="">26</td><td lay-ymd="2018-10-27" class="">27</td></tr><tr><td lay-ymd="2018-10-28" class="">28</td><td lay-ymd="2018-10-29" class="">29</td><td lay-ymd="2018-10-30" class="">30</td><td lay-ymd="2018-10-31" class="">31</td><td class="laydate-day-next" lay-ymd="2018-11-1">1</td><td class="laydate-day-next" lay-ymd="2018-11-2">2</td><td class="laydate-day-next" lay-ymd="2018-11-3">3</td></tr><tr><td class="laydate-day-next" lay-ymd="2018-11-4">4</td><td class="laydate-day-next" lay-ymd="2018-11-5">5</td><td class="laydate-day-next" lay-ymd="2018-11-6">6</td><td class="laydate-day-next" lay-ymd="2018-11-7">7</td><td class="laydate-day-next" lay-ymd="2018-11-8">8</td><td class="laydate-day-next" lay-ymd="2018-11-9">9</td><td class="laydate-day-next" lay-ymd="2018-11-10">10</td></tr></tbody></table></div></div><div class="layui-laydate-footer"><div class="laydate-footer-btns"><span lay-type="clear" class="laydate-btns-clear">Reset</span><span lay-type="now" class="laydate-btns-now">Now</span><span lay-type="confirm" class="laydate-btns-confirm">Confirm</span></div></div></div></div>
              <div class="layui-inline" id="test-laydate-static-n3" lay-key="44"><div id="layui-laydate44" class="layui-laydate layui-laydate-static"><div class="layui-laydate-main laydate-main-list-0 laydate-ym-show"><div class="layui-laydate-header"><i class="layui-icon laydate-icon laydate-prev-y"></i><i class="layui-icon laydate-icon laydate-prev-m"></i><div class="laydate-set-ym"><span lay-ym="2018-10" lay-type="year">2011年 - 2025年</span><span lay-ym="2018-10" lay-type="month">10月</span></div><i class="layui-icon laydate-icon laydate-next-m"></i><i class="layui-icon laydate-icon laydate-next-y"></i></div><div class="layui-laydate-content"><table><thead><tr><th>日</th><th>一</th><th>二</th><th>三</th><th>四</th><th>五</th><th>六</th></tr></thead><tbody><tr><td class="laydate-day-prev" lay-ymd="2018-9-30">30</td><td lay-ymd="2018-10-1" class="">1</td><td lay-ymd="2018-10-2" class="">2</td><td lay-ymd="2018-10-3" class="">3</td><td lay-ymd="2018-10-4" class="">4</td><td lay-ymd="2018-10-5" class="">5</td><td lay-ymd="2018-10-6" class="">6</td></tr><tr><td lay-ymd="2018-10-7" class="">7</td><td lay-ymd="2018-10-8" class="">8</td><td lay-ymd="2018-10-9" class="">9</td><td lay-ymd="2018-10-10" class="">10</td><td lay-ymd="2018-10-11" class="">11</td><td lay-ymd="2018-10-12" class="">12</td><td lay-ymd="2018-10-13" class="">13</td></tr><tr><td lay-ymd="2018-10-14" class="">14</td><td lay-ymd="2018-10-15" class="">15</td><td lay-ymd="2018-10-16" class="">16</td><td lay-ymd="2018-10-17" class="">17</td><td lay-ymd="2018-10-18" class="">18</td><td class="layui-this" lay-ymd="2018-10-19">19</td><td lay-ymd="2018-10-20" class="">20</td></tr><tr><td lay-ymd="2018-10-21" class="">21</td><td lay-ymd="2018-10-22" class="">22</td><td lay-ymd="2018-10-23" class="">23</td><td lay-ymd="2018-10-24" class="">24</td><td lay-ymd="2018-10-25" class="">25</td><td lay-ymd="2018-10-26" class="">26</td><td lay-ymd="2018-10-27" class="">27</td></tr><tr><td lay-ymd="2018-10-28" class="">28</td><td lay-ymd="2018-10-29" class="">29</td><td lay-ymd="2018-10-30" class="">30</td><td lay-ymd="2018-10-31" class="">31</td><td class="laydate-day-next" lay-ymd="2018-11-1">1</td><td class="laydate-day-next" lay-ymd="2018-11-2">2</td><td class="laydate-day-next" lay-ymd="2018-11-3">3</td></tr><tr><td class="laydate-day-next" lay-ymd="2018-11-4">4</td><td class="laydate-day-next" lay-ymd="2018-11-5">5</td><td class="laydate-day-next" lay-ymd="2018-11-6">6</td><td class="laydate-day-next" lay-ymd="2018-11-7">7</td><td class="laydate-day-next" lay-ymd="2018-11-8">8</td><td class="laydate-day-next" lay-ymd="2018-11-9">9</td><td class="laydate-day-next" lay-ymd="2018-11-10">10</td></tr></tbody></table><ul class="layui-laydate-list laydate-year-list"><li lay-ym="2011" class="">2011年</li><li lay-ym="2012" class="">2012年</li><li lay-ym="2013" class="">2013年</li><li lay-ym="2014" class="">2014年</li><li lay-ym="2015" class="">2015年</li><li lay-ym="2016" class="">2016年</li><li lay-ym="2017" class="">2017年</li><li lay-ym="2018" class="layui-this">2018年</li><li lay-ym="2019" class="">2019年</li><li lay-ym="2020" class="">2020年</li><li lay-ym="2021" class="">2021年</li><li lay-ym="2022" class="">2022年</li><li lay-ym="2023" class="">2023年</li><li lay-ym="2024" class="">2024年</li><li lay-ym="2025" class="">2025年</li></ul></div></div><div class="layui-laydate-footer"><div class="laydate-footer-btns"><span lay-type="clear" class="laydate-btns-clear">重置</span><span lay-type="now" class="laydate-btns-now">现在</span><span lay-type="confirm" class="laydate-btns-confirm">确定</span></div></div></div></div>
              <div class="layui-inline" id="test-laydate-static-n4" lay-key="45"><div id="layui-laydate45" class="layui-laydate layui-laydate-static"><div class="layui-laydate-main laydate-main-list-0 laydate-ym-show"><div class="layui-laydate-header"><i class="layui-icon laydate-icon laydate-prev-y"></i><i class="layui-icon laydate-icon laydate-prev-m"></i><div class="laydate-set-ym"><span lay-ym="2018-10" lay-type="year">2018年</span><span lay-ym="2018-10" lay-type="month">10月</span></div><i class="layui-icon laydate-icon laydate-next-m"></i><i class="layui-icon laydate-icon laydate-next-y"></i></div><div class="layui-laydate-content"><table><thead><tr><th>日</th><th>一</th><th>二</th><th>三</th><th>四</th><th>五</th><th>六</th></tr></thead><tbody><tr><td class="laydate-day-prev" lay-ymd="2018-9-30">30</td><td lay-ymd="2018-10-1" class="">1</td><td lay-ymd="2018-10-2" class="">2</td><td lay-ymd="2018-10-3" class="">3</td><td lay-ymd="2018-10-4" class="">4</td><td lay-ymd="2018-10-5" class="">5</td><td lay-ymd="2018-10-6" class="">6</td></tr><tr><td lay-ymd="2018-10-7" class="">7</td><td lay-ymd="2018-10-8" class="">8</td><td lay-ymd="2018-10-9" class="">9</td><td lay-ymd="2018-10-10" class="">10</td><td lay-ymd="2018-10-11" class="">11</td><td lay-ymd="2018-10-12" class="">12</td><td lay-ymd="2018-10-13" class="">13</td></tr><tr><td lay-ymd="2018-10-14" class="">14</td><td lay-ymd="2018-10-15" class="">15</td><td lay-ymd="2018-10-16" class="">16</td><td lay-ymd="2018-10-17" class="">17</td><td lay-ymd="2018-10-18" class="">18</td><td class="layui-this" lay-ymd="2018-10-19">19</td><td lay-ymd="2018-10-20" class="">20</td></tr><tr><td lay-ymd="2018-10-21" class="">21</td><td lay-ymd="2018-10-22" class="">22</td><td lay-ymd="2018-10-23" class="">23</td><td lay-ymd="2018-10-24" class="">24</td><td lay-ymd="2018-10-25" class="">25</td><td lay-ymd="2018-10-26" class="">26</td><td lay-ymd="2018-10-27" class="">27</td></tr><tr><td lay-ymd="2018-10-28" class="">28</td><td lay-ymd="2018-10-29" class="">29</td><td lay-ymd="2018-10-30" class="">30</td><td lay-ymd="2018-10-31" class="">31</td><td class="laydate-day-next" lay-ymd="2018-11-1">1</td><td class="laydate-day-next" lay-ymd="2018-11-2">2</td><td class="laydate-day-next" lay-ymd="2018-11-3">3</td></tr><tr><td class="laydate-day-next" lay-ymd="2018-11-4">4</td><td class="laydate-day-next" lay-ymd="2018-11-5">5</td><td class="laydate-day-next" lay-ymd="2018-11-6">6</td><td class="laydate-day-next" lay-ymd="2018-11-7">7</td><td class="laydate-day-next" lay-ymd="2018-11-8">8</td><td class="laydate-day-next" lay-ymd="2018-11-9">9</td><td class="laydate-day-next" lay-ymd="2018-11-10">10</td></tr></tbody></table><ul class="layui-laydate-list laydate-month-list"><li lay-ym="0" class="">一月</li><li lay-ym="1" class="">二月</li><li lay-ym="2" class="">三月</li><li lay-ym="3" class="">四月</li><li lay-ym="4" class="">五月</li><li lay-ym="5" class="">六月</li><li lay-ym="6" class="">七月</li><li lay-ym="7" class="">八月</li><li lay-ym="8" class="">九月</li><li lay-ym="9" class="layui-this">十月</li><li lay-ym="10" class="">十一月</li><li lay-ym="11" class="">十二月</li></ul></div></div><div class="layui-laydate-footer"><div class="laydate-footer-btns"><span lay-type="clear" class="laydate-btns-clear">重置</span><span lay-type="now" class="laydate-btns-now">现在</span><span lay-type="confirm" class="laydate-btns-confirm">确定</span></div></div></div><div id="layui-laydate45" class="layui-laydate layui-laydate-static"><div class="layui-laydate-main laydate-main-list-0 laydate-time-show"><div class="layui-laydate-header"><i class="layui-icon laydate-icon laydate-prev-y"></i><i class="layui-icon laydate-icon laydate-prev-m"></i><div class="laydate-set-ym"><span lay-ym="2018-10" lay-type="year">2018年</span><span lay-ym="2018-10" lay-type="month">10月</span><span class="laydate-time-text">选择时间</span></div><i class="layui-icon laydate-icon laydate-next-m"></i><i class="layui-icon laydate-icon laydate-next-y"></i></div><div class="layui-laydate-content"><table><thead><tr><th>日</th><th>一</th><th>二</th><th>三</th><th>四</th><th>五</th><th>六</th></tr></thead><tbody><tr><td class="laydate-day-prev" lay-ymd="2018-9-30">30</td><td lay-ymd="2018-10-1" class="">1</td><td lay-ymd="2018-10-2" class="">2</td><td lay-ymd="2018-10-3" class="">3</td><td lay-ymd="2018-10-4" class="">4</td><td lay-ymd="2018-10-5" class="">5</td><td lay-ymd="2018-10-6" class="">6</td></tr><tr><td lay-ymd="2018-10-7" class="">7</td><td lay-ymd="2018-10-8" class="">8</td><td lay-ymd="2018-10-9" class="">9</td><td lay-ymd="2018-10-10" class="">10</td><td lay-ymd="2018-10-11" class="">11</td><td lay-ymd="2018-10-12" class="">12</td><td lay-ymd="2018-10-13" class="">13</td></tr><tr><td lay-ymd="2018-10-14" class="">14</td><td lay-ymd="2018-10-15" class="">15</td><td lay-ymd="2018-10-16" class="">16</td><td lay-ymd="2018-10-17" class="">17</td><td lay-ymd="2018-10-18" class="">18</td><td class="layui-this" lay-ymd="2018-10-19">19</td><td lay-ymd="2018-10-20" class="">20</td></tr><tr><td lay-ymd="2018-10-21" class="">21</td><td lay-ymd="2018-10-22" class="">22</td><td lay-ymd="2018-10-23" class="">23</td><td lay-ymd="2018-10-24" class="">24</td><td lay-ymd="2018-10-25" class="">25</td><td lay-ymd="2018-10-26" class="">26</td><td lay-ymd="2018-10-27" class="">27</td></tr><tr><td lay-ymd="2018-10-28" class="">28</td><td lay-ymd="2018-10-29" class="">29</td><td lay-ymd="2018-10-30" class="">30</td><td lay-ymd="2018-10-31" class="">31</td><td class="laydate-day-next" lay-ymd="2018-11-1">1</td><td class="laydate-day-next" lay-ymd="2018-11-2">2</td><td class="laydate-day-next" lay-ymd="2018-11-3">3</td></tr><tr><td class="laydate-day-next" lay-ymd="2018-11-4">4</td><td class="laydate-day-next" lay-ymd="2018-11-5">5</td><td class="laydate-day-next" lay-ymd="2018-11-6">6</td><td class="laydate-day-next" lay-ymd="2018-11-7">7</td><td class="laydate-day-next" lay-ymd="2018-11-8">8</td><td class="laydate-day-next" lay-ymd="2018-11-9">9</td><td class="laydate-day-next" lay-ymd="2018-11-10">10</td></tr></tbody></table><ul class="layui-laydate-list laydate-time-list"><li><p>时</p><ol><li class="layui-this">00</li><li class="">01</li><li class="">02</li><li class="">03</li><li class="">04</li><li class="">05</li><li class="">06</li><li class="">07</li><li class="">08</li><li class="">09</li><li class="">10</li><li class="">11</li><li class="">12</li><li class="">13</li><li class="">14</li><li class="">15</li><li class="">16</li><li class="">17</li><li class="">18</li><li class="">19</li><li class="">20</li><li class="">21</li><li class="">22</li><li class="">23</li></ol></li><li><p>分</p><ol><li class="layui-this">00</li><li class="">01</li><li class="">02</li><li class="">03</li><li class="">04</li><li class="">05</li><li class="">06</li><li class="">07</li><li class="">08</li><li class="">09</li><li class="">10</li><li class="">11</li><li class="">12</li><li class="">13</li><li class="">14</li><li class="">15</li><li class="">16</li><li class="">17</li><li class="">18</li><li class="">19</li><li class="">20</li><li class="">21</li><li class="">22</li><li class="">23</li><li class="">24</li><li class="">25</li><li class="">26</li><li class="">27</li><li class="">28</li><li class="">29</li><li class="">30</li><li class="">31</li><li class="">32</li><li class="">33</li><li class="">34</li><li class="">35</li><li class="">36</li><li class="">37</li><li class="">38</li><li class="">39</li><li class="">40</li><li class="">41</li><li class="">42</li><li class="">43</li><li class="">44</li><li class="">45</li><li class="">46</li><li class="">47</li><li class="">48</li><li class="">49</li><li class="">50</li><li class="">51</li><li class="">52</li><li class="">53</li><li class="">54</li><li class="">55</li><li class="">56</li><li class="">57</li><li class="">58</li><li class="">59</li></ol></li><li><p>秒</p><ol><li class="layui-this">00</li><li class="">01</li><li class="">02</li><li class="">03</li><li class="">04</li><li class="">05</li><li class="">06</li><li class="">07</li><li class="">08</li><li class="">09</li><li class="">10</li><li class="">11</li><li class="">12</li><li class="">13</li><li class="">14</li><li class="">15</li><li class="">16</li><li class="">17</li><li class="">18</li><li class="">19</li><li class="">20</li><li class="">21</li><li class="">22</li><li class="">23</li><li class="">24</li><li class="">25</li><li class="">26</li><li class="">27</li><li class="">28</li><li class="">29</li><li class="">30</li><li class="">31</li><li class="">32</li><li class="">33</li><li class="">34</li><li class="">35</li><li class="">36</li><li class="">37</li><li class="">38</li><li class="">39</li><li class="">40</li><li class="">41</li><li class="">42</li><li class="">43</li><li class="">44</li><li class="">45</li><li class="">46</li><li class="">47</li><li class="">48</li><li class="">49</li><li class="">50</li><li class="">51</li><li class="">52</li><li class="">53</li><li class="">54</li><li class="">55</li><li class="">56</li><li class="">57</li><li class="">58</li><li class="">59</li></ol></li></ul></div></div><div class="layui-laydate-footer"><div class="laydate-footer-btns"><span lay-type="clear" class="laydate-btns-clear">重置</span><span lay-type="now" class="laydate-btns-now">现在</span><span lay-type="confirm" class="laydate-btns-confirm">确定</span></div></div></div></div>
              <div class="layui-inline" id="test-laydate-static-n5"></div>
            </div>
          </div>
        </div>
      </div>



    </div>
  </div><script>
  layui.use(['admin', 'laydate'], function(){
    var laydate = layui.laydate;

    //示例代码

    //墨绿主题
    laydate.render({
      elem: '#test-laydate-theme-molv'
      ,theme: 'molv'
    });

    //格子主题
    laydate.render({
      elem: '#test-laydate-theme-grid'
      ,theme: 'grid'
    });

    //蓝色主题
    laydate.render({
      elem: '#test-laydate-theme-blue'
      ,theme: '#1E9FFF'
    });

    //大红主题
    laydate.render({
      elem: '#test-laydate-theme-red'
      ,theme: '#c00'
    });

    //自定义其它颜色
    laydate.render({
      elem: '#test-laydate-theme-other'
      ,theme: '#393D49'
    });

    //定制主题
    laydate.render({
      elem: '#test-laydate-theme-custom'
      ,theme: 'gbw'
    });

    //直接嵌套显示
    laydate.render({
      elem: '#test-laydate-static-n1'
      ,position: 'static'
    });
    laydate.render({
      elem: '#test-laydate-static-n2'
      ,position: 'static'
      ,lang: 'en'
    });
    laydate.render({
      elem: '#test-laydate-static-n3'
      ,type: 'year'
      ,position: 'static'
    });
    laydate.render({
      elem: '#test-laydate-static-n4'
      ,type: 'month'
      ,position: 'static'
    });
    laydate.render({
      elem: '#test-laydate-static-n4'
      ,type: 'time'
      ,position: 'static'
    });


  });
  </script></div>
  </div>
@stop
