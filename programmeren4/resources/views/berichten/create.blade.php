<style>

    *{
        text-align: center;
    }

    .nieuwBericht {
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
@section ('content')

<br><br>
@include('inc.messages')
    <div class="container">  
        
        <h3> Nieuw bericht aanmaken </h3>
        {!! Form::open(['action' => 'berichtenController@store', 'method' => 'POST' ]) !!}
            {!!Csrf_field()!!} 
            <div class="form-group nieuwBericht"> 
                {{Form::label('titel', 'Titel van het bericht: ')}}<br>
                {{Form::text('titel', '')}}<br>
                {{Form::label('bericht', 'tekst: ')}} <br>
                {{Form::textarea('bericht', '')}}
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
                {{Form::submit ('Maak bericht', ['class' => 'btn'])}}
            </div>
        {!! Form::close() !!}  
    </div> 
@endsection 

