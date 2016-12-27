<?php
/**
 * Created by PhpStorm.
 * User: Andy
 * Date: 12/20/2016
 * Time: 1:07 AM
 */
session_start();
require_once('header.php');

echo'

<div class="row">
<div class="small-12 columns" >
<fieldset  style="background-color: #003617; width: 80%; margin-left: 10%">
    <ul class="example-orbit-content" data-orbit style=" align-content: center">
      <li style="align-content: center">
      <img src="images/demo-mare.jpg" style="width: 100%;" alt="slide 1">
        <div>
          
        </div>
      </li>
      <li>
      <img src="images/demo-yearling.jpg" style="width: 100%;" alt="slide 2">
        <div>
          
        </div>
      </li>
      <li>
      <img src="images/demo-foal.jpg" style="width: 100%;" alt="slide 3">
        <div>
          
        </div>
      </li>
    </ul>
    </fieldset>
</div>
</div>
<fieldset style="background-color: #ccac5f; width: 70%;margin-left: auto; margin-right: auto;">
<div class="row">
    <fieldset style="background-color: white">
       <h3>Info</h3>
       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
       Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
       Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
       </p>
    
</fieldset>
</div>
<div class="row">
    <fieldset style="background-color: white">
       <h3>Price</h3>
       <p>$XXXX</p>
    
</fieldset>
</div>
</fieldset>
';







require_once('footer.php');
?>