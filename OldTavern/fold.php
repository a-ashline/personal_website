<?php
/**
 * Created by PhpStorm.
 * User: Andy
 * Date: 11/4/2016
 * Time: 5:33 PM
 */
session_start();

$_SESSION['about']=false;
$_SESSION['mare']=false;
$_SESSION['year']=false;
$_SESSION['fold']=true;
$_SESSION['contact']=false;

require_once('header.php');




require_once("footer.php");