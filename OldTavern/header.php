<?php

echo'
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Old Tavern Farm</title>

    <link rel="stylesheet" type="text/css" href="../foundation/css/foundation.min.css">

    <style>
        html, body {
            font-size: 14px;
            background-color: #E5E4E2;
            min-height: 100%;
        } 
        
        .fullWidth {
           width: 75%;
           margin-left: auto;
           margin-right: auto;
           max-width: initial;
        }

       .top-bar {
            height: 4.3rem;
            
        }
        
        a#about {
            height: 4.3rem;
            border-bottom: 5px solid #ccac5f;
        }
        
        a#mare {
            height: 4.3rem;
            border-bottom: 5px solid #ccac5f;
        }
        
        a#year {
            height: 4.3rem;
            border-bottom: 5px solid #ccac5f;
        }
        
        a#fold {
            height: 4.3rem;
            border-bottom: 5px solid #ccac5f;
        }
        
        a#contact {
            height: 4.3rem;
            border-bottom: 5px solid #ccac5f;
        }
        
        a:visited {
            background-color: #999999;
}
        
        div#footer {
            position: absolute;
            width: 100%;
            bottom: 0; /* stick to bottom */
        }

    </style>
    
    <script type="text/javascript" src="../foundation/js/vendor/jquery.js"></script>
    <script type="text/javascript" src="../foundation/js/foundation/foundation.js"></script>
    <script type="text/javascript" src="../foundation/js/foundation/foundation.alert.js"></script>
    <script type="text/javascript" src="../foundation/js/foundation/foundation.orbit.js"></script>
    
</head>
<body>
<div>
    <nav class="top-bar" style="background-color: #003617; border-bottom: 5px solid #ccac5f" class="top-bar" data-topbar role="navigation" >
        <section class="top-bar-section">
            <ul class="left">
                <li><a href="index.php" style="background-color: #ccac5f"><img src="OldTLong.PNG" WIDTH="150"></a></li>
                
            </ul>
            <ul class="right">
                ';
                if($_SESSION['about'])
                {
                    echo '<li><a id="about" style="font-size: 16px; background-color: #ccac5f; color:black" href="about.php">About</a></li>';
                }
                else
                {
                    echo '<li><a id="about" style="font-size: 16px; background-color: #003617; color:white" href="about.php">About</a></li>';
                }
                if($_SESSION['mare'])
                {
                    echo '<li><a id="mare" style="font-size: 16px; background-color: #ccac5f; color:black" href="mare.php">Mares</a></li>';
                }
                else
                {
                    echo '<li><a id="mare" style="font-size: 16px; background-color: #003617; color:white" href="mare.php">Mares</a></li>';
                }
                if($_SESSION['year'])
                {
                    echo '<li><a id="year" style="font-size: 16px; background-color: #ccac5f; color:black" href="yearling.php">Yearlings</a></li>';
                }
                else
                {
                    echo '<li><a id="year" style="font-size: 16px; background-color: #003617; color:white" href="yearling.php">Yearlings</a></li>';
                }
                if($_SESSION['fold'])
                {
                    echo '<li><a id="fold" style="font-size: 16px; background-color: #ccac5f; color:black" href="foal.php">Foals</a></li>';
                }
                else
                {
                    echo '<li><a id="fold" style="font-size: 16px; background-color: #003617; color:white" href="foal.php">Foals</a></li>';
                }
                if($_SESSION['contact'])
                {
                    echo '<li><a id="contact" style="font-size: 16px; background-color: #ccac5f; color:black" href="contact.php">Contact</a></li>';
                }
                else
                {
                    echo '<li><a id="contact" style="font-size: 16px; background-color: #003617; color:white" href="contact.php">Contact</a></li>';
                }
                echo'
            </ul>
        </section>
    </nav>
</div>
';
?>
