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
<form action="{{action('adminController@updateberichten')}}", method="POST">
{{ csrf_field() }} 
<table>
    <tr> 
        <th>Titel</th>
        <th>Geschreven door</th>
        <th> Datum </th>
        <th>Bericht tonen</th>
    </tr>
   
    @if(count($posts) > 0 )
            @foreach($posts as $post)
                <tr>                    
                    <td>{{$post ->titel}}</td> 
                    <td>{{$post->user->name}}</td>
                    <td>{{$post ->created_at}}</td>
                    
                    <td><input type="checkbox" name="toonbericht" value="toonbericht" checked> Toon bericht </td>             
                </tr>
            @endforeach

            <tr> 
                <th></th>
                <th></th>
                <th></th>
                <th><input type="submit" value="Aanpassen"></th>    
            </tr> 
</table> 
</form>
    @else 
        <p> Er zijn geen berichten op het moment</p>
    @endif
<br>
<p><a href="/admin"> < Terug naar hoofdmenu </a></p>   
@endsection