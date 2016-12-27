<?php
/**
 * Created by PhpStorm.
 * User: Andy
 * Date: 9/26/2016
 * Time: 3:34 PM
 */
session_start();

$_SESSION['about']=false;
$_SESSION['mare']=false;
$_SESSION['year']=false;
$_SESSION['fold']=false;
$_SESSION['contact']=false;

require_once('header.php');

echo '
          <div>
            <img src="pasture.jpg" width="100%" >
          </div>
          <div class="container">
          <div class="row fullWidth">
          <div class="column">
                    <fieldset style="background-color: #ccac5f">
                        <h2>Featured</h3>
                        <div style="background-color:white">
                            <img src="OldTShort.PNG">
                        </div>
                    </fieldset>
              </div>
              <div class="column small-6">
                    <fieldset style="background-color: #ccac5f">
                        <h2>Horse'."'".'s</h2>
                        <a href="mare.php"><fieldset><h3>Mare</h3></fieldset></a>
                        <a href="yearling.php"><fieldset><h3>Yearling</h3></fieldset></a>
                        <a href="foal.php"><fieldset><h3>Foal</h3></fieldset></a>               
                    </fieldset>
              </div>
              
              <div class="column small-6">
                    <fieldset style="background-color: #ccac5f">
                    <h2>Recent Events</h3>
                    <table>
                        <tr>
                            <th>Date</th>
                            <th>Event</th>
                        </tr>
                        <tr>
                            <td>10/2</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                        </tr>
                        <tr>
                            <td>10/2</td>
                            <td>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                        </tr>
                        <tr>
                            <td>9/29</td>
                            <td>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</td>
                        </tr>
                        <tr>
                            <td>9/18</td>
                            <td>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
                        </tr>
                    </table>
              </fieldset>
              </div>
          </div>
              
          </div>

          
      
';

require_once("footer.php");
?>