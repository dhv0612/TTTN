<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index(){
        $all_news_front = DB::table('tblnews')->orderByDesc('newsid')->limit(3)->get();
       
        return view ('pages.home')->with('all_news', $all_news_front);
    }

    
    public function login_user(){        
        return view('pages.user.login_user');
    }
    
    public function signup_user(){        
        return view('pages.user.signup_user');
    }
    
    
}
