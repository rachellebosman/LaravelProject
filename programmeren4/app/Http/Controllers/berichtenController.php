<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\bericht;

class berichtenController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $posts = bericht::all();
        return view('berichten.index')->with('posts', $posts);  
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('berichten.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this ->validate($request, [
            'titel' => 'required',
            'bericht' => 'required',
            'tag' => 'required'
        ]);

        // items toevoegen aan de database
        $post = new bericht; 
        $post->titel = $request->input('titel');
        $post->bericht = $request->input('bericht');
        $post->tag = $request->input('tag');
        $post->user_id = auth()->user()->id;
        $post->save(); 

        return redirect('/berichten')->with('succes', 'Nieuw bericht is aangemaakt!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          //$post = berichten::find($id); 
        //return view('posts.show')->with('post',$post); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = bericht::find($id); 

        //controleren of het de juiste gebruiker is 
        if(auth()->user()->id !==$post->user_id){
            return redirect('/berichten'); //->with('error', 'error bericht' )
        }

        return view('berichten.edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this ->validate($request, [
            'titel' => 'required',
            'bericht' => 'required',
            'tag' => 'required'
        ]);

        // items toevoegen aan de database
        $post = bericht::find($id); 
        $post->titel = $request->input('titel');
        $post->bericht = $request->input('bericht');
        $post->tag = $request->input('tag');
        $post->save(); 

        return redirect('/berichten')->with('succes', 'bericht is aangepast!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = bericht::find($id); 
        
        //controleren of het de juiste gebruiker is 
        if(auth()->user()->id !==$post->user_id){
            return redirect('/berichten'); //->with('error', 'error bericht' )
        }

        $post -> delete(); 
        return redirect('/berichten')-> with('succes', 'bericht is verwijderd');
    }

    // searchbar functie 

    public function search(Request $request){
        $query = $request->input('query');
        $berichten = bericht::where('bericht', 'like', "%$query%")->orWhere('titel', 'like', "%$query%")->get();
        return view('berichten.search')->with('berichten', $berichten); 
    }

   



}
