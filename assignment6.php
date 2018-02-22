<?php
/**
 * Created by PhpStorm.
 * User: Taylor
 * Date: 2/21/18
 * Time: 11:40 PM
 */

$page_title="Contact Form";
include('includes/header.html');
//require('includes/header.html');


?>

    <form action="procForm.php" method="post">
        <label for="fName">First Name:</label>
        <input type="text" id="fName" name="fName"/><br/>
        <label for="uName">Username:</label>
        <input type="text" id="uName" name="uName"/><br/>
        <label for="password">Password:</label>
        <input type="text" id="password" name="password"/><br/>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email"/><br/>


        <input id="submit" type="submit" name="sumbit" value="Submit Form"/>

    </form>



<?php

// Check for first name
if(!empty($_POST['fName'])) {

    $fName = $_POST['fName'];
} else {
    echo "<p>You did not enter a first name.<p/>";
}


// Check for last name
if(!empty($_POST['lName'])) {

    $lName = $_POST['lName'];
} else {
    echo "<p>You did not enter a last name.<p/>";
}

if(!empty($_POST['address'])) {

    $address = $_POST['address'];
} else {
    echo "<p>You did not enter an email address.<p/>";
}

if(!empty($_POST['city'])) {

    $city = $_POST['city'];
} else {
    echo "<p>You did not enter a street address.<p/>";
}


if(!empty($_POST['state'])) {

    $state = $_POST['state'];
} else {
    echo "<p>You did not enter a home state.<p/>";
}

if(!empty($_POST['zip'])) {

    $zip = $_POST['zip'];
} else {
    echo "<p>You did not enter a zip code.<p/>";
}


$fullName = $fName . " " . $lName;


$to="tmpugh@butler.edu";
$subject="Assignment 1 Form";
$body="Name: $fullName\n";
$body.="Address: $address\n";
$body.="$city, $state $zip\n";


$sendMail=mail($to, $subject, $body);



if($fName && $lName && $address && $city && $state && $zip) {

    echo "Name: $fullName <br/>";
    echo "Address: $address<br/>";
    echo "$city, $state $zip";


} else {
    echo "First Name" . $fName;
    echo "Last Name" . $lName;
    echo "Street Address" . $address;
    echo "City" . $city;
    echo "State" . $state;
    echo "Zip" . $zip;
}



include('includes/footer.html');
?>