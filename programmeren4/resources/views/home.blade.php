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
        margin-left: 30%;
        margin-right: 30%;
        text-align: center;
    }

  
    .mijnbutton {
        background-color: lightgrey;
        color:white;
        padding: 15px;
        border:none;
        border-radius: 5px;
        margin: 5px     
        }

      .kutbutton{
        float: right;

        }

        h3{
            text-align: center;
        }

</style> 

@extends('layouts.app')
@section('content')

    <div class="container tabel">

        <div class="welkom">
            <br><br>
            <h2> Welkom {{ Auth::user()->name }} </h2>

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

            <a href="/berichten/create"> Nieuw bericht </a>
            <a href="/berichten"> Alle berichten </a>
        </div>

        <h3> Eigen berichten: </h3> 

            @foreach($posts as $post)
                <div class="berichten">
                    <tr>

                    <h4>{{$post->titel}}</h4> 

                    <!-- code vooor de delete optie --> 
                    {!!Form::open(['action' => ['berichtenController@destroy', $post->id], 'method' => 'POST'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('verwijder', ['class' => ""])}}
                    {!!Form::close()!!}

                    <button class="" href="#"> bekijk bericht </button> 
                  
                    <button class ="" href="/berichten/{{$post->id}}/edit"> edit </button>

                    
                    
                    </tr> 
                </div>
            @endforeach
    </div>
@endsection
