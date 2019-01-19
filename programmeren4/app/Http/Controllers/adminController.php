<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bericht;
use App\user;


class adminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');



    }



    public function admin()
    {
     

        return view('admin');

        
    }

    public function berichten()
    { 
        $posts = bericht::orderBy('created_at','desc')->get();

        //$postsCount = bericht::with('user_id')->get(); 

        //return view('admin.adminberichten')->with('posts', $posts)->with('postsCount', $postsCount);
        return view('admin.adminberichten')->with('posts', $posts);
    }

    public function gebruikers()
    {
        //$posts = user::orderBy('created_at','asc')->get();
        //return view('admin.admingebruikers')->with('posts', $posts);
      
        
        //$x = bericht::orderBy('user_id', 'desc')->get();
        //return view('admin.admingebruikers')->with('posts', $posts)->with('x', $x);
    
        $posts = user::with('bericht')->get();
        $users = bericht::with('user')->get();
        return view('admin.admingebruikers')->with('posts', $posts)->with('user', $users);
    }

    public function updateberichten(Request $request){

        $posts = bericht::orderBy('created_at','desc')->get();

        $this -> validate($request, [
         
            'status' => 'required'
        ]);


        //$post = bericht::find($id); 

        $id = $request->get('id');
       
      
        $post = bericht::find($id);
        $post->status = $request->input("status");
        $post->save(); 
        
        return redirect('adminberichten')->with('posts', $posts);
    }
    

}

