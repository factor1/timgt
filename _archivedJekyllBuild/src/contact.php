<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <title>Contact</title>

        <link rel="canonical" href="https://www.timgt.com/contact.php">

        <meta name="description" content="Contat TIM today.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php include 'inc/com_css.php' ?>

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>

        <?php include 'inc/header.php' ?>

        <section class="head">
            <h2>Contact Us</h2>
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span5 offset1">
                        <article class="contact_method address">
                            <h3>Address</h3>
                            9383 E. Bahia Dr. #120<br>
                            Scottsdale, AZ 85260
                        </article>
                    </div>
                    <div class="span4">
                        <article class="contact_method phone">
                            <h3>Phone</h3>
                            800.962.1180<br>
                        </article>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span5 offset1">
                        <article class="contact_method email">
                            <h3>Email</h3>
                            <a href="mailto:info@timgt.com" title="">info@timgt.com</a>
                        </article>
                    </div>
                    <div class="span4">
                        <article class="contact_method fax">
                            <h3>Fax</h3>
                            480.443.1588
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact_map">
            <h2>Map to Our Office</h2>
            <div id="google_map" class="contact_map_wrapper"></div>
        </section>

        <?php include 'inc/request_info_form.php' ?>

        <?php include 'inc/weekly_wrap_up.php' ?>

        <?php include 'inc/footer.php' ?>

        <?php include 'inc/com_js.php' ?>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDohA2tcthz-oV-aAyAJRCK9a1OHZqwwc&sensor=false"></script>

        <script>
            var map,
                geocoder,
                lat,
                lng,
                timMarker,
                mapStyles;

            geocoder = new google.maps.Geocoder();

            geocoder.geocode({address : '9383 E. Bahia Dr. Scottsdale, AZ 85260'}, function (result, status) {
                lat = result[0].geometry.location.lat();
                lng = result[0].geometry.location.lng();
            });

            mapStyles = [
                {
                  stylers: [
                    { hue: '#819c6a' },
                    { saturation: -20 },
                    { lightness: -0 }
                  ]
                },{
                  featureType: 'road',
                  elementType: 'geometry',
                  stylers: [
                    { lightness: 100 },
                    { visibility: 'simplified' }
                  ]
                },{
                  featureType: 'road',
                  elementType: 'labels',
                  stylers: [
                    { visibility: 'on' }
                  ]
                },{
                  featureType: 'road',
                  elementType: 'labels.text.stroke',
                  stylers: [
                    { visibility: 'off' }
                  ]
                },{
                  featureType: 'road',
                  elementType: 'labels.text.fill',
                  stylers: [
                    { color: '#909090' }
                  ]
                },{
                  featureType: 'administrative',
                  stylers: [
                     { visibility: 'off' }
                  ]
                }
            ];

            function loadMap () {
                map = new google.maps.Map(document.getElementById('google_map'), {
                    scrollwheel        : false,
                    zoom               : window.outerWidth > 767 ? 15 : 14,
                    backgroundColor    : '#fefef6',
                    overviewMapControl : false,
                    panControl         : false,
                    scaleControl       : false,
                    streetViewControl  : false,
                    mapTypeControl     : false,
                    styles             : mapStyles,
                    center             : new google.maps.LatLng(33.6363979, -111.8791649),
                    mapTypeId          : google.maps.MapTypeId.ROADMAP
                });

                timMarker = new google.maps.Marker({
                    position  : new google.maps.LatLng(33.6363979, -111.8791649),
                    map       : map,
                    icon      : 'img/map-marker.png?2',
                    clickable : false
                });
            }

            google.maps.event.addDomListener(window, 'load', function () {
            	loadMap();
	        });

            google.maps.event.addDomListener(window, 'resize', function () {
            	loadMap();
            });

        </script>
    </body>
</html>
