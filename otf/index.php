<?php
/**
 * Created by PhpStorm.
 * User: Andy
 * Date: 11/30/2017
 * Time: 5:53 PM
 */
session_start();

require_once('navbar.php');
echo ' 

<div class="container-fluid" style="margin-top: 100px;">

    <div id="firstCarousel" class="carousel slide" data-ride="carousel" data-interval="3000" style="height: 85vh; background-color: white;">
    <!-- Menu -->
        <ol class="carousel-indicators">
            <li data-target="#firstCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#firstCarousel" data-slide-to="1"></li>
            <li data-target="#firstCarousel" data-slide-to="2"></li>
        </ol>
            <!-- Items -->
        <div class="carousel-inner" style="height: 85vh; margin-bottom: 40px; background-color: white;">
            <div class="item active">
                <img src="./images/DSC_0198.jpg" width="100%" height="100%" alt="Slide 1" />
            </div>
            <div class="item">
                <img src="./images/IMG_6020.jpg" width="100%" height="100%" alt="Slide 2" />
            </div>
            <div class="item">
                <img src="./images/IMG_7508.jpg" width="100%" height="100%" alt="Slide 3" />
            </div>
        </div>
        <a href="#firstCarousel" class="left carousel-control" data-slide="prev">
            <!--<span class="glyphicon glyphicon-chevron-left"></span>-->
        </a>
        <a href="#firstCarousel" class="right carousel-control" data-slide="next">
            <!--<span class="glyphicon glyphicon-chevron-right"></span>-->
        </a>
    </div>
    <div class="about" style="width: 100%; margin-top: 25px; margin-bottom: 20px;">
        <fieldset style="background-color: #003617;">
        <div class="col-sm-4" style="margin-left: -15px;">
            <img src="./images/DSC_0198.jpg"  width="100%">
        </div>
        <div class="col-sm-8" style="padding: 25px; margin: 30px 0px 15px 0px; height: auto; font-size: 1.2em; color: white;">
            <p>&emsp;&emsp;Established in 2016, Old Tavern Farm is a private boutique thoroughbred-breeding farm. Founded
                on the former site of Palmer’s Maple Shade Farm in Saratoga Springs, New York, the name Old
                Tavern was derived from the 1800s tavern that once graced the property.</p>
                
            <p>&emsp;&emsp;Nestled atop a ridge overlooking Saratoga Lake and the foothills of the Adirondacks, Old Tavern
                Farm is focused on the breeding and sale of thoroughbreds that compete at the highest level of
                racing...</p>
        
            <br><a href="about.php" style="color: white; font-size: 1.2em;">Click Here to Learn More
            <span class="glyphicon glyphicon-chevron-right" style="font-size: .8em;"></span></a>
        </div>
        </fieldset>
    </div>
    <div class="stable" style="width: 100%; margin-top: 25px; margin-bottom: 20px; background-color: #003617;">
    <fieldset style="background-color: #003617;">
        <div class="col-sm-2" style="text-align: left; padding: 20px; font-size: 1.5em; color: black;">
            <a href="stable.php" style="color: black; font-size: 1.2em; color: white;">Meet the Horses
            <span class="glyphicon glyphicon-chevron-right" style="font-size: .8em;"></span>
            <span class="glyphicon glyphicon-chevron-right" style="font-size: .8em;"></span>
            <span class="glyphicon glyphicon-chevron-right" style="font-size: .8em;"></span></a>
        </div>
        <div class="col-sm-10" style="padding: 10px; float: right;">
            <img src="./images/DSC_0097.jpg" width="10%" style="float: inherit;">
            <img src="./images/DSC_0097.jpg" width="10%" style="float: inherit;">
            <img src="./images/DSC_0097.jpg" width="10%" style="float: inherit;">
            <img src="./images/DSC_0097.jpg" width="10%" style="float: inherit;">
            <img src="./images/DSC_0097.jpg" width="10%" style="float: inherit;">
            <img src="./images/DSC_0097.jpg" width="10%" style="float: inherit;">
            <img src="./images/DSC_0097.jpg" width="10%" style="float: inherit;">
            <img src="./images/DSC_0097.jpg" width="10%" style="float: inherit;">
            <img src="./images/DSC_0097.jpg" width="10%" style="float: inherit;">
        </div>
        </fieldset>
    </div>
</div>
';

require_once('foot.php');