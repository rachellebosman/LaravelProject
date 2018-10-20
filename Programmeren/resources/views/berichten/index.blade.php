<style>
.titel {
    color: black;
} 

.button {
    color: black;
    padding: 5px;
    border: solid darkgrey 1px;
    border-radius: 5px;
}</style> 

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

<br><br><br><br>

       

        <h1> Overzicht van alle berichten </h1>

        <br> 

        @if(count($posts) > 0 )
                @foreach($posts as $post)

                        <div class="form-group berichten">
                                <h3><a class="titel" href="/berichten/{{$post->id}}">{{$post ->titel}}</a></h3>
                                <p>{{$post ->bericht}} <br>
                                #{{$post ->tags}} <br>
                                <small> Geschreven op: {{$post ->created_at}} </small>
                                <a class="button" href="/berichten/{{$post->id}}/edit"> edit <a> 

                                <!-- code vooor delete optie --> 
                                {!!Form::open(['action' => ['berichtenController@destroy', $post->id], 'method' => 'POST'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('verwijder', ['class' => 'button'])}}
                                {!!Form::close()!!}
                        </div>

                @endforeach
        @else 
                <p> Geen berichten om te tonen. </p>
        @endif

       

     
@endsection