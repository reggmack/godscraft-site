<?php
 	  $to = 'godscraftsman.hi@gmail.com';
	  $email = ($_REQUEST['email']);
	  $fName = ($_REQUEST['fName']);
      $usrBestPhone = ($_REQUEST['usrBestPhone']);
      $commentBox = ($_REQUEST['commentBox']);
      $subject = 'New Inquiry from Gods Craftsman Site!';
	  $message = "FirstName:$fName\nEmail:$email\nPhone:$usrBestPhone\nComments:$commentBox\n";
	  $from = "From: $email\r\n";
	mail($to, $subject, $message, $from)
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Thank You - God's Craftsman</title>

    <!-- Lato Font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

    <!-- Stylesheet -->
    <link href="css/gallery-materialize.min.css" rel="stylesheet">
    <link href="css/chm.css" rel="stylesheet">
    <link href="css/craft.css" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Italianno" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">

    <!-- Prism -->
    <link href="css/prism.css" rel="stylesheet">

  </head>

  <body class="doc">

    <!-- Navbar and Header -->
    <nav class="nav-extended green darken-4">
            <div class="nav-background">
              <div class="pattern active" style="background-image: url('img/sub-page-bg-3.jpg');"></div>
            </div>
            <div class="nav-wrapper container sub-page">
                    <a href="index.html" class="brand-logo"><img class="responsive-img" src="img/logo-gc-small-white-fill.svg" alt="chm logo"><span class="text-behave">God&#39;s Craftsman</span></a>
              <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
              <ul class="right hide-on-med-and-down">
                    <li><a href="index.html">Gallery</a></li>
                    <li><a href="about.html">About</a></li>
                    <li class="active"><a href="contact.html">Contact</a></li>
                    <!-- <li class="active"><a class='dropdown-button' href='#' data-activates='feature-dropdown' data-belowOrigin="true" data-constrainWidth="false">Features<i class="material-icons right">arrow_drop_down</i></a></li> -->
                  </ul>
                  
                  <!-- Dropdown Structure -->
                  <!-- <ul id='feature-dropdown' class='dropdown-content'>
                    <li><a href="full-header.html">Fullscreen Header</a></li>
                    <li><a href="horizontal.html">Horizontal Style</a></li>
                    <li><a href="no-image.html">No Image Expand</a></li>
                  </ul> -->
      
              <div class="nav-header center">
                <h1></h1>
                <div class="tagline"><p class="italianno" style="font-size: xx-large"></p></div>
              </div>
            </div>
          </nav>
    <ul class="side-nav" id="nav-mobile">
            <li><a href="index.html">Gallery</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="mission.html">Mission</a></li>
            <li class="active"><a href="contact.html">Contact</a></li>
          <!-- <li class="active"><a href="full-header.html"><i class="material-icons">fullscreen</i>Fullscreen Header</a></li>
          <li><a href="horizontal.html"><i class="material-icons">swap_horiz</i>Horizontal Style</a></li>
          <li><a href="no-image.html"><i class="material-icons">texture</i>No Image Expand</a></li> -->
        </ul>


    <div id="contact" class="section gray">
        <div class="container">
            <div class="row">
                <div class="col s12 l9">
                    <div id="gallery-expand" class="scrollspy">
                        <h3>Thank you for your interest!</h3>
                        <h5>A member of our team will contact you as soon as possible.</h5>

                        <a href="http://godscraftsman.com/index.html">
                            <p>Please feel free to keep browsing our site!</p>
                        </a></div>
                        
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </div>


    <footer class="page-footer blue darken-4">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="white-text">God's Craftsman Home Improvement</h5>
              <p class="grey-text text-lighten-4 footer-text">Call for Free Estimates!  &nbsp; | &nbsp;
              <b>David Smith</b>  &nbsp; | &nbsp;
              <b>Phone: 615-438-6297</b> 
              <a style="color: white" href="mailto:Godscraftsman.hi@gmail.com" target="_top">Godscraftsman.hi@gmail.com</a></p>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container">
          Made by Graphix Ninja
          </div>
        </div>
      </footer>
    


    <!-- Core Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/prism.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/color-thief.min.js"></script>
    <script src="js/galleryExpand.js"></script>
    <script src="js/docs-init.js"></script>

    <script>
            $( document ).ready(function(){
              $(".button-collapse").sideNav();
              
              $(document).ready(function() {
                  $('select').material_select();
              });
            })
        </script>


    

  </body>
</html>



