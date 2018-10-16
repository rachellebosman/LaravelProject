<!DOCTYPE html>

<head>

    <title> TEST </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

       <style> 
        *{
            text-align: center;
        }
        </style>

</head>

<body>


    @include('inc.navbar')

    
    @include('inc.messages')

    @yield('content')

</body>