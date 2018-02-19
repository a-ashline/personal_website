<?php
/**
 * Created by PhpStorm.
 * User: Andy
 * Date: 2/16/2018
 * Time: 6:55 PM
 */
session_start();
require_once("connection.php");

$type = $_GET["type"];
$name = $_GET["name"];
$mother = $_GET["mother"];
$inFoal = $_GET["in-foal"];
$birth = $_GET["birth"];
$color = $_GET["color"];
$fileID = $_GET["files"];
$race = $_GET["race"];
$produce = $_GET["produce"];
$pic = $_GET["pic"];
$tree = $_GET["tree"];
$pedigree = $_GET["pedigree"];

$sql = 'INSERT INTO horse VALUES 
(NULL, "'.$name.'", "'.$birth.'", "'.$mother.'", "'.$inFoal.'", "'.$color.'", "'.$type.'", "'.$race.'", "'.$produce.'", "'.$pic.'", "'.$tree.'", "'.$pedigree.'")';

if ($conn->query($sql) === TRUE) {
    move_uploaded_file($tree, "ancestry/$tree");
    move_uploaded_file($pic, "images/$pic");
    move_uploaded_file($pedigree, "pedigree/$pedigree");
    echo '<h1>Success</h1>
<p>'.$sql.'</p>
            <a href="http://andrewashline.com/otf/admin.php"><button>Continue</button></a> ';

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

