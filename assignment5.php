<?php
/**
 * Created by PhpStorm.
 * User: Taylor
 * Date: 2/25/18
 * Time: 12:43 PM
 */

$page_title="Assignment 5";
include('includes/header.html');



$sports = array ('Speed Skating', 'Bobsleigh', 'Snowboarding', 'Curling', 'Hockey', 'Luge');

echo "<div class='sportsArray'>";

foreach ($sports as $value) {
    echo "<li>" . $value . "</li>";
}

echo "</div>";


echo "<div class='sportsArray'>";

asort ($sports);

foreach ($sports as $value) {
    echo "<li>" . $value . "</li>";
}

echo "</div>";


echo "<div class='sportsArray'>";

rsort($sports);

foreach ($sports as $value) {
    echo "<li>" . $value . "</li>";
}

echo "</div>";


include('includes/footer.html');

