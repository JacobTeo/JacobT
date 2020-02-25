<!DOCTYPE html>
<html>
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
<body>

<p>Click the button to get your coordinates.</p>

<button onclick="getLocation()">Try It</button>

<p id="demo"></p>
<script>
var distance;
var userLat;
var userLatRadians;
var userLong;
var userLongRadians;
var targetLatRadians;
var targetLongRadians;
var longDifference;

var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  userLat = position.coords.latitude;
	userLong = position.coords.longitude;

  targetLat = 50.721587199999995;
  targetLong = -3.5127295999999997;
  radius = 10;

  userLatRadians = toRad(userLat);
  targetLatRadians = toRad(targetLat);
  longDifference = toRad(targetLong - userLong);
  earthRadius = 6371000;
  distance = Math.acos( Math.sin(userLatRadians)*Math.sin(targetLatRadians)
			+ Math.cos(userLatRadians)*Math.cos(targetLatRadians)
			*Math.cos(longDifference)) * earthRadius;

      if (distance <= radius) {
    		x.innerHTML ="Success!" ;
    	} else {
    		x.innerHTML ="Failure!";
    	}
}

function toRad(Value) {
    /** Converts numeric degrees to radians */
    return Value * Math.PI / 180;
}
</script>

</body>
</html>
