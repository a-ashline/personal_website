<?php
/**
 * Created by PhpStorm.
 * User: Andy
 * Date: 9/20/2016
 * Time: 11:19 PM
 */
session_start();
$_SESSION['sticky']=true;
require_once("header.php");

echo '
<div id="back" style="padding-top: 250px; padding-bottom:20%; text-align: center">
<div class="small-8 medium-4 columns small-centered ">
<fieldset style="background-color: darkgray; color:dimgray;">
<h5>Software Developer</h5>
<h2>Andrew Ashline</h2>
</fieldset>
</div>
</div>


    <fieldset style="background-color: darkgray; border-color: darkgoldenrod">
        <div class="small-12 columns">
            <div class="small-5 columns">
                <img src="profile.2.jpg">
            </div>
            <div class="small-7 columns">
                <h3 style="color: black">2016 Graduate of Siena College</h3>
                    <p style="font-size: 18px">Graduated in May 2016 with a BS in Computer Science. Curently doing consultant work. Looking for
                     a full time position in web development.</p>
            </div>
        </div>
    </fieldset>
    
<!--<div class="small-12 columns" style="margin-top:10px;">
        <div class="small-4 columns">
            <fieldset style="background-color: darkgray">
                <a href="#" style="color: darkgoldenrod">Interested In a game? Click here.</a>
            </fieldset>
        </div>
    </div>-->

        
        
        
                   ';
require_once("footer.php");
?>

