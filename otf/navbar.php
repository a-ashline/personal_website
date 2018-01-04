<?php
/**
 * Created by PhpStorm.
 * User: Andy
 * Date: 11/30/2017
 * Time: 6:03 PM
 */
session_start();
require_once('head.php');

echo ' 

<nav class="navbar navbar-fixed-top">
    <div class="navbar-header navbar-left">
        <a class="navbar-brand" href="http://andrewashline.com/otf">
            <img src="./images/OldTLong.PNG" width="70%">
        </a>
    </div>
    <ul class="nav navbar-nav navbar-right" style="margin-right: 20px; margin-top: 30px;">
        <li class="nav-links"><a href="index.php">News</a></li>
        <li class="nav-links"><a href="stable.php?horseT=all">Stable</a></li>
        <li class="nav-links"><a href="index.php">Farm Life</a></li>
        <li class="nav-links"><a href="about.php">About Us</a></li>
    </ul>


        
</nav>


';