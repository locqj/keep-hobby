<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class KeepIndexController extends Controller
{	
	public function __construct()
	{
		$this->middleware('loginauth');
	}
	/**
	 * [my 个人信息页]
	 * @return [type] [description]
	 */
    public function my()
    {	
    	$user = session('user');
    	$username = $user->name;
    	$useremail = $user->email;
    	return view('keep_hobby.my', compact('useremail', 'username'));
    }
    /**
     * [cheers cheers页面]
     * @param  [type] $code [description]
     * @return [type]       [description]
     */
    public function cheers($code)
    {
		$count = DB::table('hobby_log')->where('hobby_code', $code)->count();
		return view('keep_hobby.cheers', compact('count'));
    }
    
}
