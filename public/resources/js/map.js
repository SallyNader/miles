/*
window.onload = function() {
var mapDiv = document.getElementById('map');
var latlng = new google.maps.LatLng(37.09, -95.71);
var options = {
center: latlng,
zoom: 4,
mapTypeId: google.maps.MapTypeId.ROADMAP
};
var map = new google.maps.Map(mapDiv, options);
}
*/
var s1 = 30.108811;
var s2 = 31.373608;

(function() {
window.onload = function() {
// Creating an object literal containing the properties
// we want to pass to the map
	var options = {
	zoom: 18,
	center: new google.maps.LatLng(s1,s2),
	mapTypeId: google.maps.MapTypeId.ROADMAP
};

// Creating the map
	var map = new google.maps.Map(document.getElementById('map'), options);

// Adding a marker to the map
	var marker = new google.maps.Marker({
	position: new google.maps.LatLng(s1,s2),
	map: map,
	title: 'Alboraq For Translation',
	icon: 'http://gmaps-samples.googlecode.com/svn/trunk/markers/orange/marker72.png'
});

// Creating an InfoWindow with the content text: "Hello World"
	var infowindow = new google.maps.InfoWindow({
	content:'<div class="info">Al Boraq Translation Services alboraq.com.eg 02 22685650</div><br /><a href="http://www.alboraq.com.eg/" target="_blank" >Website</a>'
});
	
// Adding a click event to the marker
	google.maps.event.addListener(marker, 'click', function() {

// Calling the open method of the infoWindow
	infowindow.open(map, marker);
});

};
})();
