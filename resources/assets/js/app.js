/**
 * Created by Eric Tan on 27/10/2015.
 */
var openstreet = L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoiZXJpY3RhbjgwIiwiYSI6ImNpZzUyNjNwbzNra3h1d2x2ZnV5OXFjZWIifQ.4WXMlCNO32swLF4_JH7b_g', {
  attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery ? <a href="http://mapbox.com">Mapbox</a>',
  maxZoom: 18,
  id: 'erictan80.npmpe852',
  accessToken: 'pk.eyJ1IjoiZXJpY3RhbjgwIiwiYSI6ImNpZzUyNjNwbzNra3h1d2x2ZnV5OXFjZWIifQ.4WXMlCNO32swLF4_JH7b_g'}),
    map = L.map('map',{layers: [openstreet]}),
    markers = new L.MarkerClusterGroup(),
    bounds = [];

$.getJSON('/user', function($users) {
  $.each($users, function($key,$user) {
    var m = new L.Marker([$user.lat, $user.lng]);
    markers.addLayer(m);
    bounds.push([$user.lat, $user.lng]);
  });
  map.addLayer(markers);
  map.fitBounds(bounds, {padding: [20, 20]});
});
var accessToken = pk.eyJ1IjoiZXJpY3RhbjgwIiwiYSI6ImNpZzUyNjNwbzNra3h1d2x2ZnV5OXFjZWIifQ.4WXMlCNO32swLF4_JH7b_g';
var geoCodeFwd = 'https://api.mapbox.com/geocoding/v5/mapbox.places/1600+pennsylvania+ave+nw.json?access_token=' + accessToken;
$.getJSON(geoCodeFwd, function($result) {
  console.log($result);
})
