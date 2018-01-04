<?php
/**
 * Created by PhpStorm.
 * User: Andy
 * Date: 12/27/2017
 * Time: 12:38 PM
 */
session_start();
$_SESSION['username'] = $_POST['uname'];
$_SESSION['password'] = $_POST['pword'];
if(($_SESSION['username'] != 'admin') or ($_SESSION['password'] != 'admin'))
{
    require_once('navbar.php');
    echo '

<form method="post" action="login.php" style="text-align: center; padding: 10%; padding-left: 25%; padding-right: 25%;">
    <div style="margin-top:2rem; border: 1px solid #cacaca; padding: 3rem; border-radius: 3px;">
        <h4 class="text-center">Log In</h4>
        <label>Username:
            <input type="text" name="uname" value="'.$_SESSION['username'].'">
        </label><br>
        <label>Password:
            <input type="password" name="pword" value="'.$_SESSION['password'].'">
        </label><br>
        <input type="submit" class="button expand" value="Log In"><br><br>';
        if(($_SESSION['username'] != null) or ($_SESSION['password'] != null)){
        echo '<p>Incorrect username or password. Please try again.</p>';}
    echo '
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


