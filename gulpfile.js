var elixir = require('laravel-elixir');
// Include gulp
var gulp = require('gulp');

// Include Our Plugins
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');

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
  mix.copy('bower_components/leaflet-control-geocoder/Control.Geocoder.css','public/css/Control.Geocoder.css');
  mix.copy('bower_components/leaflet-control-geocoder/Control.Geocoder.js','public/js/Control.Geocoder.js');
  mix.sass('app.scss');
  mix.scripts('app.js');
});

// Concatenate & Minify JS
gulp.task('scripts', function() {
  return gulp.src('public/js/*.js')
    .pipe(concat('all.js'))
    .pipe(gulp.dest('public/js/min'))
    .pipe(rename('all.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('public/js/min'));
});