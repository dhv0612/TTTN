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
            $userid = DB::table('tbluser_info')->insert($data);
            Session::put('signupdone', 'Sign up successfully');
            return Redirect::to('login-user');
        }        
    }

    public function check_login_user(Request $request){
        $data = array();
        $data['username'] = $request->username;
        $data['password'] = md5($request->password);
        $check_user = DB::table('tbluser_info')->where('username', $data['username'])->where('password', $data['password'])->first();
        if ($check_user){
            Session::put('userid', $check_user->userid);
            Session::put('username', $check_user->username);
            // setcookie('userid', $check_user->userid, time() + (86400 * 30 *12 *100), "/");
            // setcookie('username', $check_user->username, time() + (86400 * 30 *12 *100), "/");
            
            return Redirect::to('');
        }
        else
        {
            Session::put('notification', 'Username or password incorrect. Try again.');
            Session::put('username', $request->username);
            return Redirect::to('login-user');
        }   
    }

    public function logout_user(){
        Session::put('userid', null);
        Session::put('username', null);
        return Redirect::to('');
    }

}
