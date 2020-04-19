/*--=====================================
		Location
======================================--*/
if ("geolocation" in navigator) {
  // console.log("Localización disponible");
} else {
  // console.log("Localización NO disponible");
}
var watchID = navigator.geolocation.watchPosition(function(position) {});
navigator.geolocation.clearWatch(watchID);
function geo_success(position) {
  document.getElementById('geo').innerHTML=(position.coords.latitude + ' ' + position.coords.longitude);
}
function geo_error() {
  // console.log("No se proporciono permiso.");
}
var geo_options = {
  enableHighAccuracy: true, 
  maximumAge        : 30000, 
  timeout           : 27000
};
var wpid = navigator.geolocation.watchPosition(geo_success, geo_error, geo_options);
function errorCallback(error) {
  // console.log('ERROR(' + error.code + '): ' + error.message);
};
