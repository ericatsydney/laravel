var elixir = require('laravel-elixir');
// Include gulp
//var gulp = require('gulp');

// Include Our Plugins
//var sass = require('gulp-sass');
//var concat = require('gulp-concat');
//var uglify = require('gulp-uglify');
//var rename = require('gulp-rename');
//var steam = require('event-stream');

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
  mix.sass('app.scss');
  mix.scripts(['leaflet.markercluster.js', 'Control.Geocoder.js', 'app.js'], 'public/js/min/all.js');
});

//gulp.task('copy', function() {
//  var jsList = ['bower_components/leaflet.markercluster/dist/leaflet.markercluster.js',
//    'bower_components/leaflet-control-geocoder/Control.Geocoder.js'];
//  gulp.src(jsList)
//    .pipe(gulp.dest('resources/assets/js'));
////  mix.copy('bower_components/leaflet.markercluster/dist/MarkerCluster.css','public/css/MarkerCluster.css');
////  mix.copy('bower_components/leaflet.markercluster/dist/MarkerCluster.Default.css','public/css/MarkerCluster.Default.css');
////  mix.copy('bower_components/leaflet-control-geocoder/Control.Geocoder.css','public/css/Control.Geocoder.css');
//});

// Concatenate & Minify JS
//gulp.task('scripts', function() {
//  var jsList = ['bower_components/leaflet.markercluster/dist/leaflet.markercluster.js',
//    'bower_components/leaflet-control-geocoder/Control.Geocoder.js',
//    'resources/assets/js/*.js'];
//
//  return gulp.src(jsList)
//    .pipe(concat('all.js'))
//    .pipe(gulp.dest('public/js/min'))
//    .pipe(rename('all.min.js'))
//    .pipe(uglify())
//    .pipe(gulp.dest('public/js/min'));
//});
//
//gulp.task('watch', function() {
//  gulp.watch('resources/assets/js/*.js', ['scripts']);
//})