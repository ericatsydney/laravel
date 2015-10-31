/**
 * Created by Eric Tan on 27/10/2015.
 */
var map = L.map('map').setView([-27.462792, 153.0291643], 0);
L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoiZXJpY3RhbjgwIiwiYSI6ImNpZzUyNjNwbzNra3h1d2x2ZnV5OXFjZWIifQ.4WXMlCNO32swLF4_JH7b_g', {
  attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery ? <a href="http://mapbox.com">Mapbox</a>',
  maxZoom: 18,
  id: 'erictan80.npmpe852',
  accessToken: 'pk.eyJ1IjoiZXJpY3RhbjgwIiwiYSI6ImNpZzUyNjNwbzNra3h1d2x2ZnV5OXFjZWIifQ.4WXMlCNO32swLF4_JH7b_g'
}).addTo(map);
//var marker1 = L.marker([-27.462792, 153.0291643]).addTo(map);
//var marker2 = L.marker([-27.4564168, 153.0255293]).addTo(map);
var bounds = [];
$.getJSON('/user', function($users) {
  $.each($users, function($key,$user) {
    L.marker([$user.lat, $user.lng]).addTo(map);
    bounds.push([$user.lat, $user.lng]);
  });
});
console.log(bounds);
map.fitBounds(bounds, {padding: [20, 20]});
