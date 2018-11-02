<style>

    *{
        text-align:center;
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
    
<br><br><br><br>
<div class="form-group berichten">
    <h3>{{$post ->titel}}</h3>
    <p>{{$post ->bericht}} <p>
    <small>
        Geschreven door {{$post->user->name}} op {{$post ->created_at}} 
        <br>#{{$post ->tag}}
    </small>             
</div>
<p> <a href="/mijnberichten"> < terug naar mijn berichten </a>
</p>

