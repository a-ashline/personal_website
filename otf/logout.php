<?php
/**
 * Created by PhpStorm.
 * User: Andy
 * Date: 12/27/2017
 * Time: 1:08 PM
 */
session_start();
$_SESSION['username'] = "";
$_SESSION['password'] = "";
require_once('index.php');
exit;