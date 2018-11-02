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

    .zoek{
        width: 200px;
        margin-left: 35%;
        margin-right: 35%;
    }

</style> 
    
@extends('layouts.app')
@section('content')
    
<br><br>
@include('inc.messages')
<h2> Berichten </h2>
    <!-- zoek balk --> 
    <div class="zoek">
        {!! Form::open(['method'=>'GET','url'=>'search','class'=>'form-inline','role'=>'search'])  !!}
        <nobr>
            <input type="text" class="form-control" id="query" name="query" value="{{ request()->input('query')}}" placeholder="Zoek door berichten...">
         
            <select name="tag" class="form-control" id="tag" value="{{ request()->input('tag')}}" placeholder="filter">
                <option value="" disabled selected>Filter optie</option>
                <option value="x">Geen #tag</option>
                <option value="café">#Café</option>
                <option value="gasten">#Gasten</option>
                <option value="personeel">#Personeel</option>
                <option value="consumpties">#Consumpties</option>
            </select>
            
            <button class="btn" type="submit"> Zoek! </button> 
        </nobr> 
        </div>
    {!! Form::close() !!}

@if(count($posts) > 0 )
        @foreach($posts as $post)
                <div class="form-group berichten">
                    <h3>{{$post ->titel}}</h3>
                    <p>{{$post ->bericht}} <p>
                    <small>
                        Geschreven door {{$post->user->name}} op {{$post ->created_at}} 
                        <br>#{{$post ->tag}}
                    </small>             
                </div>
        @endforeach
@else 
        <p> Er zijn geen berichten op het moment</p>
@endif

@endsection