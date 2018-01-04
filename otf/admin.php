<?php
/**
 * Created by PhpStorm.
 * User: Andy
 * Date: 12/27/2017
 * Time: 1:37 PM
 */
session_start();
require_once('navbar.php');

echo '

<div style="margin-top: 100px; margin-bottom: 500px;">

    <ul class="nav nav-tabs" style="font-size: 1.4em;">
        <li class="active"><a data-toggle="tab" href="#home">Add a Horse</a></li>
        <li><a data-toggle="tab" href="#menu1">Edit a Horse</a></li>
        <li><a data-toggle="tab" href="#menu2">Add a News Item</a></li>
        <li><a data-toggle="tab" href="#menu3">Edit a News Item</a></li>
    </ul>

    <div class="tab-content">
        
        <div id="home" class="tab-pane fade in active">
        <fieldset>
          <h3>Add a Horse</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </fieldset>
        </div>
        
        
        <div id="menu1" class="tab-pane fade">
          <fieldset>
          <h3>Edit a Horse</h3>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </fieldset>
        </div>
        
        
        <div id="menu2" class="tab-pane fade">
        <fieldset>
          <h3>Add a News Item</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
        </fieldset>
        </div>
        
        <div id="menu3" class="tab-pane fade">
        <fieldset>
          <h3>Edit a News Item</h3>
          <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
        </fieldset>
        </div>
        
    </div>

</div>
';


require_once('foot.php');