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

<div style="margin-top: 100px; margin-bottom: 300px;">

    <ul class="nav nav-tabs" style="font-size: 1.4em;">
        <li class="active"><a data-toggle="tab" href="#home">Add a Horse</a></li>
        <li><a data-toggle="tab" href="#menu1">Edit a Horse</a></li>
        <li><a data-toggle="tab" href="#menu2">Add a News Item</a></li>
        <li><a data-toggle="tab" href="#menu3">Edit a News Item</a></li>
    </ul>

    <div class="tab-content" style="margin-left: 20px; margin-top: 50px;">
        
        <div id="home" class="tab-pane fade in active">
   <fieldset style="border: 1px solid #ccac5f; padding: 2rem; border-radius: 3px; margin-bottom: 20px; background-color: #F5F5F5">
          <form action="add_horse.php" method="get">
          <div class="col-sm-6" style="padding: 5px">
              <div>
                <label for="type">Type:</label>
                <select name="type">
                  <option value="foal">Foal</option>
                  <option value="mare">Mare</option>
                  <option value="yearling">Yearling</option>
                </select>
              </div>
              <div>
                <label for="name">Name:</label>
                <input type="text" name="name">
              </div>
              <div>
                <label for="mother">Mother:</label>
                <input type="text" name="mother">
              </div>
              <div>
                <label for="in-foal">In-Foal to:</label>
                <input type="text" name="in-foal">
              </div>
              <div>
                <label for="birth">Born:</label>
                <input type="date" name="birth">
              </div>
              <div>
                <label for="color">Color:</label>
                <input type="text" name="color">
              </div>
              <div>
                <label for="race">Race Record:</label>
                <input type="text" name="race">
              </div>
              <div>
                <label for="produce">Produce Record:</label>
                <input type="text" name="produce">
              </div>
              <button type="submit" class="btn btn-default" style="padding: 10px">Submit</button>
              </div>
               <div class="col-sm-6" style="padding: 5px">
              <div>
                <label for="pic">Picture:</label>
                <input name="pic" type="file">
              </div>
              <div>
                <label for="tree">Pedigree Tree:</label>
                <input name="tree" type="file">
              </div>
              <div>
                <label for="pedigree">Pedigree:</label>
                <input name="pedigree" type="file">
              </div>
              
              </div>
              
              
            </form>
        </fieldset>
        </div>
        
        
        <div id="menu1" class="tab-pane fade">
          <fieldset style="border: 1px solid #ccac5f; padding: 2rem; border-radius: 3px; margin-bottom: 20px; background-color: #F5F5F5">
              <form action="update_horse.php" method="get">
                   <div class="row">
                        <div class="col-sm-12">
                            <label>Enter name of horse you would like to edit: </label></br>
                            <input name="name" type="text">
                            <button type="submit" class="btn btn-default" style="padding: 10px">Submit</button>
                        </div>
                   </div>
               </form>
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

</div>';


require_once('foot.php');