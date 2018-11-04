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
        return view('admin.adminberichten')->with('posts', $posts);
    }

    public function gebruikers()
    {
        $posts = user::orderBy('created_at','desc')->get();
        return view('admin.admingebruikers')->with('posts', $posts);
    }

    public function updateberichten(){
        $posts = bericht::orderBy('created_at','desc')->get();
        return view('admin.adminberichten')->with('posts', $posts);
    }
    

}

