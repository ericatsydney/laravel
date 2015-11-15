<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>{{ config('blog.title') }}</title>
  <link href="/css/app.css" rel="stylesheet">
  <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.5/leaflet.css" />
  <link rel="stylesheet" href="{{ URL::asset('/css/MarkerCluster.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('/css/Control.Geocoder.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('/css/MarkerCluster.Default.css') }}" />
  <link href="{{ URL::asset('/css/font-awesome.min.css') }}" rel="stylesheet" />
  <link href="{{ URL::asset('/css/animate.min.css') }}" rel="stylesheet"/>
  <link href="{{ URL::asset('/css/lightbox.css') }}" rel="stylesheet"/>
  <link href="{{ URL::asset('/css/main.css') }}" rel="stylesheet"/>
  <link href="{{ URL::asset('/css/responsive.css') }}" rel="stylesheet"/>
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
  </div> <!-- end of container -->
  <script src="//code.jquery.com/jquery.js"></script>
  <script src="http://cdn.leafletjs.com/leaflet-0.7.5/leaflet.js"></script>
  <script src="{{ URL::asset('/js/min/all.js') }}"></script>
  @yield('footer')
</body>
</html>