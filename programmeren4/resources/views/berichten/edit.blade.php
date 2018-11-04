<style>
    .nieuwBericht {
       border-radius: 5px;
       margin: 5px;
       padding: 10px;
       margin-left: 30%;
       margin-right: 30%;
       border: solid darkgrey 1px; 
       background-color: white; 
    }
    
    *{
        text-align: center;
    }
</style> 

@extends('layouts.app')
@section ('content')
<br><br>
@include('inc.messages')
<div class="container">
<h3> Bericht aanpassen </h3> 
       {!! Form::open(['action' => ['berichtenController@update', $post->id], 'method' => 'POST' ]) !!}
           <div class="form-group nieuwBericht"> 
               {{Form::label('titel', 'Titel van het bericht: ')}}<br>
               {{Form::text('titel', $post->titel)}} <br>            
               {{Form::label('bericht', 'tekst: ')}} <br>
               {{Form::textarea('bericht', $post->bericht)}}
               {{Form::label('tag', 'kies hier een passende tag:')}}<br>
               {{Form::radio('tag', 'gasten') }}
               {{Form::label('tag', 'gasten')}}
               {{Form::radio('tag', 'café') }}
               {{Form::label('tag', 'café')}}
               {{Form::radio('tag', 'consumpties') }}
               {{Form::label('tag', 'consumpties')}}
               {{Form::radio('tag', 'personeel') }}
               {{Form::label('tag', 'personeel')}}
               <br>
               {{Form::hidden('_method', 'PUT')}}
               {{Form::submit ('Aanpassen', ['class' => 'btn'])}}
           </div>
       {!! Form::close() !!}
</div>      
@endsection 