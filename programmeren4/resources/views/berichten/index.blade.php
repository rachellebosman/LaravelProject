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
</style> 
    
@extends('layouts.app')
@section('content')
    
<br><br>
<h1> Overzicht van alle berichten </h1>
<br> 

@if(count($posts) > 0 )
        @foreach($posts as $post)
                <div class="form-group berichten">
                        <h3>{{$post ->titel}}</h3>
                        <p>{{$post ->bericht}} <br>
                        #{{$post ->tag}} <br>
                        <small> Geschreven door {{ Auth::user()->name }} </small><br>
                        <small>  {{$post ->created_at}} </small>            
                </div>
        @endforeach
@else 
        <p> Er zijn geen berichten op het moment. </p>
@endif

@endsection