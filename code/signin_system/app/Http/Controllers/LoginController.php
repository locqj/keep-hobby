<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class LoginController extends Controller
{
	/**
	 * [Login 登录页]
	 */
	public function Login()
	{
		return view('keep_hobby/login');
	}

	/**
	 * [Login注册页]
	 */
	public function Register()
	{
		return view('keep_hobby/register');
	}


    public function getUserCount()
    {
    	return DB::table('users')->where('status_del', 1)->count();
    }


    /**
     * [doReister 提交注册]
     * @return [type] [description]
     */
    public function dReister()
    {	
        $code = $this->getUserCount() + 1;
    	$data = DB::table('users')->insert([
    			'name' => rq('name'),
    			'password' => md5(rq('password')),
    			'email' => rq('email'),
    			'code' => "U".$code
    		]);

        if ($data) {
			return succ('注册成功', 200);
		} else {
			return err('网络问题,请重新注册', 400);
		}
    }

    public function dLogin()
    {
    	$data = DB::table('users')->where('email', rq('email'))->where('password', md5(rq('password')))->select("name", "email", "code")->first();
    	if ($data) {
    		session(["user" => $data]);
    		return succ('登录成功', 200);
    	} else {
    		return err('用户名密码错误', 201);
    	}
    }

}
