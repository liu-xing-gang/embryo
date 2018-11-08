<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{
    //
    public function index(){
        return view('admin.login');
    }

    public function check(Request $request){
        // return json_encode($arr);
        // return response()->json([
        //     'name' => 'Abigail',
        //     'state' => 'CA'
        // ]);
        $name = $request->input('username');
        $pswd = $request->input('password');
        $user = User::where(['name' => $name])->first();
        $arr = array();

        if($user == null){
            $arr['code'] = 0;
            $arr['message'] = '用户名或密码错误';
            return response()->json($arr);
        }

        if (Hash::check($pswd, $user->password)) {
            // 密码匹配
            $request->session()->put('name', $name);

            $arr['code'] = 1;
            $arr['message'] = '登陆成功';
        } else {
            $arr['code'] = 0;
            $arr['message'] = '用户名或密码错误';
        }

        return response()->json($arr);
    }

    public function reg()
    {
        return view('admin.reg');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function forget()
    {
        return view('admin.forget');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Cookie::forget('XSRF-TOKEN');
        Cookie::forget('laravel_session');
        return redirect('/');
    }

    public function auth1(Request $request)
    {
        return view('auth1');
    }

}
