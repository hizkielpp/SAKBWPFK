<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Oke @yield('title')</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css">
    </head>
    <body>
        <h1>Laravel 9 CRUD Application</h1>
 
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>