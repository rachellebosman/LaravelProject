<style>

    *{
        text-align:center;
    }
    .titel {
        color: black;
    } 
    
    .button {
        color: black;
        padding: 5px;
        border: solid darkgrey 1px;
        border-radius: 5px; 
    } 

    .berichten {  
        border-radius: 5px;
        margin: 5px;
        padding: 10px;
        margin-left: 30%;
        margin-right: 30%;
        border: solid darkgrey 1px; 
        background-color: white; 
    }

    small {
        color: grey;
    }
</style> 
    
@extends('layouts.app')
@section('content')
    
<br><br>
<h2> Berichten </h2>

    <!-- zoek balk --> 
    {!! Form::open(['method'=>'GET','url'=>'search','class'=>'','role'=>'search'])  !!}
    <div class="">
    <input type="text"  id="query" name="query" value="{{ request()->input('query')}}" placeholder="Zoek door berichten...">
    <span class="">
    <button class="" type="submit"> Zoek! </button>
    </span>
    </div>
    {!! Form::close() !!}

@if(count($posts) > 0 )
        @foreach($posts as $post)
                <div class="form-group berichten">
                        <h3>{{$post ->titel}}</h3>
                        <p>{{$post ->bericht}} <p>
                        <small> #{{$post ->tag}} 
                        Geschreven door {{ Auth::user()->name }}
                        {{$post ->created_at}} </small>            
                </div>
        @endforeach
@else 
        <p> Er zijn geen berichten op het moment</p>
@endif

@endsection