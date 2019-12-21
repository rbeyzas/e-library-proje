<html lang="tr">

<?php $pagenum=4; ?>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <title>Library Management System</title>
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
            <link rel="stylesheet" href="assets/css/animate.css">
            <link rel="stylesheet" href="assets/css/lightbox.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="assets/css/style.css">
            <link rel="stylesheet" href="assets/css/responsive.css">
        </head>
    
        <body>
           <!--Navbar-->
        <!-- Header -->
        <div class="header">
        <!--This php line code draw data in header.php.-->
        <?php include("theme/header.php"); ?>
        </div>
    </div>
<!--End Navbar-->
        
            <section class="iletisim-page">
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                    <div class="contact-line"></div>
                </div>
                <div class="col-sm-11 contact-panel">
                    <div class="iletisim-card">
                        <div class="title">
                            Contact
                        </div>
                        <div class="phone-numbers">
                            <div class="phone">
                                <div class="icon">
                                    <i class="fa fa-phone"></i> 
                                </div>
                                <p>0538 785 18 51</p>
                            </div>
                            <div class="phone">
                        <div class="icon">
                            <i class="fa fa-phone"></i> 
                        </div>
                        <p>0 530 279 07 51</p>
                    </div>
                        </div>
                        <div class="email">
                            <div class="icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <p>rukiyebeyzasarikaya@hotmail.com</p>
                        </div>                  
                        <div class="mail">
                        <div class="icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <p>cagrihd@icloud.com</p>                          
                    </div>
                        <div class="address">
                            <div class="icon">
                                <i class="fa fa-map-marker"></i> 
                            </div>
                            <p>ADANA</p>
                        </div>
                        <div class="footer-page-social-media">
                            <ul>
                                <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-11 col-xs-11 contact-image">
                    <img src="assets/img/contact.jpeg">
                </div>
            </section>
    
            <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
                crossorigin="anonymous"></script>
            <script src="assets/js/owl.carousel.min.js"></script>
            <script src="assets/js/custom.js"></script>
            <script>
                function initMap() {
          
                  // Create a new StyledMapType object, passing it an array of styles,
                  // and the name to be displayed on the map type control.
                  var styledMapType = new google.maps.StyledMapType(
                    [
                        {
                            "featureType": "administrative",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "saturation": "-100"
                                }
                            ]
                        },
                        {
                            "featureType": "administrative.province",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "landscape",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "saturation": -100
                                },
                                {
                                    "lightness": 65
                                },
                                {
                                    "visibility": "on"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "saturation": -100
                                },
                                {
                                    "lightness": "50"
                                },
                                {
                                    "visibility": "simplified"
                                }
                            ]
                        },
                        {
                            "featureType": "road",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "saturation": "-100"
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
                            "elementType": "all",
                            "stylers": [
                                {
                                    "lightness": "30"
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "lightness": "40"
                                }
                            ]
                        },
                        {
                            "featureType": "transit",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "saturation": -100
                                },
                                {
                                    "visibility": "simplified"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "hue": "#ffff00"
                                },
                                {
                                    "lightness": -25
                                },
                                {
                                    "saturation": -97
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "labels",
                            "stylers": [
                                {
                                    "lightness": -25
                                },
                                {
                                    "saturation": -100
                                }
                            ]
                        }
                    ],
                      {name: 'Styled Map'});
          
                  // Create a map object, and include the MapTypeId to add
                  // to the map type control.
                  var map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: 36.991439, lng: 35.330890},
                    zoom: 11,
                    mapTypeControlOptions: {
                      mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
                              'styled_map']
                    }
                  });

                var myLatlng = new google.maps.LatLng(36.991439,35.330890);
                var mapOptions = {
                zoom: 15,
                center: myLatlng
                }
                var map = new google.maps.Map(document.getElementById("map"), mapOptions);

                var marker = new google.maps.Marker({
                    position: myLatlng,
                    title:"Denge Arabuluculuk",
                });

                // To add the marker to the map, call setMap();
                marker.setMap(map);
          
                  //Associate the styled map with the MapTypeId and set it to display.
                  map.mapTypes.set('styled_map', styledMapType);
                  map.setMapTypeId('styled_map');
                }
              </script>
        </body>
    </html>