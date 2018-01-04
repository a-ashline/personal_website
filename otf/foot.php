<?php
/**
 * Created by PhpStorm.
 * User: Andy
 * Date: 11/30/2017
 * Time: 5:54 PM
 */

session_start();
echo '

 <div class="container" style="width: 100%; background-color: #F1F1F1;">
  <h3 class="text-center">Contact</h3>
  <div class="row test">
    <div class="col-md-4">
      <p style="font-size: 2em;">&emsp;<a href="https://twitter.com/oldtavfarm"><i class="fa fa-twitter"></i></a>&emsp;
      <a href="https://www.instagram.com/oldtavfarm/"><i class="fa fa-instagram"></i></a></p>';

if(($_SESSION['username'] == 'admin') and ($_SESSION['password'] == 'admin'))
{
    echo '<h4>&emsp;<a href="admin.php">Admin Dashboard</a></h4>
          <h4>&emsp;<a href="logout.php">Logout</a></h4>';
}
else
{
    echo '<h4>&emsp;<a href="login.php">Client Login</a></h4>';
}


echo '
      
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <div class="row" style="margin-top: 5px;">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" style="background-color: #ccac5f" type="submit">Send</button>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
            <p>Old Town Farm, LLC - 45 Brown Road Saratoga Springs, New York 12866</p>
        </div>
      </div>
    </div>
  </div>
</div> 
<div class="text-center" style="background-color: #ccac5f;">
  <a class="up-arrow" href="index.php" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br>
  <p>Website Developed By <a href="http://andrewashline.com" data-toggle="tooltip" title="Visit w3schools" style="color: black;">www.andrewashline.com</a></p>
</div>


<div class="footer">
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" 
    crossorigin="anonymous"></script>
    <script type="text/javascript" src="./js/main.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
</div>
';