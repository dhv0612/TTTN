<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class NewsController extends Controller
{

    public function CheckLogin() {
        $admin_id  = Session::get( 'adminid' );
        if ( $admin_id ) {
            return Redirect::to( 'dashboard' );
        } else {
            return Redirect::to( 'admin' )->send();
        }
    }

    public function add_news(){
        $this->CheckLogin();
        return view ('admin.add_news');
    }

    public function all_news(){
        $this->CheckLogin();
        $all_news = DB::table('tblnews')->orderByDesc('newsid')->get();
        $manager_news = view('admin.all_news')->with('all_news', $all_news); 
        return view ('admin_layout')->with('admin.all_news', $manager_news);
    }

    public function save_news(Request $request){
        $this->CheckLogin();
        $data = array();
        $data['title']= $request->title;
        $data['content']= $request->content;
        $data['newsurl']= $request->newsurl;
        $data['newsimage']= $request->newsimage;
        $get_image = $request->file('newsimage');
        if($get_image){
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $date = date("d-m-Y--h-i-s");
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));            
            $new_image =$date.'-'.$name_image.'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/upload/news',$new_image);
            $data['newsimage']= $new_image;
            DB::table('tblnews')->insert($data);
            Session::put('message', 'Add news successfully');
            return Redirect::to('add-news');
        }else{
            Session::put('message', 'Add news fail. Check your info');
            return Redirect::to('add-news');       
        }        
    }    

    public function edit_news($news_id){
        $this->CheckLogin();
        $edit_news = DB::table('tblnews')->where('newsid', $news_id)->get();
        $manager_news = view('admin.edit_news')->with('edit_news', $edit_news);
        return view ('admin_layout')->with('admin.edit_news', $manager_news);
    }

    public function update_news(Request $request, $news_id){
        $this->CheckLogin();
        $data = array();
        $data['title'] = $request->title;
        $data['content']= $request->content;
        $data['newsurl']= $request->newsurl;
        $get_image = $request->file('newsimage');
        if($get_image){
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $date = date("d-m-Y--h-i-s");
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =$date.'-'.$name_image.'.'.$get_image->getClientOriginalExtension();           
            $get_image->move('public/upload/news',$new_image);
            $data['newsimage']= $new_image;
            DB::table('tblnews')->where('newsid', $news_id)->update($data);
            Session::put('message', 'Update news successfully');
            return Redirect::to('all-news');
        }
            DB::table('tblnews')->where('newsid', $news_id)->update($data);
            Session::put('message', 'Update news successfully');
            return Redirect::to('all-news');
    }

    public function delete_news($newsid){
        $this->CheckLogin();
        DB::table('tblnews')->where('newsid', $newsid)->delete();
        Session::put('message', 'Delete news successfully');
        return Redirect::to('all-news');
    }

    
}