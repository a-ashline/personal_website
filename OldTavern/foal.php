<?php
/**
 * Created by PhpStorm.
 * User: Andy
 * Date: 11/4/2016
 * Time: 5:33 PM
 */
session_start();

$_SESSION['about']=false;
$_SESSION['mare']=false;
$_SESSION['year']=false;
$_SESSION['fold']=true;
$_SESSION['contact']=false;
if($_GET['page']==null||$_GET['page']==1)
{
    $_SESSION['page_no']=1;
}
else
{
    $_SESSION['page_no']=$_GET['page'];
}
$_SESSION['pages']=6;
require_once('header.php');

echo'

<div class="row fullWidth" style="margin-top: 20px">
    <div class="left">
        <a href="new_horse.php">Add a horse</a>
    </div>
    <div class="right">
    <ul class="pagination">
        <li>Showing '.(($_SESSION['page_no']*20)-19).' to '.($_SESSION['page_no']*20).' of 120</li>';
if($_SESSION['page_no']==1)
{
    echo '<li class="arrow unavailable"><a href="#">&laquo;</a></li>';
}
else
{
    echo '<li class="arrow"><a href="foal.php?page='.($_SESSION['page_no']-1).'">&laquo;</a></li>';
}
for($page=1; $page<=$_SESSION['pages']; $page++)
{
    if($page==$_SESSION['page_no'])
    {
        echo '<li class="current"><a href="foal.php?page='.$page.'">'.$page.'</a></li>';
    }
    else
    {
        echo '<li><a href="foal.php?page='.$page.'">'.$page.'</a></li>';
    }
}
if($_SESSION['page_no']==$_SESSION['pages'])
{
    echo '<li class="arrow unavailable"><a href="#">&raquo</a></li>
    </ul>
    </div>';
}
else
{
    echo '<li class="arrow"><a href="foal.php?page='.($_SESSION['page_no']+1).'">&raquo</a></li>
    </ul>
    </div>';
}
echo'
    <table class="small-12 columns small-centered">
        <tr>
            <th class="small-1 columns">ID</th>
            <th class="small-2 columns"><!--img--></th>
            <th class="small-2 columns">Name</th>
            <th class="small-2 columns">Country</th>
            <th class="small-1 columns">Born</th>
            <th class="small-1 columns">Color</th>
            <th class="small-2 columns">Record</th>
            <th class="small-1 columns">Pedigree</th>
        </tr>';

for($x=0; $x<20; $x++)
{
    echo'<tr>
            <td class="small-1 columns">'.(($x+1)+($_SESSION['page_no']*20-20)).'</td>
            <td class="small-2 columns"><a href="indiv_horse.php"><img src="./images/demo-foal.jpg" style="height: 100px;"></a></td>
            <td class="small-2 columns">SeaSea</td>
            <td class="small-2 columns">USA</td>
            <td class="small-1 columns">2012</td>
            <td class="small-1 columns">GR.</td>
            <td class="small-2 columns">N/A</td>
            <td class="small-1 columns"><a href="#">link</a> </td>
        </tr>';
};
echo'    
    </table>
    <div class="right">
    <ul class="pagination">
        <li>Showing 1 to 20 of 120</li>';
if($_SESSION['page_no']==1)
{
    echo '<li class="arrow unavailable"><a href="#">&laquo;</a></li>';
}
else
{
    echo '<li class="arrow"><a href="foal.php?page='.($_SESSION['page_no']-1).'">&laquo;</a></li>';
}
for($page=1; $page<=$_SESSION['pages']; $page++)
{
    if($page==$_SESSION['page_no'])
    {
        echo '<li class="current"><a href="foal.php?page='.$page.'">'.$page.'</a></li>';
    }
    else
    {
        echo '<li><a href="foal.php?page='.$page.'">'.$page.'</a></li>';
    }
}
if($_SESSION['page_no']==$_SESSION['pages'])
{
    echo '<li class="arrow unavailable"><a href="#">&raquo</a></li>
    </ul>
    </div>';
}
else
{
    echo '<li class="arrow"><a href="foal.php?page='.($_SESSION['page_no']+1).'">&raquo</a></li>
    </ul>
    </div>';
}
echo '
    </div>';
require_once('header.php');




require_once("footer.php");