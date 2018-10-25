<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AdminController extends Controller
{
    public function __construct()
    {
        // Route::get('/', ['middleware' => ['first', 'second'], function () {
        //     //
        // }]);
        // $this->middleware('test');
        $this->middleware('embryo');
    }

    /**
     * 主页
     */
    public function index()
    {
        return view('admin.admin');
    }

    /**
     * 主页1
     */
    public function home()
    {
        return view('admin.home');
    }

    /**
     * 网站设置
     */
    public function siteSetting()
    {
        return view('admin.site-setting');
    }

    /**
     * 邮件服务
     */
    public function mailSetting()
    {
        return view('admin.mail-setting');
    }

    /**
     * 基本资料
     */
    public function basic(){
        return view('admin.basic');
    }

    /**
     * 修改密码
     */
    public function changePswd()
    {
        return view('admin.change-pswd');
    }

    /**
     * 网站用户
     */
    public function users()
    {
        return view('admin.users');
    }

    /**
     * 后台管理员
     */
    public function administrators()
    {
        return view('admin.administrators');
    }

    /**
     * 角色管理
     */
    public function roles()
    {
        return view('admin.roles');
    }

    public function personalpage()
    {
        return view('admin.personalpage');
    }

    public function addresslist()
    {
        return view('admin.addresslist');
    }

    public function caller()
    {
        return view('admin.caller');
    }

    public function goodslist()
    {
        return view('admin.goodslist');
    }

    public function msgboard()
    {
        return view('admin.msgboard');
    }

    public function search()
    {
        return view('admin.search');
    }

    // public function reg()
    // {
    //     return view('admin.reg');
    // }

    // public function login()
    // {
    //     return view('admin.login');
    // }

    // public function forget()
    // {
    //     return view('admin.forget');
    // }

    public function error404()
    {
        return view('admin.error404');
    }

    public function error()
    {
        return view('admin.error');
    }

    public function layerList()
    {
        return view('admin.layerList');
    }

    public function layerDemo()
    {
        return view('admin.layerDemo');
    }

    public function layerTheme()
    {
        return view('admin.layerTheme');
    }

    public function formElement()
    {
        return view('admin.form-element');
    }

    public function formGroup()
    {
        return view('admin.form-group');
    }

    public function tabs()
    {
        return view('admin.tabs');
    }

    public function button()
    {
        return view('admin.button');
    }

    public function nav()
    {
        return view('admin.nav');
    }

    public function layim()
    {
        return view('admin.layim');
    }

    public function timeline()
    {
        return view('admin.timeline');
    }

    public function progress()
    {
        return view('admin.progress');
    }

    public function panel()
    {
        return view('admin.panel');
    }

    public function badge()
    {
        return view('admin.badge');
    }

    public function anim()
    {
        return view('admin.anim');
    }

    public function laydateDemo1()
    {
        return view('admin.laydateDemo1');
    }

    public function laydateDemo2()
    {
        return view('admin.laydateDemo2');
    }

    public function laydateTheme()
    {
        return view('admin.laydateTheme');
    }

    public function laydateSpecialdemo()
    {
        return view('admin.laydateSpecialdemo');
    }

    public function laypageDemo1()
    {
        return view('admin.laypageDemo1');
    }

    public function laypageDemo2()
    {
        return view('admin.laypageDemo2');
    }

    public function uploadDemo1()
    {
        return view('admin.uploadDemo1');
    }

    public function uploadDemo2()
    {
        return view('admin.uploadDemo2');
    }

    public function colorpicker()
    {
        return view('admin.colorpicker');
    }

    public function slider()
    {
        return view('admin.slider');
    }

    public function rate()
    {
        return view('admin.rate');
    }

    public function carousel()
    {
        return view('admin.carousel');
    }

    public function flow()
    {
        return view('admin.flow');
    }

    public function util()
    {
        return view('admin.util');
    }

    public function code()
    {
        return view('admin.code');
    }

    public function grid1()
    {
        return view('admin.grid1');
    }

    public function grid2()
    {
        return view('admin.grid2');
    }

    public function grid3()
    {
        return view('admin.grid3');
    }

    public function grid4()
    {
        return view('admin.grid4');
    }

    public function grid5()
    {
        return view('admin.grid5');
    }

    public function grid6()
    {
        return view('admin.grid6');
    }

    public function contentList()
    {
        return view('admin.contentList');
    }

    public function contentTags()
    {
        return view('admin.contentTags');
    }

    public function contentComment()
    {
        return view('admin.contentComment');
    }

    public function forumList()
    {
        return view('admin.forumList');
    }

    public function forumReplys()
    {
        return view('admin.forumReplys');
    }

    public function message()
    {
        return view('admin.message');
    }

    public function workorderList()
    {
        return view('admin.workorderList');
    }




}
