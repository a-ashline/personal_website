<?php
/**
 * Created by PhpStorm.
 * User: Andy
 * Date: 12/26/2017
 * Time: 7:13 PM
 */
session_start();
require_once("navbar.php");
$_SESSION["horseT"]=$_GET["horseT"];
echo '
<div class="container" style="margin-top: 100px;">
<div class="row" style="margin-bottom: 10px;">
    <div class="col-sm-3">
        <fieldset style="border: 1px solid #ccac5f; padding-left: 5%">
            <h4>';
if($_SESSION['horseT']=="all")
{
    echo '<a href="stable.php?horseT=all" style="color: #ccac5f;">All';
}
else
{
    echo '<a href="stable.php?horseT=all" style="color: black;">All';
}
                echo '</a> | ';
if($_SESSION['horseT']=="mares")
{
    echo '<a href="stable.php?horseT=mares" style="color: #ccac5f;">Mares';
}
else
{
    echo '<a href="stable.php?horseT=mares" style="color: black;">Mares';
}
                echo '</a> | ';
if($_SESSION['horseT']=="weanlings")
{
    echo '<a href="stable.php?horseT=weanlings" style="color: #ccac5f;">Weanlings';
}
else
{
    echo '<a href="stable.php?horseT=weanlings" style="color: black;">Weanlings';
}
                echo '</a> | ';
if($_SESSION['horseT']=="foals")
{
    echo '<a href="stable.php?horseT=foals" style="color: #ccac5f;">Foals';
}
else
{
    echo '<a href="stable.php?horseT=foals" style="color: black;">Foals';
}
                echo '</a></h4>
        </fieldset>
        
    </div>
</div>';

/* return name of current default database */
if ($result = $mysqli->query("SELECT * from news order by ")) {
    $row = $result->fetch_row();
    if($row == null)
    {
        printf("what what");
    }
    printf("Default database is %s.\n", $row[0]);
    $result->close();
}

echo '
    <fieldset style="border: 1px solid #ccac5f; padding: 2rem; border-radius: 3px; margin-bottom: 20px; background-color: #F5F5F5">
        <h2 style="text-align: center;">Horse Name | Mother</h2>
        <h4 style="text-align: center;">In-Foal to ...</h4>
        <div class="row" style="text-align: center;">
            <div class="col-sm-6">
                <p>ancestry tree</p>
                <img src="./images/IMG_5517.jpg" width="70%"/>
            </div> 
            <div class="col-sm-6">
                <img src="./images/IMG_5517.jpg" width="70%"/>
            </div> 
        </div>
        <div class="row">
            <p>birth</p>
            <p>color</p>
            <p>Race Record</p>
            <p>Produce Record</p>
            <p><a href="./images/IMG_5517.jpg" download>Pedigree</a></p>
        </div>
    </fieldset>
    <fieldset style="border: 1px solid #ccac5f; padding: 2rem; border-radius: 3px; margin-bottom: 20px; background-color: #F5F5F5">
        <h2 style="text-align: center;">Horse Name | Mother</h2>
        <div class="row" style="text-align: center;">
            <div class="col-sm-6">
                <img src="./images/IMG_5517.jpg" width="70%"/>
            </div> 
            <div class="col-sm-6">
                <img src="./images/IMG_5517.jpg" width="70%"/>
            </div> 
        </div>
        <div class="row">
            <p>birth</p>
            <p>color</p>
            <p>Race Record</p>
            <p>Produce Record</p>
            <p><a href="./images/IMG_5517.jpg" download>Pedigree</a></p>
        </div>
    </fieldset>
</div>



';




require_once('foot.php');