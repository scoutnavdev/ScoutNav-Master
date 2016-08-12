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
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
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
                        <a class="active-menu" href="index.html"><i class="fa fa-home "></i>Main Page</a> 
<li>
            <a href="/joomla/"><i class="fa fa-phone "></i>Contact Info</a>
          </li>
<li>
          <a href="navigation.html"><i class="fa fa-compass "></i>Directions </a> 
                      </li>
                      <li>
                      <a href="background.html"><i class="fa fa-code "></i>About</a>
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
<img src="assets/img/logos/Google_Maps_logo.png" />
<img src="assets/img/logos/screen shot 2015 10 08 at 2.17.01 pm.png" width="119" height="112" align="right" />
    </div>
<br>
<br>
    <div>
 <h4><i>Please note that changes take up to 5 minutes to appear on the live page that users will see. You're seeing preview of this action.</i></h4>
    </div>     
    <div class="panel panel-default">
                            
            <!-- /. PHP  -->
      <p> If printed data is wrong, don't worry, go back and redo</p>
      <br>
      <br>
      <?php
    //validates stuff 
if (array_key_exists('check_submit', $_GET)) { 
   
   //print recieved data in browser for user to see if they messed up 
   echo "Address: {$_GET['fulladdress1']}<br />";
   //builds custom google maps link
   echo "Google Maps:";
   "<br />";
   echo $gmapslink = "https://www.google.com/maps/dir/Northwest+Presbyterian+Church,+Northside+Drive+Northwest,+Atlanta,+GA/{$_GET['fulladdress1']} <br><br> http://waze.to/?q={$_GET['fulladdress1']}"; 
   //builds custom waze link
   echo "Waze:";
   "<br />";
   echo $wazelink = "http://waze.to/?q={$_GET['fulladdress1']}";
   //give me a path
   $file_path = "/var/www/troop232atl.scoutnav.org/public_html/navigationframe.html";
   //open file
   $fileOpen = fopen($file_path , 'w+'); 
	//takes form data and generated master link to google maps 
    $file_contents = str_replace($path_to_file,"https://www.google.com/maps/dir/Northwest+Presbyterian+Church,+Northside+Drive+Northwest,+Atlanta,+GA/{$_GET['fulladdress1']}",$file_contents); 
	//GOOGLE MAPS SYSTEM
    if (file_exists($file_path))
       $fh = fopen($file_path, 'w+');
	    if (fwrite($fh, $gmapslink) === FALSE)
        echo "Cannot write to file";
  } else {
	//error thing
   echo "Error: Please go back and try again. If problem persists, please contact support.";
}
   
   ?> 
    <!-- /. WRAPPER -->
    </div>
    <p>Starting at Northwest Presbyterian Church is assumed for Google Maps. Waze uses current location.</p>
         <div>
             </div>
                  </div>
                       </div>

    <div id="footer-sec">
        ScoutNav | Design By: <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a> |
        <a href="privacy.html" target="_blank">Privacy Policy</a>
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



