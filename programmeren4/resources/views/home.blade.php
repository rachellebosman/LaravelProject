<style> 
    .bericht {
        color: red;
    }
    
</style> 

@extends('layouts.app')
@section('content')

    <div class="container tabel">
        <br><br>
        <h2> Welkom {{ Auth::user()->name }} </h2>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

        <h4> Mijn berichten: </h4> 
            @foreach($posts as $post)
                <tr class="bericht">
                    <th>{{$post->titel}}</th>
                    <th><a class="btn" href="#"> bekijk bericht </a> 
                    <th><a class ="btn" href="/berichten/{{$post->id}}/edit"> edit </a></th>
                    <!-- code vooor de delete optie --> 
                    <th>  {!!Form::open(['action' => ['berichtenController@destroy', $post->id], 'method' => 'POST'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('verwijder', ['class' => "button"])}}
                    {!!Form::close()!!} <th> 
                <tr>
            @endforeach
    </div>
@endsection
