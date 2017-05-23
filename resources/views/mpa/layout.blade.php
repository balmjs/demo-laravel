<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Balm laravel demo - @yield('title')</title>
        @yield('style')
    </head>
    <body>
        @include('mpa.nav')

        <div class="container">
            @yield('content')
        </div>

        @yield('script')
    </body>
</html>
