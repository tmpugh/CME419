<?php
/**
 * Created by PhpStorm.
 * User: Taylor
 * Date: 2/25/18
 * Time: 5:55 PM
 */

$page_title="Assignment 10";
include('includes/header.html');



if($_SERVER['REQUEST_METHOD']=='POST') {
    $height = $_POST['height'];
    $width = $_POST['width'];


    function squareFootCalc($height, $width)
    {
        $squareFoot = $height * $width;
        $squareFoot = number_format($squareFoot, 2);
        return $squareFoot;
    }


    $squareFoot = squareFootCalc($height, $width);

    $message = "<p>The square footage is " . $squareFoot . ".</p>";



}


?>

<form action="assignment10.php" method="post">
    <label for="height">Height:</label>
    <input type="text" id="height" name="height"/><br/>
    <label for="width">Width:</label>
    <input type="text" id="width" name="width"/><br/>
    <input type="submit" id="submit" value="Submit"/>
</form>

<?php

echo $message;

include('includes/footer.html');

?>