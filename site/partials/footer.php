<!-- Footer============================================= -->


<footer id="footer" class="dark">

    <!-- Copyrights
    ============================================= -->
    <div id="copyrights">

        <div class="container clearfix">

            <div class="col_half">
                Todos los derechos reservados © 2017
            </div>

            <div class="col_half col_last tright">
                <div class="fright clearfix">
                    
                </div>
            </div>

        </div>

    </div><!-- #copyrights end -->

</footer><!-- #footer end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>
<script type="text/javascript" src="js/readmore.min.js"></script>

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="js/functions.js"></script>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyAO2BYvn4xyrdisvP8feA4AS_PGZFxJDp4"></script>
<script type="text/javascript" src="js/jquery.gmap.js"></script>

<script>
    $( document ).ready(function() {
        $('.entry-content').readmore({
            speed: 75,
            lessLink: '<a href="#">Cerrar</a>',
            moreLink: '<a href="#">Leer Mas</a>',
            collapsedHeight: 100
        });

        jQuery('#headquarters-map').gMap({
            address: 'Hipolito Yirigoyen 3581, Buenos Aires, Argentina',
            maptype: 'ROADMAP',
            zoom: 13,
            markers: [
                {
                    address: "Buenos Aires, Argentina",
                    html: "Buenos Aires, Argentina",
                    icon: {
                        image: "images/gaby_fabro/home_pm_pin_bw.png.png",
                        iconsize: [32, 36],
                        iconanchor: [14,44]
                    }
                }
            ],
            doubleclickzoom: false,
            controls: {
                panControl: false,
                zoomControl: false,
                mapTypeControl: false,
                scaleControl: false,
                streetViewControl: false,
                overviewMapControl: false
            },
            styles: [
                {
                    "featureType": "administrative",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#444444"
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#f2f2f2"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [
                        {
                            "saturation": -100
                        },
                        {
                            "lightness": 45
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#8c8c8c"
                        },
                        {
                            "visibility": "on"
                        }
                    ]
                }
            ]
        });


        /*jQuery(document).ready(function($){
            var latlng = new google.maps.LatLng(-34.613551,-58.416707);
            var draggable = true;
            var myOptions = {
                zoom				: 13,
                center				: latlng,
                mapTypeId			: google.maps.MapTypeId.ROADMAP,
                styles	:
                    [
                    {
                        "featureType": "administrative",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#444444"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "all",
                        "stylers": [
                            {
                                "color": "#f2f2f2"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "all",
                        "stylers": [
                            {
                                "saturation": -100
                            },
                            {
                                "lightness": 45
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "simplified"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "all",
                        "stylers": [
                            {
                                "color": "#8c8c8c"
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    }
                ],
                draggable: draggable,
                zoomControl			: true,
                mapTypeControl		: false,
                streetViewControl	: false,
                scrollwheel			: false
            };
            var map = new google.maps.Map( document.getElementById("headquarters-map"), myOptions);
            var marker = new google.maps.Marker(
                {
                position			: latlng,
                icon	: "images/gaby_fabro/home_pm_pin_bw.png.png",
                map					: map
                });
        });*/
    });
</script>