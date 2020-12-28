<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function save_user(Request $request){
        $data = array();
        $data['username'] = $request->username;
        $data['password']= md5( $request->password);
        $data['fullname']= $request->fullname;
        $data['email']=$request->email;
        $name = $request->username;
        $all_user = DB::table('tbluser_info')->where('username', $name)->first();

        if ($all_user){
            Session::put('notification','Username is exist, try diffirent username');
            Session::put('username', $request->username);
            Session::put('fullname', $request->fullname);
            Session::put('email', $request->email);
            $all_user = null;
            return Redirect::to('signup-user');
        }else{
            $userid = DB::table('tbluser_info')->insertGetId($data);
            Session::put('userid', $userid);
            Session::put('username', $request->username);
            return Redirect::to('');
        }        
    }
}
