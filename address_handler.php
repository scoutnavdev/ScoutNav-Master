<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ScoutNav</title>
   <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-78768634-2', 'auto');
  ga('send', 'pageview');
</script>
<!--PHP Code by Fischer Lord cc-by-sa 3.0-->
<!--Theme by Binarytheme.com-->
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/logos/BSA.jpg" class="img-thumbnail" alt="BSA Logo">

                            <div class="inner-text">
                                Registered to Troop 232
                            <br />
                                <small>Atlanta Area Council </small>
                            </div>
                        </div>

                    </li>


                    <li>
                        <a class="active-menu" href="index.html"><i class="fa fa-home "></i>Back to home</a> 
                        </li>
</ul>

                     
                    </div>
              </nav>
        </div>                                   
        <!-- /. Side Panel  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Setup</h1>
                    </div>
               </div>

    <div>
<img src="assets/img/logos/maps_logo.png" />
<img src="assets/img/logos/waze_logo.jpg" width="150" height="141" align="right" />
    </div>
<br>
<br>
    <div>
 <h4><i>Please note that changes take up to 5 minutes to appear on the live page that users will see. You're seeing preview of this action.</i></h4>
    </div>     
    <div class="panel panel-default">
                            
            <!-- /. PHP  -->
      <br>
      <?php
    //validates stuff 
if (array_key_exists('check_submit', $_GET)) { 
   
   //print recieved data in browser for user to see if they messed up 
   echo "Input Destination Address: {$_GET['fulladdress1']}<br />";
   //builds first half of Gmaps script PRIMARY DESTINATION
   $gmapslink2 = "https://www.google.com/maps/dir/Northwest+Presbyterian+Church,+Northside+Drive+Northwest,+Atlanta,+GA/ {$_GET['fulladdress1']}";
   $gmapslink = "window.location = '$gmapslink2';";
   //builds custom waze javascript for PRIMARY DESTINATION
   $wazelink2 = "http://waze.to/?q={$_GET['fulladdress1']}";
   $wazelink = "window.location = '$wazelink2';";
   //give me a path to GOOGLE MAPS
   $file_path = "/var/www/troop232atl.scoutnav.org/public_html/go/googlemaps.js"; 
   $file_path_2 = "/var/www/troop232atl.scoutnav.org/public_html/go/waze.js";
	//write to a file
    if (file_exists($file_path))
       $fg = fopen($file_path, 'w+');
	     if (fwrite($fg, $gmapslink) === FALSE)
		    echo "Error: Cannot write to file";
	if (file_exists($file_path_2))
       $fw = fopen($file_path_2, 'w+');
	     if (fwrite($fw, $wazelink) === FALSE)
		    echo "Error: Cannot write to file";
  } else {
	//error thing
   echo "Error: Please go back and try again. If problem persists, please contact support.";
  }  
   ?> 
    <!-- /. WRAPPER -->
    </div>
    <p>Starting at Northwest Presbyterian Church is assumed for Google Maps. Waze will use current location. The hospital function relies on location services, to enable accessing a hospital from anywhere and not just the destination.</p>
    <p><i>Apple Maps is not supported as it has been shown to be unreliable in rural areas.</i></p>
         <div>
             </div>
          </div>
                       </div>

    <div id="footer-sec">
        ScoutNav | Design By: <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a> |
        <a href="privacy.html" target="_blank">Privacy Policy</a> | <a href="background.html">About</a>
    </div>
    
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <!--font awesome-->
    <script src="http://use.fonticons.com/7c6b2742.js"></script>


</body>
</html>




