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
     
         .welkom { 
             text-align: center;
             border: solid darkgrey 1px;
             border-radius: 5px; 
             background-color: white; 
             padding: 100px;
             margin: 0;
             position: absolute;
             top: 50%;
             left: 50%;
             transform: translate(-50%, -50%);
         }
         
         h3{
             text-align: center;
         }
     
     </style> 
     
     @extends('admin.adminnav')
     @section('content')
     
     <br><br>
     <div class="welkom">
         
         <h2> Welkom {{ Auth::user()->name }}! </h2>
         <h4> Dit is de admin pagina hier kunt u verschillende acties uitvoeren zoals posts
             beheren en gebruikers beheren. </h4>
     
             <!-- code voor successvolle inlog --> 
             @if (session('status'))
                 <div class="alert alert-success" role="alert">
                     {{ session('status') }}
                 </div>
             @endif
        
        <a class="btn" href="/adminberichten"> Berichten beheren </a>
        <a class="btn" href="/admingebruikers"> Gebruikers beheren </a>

       

         
     </div>
     
     @endsection
     