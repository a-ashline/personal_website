<?php
$servername = "198.71.225.50";
$username = "dev-otf";
$password = "Hockey@dev";

// Create connection
$mysqli = mysqli_connect($servername, $username, $password);

// Check connection
if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}
?>