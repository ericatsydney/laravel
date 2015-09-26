<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ config('blog.title') }}</title>
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
  <div class="container">
      @yield('content')
  </div>
</body>
</html>