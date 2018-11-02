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

<br><br>
<h3> Gevonden resultaten voor '{{ request() -> input('query')}}'  </h3> 

    @if(count($berichten) > 0 )

        @foreach($berichten as $bericht)  <div class="form-group berichten">
            <h3>{{$bericht ->titel}}</h3>
            <p>{{$bericht ->bericht}} <p>
            <small>
                Geschreven door {{$bericht->user->name}} op {{$bericht ->created_at}} 
                <br> #{{$bericht ->tag}}
            </small>          
        </div>
        
    @endforeach

    @else
        <p> Er zijn geen resultaten gevonden </p>
    @endif

<a href="/berichten"> < terug naar overzicht </a> 

@endsection