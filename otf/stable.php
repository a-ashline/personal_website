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
if($_SESSION['horseT']=="mare")
{
    echo '<a href="stable.php?horseT=mare" style="color: #ccac5f;">Mares';
}
else
{
    echo '<a href="stable.php?horseT=mare" style="color: black;">Mares';
}
                echo '</a> | ';
if($_SESSION['horseT']=="yearling")
{
    echo '<a href="stable.php?horseT=yearling" style="color: #ccac5f;">Yearlings';
}
else
{
    echo '<a href="stable.php?horseT=yearling" style="color: black;">Yearlings';
}
                echo '</a> | ';
if($_SESSION['horseT']=="foal")
{
    echo '<a href="stable.php?horseT=foal" style="color: #ccac5f;">Foals';
}
else
{
    echo '<a href="stable.php?horseT=foal" style="color: black;">Foals';
}
                echo '</a></h4>
        </fieldset>
        
    </div>
</div>';

$sql = "SELECT * from horse order by Name ASC ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
    $counter = 0;
    while ($row = mysqli_fetch_assoc($result))
    {
        if((strcasecmp($row["Type"], $_SESSION["horseT"]) == 0) || $_SESSION["horseT"] == "all")
            echo '<fieldset style="border: 1px solid #ccac5f; padding: 2rem; border-radius: 3px; margin-bottom: 20px; background-color: #F5F5F5">
                    <h2 style="text-align: center;">'.$row["Name"].' | Mother: '.$row["Mother"].'</h2>
                    <h4 style="text-align: center;">In-Foal to '.$row["In_foal_to"].'</h4>
                    <div class="row" style="text-align: center;">
                        <div class="col-sm-6">
                            <img src="./ancestry/'.$row["ancestry"].'" width="70%"/>
                        </div> 
                        <div class="col-sm-6">
                            <img src="./images/'.$row["picture"].'" width="70%"/>
                        </div> 
                    </div>
                    <div class="row">
                        <p>Type: '.$row["Type"].'</p>
                        <p>Birth: '.$row["Birth"].'</p>
                        <p>Color: '.$row["color"].'</p>
                        <p>Race Record: '.$row["Race_record"].'</p>
                        <p>Produce Record: '.$row["Produce_record"].'</p>
                        <p><a href="./pedigree/'.$row["pedigree"].'" download>Pedigree</a></p>
                    </div>
                </fieldset>';

    }
}
echo '</div> ';
require_once('foot.php');