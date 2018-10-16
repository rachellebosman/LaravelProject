@extends ('layout.app')

@section ('content')

    <br><br>
    <h1> Heuyy dit is de create pagina! </h1> 
    <h3> Hier kan een nieuwe gebruiker worden toegevoegd in de database. </h3>
    <br>
    
        {!! Form::open(['action' => 'GegevensController@store', 'method' => 'POST' ]) !!}
        
            <div class="form-group"> 

                {{Form::label('firstname', 'Voornaam: ')}} <br>
                {{Form::text('firstname', '')}}
                <br><br>
                {{Form::label('lastname', 'Achternaam: ')}} <br>
                {{Form::text('lastname', '')}}
                <br><br>
                {{Form::submit ('Submit', ['class' => 'btn btn-primary'])}}

            </div>

        {!! Form::close() !!}
   


@endsection 