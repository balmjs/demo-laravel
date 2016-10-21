<form action="/test" method="post" enctype="multipart/form-data">
  <p><input id="username" type="text" name="username" placeholder="Username"></p>
  <p><input id="photo" type="file" name="photo"></p>
  <p><button type="submit">Form Submit</button></p>
  <p><button id="ajax-submit" type="button">Ajax Submit</button></p>
  <input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
