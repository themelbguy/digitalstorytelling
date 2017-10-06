<?php session_start();

/*
Filename: index.php
Author: Abdul Wasay, Alessandro Gozali, Florence Chau, Kongsakul Jaijaroen
Date Created: 06 September 2017
Last Updated:
Desrciption: Home page of Department of Screen and Media Digital Storytelling Website
*/

// import head section
include "includes/head.php";

?>

<html>
  <body>

      <?php include "includes/nav.php"; ?>

      <a href="#0" class="cd-top"></a>

        <div class="heroBanner">
          <video autoplay muted loop class="embed-responsive-item" id="autovid">
              <source src="images/mm1_1.mp4" type="video/mp4">
          </video>

          <div class="heroText">
            <h1>Welcome to Digital Storytelling!</h1>
          </div>
        </div>

      <div class="container-fluid">
        <div class="row testimonialBox">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <p class="testimonial">“The end results of the digital stories were so professional.”</p>
            <p class="testimonialName">- John Smith</p>
          </div>
        </div>

        <div class="row parallaxBanner">
          <img src="images/banner1.JPG">
        </div>

        <div class="row gap">
          <h2>PROJECTS</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 vidThumb">
          </div>

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 vidThumb">
          </div>

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 vidThumb">
          </div>
        </div>

        <div class="row fullContent">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3>Category 1</h3>
            <p>Year: 2017</p>
            <p>Aliquam erat volutpat. Curabitur ornare neque in mollis pulvinar. Etiam porttitor viverra erat, in fermentum mauris tincidunt eget. Donec porttitor ipsum tempus pharetra malesuada.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 vidThumb">
          </div>

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 vidThumb">
          </div>

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 vidThumb">
          </div>
        </div>

        <div class="row fullContent">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3>Category 2</h3>
            <p>Year: 2016</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec sodales lectus. Aenean ac feugiat mauris, a tristique ipsum. Sed rutrum nisi a sem interdum congue. Praesent accumsan metus elit, eget luctus nunc lacinia eget. Duis sollicitudin lacus quis neque facilisis rutrum.</p>
          </div>
        </div>

        <div class="row halfContent">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 parallaxBanner2">
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <h2>WORKSHOPS</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec sodales lectus. Aenean ac feugiat mauris, a tristique ipsum. Sed rutrum nisi a sem interdum congue. Quisque a augue vitae nulla gravida faucibus. Cras at auctor lorem. Donec neque diam, congue sed odio vitae, vulputate scelerisque dolor. Praesent accumsan metus elit, eget luctus nunc lacinia eget. Duis sollicitudin lacus quis neque facilisis rutrum.
            <br><br>
            Aliquam erat volutpat. Curabitur ornare neque in mollis pulvinar. Etiam porttitor viverra erat, in fermentum mauris tincidunt eget. Donec porttitor ipsum tempus pharetra malesuada. Nam placerat eu nulla quis ultrices. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse pellentesque imperdiet purus id vestibulum. Nulla facilisi. Vestibulum nec sagittis erat. Nulla eget urna nec augue vehicula pharetra. Sed semper malesuada consectetur. Praesent in mollis orci. Mauris ut sagittis nisi.</p>
          </div>
        </div>

        <div class="row halfContent">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 parallaxBanner3">
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <h2>RESOURCES</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec sodales lectus. Aenean ac feugiat mauris, a tristique ipsum. Sed rutrum nisi a sem interdum congue. Quisque a augue vitae nulla gravida faucibus. Cras at auctor lorem. Donec neque diam, congue sed odio vitae, vulputate scelerisque dolor. Praesent accumsan metus elit, eget luctus nunc lacinia eget. Duis sollicitudin lacus quis neque facilisis rutrum.
            <br><br>
            Aliquam erat volutpat. Curabitur ornare neque in mollis pulvinar. Etiam porttitor viverra erat, in fermentum mauris tincidunt eget. Donec porttitor ipsum tempus pharetra malesuada. Nam placerat eu nulla quis ultrices. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse pellentesque imperdiet purus id vestibulum. Nulla facilisi. Vestibulum nec sagittis erat. Nulla eget urna nec augue vehicula pharetra. Sed semper malesuada consectetur. Praesent in mollis orci. Mauris ut sagittis nisi.</p>
          </div>
        </div>

        <div class="row parallaxBanner">
          <img src="images/banner2.jpg">
        </div>

        <div class="row gap">
          <h2>TEAM</h2>
        </div>

        <div class="row">
          <div id="map"></div>
        </div>

        <script>
          function initMap() {
            // Styles a map in night mode.
            var map = new google.maps.Map(document.getElementById('map'), {
              center: {lat: -37.822150, lng: 145.038955},
              zoom: 15,
              styles: [
                        {
                          elementType: "geometry",
                          stylers:
                          [
                            {
                              color: "#242f3e"
                            }
                          ]
                        },
                        {
                          elementType: "labels.text.fill",
                          stylers:
                          [
                            {
                              color: "#746855"
                            }
                          ]
                        },
                        {
                          elementType: "labels.text.stroke",
                          stylers:
                          [
                            {
                              color: "#242f3e"
                            }
                          ]
                        },
                        {
                          featureType: "administrative.locality",
                          elementType: "labels.text.fill",
                          stylers:
                          [
                            {
                              color: "#e91e63"
                            }
                          ]
                        },
                        {
                          featureType: "poi",
                          elementType: "labels.text.fill",
                          stylers:
                          [
                            {
                              color: "#e91e63"
                            }
                          ]
                        },
                        {
                          featureType: "poi.park",
                          elementType: "geometry",
                          stylers:
                          [
                            {
                              color: "#176140"
                            }
                          ]
                        },
                        {
                          featureType: "poi.park",
                          elementType: "labels.text.fill",
                          stylers:
                          [
                            {
                              color: "#32c8b6"
                            }
                          ]
                        },
                        {
                          featureType: "road",
                          elementType: "geometry",
                          stylers:
                          [
                            {
                              color: "#38414e"
                            }
                          ]
                        },
                        {
                          featureType: "road",
                          elementType: "geometry.stroke",
                          stylers:
                          [
                            {
                              color: "#212a37"
                            }
                          ]
                        },
                        {
                          featureType: "road",
                          elementType: "labels.text.fill",
                          stylers:
                          [
                            {
                              color: "#9ca5b3"
                            }
                          ]
                        },
                        {
                          featureType: "road.highway",
                          elementType: "geometry",
                          stylers:
                          [
                            {
                              color: "#951440"
                            }
                          ]
                        },
                        {
                          featureType: "road.highway",
                          elementType: "geometry.stroke",
                          stylers:
                          [
                            {
                              color: "#1f2835"
                            }
                          ]
                        },
                        {
                          featureType: "road.highway",
                          elementType: "labels.text.fill",
                          stylers:
                          [
                            {
                              color: "#e91e63"
                            }
                          ]
                        },
                        {
                          featureType: "transit",
                          elementType: "geometry",
                          stylers:
                          [
                            {
                              color: "#2f3948"
                            }
                          ]
                        },
                        {
                          featureType: "transit.station",
                          elementType: "labels.text.fill",
                          stylers:
                          [
                            {
                              color: "#e91e63"
                            }
                          ]
                        },
                        {
                          featureType: "water",
                          elementType: "geometry",
                          stylers:
                          [
                            {
                              color: "#24616d"
                            }
                          ]
                        },
                        {
                          featureType: "water",
                          elementType: "labels.text.fill",
                          stylers:
                          [
                            {
                              color: "#7c8ea9"
                            }
                          ]
                        },
                        {
                          featureType: "water",
                          elementType: "labels.text.stroke",
                          stylers:
                          [
                            {
                              color: "#17263c"
                            }
                          ]
                        }
                      ]
                    });

                    var marker = new google.maps.Marker({
                      position: {lat: -37.822150, lng: 145.038955},
                      map: map,
                      title: 'Swinburne University'
                    });
                  }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOrX2xU3WwbhwiX3EdaLFvxewRXHcWDhY&callback=initMap" async defer></script>

        <div class="row gap">
          <h2>CONTACT</h2>
        </div>

        <div class="row parallaxBanner">
          <img src="images/banner1.JPG">
        </div>

        <div class="row gap">
          <h2>FAQ'S</h2>
        </div>

        <?php include "includes/footer.php"; ?>
        
      </div>

  </body>
</html>
