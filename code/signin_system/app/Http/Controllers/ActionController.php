<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class ActionController extends Controller
{	

	public function __construct()
	{
		$this->middleware('loginauth');
	}
	/**
	 * [index 首页]
	 * @return [type] [description]
	 */
    public function index()
    {	
    	$user_code = session('user')->code;
        $username = session('user')->name;
    	$data = DB::table('hobby')->where('user_code', $user_code)->where('status_del', 1)->get();
    	
    	return view('keep_hobby/index', compact('data', 'username'));
    }

    /**
     * [actions 添加打卡页]
     * @return [type] [description]
     */
    public function actions()
    {
    	return view('keep_hobby/add_action');
    }

    /**
     * [dAction 打卡提交]
     * @return [type] [description]
     */
    public function dAction()
    {   
        $code = $this->getActionCount()+1;
    	$data = DB::table('hobby')->insert([
    			'name' => rq('name'),
    			'user_code' => session('user')->code,
    			'code' => "H".$code
    		]);
		if ($data) {
			return succ('register success', 200);
		} else {
			return err('network error!', 400);
		}
    }

    /**
     * [actionPage 打卡页面]
     * @param  [type] $code [description]
     * @return [type]       [description]
     */
    public function actionPage($code)
    {   
        $data = DB::table('hobby_log')->where('hobby_code', $code)->orderBy('day', 'desc')->limit(7)->get();
        $count = DB::table('hobby_log')->where('hobby_code', $code)->count();
        $hobby = DB::table('hobby')->where('code', $code)->first();
        return view('keep_hobby.action', compact('data', 'count', 'hobby'));
    }
    /**
     * [dCheckLog 打卡记录提交]
     * @return [type] [description]
     */
    public function dCheckLog()
    {   
        $hobby_code = rq('hobby_code');
        $year = date('Y');
        $month = date('m');
        $day = date('d');
        $dis = $this->preCheckLog($hobby_code, $year, $month, $day); //判断今天是否过卡
        if (!$dis) {
            $data = DB::table('hobby_log')->insert([
                    'user_code' => session('user')->code,
                    'hobby_code' => $hobby_code,
                    'year' => $year,
                    'month' => $month,
                    'remark' => rq('remark'),
                    'day' => $day
                ]);
            return succ('success', 200);
        } else {
            return err('already log', 400);
        }
        return $year.$month.$day;
    }

    public function preCheckLog($hobby_code, $year, $month, $day)
    {
        return DB::table('hobby_log')
            ->where('hobby_code', $hobby_code)
            ->where('year', $year)
            ->where('month', $month)
            ->where('day', $day)->exists();

    }

    public function dLogout()
    {
        session::forget('user');
        return succ('success', 200);
    }


    public function getActionCount()
    {
    	return DB::table('hobby')->where('status_del', 1)->count();
    }



}
