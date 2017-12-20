<html>
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="mdb.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    </head>
    <body>
        @section('sidebar')
        @show

        <div>
            @yield('content')
        </div>
    
              
    </body>
</html>