<style> 
    *{
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
<h1> Overzicht van alle gebruikers </h1>
<br>
<table>
    <tr> 
        <th>Naam</th>
        <th>Email</th>
        <th>Aantal berichten </th> 
        
    </tr>
        
    @if(count($posts) > 0 )
        @foreach($posts as $post)
            <tr>                          
                <td>{{$post ->name}}</td> 
                <td>{{$post->email}}</td>
                <td> </td> 
                
            </tr>
        @endforeach
</table>
    @else 
        <p> Er zijn geen berichten op het moment</p>
    @endif
<br>
<a href="/admin"> < Terug naar hoofdmenu </a>    
@endsection