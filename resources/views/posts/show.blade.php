@extends('layout.app')

@section('content')

    <br><br>

    <div>

    <h2> {{$posts->firstname}} heeft het volgende ID nummer: {{$posts->id}}.</h2>
    <small> <a href="/gegevens"> Klik hier om terug te gaan </a> </small> 

    </div> 
   

@endsection