<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user; 

class HomeController extends Controller
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
        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        if($user->type =='admin'){
            return view('admin')->with('posts', $user->posts);
        } 
        else {
            return view('home')->with('posts', $user->posts);
        }
    }

    public function mijnberichten() {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('berichten.mijnberichten')->with('posts', $user->posts);
    }

}
