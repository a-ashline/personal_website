<?php
/**
 * Created by PhpStorm.
 * User: Andy
 * Date: 11/29/2017
 * Time: 2:15 PM
 */
//session_start();
require_once('newheader.php');


echo ' 
<div class="container-fluid">


    <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="3000">
    <!-- Menu -->
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
        </ol>
        <!-- Items -->
        <div class="carousel-inner">
            <div class="item active">
    <img src="http://lorempixel.com/1500/600/abstract/1" alt="Slide 1" />
</div>
<div class="item">
    <img src="http://lorempixel.com/1500/600/abstract/2" alt="Slide 2" />
</div>
<div class="item">
    <img src="http://lorempixel.com/1500/600/abstract/3" alt="Slide 3" />
</div>
</div>
<a href="#carousel" class="left carousel-control" data-slide="prev">
    <!--<span class="glyphicon glyphicon-chevron-left"></span>-->
</a>
<a href="#carousel" class="right carousel-control" data-slide="next">
    <!--<span class="glyphicon glyphicon-chevron-right"></span>-->
</a>
</div>
</div>

<script
    src="https://code.jquery.com/jquery-3.2.1.js"
    integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
    crossorigin="anonymous"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>

';

?>