<style>

    h1, p{
       text-align: center; 
    }

    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 80%;
    margin-left: 10%;
    margin-right:10%;
    }

    td, th {
    border: 1px solid darkgrey;
    text-align: left;
    padding: 8px;
    }

    tr:nth-child(even) {
    background-color: #dddddd;
    }

</style> 

@extends('admin.adminnav')
@section('content')
<br><br>
<h1> Overzicht van alle berichten </h1> 

<br>

<table>

    <tr> 
        <th> </th> 
        <th>Titel</th>
        <th>Geschreven door</th>
        <th>Datum </th>
        <th>Bericht tonen</th>
    </tr>
   
    @if(count($posts) > 0 )
    @foreach($posts as $post)
        <tr>      
            
            <td>{{$post->user_id}}</td> 
            <td>{{$post ->titel}}</td> 
            <td>{{$post->user->name}}</td>
            <td>{{$post ->created_at}}</td>
            

            <form action="{{action('adminController@updateberichten')}}", method="POST">
                @csrf
                
                <input type="hidden" name="id" value="{{$post->id}} ">

                @if($post->status == 0)
                    <input type="hidden" name="status" value="1">
                    <th><input type="submit" value="bericht dempen"></th>

                @else
                    <input type="hidden" name="status" value="0">
                    <th><input type="submit" value="bericht tonen"></th>
                @endif
         
            </form>                       
        </tr>

       

    @endforeach
    
</table> 

@else 
<p> Er zijn geen berichten op het moment</p>
@endif

<br>
<p><a href="/admin"> < Terug naar hoofdmenu </a></p>   
@endsection