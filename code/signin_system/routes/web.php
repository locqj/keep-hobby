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

function rq($key=null,$default=null){
    if(!$key){
        return Request::all();
    }
    return Request::get($key,$default);
}

/*返回失败api*/
function err($msg = null, $code = null){
    return ['status' => 0, 'msg' => $msg, 'code' => $code];
}

/*返回成功api*/
function suc($data_to_add = [], $code = null){
    $data = ['status' => 1, 'data' => [], 'code' => $code];
    if($data_to_add)
        $data['data'] = $data_to_add;
    return $data;
}

/*返回成功api*/
function succ($msg = null, $code = null){
    return ['status' => 1, 'msg' => $msg, 'code' => $code];
}
/*實例化sign_actions*/
function actions() {
	return new App\Model\SignActions;
}

/*實例化day_matter*/
function matters() {
    return new App\Model\DaysMatter;
}

/*實例化moon_calculate*/
function moon() {
    return new App\Model\MoonCalculate;
}

/*實例化tag_calculate*/
function tag() {
    return new App\Model\TagCalculate;
}
/*實例化sign_log*/
function signlog() {
    return new App\Model\SignLog;
}

/*實例化clientuser*/
function clientuser() {
    return new App\Model\ClientUser;
}
/*实例化imagelog*/
function imagelog() {
    return new App\Model\ImageLog;
}

Route::get('/', function () {
    return view('welcome');
});

/*--------------------------------------打卡用户端------------------------------------------*/

 








/*登录界面*/
Route::get('tologin', 'LoginController@Login');
/*注册界面*/
Route::get('toregister', 'LoginController@Register');
/*首页*/
Route::get('index', 'ActionController@index');
/*添加打卡*/
Route::get('addactions', 'ActionController@actions');
/*打卡界面*/
Route::get('actions/{code}', 'ActionController@actionPage');
/*个人信息页*/
Route::get('my', 'KeepIndexController@my');

Route::get('cheers/{code}', 'KeepIndexController@cheers');

Route::post('api/login', 'LoginController@dLogin');
/*登录api*/
Route::post('api/register', 'LoginController@dReister');
/*添加打卡api*/
Route::post('api/addaction', 'ActionController@dAction');

Route::get('api/hobby_log', 'ActionController@dCheckLog');

Route::get('logout', 'ActionController@dLogout');