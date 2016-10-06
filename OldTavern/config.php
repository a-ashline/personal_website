<?php

/**
 *Script to set up the connection with the database
 */

define('DB_SERVER','74.220.215.60');
define('DB_PORT','3306');
define('DB_USERNAME','andrewas_admin');
define('DB_PASSWORD','Yankee123');
define('DB_NAME','andrewas_OldTavern');

$dbh = mysqli_connect(DB_SERVER.':'.DB_PORT,DB_USERNAME,DB_PASSWORD,DB_NAME);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit;
}
echo "hello";
?>