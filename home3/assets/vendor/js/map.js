
/* --------------------------------------------
Google Map
-------------------------------------------- */	
function myMap() {
    var myCenter = new google.maps.LatLng(17.494975,78.388458);
    var mapCanvas = document.getElementById("contact-map");
    var mapOptions = {center: myCenter, zoom: 15};
    var map = new google.maps.Map(mapCanvas, mapOptions);
    var marker = new google.maps.Marker({position:myCenter});
    marker.setMap(map);
}