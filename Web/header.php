<?php
echo '<!DOCTYPE=HTML>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Andrew Ashline</title>
    
    <link rel="stylesheet" type="text/css" href="../foundation/css/foundation.min.css">
    
    <style>
        body { background-image: url("homeback4.jpg");
        background-repeat: no-repeat;
        background-color: #E5E4E2;
        }
        .top-bar {
            height: 3.75rem;
            
        }
        .partWidth {
           width: 20%;
           margin-left: auto;
           margin-right: auto;
           max-width: initial;
        }
        .fullWidth {
           width: 75%;
           margin-left: auto;
           margin-right: auto;
           max-width: initial;
        }
        div#footer {
            position: absolute;
            width: 100%;
            bottom: 0; /* stick to bottom */
        }

    </style>
    <script src="../foundation/js/vendor/jquery.js"></script>
    <script src="../foundation/js/foundation/foundation.js"></script>
    <script src="../foundation/js/foundation/foundation.alert.js"></script>
</head>
<body class="body">
    <div class="fixed">
        <nav class="top-bar" style="background-color: white; border-bottom: 5px solid goldenrod" class="top-bar" data-topbar role="navigation" >
          <section class="top-bar-section">
          <ul class="left">
            <li>
              <a href="/" style="background-color: white"><img src="../foundation-icons/svgs/fi-home.svg" style="height: 50px;"></a>
            </li>
          </ul>
          <ul class="right">
            <li>
              <a href="resume.php" style="background-color: white"><img src="../foundation-icons/svgs/fi-page.svg" style="height: 30px;"></a>
              <label style="background-color: white">Resume</label>
            </li>
            <li>
              <a href="mailto:ashline2012@yahoo.com" style="background-color: white"><img src="../foundation-icons/svgs/fi-mail.svg" style="height: 50px;"></a>
            </li>
          <ul/>
          </section>
        </nav>
    </div>
';
?>

