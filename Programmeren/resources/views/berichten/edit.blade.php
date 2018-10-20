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
       
       <h3> Bericht aanpassen </h3>
       <br>
       
           {!! Form::open(['action' => ['berichtenController@update', $post->id], 'method' => 'POST' ]) !!}
           
               <div class="form-group nieuwBericht"> 
   
                   {{Form::label('titel', 'Titel van het bericht: ')}} 
                   {{Form::text('titel', $post->titel)}}
                   <br><br>
                   {{Form::label('bericht', 'tekst: ')}} <br>
                   {{Form::textarea('bericht', $post->bericht)}}
                   <br><br>
                   {{Form::label('tags', 'kies hier een passende tag:')}}
                   {{ Form::radio('tags', 'gasten') }}
                   {{Form::label('tags', 'gasten')}}
                   {{ Form::radio('tags', 'café') }}
                   {{Form::label('tags', 'café')}}
   
                   <br><br>
                   {{Form::hidden('_method', 'PUT')}}
                   {{Form::submit ('Submit', ['class' => 'btn btn-primary'])}}
   
               </div>
   
           {!! Form::close() !!}
           
   
   
   @endsection 