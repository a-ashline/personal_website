<?php
/**
 * Created by PhpStorm.
 * User: Andy
 * Date: 11/23/2016
 * Time: 11:46 AM
 */
session_start();

$_SESSION['about']=false;
$_SESSION['mare']=false;
$_SESSION['year']=false;
$_SESSION['fold']=false;
$_SESSION['contact']=true;

require_once('header.php');




require_once("footer.php");