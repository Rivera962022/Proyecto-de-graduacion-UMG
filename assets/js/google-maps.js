function initMap() {
    // Latitude and Longitude
    var myLatLng = {lat: -91.207690, lng: 91.985270};
    //14.83129857311389, -91.5439671944842
    var map = new google.maps.Map(document.getElementById('google-maps'), {
        zoom: 17,
        center: myLatLng
    });

    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'South Jakarta, INA' // Title Location
    });
}