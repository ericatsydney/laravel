var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
  mix.copy('bower_components/leaflet.markercluster/dist/leaflet.markercluster.js','public/js/leaflet.markercluster.js');
  mix.copy('bower_components/leaflet.markercluster/dist/MarkerCluster.css','public/css/MarkerCluster.css');
  mix.copy('bower_components/leaflet.markercluster/dist/MarkerCluster.Default.css','public/css/MarkerCluster.Default.css');
  mix.sass('app.scss');
  mix.scripts('app.js');
});
