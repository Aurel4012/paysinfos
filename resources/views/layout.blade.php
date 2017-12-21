<html>
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
        <script src="https://use.fontawesome.com/ac27f63fe1.js"></script>
        <link rel="stylesheet" type="text/css" href="{{asset('css/mdb.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/resultat.css')}}">
    </head>
    <body class="animated fadeIn">
        @include('header')
        @section('sidebar')
        @show

        <main>
            @yield('content')
        </main>
    
              
    </body>
</html>