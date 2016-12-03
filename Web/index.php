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
<div style="margin-top:450px; text-align: center">
<fieldset class="partWidth" style="background-color: darkgray; color:dimgray;">
<h5>Software Developer</h5>
<h2>Andrew Ashline</h2>
</fieldset>
</div>

<div class="row fullwidth" style="margin-top:250px;">
    <fieldset style="background-color: darkgray; border-color: darkgoldenrod">
        <div class="small-12 columns">
            <div class="small-5 columns">
                <img src="profile.2.jpg">
            </div>
            <div class="small-7 columns">
                <h4 style="color: black">2016 Graduate of Siena College</h4>
                    <p>Graduated in May 2016 with a BS in Computer Science. Curently doing consultant work. Looking for
                     a full time position as a software developer or web developer.</p>
            </div>
        </div>
    </fieldset>
    
    <div class="small-12 columns" style="margin-top:10px;">
        <div class="small-4 columns">
            <fieldset style="background-color: darkgray">
                <a href="#" style="color: darkgoldenrod">Interested In a game? Click here.</a>
            </fieldset>
        </div>
    </div>
</div>
        
        
        
                   ';

require_once("footer.php");
?>

