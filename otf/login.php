<?php
/**
 * Created by PhpStorm.
 * User: Andy
 * Date: 12/27/2017
 * Time: 12:38 PM
 */
session_start();
$username = $_POST['uname'];
$password = $_POST['pword'];
if(($username == null) or ($password == null)) 
{
    require_once('navbar.php');
    echo '

<form method="post" action="login.php" style="text-align: center; padding: 10%; padding-left: 25%; padding-right: 25%;">
    <div style="margin-top:2rem; border: 1px solid #cacaca; padding: 3rem; border-radius: 3px;">
        <h4 class="text-center">Log In</h4>
        <label>Username:
            <input type="text" name="uname" value="'.$username.'">
        </label><br>
        <label>Password:
            <input type="password" name="pword" value="'.$password.'">
        </label><br>
        <input type="submit" class="button expand" value="Log In">
    </div>
</form>

';
    require_once('foot.php');
}
else
{
    header("Location: http://andrewashline.com/otf/admin.php"); /* Redirect browser */
    exit();
}


