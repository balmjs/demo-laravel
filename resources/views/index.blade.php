<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>balm-laravel</title>
    <link rel="stylesheet" href="{{ balm('css/app.css') }}">
    <script>
      window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token()
      ]); ?>
    </script>
  </head>
  <body>
    <div id="app">
      <example></example>
    </div>
    <script src="{{ balm('js/app.js') }}"></script>
  </body>
</html>
