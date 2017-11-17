<?php
/**
 * Created by PhpStorm.
 * User: Andy
 * Date: 11/17/2017
 * Time: 2:52 PM
 */
$dbh=mysqli_connect ("localhost", "andrewas_admin", "admin123")
or die ('I cannot connect to the database.');
mysqli_select_db ("andrewas_temp");
?>