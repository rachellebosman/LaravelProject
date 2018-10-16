<style> 

        .gebruikers {
                background-color: white;
                margin-top: 5px; 
                padding-top: 5px;
                padding-bottom: 5px;  
                
}</style>


@extends('layout.app')

@section('content')

        <br> <br>

        <h1> Gebruikers in de database </h1>


        @if(count($posts) > 1 )
                @foreach($posts as $post)
                        <div class="gebruikers">
                                <h3><a href="/gegevens/{{$post->id}}">{{$post ->firstname}} {{$post ->lastname}} </a></h3>
                                <small> klik op de naam voor meer informatie </small> 
                        </div>
                @endforeach
        @else 
                <p> no posts found </p>
        @endif
     
@endsection