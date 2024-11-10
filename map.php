<!DOCTYPE html>
<html  >

<head>
  <meta charset="UTF-8">
  

  <title>Geodetective Location Picker</title>

   
  
  
  <link rel='stylesheet' href='https://npmcdn.com/leaflet@0.7.7/dist/leaflet.css'>
  
<style>
body {
  height: 100vh;
  padding: 0;
  margin: 0;
  background: rgba(73,155,234,1);
  background: -moz-radial-gradient(center, ellipse cover, rgba(73,155,234,1) 0%, rgba(32,124,229,1) 100%);
  background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgba(73,155,234,1)), color-stop(100%, rgba(32,124,229,1)));
  background: -webkit-radial-gradient(center, ellipse cover, rgba(73,155,234,1) 0%, rgba(32,124,229,1) 100%);
  background: -o-radial-gradient(center, ellipse cover, rgba(73,155,234,1) 0%, rgba(32,124,229,1) 100%);
  background: -ms-radial-gradient(center, ellipse cover, rgba(73,155,234,1) 0%, rgba(32,124,229,1) 100%);
  background: radial-gradient(ellipse at center, rgba(73,155,234,1) 0%, rgba(32,124,229,1) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#499bea', endColorstr='#207ce5', GradientType=1 );
}

.example-container {
  background: white;
  width: 100%;
  height:100%;
  box-sizing: border-box;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-family: helvetica;
  font-size: 16px;
  padding: 1.5em;
  -webkit-box-shadow: 1px 5px 5px 0px rgba(0,0,0,0.15);
  -moz-box-shadow: 1px 5px 5px 0px rgba(0,0,0,0.15);
  box-shadow: 1px 5px 5px 0px rgba(0,0,0,0.15);
  border-radius: 8px;
}

.example-container * {
  box-sizing: inherit;
  font-size: inherit;
}

.example-container .header {
  margin: 1em 0;
}

.example-container #MapLocation {
  margin-bottom: 0.75em;
  height: 75vh;
  
}

.example-container input {
  width: 20%;
  
  margin: 0.5em 0;
  padding: 0.5em;
  border: 1px solid #569ae3;
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
</head>

<body translate="no">
 <div class="example-container">

  <section class="col col-10">
    <div class="row">
      <section class="col col-6" >
        <div id="MapLocation" ></div>
      </section>
    </div>
    <form action="checkmappicker.php" method="post" enctype="multipart/form-data">
    
    <div class="row" style="text-align: center;">
      <section class="col col-3">
        <label class="input">
          <input id="Latitude" placeholder="Latitude" name="Location.Latitude" />
          <!-- @Html.TextBoxFor(m => m.Location.Latitude, new {id = "Latitude", placeholder = "Latitude"}) -->
        </label>
      </section>
      <section class="col col-3">
        <label class="input">
          <input id="Longitude" placeholder="Longitude" name="Location.Longitude" />
          <!-- @Html.TextBoxFor(m => m.Location.Longitude, new {id = "Longitude", placeholder = "Longitude"}) -->
        </label>
      </section>
      <section class="col col-3">
        <label class="input">
        <input type="submit" value="Upload" />
          
        </label>
      </section>
    </div>
</form>
  </section>
</div>
</div>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://npmcdn.com/leaflet@0.7.7/dist/leaflet.js'></script>
      <script id="rendered-js" >
        var curLocation = [0, 0];
        var marker;
        var map;
        navigator.geolocation; 
$(function () {
  // use below if you want to specify the path for leaflet's images
  //L.Icon.Default.imagePath = '@Url.Content("~/Content/img/leaflet")';

  
  // use below if you have a model
  // var curLocation = [@Model.Location.Latitude, @Model.Location.Longitude];

  if (curLocation[0] == 0 && curLocation[1] == 0) {
    curLocation = [50.857820, 9.833093];
  }

 
console.log("hier");
console.log(curLocation[0]);

   map = L.map('MapLocation').setView(curLocation, 6);

  L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors', 
    maxNativeZoom:19,
    maxZoom:25
  })
    .addTo(map);
   
  

  map.attributionControl.setPrefix(false);

   marker = new L.marker(curLocation, {
    draggable: 'true' });


  marker.on('dragend', function (event) {
    var position = marker.getLatLng();
    marker.setLatLng(position, {
      draggable: 'true' }).
    bindPopup(position).update();
    $("#Latitude").val(position.lat);
    $("#Longitude").val(position.lng).keyup();
  }
  )
  map.on('click', function(e){
    //var marker = new L.marker(e.latlng).addTo(map);

    var position = e.latlng;
    marker.setLatLng(position, {
      draggable: 'true' }).
    bindPopup(position).update();
    $("#Latitude").val(position.lat);
    $("#Longitude").val(position.lng).keyup();
    }

);

  $("#Latitude, #Longitude").change(function () {
    var position = [parseInt($("#Latitude").val()), parseInt($("#Longitude").val())];
    marker.setLatLng(position, {
      draggable: 'true' }).
    bindPopup(position).update();
    map.panTo(position);
  });

  map.addLayer(marker);

if(!navigator.geolocation) {
        console.log("Your browser doesn't support geolocation feature!")
    } else {
        
        navigator.geolocation.getCurrentPosition(getPosition);
        
    
    }

}
);

function getPosition(position){
    console.log("unten");

         
        var lat = position.coords.latitude
        var long = position.coords.longitude
        console.log(lat);
        curLocation = [lat, long];

        

        
        if (curLocation[0] == 0 && curLocation[1] == 0) {
         curLocation = [lat, long];
          }
       
          marker.setLatLng(curLocation, {
      draggable: 'true' }).
    bindPopup(position).update();
    $("#Latitude").val(lat);
    $("#Longitude").val(long);
    
       
        
            map.addLayer(marker);
        
        
           


        


}

function pause(millis)
{
    var date = new Date();
    var curDate = null;
    do { curDate = new Date(); }
    while(curDate-date < millis);
}

//# sourceURL=pen.js
    </script>

  
</body>

</html>
