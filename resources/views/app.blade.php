<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ config('blog.title') }}</title>
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.5/leaflet.css" />
    <link rel="stylesheet" href="{{ URL::asset('/css/MarkerCluster.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('/css/MarkerCluster.Default.css') }}" />
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
  <script src="{{ URL::asset('/js/leaflet.markercluster.js') }}"></script>
  <script src="{{ URL::asset('/js/app.js') }}"></script>
  @yield('footer')
</body>
</html>