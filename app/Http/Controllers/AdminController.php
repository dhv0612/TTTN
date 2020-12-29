<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller {
    public function CheckLogin() {
        $admin_id  = Session::get( 'adminid' );
        if ( $admin_id ) {
            return Redirect::to( 'dashboard' );
        } else {
            return Redirect::to( 'admin' )->send();
        }
    }

    public function index() {
        return view ( 'admin_login' );
    }

    public function show_dashboard() {
        $this->CheckLogin();
        return view( 'admin.dashboard' );
    }

    public function dashboard( Request $request ) {
        $this->CheckLogin();
        $email_ad = $request->email;
        $pass_ad = md5( $request->password );
        $result = DB::table( 'tbladmin' )
        ->where( 'email', $email_ad )
        ->where( 'password', $pass_ad )
        ->first();

        if ( $result ) {
            Session::put( 'username', $result->username );
            Session::put( 'adminid', $result->adminid );
            return Redirect::to( '/dashboard' );
        } else {
            Session::put( 'message', 'Email or password incorrect' );
            return Redirect::to( '/admin' );
        }
    }

    public function logout() {
        $this->CheckLogin();

        Session::put( 'username', null );
        Session::put( 'adminid', null );
        return Redirect::to( '/admin' );
    }

    
}
