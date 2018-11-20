<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::any('/admin', ['uses' => 'AdminController@index']);

Route::any('/auth1', ['uses'=> 'LoginController@auth1']);

Route::group(['prefix'=>'admin','middleware'=>'web'],function(){

    Route::any('siteSetting', ['uses' => 'AdminController@siteSetting']);
    Route::any('mailSetting', ['uses' => 'AdminController@mailSetting']);

    Route::any('basic', ['uses' => 'AdminController@basic']);
    Route::any('changePswd', ['uses' => 'AdminController@changePswd']);

    Route::any('users', ['uses' => 'AdminController@users']);
    Route::any('administrators', ['uses' => 'AdminController@administrators']);
    Route::any('roles', ['uses' => 'AdminController@roles']);

    Route::any('home', ['uses' => 'AdminController@home']);

    Route::any('personalpage', ['uses' => 'AdminController@personalpage']);
    Route::any('addresslist', ['uses' => 'AdminController@addresslist']);
    Route::any('caller', ['uses' => 'AdminController@caller']);
    Route::any('goodslist', ['uses' => 'AdminController@goodslist']);
    Route::any('msgboard', ['uses' => 'AdminController@msgboard']);
    Route::any('search', ['uses' => 'AdminController@search']);
    // Route::any('reg', ['uses' => 'AdminController@reg']);
    // Route::any('login', ['uses' => 'AdminController@login']);
    // Route::any('forget', ['uses' => 'AdminController@forget']);
    Route::any('404', ['uses' => 'AdminController@error404']);
    Route::any('error', ['uses' => 'AdminController@error']);

    Route::any('layer/list', ['uses' => 'AdminController@layerList']);
    Route::any('layer/demo', ['uses' => 'AdminController@layerDemo']);
    Route::any('layer/theme', ['uses' => 'AdminController@layerTheme']);

    Route::any('form/element', ['uses' => 'AdminController@formElement']);
    Route::any('form/group', ['uses' => 'AdminController@formGroup']);

    Route::any('tabs', ['uses' => 'AdminController@tabs']);

    Route::any('button', ['uses' => 'AdminController@button']);

    Route::any('nav', ['uses' => 'AdminController@nav']);

    Route::any('timeline', ['uses' => 'AdminController@timeline']);

    Route::any('progress', ['uses' => 'AdminController@progress']);

    Route::any('panel', ['uses' => 'AdminController@panel']);

    Route::any('badge', ['uses' => 'AdminController@badge']);

    Route::any('anim', ['uses' => 'AdminController@anim']);

    Route::any('laydate/demo1', ['uses' => 'AdminController@laydateDemo1']);
    Route::any('laydate/demo2', ['uses' => 'AdminController@laydateDemo2']);
    Route::any('laydate/theme', ['uses' => 'AdminController@laydateTheme']);
    Route::any('laydate/special-demo', ['uses' => 'AdminController@laydateSpecialdemo']);

    Route::any('laypage/demo1', ['uses' => 'AdminController@laypageDemo1']);
    Route::any('laypage/demo2', ['uses' => 'AdminController@laypageDemo2']);

    Route::any('upload/demo1', ['uses' => 'AdminController@uploadDemo1']);
    Route::any('upload/demo2', ['uses' => 'AdminController@uploadDemo2']);
    Route::post('upload', ['uses' => 'AdminController@uploadAdd']);

    Route::any('colorpicker', ['uses' => 'AdminController@colorpicker']);

    Route::any('slider', ['uses' => 'AdminController@slider']);

    Route::any('rate', ['uses' => 'AdminController@rate']);

    Route::any('carousel', ['uses' => 'AdminController@carousel']);

    Route::any('flow', ['uses' => 'AdminController@flow']);

    Route::any('util', ['uses' => 'AdminController@util']);

    Route::any('code', ['uses' => 'AdminController@code']);

    Route::any('grid1', ['uses' => 'AdminController@grid1']);
    Route::any('grid2', ['uses' => 'AdminController@grid2']);
    Route::any('grid3', ['uses' => 'AdminController@grid3']);
    Route::any('grid4', ['uses' => 'AdminController@grid4']);
    Route::any('grid5', ['uses' => 'AdminController@grid5']);
    Route::any('grid6', ['uses' => 'AdminController@grid6']);

    Route::any('content/list', ['uses' => 'AdminController@contentList']);
    Route::any('content/tags', ['uses' => 'AdminController@contentTags']);
    Route::any('content/comment', ['uses' => 'AdminController@contentComment']);

    Route::any('forum/list', ['uses' => 'AdminController@forumList']);
    Route::any('forum/replys', ['uses' => 'AdminController@forumReplys']);

    Route::any('message', ['uses' => 'AdminController@message']);

    Route::any('workorder/list', ['uses' => 'AdminController@workorderList']);

    // article
    Route::post('/articles/add', ['uses'=> 'AdminController@callerAdd']);
    Route::post('/articles/edit', ['uses'=> 'AdminController@callerEdit']);
    Route::post('/articles/del', ['uses'=> 'AdminController@callerDel']);

    Route::post('/site/update', ['uses'=> 'AdminController@siteUpdating']);

    Route::post('/basic/set', ['uses'=> 'AdminController@basicSet']);
    Route::post('/pswd/reset', ['uses'=> 'AdminController@pswdRest']);
});

Route::any('/login', ['uses' => 'LoginController@index']);
Route::any('/register', ['uses' => 'LoginController@reg']);
Route::any('/forget', ['uses' => 'LoginController@forget']);
Route::post('/check', ['uses'=> 'LoginController@check' ]);
Route::any('/logout', ['uses'=> 'LoginController@logout' ]);

Route::any('/articles', ['uses'=> 'IndexController@articles' ]);
Route::any('/articles/{id}', ['uses'=> 'IndexController@articleDetail' ]);
Route::any('/plays', ['uses'=> 'IndexController@plays' ]);
Route::any('/plays/{id}', ['uses'=> 'IndexController@playsDetail']);
Route::post('/show', ['uses'=> 'IndexController@show']);
Route::get('/show', ['uses'=> 'IndexController@error404']);
Route::any('/404', ['uses'=> 'IndexController@error404']);

Route::any('/redis', ['uses'=> 'IndexController@redis']);







