<?php
/**
 * Created by PhpStorm.
 * User: Andy
 * Date: 2/18/2018
 * Time: 9:14 PM
 */
session_start();
require_once("navbar.php");

echo '<div class="container-fluid" style="margin-top: 100px;">';

$id = $_GET["id"];
$type = $_GET["type"];
$name = $_GET["name"];
$mother = $_GET["mother"];
$inFoal = $_GET["in-foal"];
$birth = $_GET["birth"];
$color = $_GET["color"];
$fileID = $_GET["files"];
$race = $_GET["race"];
$produce = $_GET["produce"];
$pic = $_GET["pic"];
$tree = $_GET["tree"];
$pedigree = $_GET["pedigree"];

if($id == null)
{
    $sql = 'SELECT * from horse where Name = "'.$_GET["name"].'"';
    $result = mysqli_query($conn, $sql);
    if (($row = mysqli_fetch_assoc($result)) != null)
    {
            echo '<fieldset style="border: 1px solid #ccac5f; padding: 2rem; border-radius: 3px; margin-bottom: 20px; background-color: #F5F5F5">
          <form action="update_horse.php" method="get">
          
          <div class="col-sm-6" style="padding: 5px">
            <div>
                <label for="id">ID:</label>
                <input name="id" value="'.$row["HID"].'" readonly>
              </div>
              <div>
                <label for="type">Type:</label>
                <select name="type" value = "'.$row["Type"].'">
                  <option value="foal">Foal</option>
                  <option value="mare">Mare</option>
                  <option value="yearling">Yearling</option>
                </select>
              </div>
              <div>
                <label for="name">Name:</label>
                <input type="text" name="name" value = "'.$row["Name"].'">
              </div>
              <div>
                <label for="mother">Mother:</label>
                <input type="text" name="mother" value = "'.$row["Mother"].'">
              </div>
              <div>
                <label for="in-foal">In-Foal to:</label>
                <input type="text" name="in-foal" value = "'.$row["In_foal_to"].'">
              </div>
              <div>
                <label for="birth">Born:</label>
                <input type="date" name="birth" value = "'.$row["Birth"].'">
              </div>
              <div>
                <label for="color">Color:</label>
                <input type="text" name="color" value = "'.$row["color"].'">
              </div>
              <div>
                <label for="race">Race Record:</label>
                <input type="text" name="race" value = "'.$row["Race_record"].'">
              </div>
              <div>
                <label for="produce">Produce Record:</label>
                <input type="text" name="produce" value = "'.$row["Produce_record"].'">
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
        </fieldset>';

    }
}
else
{

    $sql = 'SELECT * from horse where HID = ' . $id ;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $sql = 'update horse set Name = "' . $name . '", Birth = "' . $birth . '", Mother = "' . $mother . '", In_foal_to = "' . $inFoal . '", color = "' . $color . '",
                Type = "' . $type . '", Race_record = "' . $race . '", Produce_record = "' . $produce.'"';
    if ($pic != null) {
        $sql = $sql.', picture = "'.$pic.'"';

    }
    if ($tree != null) {
        $sql = $sql.', picture = "'.$tree.'"';

    }
    if ($pedigree != null) {
        $sql = $sql.', picture = "'.$pedigree.'"';

    }
    $sql = $sql.' where HID = '.$id;

    if ($conn->query($sql) === TRUE) {
        if ($pic != null)
        {
            unlink("images/" . $row["picture"]);
            move_uploaded_file($pic, "images/$pic");
        }
        if ($tree != null)
        {
            unlink("images/" . $row["ancestry"]);
            move_uploaded_file($tree, "ancestry/$tree");
        }
        if ($pedigree != null)
        {
            unlink("images/" . $row["pedigree"]);
            move_uploaded_file($pedigree, "pedigree/$pedigree");
        }

        echo '<h1>Success</h1>
            <p>'.$sql.'</p>
            <a href="http://andrewashline.com/otf/admin.php"><button>Continue</button></a> ';

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}
