
        <div class="google-map" id="map"></div>
  <script>
  function initMap(){
  var location ={lat:6.056335,long:80.229761};
  var map = new google.maps.Map(document.getElementById("map"),{
      zoom:4,
      center: location
  });
}
