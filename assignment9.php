<?php
/**
 * Created by PhpStorm.
 * User: Taylor
 * Date: 2/25/18
 * Time: 8:16 PM
 */

$page_title="Assignment 8";

?>

    <title><?php echo $page_title; ?></title>

<?php

function sport($sportName) {
    return "Oh, $sportName? I love $sportName!";
}


$olympics = array ('Snowboarding', 'Figure Skating', 'Hockey', 'Curling', 'Luge');

foreach ($olympics as $value) {
    echo "<li>" . sport($value) . "</li>";
}



?>