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
print '<h1>My dog is $age</h1>';
echo "Is the dog male? $male";

// Single and Double Quotes
echo '<p class="fun">Here is my text</p>';

// Concatenation
echo "My dog is " . $dog . " and she is " . $age . " years old.";

// Arrays
$animals = ["dog", "cat", "mouse", "horse", true, 32];
echo "I hate a $animals[2] the most.";
echo "Here is where I go.";
//test

// Constant Variables
define('BIRTHDATE', "07/21/1998");
echo BIRTHDATE , "<br/>";

$x = 10;
$y = 4;

echo "Addition:" . ($x + $y) . "<br/>";
echo "Subtraction:" . ($x - $y) . "<br/>";
echo "Multiplication:" . ($x * $y) . "<br/>";
echo "Division:" . ($x / $y) . "<br/>";
echo "Modulus:" . ($x % $y) . "<br/>";
echo "Increment:" . (++$x) . "<br/>";
echo "Decrement:" . (--$y) . "<br/>";

// Add and Assign
$z = 12;
$z+=5;

// Comparision Operators
$a = 25;
$b = 35;
$c = "25";

var_dump($a==$b);
var_dump($a==$c);
var_dump($a===$c);
var_dump($a!=$b);
var_dump($a!==$c);
var_dump($a<$b);
var_dump($a<=$b);

$show = "big bang theory";
$myNum = 4.56866425;

// Everything Uppercase
echo strtoupper($show);

// First Word Uppercase
echo ucfirst($show);

// First letter every word uppercase
echo ucwords($show);

// Format decimal placement
echo "<br/>" . number_format($myNum, 2);

// random number
echo "<br/>" . mt_rand(0,10);
echo "<br/>" . round($myNum, 3);



?>