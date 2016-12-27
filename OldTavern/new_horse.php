<?php
/**
 * Created by PhpStorm.
 * User: Andy
 * Date: 12/7/2016
 * Time: 3:24 PM
 */
session_start();

$_SESSION['about']=false;
$_SESSION['mare']=false;
$_SESSION['year']=false;
$_SESSION['fold']=false;
$_SESSION['contact']=false;

require_once('header.php');

echo '
<div class="row fullWidth" xmlns="http://www.w3.org/1999/html">
<fieldset class="small-12 columns" style="background-color: #F5F5F5">
<legend>Add a Horse</legend>
<form id="new_horse_form" action="add_horse.php" method="post">
  <div class="row">
    <div class="small-12 columns small-centered">  
      <label class="small-12 columns">Name
        <input type="text" placeholder="Name" />
      </label>
      <label class="small-6 columns">Country
        <input type="text" placeholder="Country" />
      </label>
      <label class="small-6 columns">Born
        <input type="date" />
      </label>
      <label class="small-4 columns">Color
        <input type="text" placeholder="Color" />
      </label>
      <label class="small-8 columns">Record
        <input type="text" placeholder="Record (XX-XX-XX-XX)" />
      </label>
      <label class="small-3 columns" style="float: left">Type<br>
        <input type="checkbox" class="htype" value="Mare"> Mare<br>
        <input type="checkbox" class="htype" value="Yearling"> Yearling<br>
        <input type="checkbox" class="htype" value="Foal"> Foal<br>
       </label>
      <label class="small-3 columns" style="float: left">Picture
        <input type="file" />
      </label>
      <label class="small-3 columns" style="float: left">Pedigree
        <input type="file" />
      </label>
      <label class="small-12 columns" style="float: left">
        <input type="submit" value="Submit">
      </label>
    </div>    
  </div>
</form>
</fieldset>
</div>
';





require_once("footer.php");
?>