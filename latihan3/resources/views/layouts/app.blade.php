<!DOCTYPE html>
<html lang="{{ str_replace('_','_', app() -> getLocale()) }}">
 
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-widht, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> {{ config('app.name') }}</title>
    </head>
    <body>
        <div class="jumbotron jumbroton-fluid">
        <div class="container">
          @yield('content')
        </div>
        </div>
    </body>
</html>