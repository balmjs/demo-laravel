<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hello BalmJS for Laravel</title>
        <link rel="stylesheet" href="{{ balm('css/app.css') }}" />
    </head>
    <body>
        <!--[if IE]>
        <p class="browserupgrade">
            You are using an <strong>outdated</strong> browser. Please
            <a href="https://browsehappy.com/">upgrade your browser</a> to improve
            your experience and security.
        </p>
        <![endif]-->
        <div class="flex-center full-height">
            <h1>Hello <a href="https://balmjs.com/">BalmJS</a> for Laravel</h1>
            <p>A Flexible Front-End Workflow</p>
        </div>
        <script src="{{ balm('js/main.js') }}"></script>
    </body>
</html>
