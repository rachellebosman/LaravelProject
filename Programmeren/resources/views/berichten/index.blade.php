<style>
.titel {
    color: black;
} </style> 

@extends('layout.standaardLayout')

<style>

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

@section('content')

        <br> <br>

        <h1> Overzicht van alle berichten </h1>

        <br> 

        @if(count($posts) > 0 )
                @foreach($posts as $post)

                        <div class="form-group berichten">
                                <h3><a class="titel" href="/berichten/{{$post->id}}">{{$post ->titel}}</a></h3>
                                <p>{{$post ->bericht}} <br>
                                #{{$post ->tags}} <br>
                                <small> Geschreven op: {{$post ->created_at}} </small> </p>
                        </div>

                @endforeach
        @else 
                <p> Geen berichten om te tonen. </p>
        @endif

       

     
@endsection