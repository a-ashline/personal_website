<?php
/**
 * Created by PhpStorm.
 * User: Andy
 * Date: 12/3/2016
 * Time: 12:43 AM
 */
session_start();
$_SESSION['sticky']=false;
require_once("header.php");

echo '

<div class="small-12 columns small-centered" style="margin-top:10px; margin-bottom: 100px;">
    <fieldset style="background-color: darkgray; width: 100%;">
        <h4 style="margin-bottom:15px; text-decoration: underline">Projects that I have worked on.</h4>
        <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-4 small-centered">
          <li>
            <fieldset style="background-color: #E5E4E2;">
                <a class="th" href="http://oraserv.cs.siena.edu/~perm_elite/Elite/team_website/">
                  <img src="eliteThumb.PNG" style="height: 200px">
                </a>
                <h5>Elite</h5>
                <p>This site was a final project that allowed students to improve their deductive reasoning.</p>
            </fieldset>
          </li>
          <li>
            <fieldset style="background-color: #E5E4E2;">
                <a class="th" href="http://andrewashline.com/OldTavern">
                  <img src="oldTavernThumb.PNG" style="height: 200px">
                </a>
                <h5>Old Tavern Farm</h5>
                <p>This site is created using Foundation 5. It is currently under development.</p>
            </fieldset>
          </li>
        </ul>
    </fieldset>
</div>
        


';
require_once("footer.php");
?>
