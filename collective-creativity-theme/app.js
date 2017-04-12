'use strict'
$ = jQuery;


var num = 180; //number of pixels before modifying styles


$(window).bind('scroll', function () {
    if ($(window).scrollTop() > num) {
        $('.nav-container nav').addClass('fixed');
        $('.logo-small').css({
            'display': 'block'
        });
    } else {
        $('.nav-container nav').removeClass('fixed');
        $('.logo-small').css({
            'display': 'none'
        });
    }
});

$(document).ready(function () {
    $(".hamburger-menu").click(function () {
        $(".nav-menu").toggle("show");

    });
});

var map;

function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {
            lat: 59.346027,
            lng: 18.058272
        },
        zoom: 13,
        scrollwheel: false,
        navigationControl: false,
        mapTypeControl: false,
        scaleControl: false,
        draggable: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
    });

    var marker = new google.maps.Marker({
        position: {
            lat: 59.346027,
            lng: 18.058272
        },
        map: map
    });
}
