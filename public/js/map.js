var myCenter=new google.maps.LatLng(37.1770723,-3.5962826,21);

function initialize()
{
    var mapProp = {
        center:myCenter,
        zoom:17,
        mapTypeId:google.maps.MapTypeId.ROADMAP,
        scrollwheel: false
    };

    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

    var marker=new google.maps.Marker({
        position:myCenter,
    });

    var infowindow = new google.maps.InfoWindow({
        content:"¡Visitanos!"
    });

    infowindow.open(map,marker);

    marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);