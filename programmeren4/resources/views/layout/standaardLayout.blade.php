<!DOCTYPE html>

<head>

    <title>  </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet" type="text/css">

       <style> 
          * {
            font-family: 'Quicksand', sans-serif;
            text-align: center;         
          }

          body {
            margin: 0;
            }

         .navbar {
            background-color: darkgrey;
            padding: 10px;    
            } 

         h2 {
            color: black;
            }
        
         a {
            text-decoration: none;
            color: white;
            }

        

        </style>

</head>

<body>

    @include('inc.navigatieBar')

    @yield('content')

</body>