<style> 

    * {
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
         padding-top: 5px;   
         padding-bottom: 0px;
    }
 
    .mijnbutton {   
         background-color: white;
         color:red;
         border:none;     
    }

    .mijnbutton:hover {
        text-decoration: underline;
        color: pink;
        
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
 <br><br>
 @include('inc.messages')
    <h3> Mijn berichten: </h3> 
        @foreach($posts as $post)
            <div class="berichten">
                <tr>
                    <h3>{{$post->titel}}</h3>
                <a class="" href="/berichten/{{$post->id}}"> bekijk bericht </a> 
                    <a class="" class ="" href="/berichten/{{$post->id}}/edit"> edit </a> <br>
                    <!-- code vooor de delete optie --> 
                    {!!Form::open(['action' => ['berichtenController@destroy', $post->id], 'method' => 'POST'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('verwijder', ['class' => "mijnbutton"])}}
                    {!!Form::close()!!}  
                </tr> 
            </div>
        @endforeach
    <a href="/home"> < Terug naar het hoofdmenu </a> 
 @endsection