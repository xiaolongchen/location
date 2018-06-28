<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
        </style>
    </head>
    <body>
        <h1>Car Rent</h1>
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <li><a href="{{ url('/demands') }}">Demand a car</a></li>
                    <li><a href="{{ url('/offers') }}">Make an offer</a></li>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
        @endif
    
    </body>
</html>
