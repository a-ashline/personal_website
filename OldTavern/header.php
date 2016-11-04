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
        }
        
       .top-bar {
            height: 3.15rem;
            
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
    
</head>
<div class="body">
    <div class="sticky"></div>
    <nav class="top-bar" style="background-color: #003617; border-bottom: 5px solid #ccac5f" class="top-bar" data-topbar role="navigation" >
        <section class="top-bar-section">
            <ul class="left">
                <li><a href="index.php">Old Tavern Farm<!--<img src="oldtavern.PNG"> --></a></li>
            </ul>
            <ul class="right">
                <li><a style="font-size: 14px; background-color: #003617; color:white" href="#">About</a></li>
                ';
                if($_SESSION['mare'])
                {
                    echo '<li><a id="mare" style="font-size: 14px; background-color: #ccac5f; color:black" href="mare.php">Mares</a></li>';
                }
                else
                {
                    echo '<li><a id="mare" style="font-size: 14px; background-color: #003617; color:white" href="mare.php">Mares</a></li>';
                }
                if($_SESSION['year'])
                {
                    echo '<li><a id="year" style="font-size: 14px; background-color: #ccac5f; color:black" href="yearling.php">Yearlings</a></li>';
                }
                else
                {
                    echo '<li><a id="year" style="font-size: 14px; background-color: #003617; color:white" href="yearling.php">Yearlings</a></li>';
                }
                if($_SESSION['fold'])
                {
                    echo '<li><a id="fold" style="font-size: 14px; background-color: #ccac5f; color:black" href="fold.php">Folds</a></li>';
                }
                else
                {
                    echo '<li><a id="fold" style="font-size: 14px; background-color: #003617; color:white" href="fold.php">Folds</a></li>';
                }
                echo'
                <li><a style="font-size: 14px; background-color: #003617" href="#">Contact</a></li>
            </ul>
        </section>
    </nav>
</div>
';
?>
