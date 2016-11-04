<?php
/**
 * Created by PhpStorm.
 * User: Andy
 * Date: 11/4/2016
 * Time: 5:32 PM
 */
session_start();

$_SESSION['mare']=true;
$_SESSION['year']=false;
$_SESSION['fold']=false;
require_once('header.php');



require_once("footer.php");