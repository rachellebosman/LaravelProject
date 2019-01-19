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
        
    @if(count($posts) > 0 )

        <h1> </h1>

        @foreach($posts as $post)
            <tr>  
                <td>{{$post->id}}</td>                      
                <td>{{$post ->name}}</td> 
                <td>
                    

                    {{$post->bericht['user_id'] }}
                   
                    @if($post->id == 2)
                        <p>x <p>
                    @endif



                </td> 
                <td>{{$post->email}}</td> 
            </tr>
        @endforeach
    </table>

    @else 
        <p> Er zijn geen berichten op het moment</p>
    @endif

    <?php  $user1=0; $user2=0; $user3=0; ?> 
    
    

    @foreach($user as $x )
        <p> {{$x}} </p> 
        

        @if($x->user_id && $x->user->id == 1)
        <?php $user1++ ?> 

        @elseif($x->user_id && $x->user->id == 2)
        <?php $user2++ ?> 

        @elseif($x->user_id && $x->user->id == 3)
        <?php $user3++ ?> 


        @endif

    @endforeach

    <h4> gebruiker 1 heeft {{$user1}} berichten </h4> 
    <h4> gebruiker 2 heeft {{$user2}} berichten </h4> 
    <h4> gebruiker 3 heeft {{$user3}} berichten </h4> 




    
<br>
<a href="/admin"> < Terug naar hoofdmenu </a>    
@endsection