<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Article;
use App\Video;
use App\Site;
use App\User;
use Illuminate\Support\Facades\DB;
use Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    private $code;
    private $message;

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
        try
        {
            $site = Site::first();
        }
        catch(Exception $e){}
        return view('admin.site-setting', [
            'site' => $site
        ]);
    }

    public function siteUpdating(Request $request)
    {
        $site = new Site();
        $flag = $site->where('site_id', 1)->update([
            'site_name' => $request->input('sitename'),
            'site_domain' => $request->input('domain'),
            'site_title' => $request->input('title'),
            'site_keywords' => $request->input('keywords'),
            'site_description' => $request->input('description'),
            'site_copyright' => $request->input('copyright'),
        ]);

        if(!$flag)
        {
            return response()->json([
                'code' => 0,
                'message' => '修改失败'
            ]);
        }

        return response()->json([
            'code' => (bool)$flag,
            'message' => '添加成功'
        ]);
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
    public function basic(Request $request){

        $user = User::where('name', $request->session()->get('name'))->first();
        return view('admin.basic', [
            'basic' => $user
        ]);
    }

    public function basicSet(Request $request)
    {
        $flag = User::where('name', $request->session()->get('name'))->update([
            'email' => $request->input('email'),
            'gender' => $request->input('sex'),
            'avatar' => $request->input('avatar'),
            'phone' => $request->input('phone'),
            'remarks' => $request->input('remarks'),
        ]);
        if(!$flag)
        {
            return response()->json([
                'code' => 0,
                'message' => '修改失败'
            ]);
        }

        return response()->json([
            'code' => (bool)$flag,
            'message' => '添加成功'
        ]);
    }

    /**
     * 修改密码
     */
    public function changePswd()
    {
        return view('admin.change-pswd');
    }

    public function pswdRest(Request $request)
    {
        $user = User::where('name', $request->session()->get('name'))->first();
        if (!Hash::check($request->input('oldPassword'), $user->password))
        {
            return response()->json([
                'code' => '00',
                'message' => '密码错误'
            ]);
        }

        if($request->input('oldPassword') == '')
        {
            return response()->json([
                'code' => '01',
                'message' => '请输入原密码'
            ]);
        }

        if($request->input('password') == '')
        {
            return response()->json([
                'code' => '02',
                'message' => '请输入新密码'
            ]);
        }

        if($request->input('repassword') == '')
        {
            return response()->json([
                'code' => '03',
                'message' => '请再次输入新密码'
            ]);
        }

        if($request->input('password') === $request->input('repassword'))
        {
            $user = User::where('name', $request->session()->get('name'))->update([
                'password' => Hash::make($request->input('password'))
            ]);
            return response()->json([
                'code' => '11',
                'message' => '修改成功!'
            ]);
        }
        else
        {
            return response()->json([
                'code' => '10',
                'message' => '两次密码不一致,请重新输入'
            ]);
        }

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
        try
        {
            $page_size = 10;
            $articles = DB::table('articles')->paginate($page_size);

            // $results->count()
            // $results->currentPage()
            // $results->firstItem()
            // $results->hasMorePages()
            // $results->lastItem() (Not avaliable when using simplePaginate)
            // $results->nextPageUrl()
            // $results->perPage()
            // $results->previousPageUrl()
            // $results->total() (Not available when using simplePaginate)
            // $results->url($page)
            // dd(\App\Article::paginate());

            foreach($articles as $key => $val){
                $val->article_id = Crypt::encrypt($val->article_id);
            }
        }
        catch (Exception $e){}
        return view('admin.caller', [
            'articles' => $articles,
            'page_size' => $page_size
        ]);
    }

    public function callerAdd(Request $request)
    {
        $article = new Article();  //表的模型实例化
		$article->article_subject = $request->input('title');      //给模型的属性赋值
		$article->article_content = $request->input('desc');
        $flag = $article->save();   //save方法插入数据，返回插入是否成功的boolean值

        return response()->json([
            'code' => $flag,
            'message' => '添加成功'
        ]);
    }

    public function callerEdit(Request $request)
    {
        $id = Crypt::decrypt($request->id);
        $article = new Article();
        $flag = $article->where('article_id', $id)->update([
            'article_subject' => $request->input('title'),
            'article_content' => $request->input('desc')
        ]);

        return response()->json([
            'code' => (bool)$flag,
            'message' => '添加成功'
        ]);
    }

    public function callerDel(Request $request)
    {
        $ids = $request->input('ids');
        try
        {
            foreach($ids as $id){
                $flag = Article::where('article_id', Crypt::decrypt($id))->delete();
            }
        }
        catch(Exception $e){}

        return response()->json([
            'code' => (bool)$flag,
            'message' => '删除成功'
        ]);
    }

    public function goodslist()
    {
        try
        {
            $page_size = 10;
            $videos = DB::table('videos')->paginate($page_size);
            foreach($videos as $key => $val){
                $val->video_id = Crypt::encrypt($val->video_id);
            }
        }
        catch (Exception $e){}

        return view('admin.goodslist', [
            'videos' => $videos,
            'page_size' => $page_size
        ]);
    }

    public function msgboard()
    {
        return view('admin.msgboard');
    }

    public function search()
    {
        return view('admin.search');
    }

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
