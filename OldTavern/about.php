<?php
/**
 * Created by PhpStorm.
 * User: Andy
 * Date: 11/23/2016
 * Time: 11:45 AM
 */
session_start();

$_SESSION['about']=true;
$_SESSION['mare']=false;
$_SESSION['year']=false;
$_SESSION['fold']=false;
$_SESSION['contact']=false;

require_once('header.php');




require_once("footer.php");