<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ config('blog.title') }}</title>
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.5/leaflet.css" />
</head>
<body>
  <div class="container">
      @if (Session::has('flash_message'))
          <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              {{ Session::get('flash_message') }}
          </div>
      @endif

      @yield('content')
  </div>
  <script src="//code.jquery.com/jquery.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="http://cdn.leafletjs.com/leaflet-0.7.5/leaflet.js"></script>
  <script>
    var map = L.map('map').setView([-27.462792, 153.0291643], 15);
    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoiZXJpY3RhbjgwIiwiYSI6ImNpZzUyNjNwbzNra3h1d2x2ZnV5OXFjZWIifQ.4WXMlCNO32swLF4_JH7b_g', {
      attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery ? <a href="http://mapbox.com">Mapbox</a>',
      maxZoom: 18,
      id: 'erictan80.npmpe852',
      accessToken: 'pk.eyJ1IjoiZXJpY3RhbjgwIiwiYSI6ImNpZzUyNjNwbzNra3h1d2x2ZnV5OXFjZWIifQ.4WXMlCNO32swLF4_JH7b_g'
    }).addTo(map);
    var marker = L.marker([-27.462792, 153.0291643]).addTo(map);
  </script>
  @yield('footer')
</body>
</html>