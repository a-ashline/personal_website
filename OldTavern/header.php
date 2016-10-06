<?php
echo'
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Old Tavern Farm</title>

    <link rel="stylesheet" type="text/css" href="../foundation/css/foundation.min.css">

    <style>
        html, body {
            font-size: 15px;
            background-color: #f7f7f7;
        }
        
        .top-bar {
            height: 4rem;
            
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
<div class="body">
    <div class="sticky"></div>
    <nav class="top-bar" style="background-color: #003617; border-bottom: 5px solid #ccac5f" class="top-bar" data-topbar role="navigation" >
        <section class="top-bar-section">
            <ul class="left">
                <li><a href="index.php">Old Tavern Farm<!--<img src="oldtavern.PNG"> --></a></li>
            </ul>
            <ul class="right">
                <li><a style="font-size: 16px; background-color: #003617" href="#">About</a></li>
                <li><a style="font-size: 16px; background-color: #003617" href="#">Mares</a></li>
                <li><a style="font-size: 16px; background-color: #003617" href="#">Yearlings</a></li>
                <li><a style="font-size: 16px; background-color: #003617" href="#">Stallions</a></li>
                <li><a style="font-size: 16px; background-color: #003617" href="#">Contact</a></li>
            </ul>
        </section>
    </nav>
</div>
';
?>
