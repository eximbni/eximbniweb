<!DOCTYPE html>
<html>
<head>
	<title>Get latitude and longitude from address google map api javascript</title>
</head>
<body>

<div>
     <h3> Enter an adress and press the button</h3>

    <input id="address" type="text" placeholder="Enter address here" style="width:50%"/>
    <div>
        <p>Latitude:
            <input type="text" id="latitude" readonly />
        </p>
        <p>Longitude:
            <input type="text" id="longitude" readonly />
        </p>
    </div>
</div>

<!-- Add the this google map apis to webpage -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;key=AIzaSyCg4rES-cHvkyowz2QjYSS1aQi1vBJaYYM&amp;libraries=places"></script>

<script>
google.maps.event.addDomListener(window, 'load', initialize);
function initialize() {
var input = document.getElementById('address');
var autocomplete = new google.maps.places.Autocomplete(input);
autocomplete.addListener('place_changed', function () {
var place = autocomplete.getPlace();
// place variable will have all the information you are looking for.

  document.getElementById("latitude").value = place.geometry['location'].lat();
  document.getElementById("longitude").value = place.geometry['location'].lng();
});
}
</script>
</body>
</html>