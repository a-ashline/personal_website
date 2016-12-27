<?php
session_start();
echo '<!DOCTYPE=HTML>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Andrew Ashline</title>
    
    <link rel="stylesheet" type="text/css" href="../foundation/css/foundation.min.css">
    
    <style>
        body { 
        background-color: #E0E0DE;
       
        }
        .top-bar {
            height: 3.75rem;
            
        }
        .maxWidth {
           width: 100%;
           margin-left: 0;
           margin-right: 0;
           max-width: initial;
        }
        .fullWidth {
           width: 75%;
           margin-left: 0;
           margin-right: 0;
           max-width: initial;
        }
        div.footer {
            position: relative;
            padding: 10px;
            height: 100%;
         
        }
        div#back{
        background-image: url("homeback4.jpg");
        background-repeat: no-repeat;
        }

    </style>
    <script src="../foundation/js/vendor/jquery.js"></script>
    <script src="../foundation/js/foundation/foundation.js"></script>
    <script src="../foundation/js/foundation/foundation.alert.js"></script>
    <script src="../foundation/js/vendor/modernizr.js"></script>
    <script src="../foundation/js/foundation/foundation.topbar.js"></script>
    <script src="../foundation/js/foundation/foundation.reveal.js"></script>
    <script src="../foundation/js/foundation/foundation.accordion.js"></script>
    
</head>
<body>';
echo'
<div class="row maxWidth">
';

echo'<div class="small-12 columns">';
    echo '
<nav class="top-bar" style="background-color: white; border-bottom: 5px solid goldenrod" class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <h1><a href="/" style="background-color: white"><img src="../foundation-icons/svgs/fi-home.svg" style="height: 50px;"></a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon" style="background-color: black; height:50px"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
        <li>
          <a href="../projects.php" style="background-color: white; color: black; font-size: 14px;">Projects</a>        
        </li>
        <li>
          <a href="../experience.php" style="background-color: white; color: black; font-size: 14px;">Experience</a>
        </li>
        <li>
          <a href="../resume.php" style="background-color: white; color: black; font-size: 14px;">Resume</a>  
        </li>
        <li>
          <a href="mailto:ashline2012@yahoo.com" style="background-color: white"><img src="../foundation-icons/svgs/fi-mail.svg" style="height: 50px;"></a>
        </li>
    </ul>
  </section>
</nav>   


';
?>

