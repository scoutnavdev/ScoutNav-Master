<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ScoutNav</title>
<!--PHP Code by Fischer Lord cc-by-sa 3.0-->
<!--Theme by Binarytheme.com-->
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <script src="http://use.fonticons.com/7c6b2742.js"></script>
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">ScoutNav</a>
            </div>
      
        </nav>
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
            <a href="table2.html"><i class="fa fa-comments "></i>Chat </a>
            
<li>
          <a href="/joomla/index.php/8-cat-1standard/3-maps"><i class="fa fa-compass "></i>Directions </a> 
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
                        <h1 class="page-subhead-line">Looking nice! This page shows you the generated links used to direct people to their destination. Scroll down to continue.</h1>
                    </div>
               </div>

    <div>
<img src="assets/img/logos/Google_Maps_logo.png" />
<img src="assets/img/logos/screen shot 2015 10 08 at 2.17.01 pm.png" width="119" height="112" align="right" />
    </div>
<br>
<br>
    <div>
 <p>*Starting at Northwest Presbyterian Church is assumed for Google Maps. Waze uses current location*</p>
    </div>     
    <div class="panel panel-default">
                            
            <!-- /. PHP  -->
      <?php
//Check whether the form has been submitted
if (array_key_exists('check_submit', $_GET)) {
   
   //print recieved data in browser for user to see
   echo "Street Address: {$_GET['streetaddress']}<br />";
   echo "City, St: {$_GET['cityst']}<br />";
   echo "Postal Code: {$_GET['postalcode']}<br /><br />";
   //builds custom google maps link
   echo "Google Maps:";
   "<br />";
   echo "   https://www.google.com/maps/dir/Northwest+Presbyterian+Church,+Northside+Drive+Northwest,+Atlanta,+GA/{$_GET['streetaddress']}+{$_GET['cityst']}+{$_GET['postalcode']} <br /><br />"; 
   "<br />";
   //builds custom waze link
   echo "Waze:";
   "<br />";
   echo 
   "  http://waze.to/?q={$_GET['streetaddress']}%{$_GET['cityst']}%{$_GET['postalcode']} <br /><br />";
   
} else {
	//error thing
   echo "Error: Please fill out form!";
}
?>

    <!-- /. WRAPPER  -->
    </div>
        <div>
             <br>
             <br>
             <h1 align="center" class="page-head"><a href="wizard.html" target="_blank">Next Step: Joomla</a></h1>
             <p align='center'>(Link opens in new tab)
        </div>
                   </div>         
              </div>
         </div>
    </div>

    <div id="footer-sec">
        ScoutNav | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
        <a href="http://www.w3.org/html/logo/">
<img src="https://www.w3.org/html/logo/badge/html5-badge-h-css3-storage.png" width="84" height="32" alt="HTML5 Powered with CSS3 / Styling, and Offline &amp; Storage" title="HTML5 Powered with CSS3 / Styling, and Offline &amp; Storage"> 
</a>
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
    


</body>
</html>



