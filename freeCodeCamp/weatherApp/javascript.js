
// html request for position of current user
var lat;
var long;
var res;
var x = document.getElementById("demo");
function getLocation() {

    if (navigator.geolocation) {
        var res = navigator.geolocation.getCurrentPosition(showPosition,showError);
        console.log(res);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}
function showPosition(position) {
  console.log(position.coords.latitude);
  lat ="lat="+position.coords.latitude;
  console.log(position.coords.longitude);
  long ="&long="+position.coords.longitude;
  coordinates = {lat:lat, long:long};
  console.log(coordinates);
  //APIkey for the OpenWeatherMap API
  var APIkey = '&APPID=0057613d06e64a598e601021cdc067c6';
  //target city of the query
  var target = 'Liberec';
  var response = 'http://api.openweathermap.org/data/2.5/weather?q='+coordinates.lat+coordinates.long+APIkey;
  console.log(response);
  $.getJSON(response, function(json){
    myjson = json;
    console.log(myjson);
  });
}
//error handling - in case location doesnt work
function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            x.innerHTML = "User denied the request for Geolocation."
            break;
        case error.POSITION_UNAVAILABLE:
            x.innerHTML = "Location information is unavailable."
            break;
        case error.TIMEOUT:
            x.innerHTML = "The request to get user location timed out."
            break;
        case error.UNKNOWN_ERROR:
            x.innerHTML = "An unknown error occurred."
            break;
    }
}
getLocation();
