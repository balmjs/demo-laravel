<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>balm-laravel</title>
    <link rel="stylesheet" href="{{ balm('css/app.css') }}">
    <!-- For balm.config.assets.subDir -->
    <!-- <link rel="stylesheet" href="{{ balm('css/app.css', 'web') }}"> -->
  </head>
  <body>
    <div id="app"></div>
    <script src="{{ balm('js/app.js') }}"></script>
    <!-- For balm.config.assets.subDir -->
    <!-- <script src="{{ balm('js/app.js', 'web') }}"></script> -->
  </body>
</html>
