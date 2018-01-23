<?php
/**
 * Created by PhpStorm.
 * User: tmpugh
 * Date: 1/23/18
 * Time: 11:25 AM
 */

// String Value
$dog = "Janie";
// Integer Value
$age = 13;
// Boolean Values: true or false
$male = true;

echo ($dog);
print "<h1>My dog is $age</h1>";
echo "Is the dog male? $male";

// Single and Double Quotes
echo '<p class="fun">Here is my text</p>';

// Concatenation
echo "My dog is " . $dog . " and she is " . $age . " years old.";

// Arrays
$animals = ["dog", "cat", "mouse", "horse", true, 32];
echo "</br>I hate a $animals[2] the most.";
?>