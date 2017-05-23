<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>balm-laravel</title>
    <link rel="stylesheet" href="{{ balm('css/app.css') }}">
  </head>
  <body>
    <div id="app">
      <example></example>
    </div>
    <script src="{{ balm('js/app.js') }}"></script>
  </body>
</html>
