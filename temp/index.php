<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Project International Rescue</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- Chart.JS -->
        <script
        src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
        </script>
        <!-- Leaflet --> 
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="">

        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    </head>
    <?php
    include 'functions.php';
    ?>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <!--<a class="navbar-brand" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button> -->
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Map</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Graphs</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Report</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">International Rescue</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services"> Coordinates relief efforts and shows where help is needed</a>
            </div>
        </header>

        <!-- Map Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Map</h2>
                    <h3 class="section-subheading text-muted">Map will go here</h3>
                </div>
                
                <div class="container">
                  <div class="row">
                    <div class="col-3"> </div>

                    <div class="col-6">
                         <div id="map" style="width:100%;max-width:600px; height: 400px;"></div>
                    </div>

                    <div class="col-3"> </div>
                  </div>
                </div>

                </div>
            </div>
        </section>
       
        <!-- Graph Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Analytical Data</h2>
                    <h3 class="section-subheading text-muted">Here is anytical data on shortages and reported issues.</h3>
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col-3"> </div>

                    <div class="col-6">
                        <h3 class="section-subheading text-muted text-center">Shortage in resources</h3>
                        <canvas id="resource_short_graph" style="width:100%;max-width:600px"></canvas>
                    </div>

                    <div class="col-3"> </div>
                  </div>
                </div>
                <div class="row">
                    
                </div>
            </div>
        </section>

        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">We aim to help track and show where resources are needed and how urgently.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">International Rescue</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Various regions in the world have people who are short on resources.
                            Some of these are due to natural disasters, some due to man made ones.
                            </p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Project</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">The aim of this project is to write an application to help coordinate relief efforts and to show users where help is needed using Geo Mapping.
                        </p></div>
                        </div>
                    </li>

                    <li class="timeline-inverted">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Extra Information</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">For this Project we have used Chart.JS . This is a javascript libary that helps with visually representing data through graphs.</p> <br> <p class="text-muted">Leaflet was used to show the map and the markers.
                        </p></div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        
        <!-- Complaints-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Report A Shortage</h2>
                    <h3 class="section-subheading text-muted">Have a shortage or an issue? Tell us here</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" action="form.php" action="GET">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" name="Name" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Resources input-->
                                <label for="Resources" style="color: white;">Choose Resource:</label>
                                <select class="form-control" id="resource" name="Resources">
                                    <option value="Rubber">Rubber</option>
                                    <option value="Iron">Iron</option>
                                    <option value="Plastic">Plastic</option>
                                    <option value="Silicon">Silicon</option>
                                    <option value="Other">Other<--Please state in message--></option>
                                </select>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->

                                <button type="button" class="btn btn-primary btn-xl text-uppercase col-12"  onclick="getLocation()">Get GeoLocation</button><br><br>

                                <input class="form-control" id="lat" type="text" name="Lat" placeholder="Latitude *" data-sb-validations="required" /><br>
                                <input class="form-control" id="long" type="text" name="Long" placeholder="Longitude *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">GeoLocation is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Resources input-->
                                    <br><h3 style="color: white;"> Urgency </h3>
                                    <input type="radio" id="Low" name="urgency" value="Low" class="form-check-input" 
                                       checked>
                                    <label for="Low" style="color: white; font-size: 30px;">Low</label><br>

                                    <input type="radio" id="medium" name="urgency" value="Medium" class="form-check-input">
                                    <label for="Medium" style="color: white; font-size: 30px;">Medium</label><br>

                                    <input type="radio" id="high" name="urgency" value="High" class="form-check-input">
                                    <label for="High" style="color: white; font-size: 30px;">High</label><br><br>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Your Issue/Dissaster *" data-sb-validations="required" name="Disaster"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Send Message</button></div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Haris , Fouad , Mya , Dom 2022</div>
                    
                    <!--<div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div> -->
                </div>
            </div>
        </footer>
       
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <!-- GeoLocation JavaScript !-->
        <script>
            // A paragraph tag for errors
            var x = document.getElementById("errors");

            // Function to get location and test if the browser supports Geolocation
            function getLocation() {
              if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition, showError);
              } else { 
                x.innerHTML = "Geolocation is not supported by this browser.";
              }
            }

            // Function to set the text boxes to the current GeoLocation
            function showPosition(position) {
                // Text boxes with IDs of lat and long being given their values
                document.getElementById("lat").value = position.coords.latitude;
                document.getElementById("long").value = position.coords.longitude;
            }
            // Error Handling
            function showError(error) {
              switch(error.code) {
                case error.PERMISSION_DENIED:
                  x.innerHTML = "User denied the request for Geolocation. Please manually insert your GeoLocation."
                  break;
                case error.POSITION_UNAVAILABLE:
                  x.innerHTML = "Location information is unavailable. Please manually insert your GeoLocation."
                  break;
                case error.TIMEOUT:
                  x.innerHTML = "The request to get user location timed out. Please manually insert your GeoLocation."
                  break;
                case error.UNKNOWN_ERROR:
                  x.innerHTML = "An unknown error occurred. Please manually insert your GeoLocation."
                  break;
              }
            } 
        </script>
        <!-- Map Code -->
        <script>

            var map = L.map('map').setView([51.505, -0.09], 12);

            var tiles = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                maxZoom: 6,
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
                    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                id: 'mapbox/streets-v11',
                tileSize: 512,
                zoomOffset: -1
            }).addTo(map);



            //markers ( can use this as a template)
            <?php  
            $conn=setupconnection_sqli();
            testconnection_sqli($conn);

            $sql = "SELECT * FROM issue_reports";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    // getting each entry of resource 
                    $lat = $row['lat'];
                    $lng = $row['lng'];
                    $resource = $row['resource'];
                    $message= $row['message'];
                    $type=$row['type'];
                    echo "var marker = L.marker([".$lat.",".$lng."]).addTo(map);";
                    echo 'marker.bindPopup("<b>'.$resource.'</b><br>'.$message.'<br>Urgency: '.$type.'").openPopup();';
                    // sending each entry to the sales array ()
                }
            }else{
                  echo"0 results found!";
                
            }
            mysqli_close($conn);
            ?>

            //Functions
            function onMapClick(e) {
                alert("You clicked the map at " + e.latlng);
            }

            map.on('click', onMapClick);

        </script>
        <!-- Chart Code -->

        <?php 
        //sets up connection

        
        $conn=setupconnection_sqli();
        testconnection_sqli($conn);

        $graph_data = array();//ORDER:  jul->dec
        $graph_Y = array();//ORDER:  jul->dec

        $sql = "SELECT * FROM issue_reports";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                // getting each entry of resource 
                $a = $row['resource'];
                // sending each entry to the sales array ()
                array_push($graph_data, $a);
            }
        }else{
              echo"0 results found!";
            
        }

        $rubber_ammount=freqency_array($graph_data,'Rubber');#takes an array varible and what resource its counting 
        $plastic_ammount=freqency_array($graph_data,'Plastic');
        $Silicon_ammount=freqency_array($graph_data,'Silicon');
        $Iron_ammount=freqency_array($graph_data,'Iron');
        $Wood_ammount=freqency_array($graph_data,'Wood');
        $Other_ammount=freqency_array($graph_data,'Other');

        array_push($graph_Y, $rubber_ammount);
        array_push($graph_Y, $Silicon_ammount);
        array_push($graph_Y, $Iron_ammount);
        array_push($graph_Y, $plastic_ammount);
        array_push($graph_Y, $Other_ammount);

        
        



        //echo $rubber_ammount;
        mysqli_close($conn);



        ?>

        <script>
        var xValues = ['Rubber','Silicon','Iron','Plastic','Other'];
        var yValues = [<?php echo '"'.implode('","', $graph_Y).'"' ; ?>];

        new Chart("resource_short_graph", {
          type: "bar",
          data: {
            labels: xValues,
            datasets: [{
              fill: false,
              lineTension: 0,
              backgroundColor: "rgba(10, 196, 94)",
              borderColor: "rgba(10, 0, 0)",
              data: yValues
            }]
          },
          options: {
            legend: {display: false},
            scales: {
              yAxes: [{ticks: {min:0, max:10}}],
            }
          }
        });
        </script>
    </body>
</html>
