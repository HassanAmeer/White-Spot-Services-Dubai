


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    // be careful to include the parameter "libraries=places"
    <script type="text/javascript" src='https://maps.google.com/maps/api/js?key=AIzaSyDOS8jkm5pyE_ZbsGf5sGO5nz7NxGXHM_8&amp;libraries=places'></script>
    <script src="js/locationpicker.jquery.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="locationpicker.jquery.js"></script>
</head>
<body>


    Location: <input type="text" id="us2-address" style="width: 200px"/>

<div id="us2" style="width: 500px; height: 400px;"></div>				
Lat.: <input type="text" id="us2-lat"/>
Long.: <input type="text" id="us2-lon"/>


</body>
</html>


<!-- //Plugin used: https://github.com/Logicify/jquery-locationpicker-plugin -->



<script src="js/jquery-3.4.1.min.js"></script>
<script src="locationpicker.jquery.js"></script>
<script>
    $('#us2').locationpicker({
enableAutocomplete: true,
    enableReverseGeocode: true,
  radius: 0,
  inputBinding: {
    latitudeInput: $('#us2-lat'),
    longitudeInput: $('#us2-lon'),
    radiusInput: $('#us2-radius'),
    locationNameInput: $('#us2-address')
  },
  onchanged: function (currentLocation, radius, isMarkerDropped) {
        var addressComponents = $(this).locationpicker('map').location.addressComponents;
        // alert(currentLocation);
    console.log(currentLocation);  //latlon  
    updateControls(addressComponents); //Data
    }
});

function updateControls(addressComponents) {
  console.log(addressComponents);
   alert(addressComponents);
}
</script>