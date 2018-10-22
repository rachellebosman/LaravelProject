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

</style> 


@extends('layout.standaardLayout')

@section ('content')

   <br><br>
   
   <h3> Nieuw bericht aanmaken </h3>
   <br>
   
       {!! Form::open(['action' => 'berichtenController@store', 'method' => 'POST' ]) !!}
       
           <div class="form-group nieuwBericht"> 

               {{Form::label('titel', 'Titel van het bericht: ')}} 
               {{Form::text('titel', '')}}
               <br><br>
               {{Form::label('bericht', 'tekst: ')}} <br>
               {{Form::textarea('bericht', '')}}
               <br><br>
               {{Form::label('tag', 'kies hier een passende tag:')}}
               {{ Form::radio('tag', 'gasten') }}
               {{Form::label('tag', 'gasten')}}
               {{ Form::radio('tag', 'café') }}
               {{Form::label('tag', 'café')}}

               <br><br>
               {{Form::submit ('Submit', ['class' => 'btn btn-primary'])}}

           </div>

       {!! Form::close() !!}
       


@endsection 