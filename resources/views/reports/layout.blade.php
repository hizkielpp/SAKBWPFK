<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
        <title>Oke @yield('title')</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css">
    @stack('css')
    </head>
    <body>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('signout') }}">Logout</a>
        </li>
        <div class="container">
            @yield('content')
        </div>
    </body>
    @stack('scripts')
    <script type="text/javascript"></script>
</html>