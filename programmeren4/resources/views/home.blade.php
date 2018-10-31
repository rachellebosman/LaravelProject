<style> 
   .berichten {  
        border-radius: 5px;
        margin: 5px;
        padding: 10px;
        margin-left: 30%;
        margin-right: 30%;
        border: solid darkgrey 1px; 
        background-color: white; 
        text-align:center;
    }

    .welkom { 
        text-align: center;
        border: solid darkgrey 1px;
        border-radius: 5px; 
        background-color: white; 
        padding: 100px;
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    
    h3{
        text-align: center;
        }

</style> 

@extends('layouts.app')
@section('content')

<br><br>
<div class="welkom">
    <h2> Welkom, {{ Auth::user()->name }}! </h2>

        <!-- code voor success allert --> 
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

    <a class="btn" href="/berichten/create"> Nieuw bericht </a>
    <a class="btn" href="/berichten"> Alle berichten </a>
    <a class="btn" href="/mijnberichten"> Mijn berichten </a>
</div>

@endsection
