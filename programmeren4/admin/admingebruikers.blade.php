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
        <th> #ID</th> 
        <th>Naam</th>
        <th>Aantal berichten</th>
        <th>Email</th>       
    </tr>
        
   

    <?php  $count=0; ?> 
    
    @foreach($user as $x )
        <!-- laat zien dat eager loading werkt!!!  <p> {{$x}} </p> --> 
        <?php $count++?>
    @endforeach

    @for($i = 0; $i < $count; $i++)
        <?php  ${"gebruiker$i"} = 0; ?> 
    @endfor
  
    @foreach($user as $x )         
        @for ($i = 0; $i < $count; $i++)
            @if($x->user_id && $x->user->id == $i)
                <?php 
                    ${'gebruiker'.$i} ++ 
                ?>  
           @endif
        @endfor
    @endforeach
        
    @if(count($posts) > 0 )

    @foreach($posts as $post)
        <tr>  
            <td>{{$post->id}}</td>                      
            <td>{{$post ->name}}</td> 
            <td>  {{${"gebruiker$post->id"} }}</td> 
            <td>{{$post->email}}</td> 
        </tr>
    @endforeach
</table>

@else 
    <p> Er zijn geen berichten op het moment</p>
@endif
   
<br>
<a href="/admin"> < Terug naar hoofdmenu </a>    
@endsection