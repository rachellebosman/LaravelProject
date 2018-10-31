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
  <br><br>
    <h3> Eigen berichten: </h3> 
        @foreach($posts as $post)
            <div class="berichten">
                <tr>
                    <h4>{{$post->titel}}</h4> 
                    <!-- code vooor de delete optie --> 
                    {!!Form::open(['action' => ['berichtenController@destroy', $post->id], 'method' => 'POST'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('verwijder', ['class' => "btn"])}}
                    {!!Form::close()!!}
                    <a class="btn" href="#"> bekijk bericht </a> 
                    <a class="btn" class ="" href="/berichten/{{$post->id}}/edit"> edit </a>
                </tr> 
            </div>
        @endforeach
@endsection