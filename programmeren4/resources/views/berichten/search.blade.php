<style> 

    *{
        text-align: center;
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

<h2> zoek resultaten </h2> 

<p> Gevonden resultaten voor '{{ request() -> input('query')}}' </p> 

@foreach($berichten as $bericht)  <div class="form-group berichten">
    <h3>{{$bericht ->titel}}</h3>
    <p>{{$bericht ->bericht}} <p>
    <small> #{{$bericht ->tag}} 
    Geschreven door {{ Auth::user()->name }}
    {{$bericht ->created_at}} </small>            
</div>

    
@endforeach

@endsection