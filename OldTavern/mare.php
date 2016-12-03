<?php
/**
 * Created by PhpStorm.
 * User: Andy
 * Date: 11/4/2016
 * Time: 5:32 PM
 */
session_start();

$_SESSION['about']=false;
$_SESSION['mare']=true;
$_SESSION['year']=false;
$_SESSION['fold']=false;
$_SESSION['contact']=false;

require_once('header.php');

echo'

<div class="row fullWidth">
    <table>
        <tr>
            <th><!--img--></th>
            <th>Name</th>
            <th>Country</th>
            <th>Born</th>
            <th>Color</th>
            <th>Record</th>
        </tr>';

for($x=0; $x<5; $x++)
{
    echo'<tr>
            <td><img src="oldtavern.PNG"></td>
            <td>SeaSea</td>
            <td>USA</td>
            <td>2012</td>
            <td>GR.</td>
            <td>N/A</td>
        </tr>';
};
    echo'    
    </table>
    </div>';



require_once("footer.php");