﻿var mapLocation = new google.maps.LatLng(55.737596, 12.539104); //change coordinates here

var marker;

var map;



function initialize() {

    var mapOptions = {

        zoom: 17, //change zoom here
        draggable: false,
        center: mapLocation




    };

    

    map = new google.maps.Map(document.getElementById('map-canvas'), 

    mapOptions);

    

    var image = 'wp-content/themes/crowdeyes/assets/img/flag.png';

    marker = new google.maps.Marker({

        map: map,

        draggable: false,

        title: 'CrowdEyes', //change title here

        icon: image,

        animation: google.maps.Animation.DROP,

       // animation: google.maps.Animation.BOUNCE,

        position: mapLocation

    });

    google.maps.event.addListener(marker, 'click', toggleBounce);

}



function toggleBounce() {

    

    if (marker.getAnimation() != null) {

        marker.setAnimation(null);

    } else {

        marker.setAnimation(google.maps.Animation.BOUNCE);

    }

}



google.maps.event.addDomListener(window, 'load', initialize);

