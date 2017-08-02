<?php
/**
 * Created by PhpStorm.
 * User: Andy
 * Date: 12/27/2016
 * Time: 4:36 PM
 */
session_start();
require_once("header.php");

echo'
    <div id="back" style="padding-top: 200px; padding-bottom:20%; text-align: center">
        <h3>What game would you like to play?</h3>
        <select class="small-4 columns small-centered">
          <option value="snake">Snake</option>
          <option value="sudoku">Sudoku</option>
          <option value="lightsOut">Lights Out</option>
        </select>
        <label class="small-6 columns small-centered">
        <input type="submit" value="Play">
      </label>
    </div>

';
?>
    
<?
require_once("../footer.php");
?>