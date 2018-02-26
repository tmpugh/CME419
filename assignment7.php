<?php
/**
 * Created by PhpStorm.
 * User: Taylor
 * Date: 2/25/18
 * Time: 8:17 PM
 */


$page_title="Assignment 7";
include('includes/header.html');



if($_SERVER['REQUEST_METHOD']=='POST') {



    if (!empty($_POST['fName'])) {

        $fName = $_POST['fName'];
    } else {
        echo "<p>You did not enter a first name.<p/>";
    }

    if (!empty($_POST['uName'])) {

        $uName = $_POST['uName'];
    } else {
        echo "<p>You did not enter a username.<p/>";
    }

    if (!empty($_POST['password'])) {

        $password = $_POST['password'];
    } else {
        echo "<p>You did not enter a password.<p/>";
    }

    if (!empty($_POST['retype'])) {

        $retype = $_POST['retype'];
    } else {
        echo "<p>You did not re-enter your password.<p/>";
    }

    if (!empty($_POST['email'])) {

        $email = $_POST['email'];
    } else {
        echo "<p>You did not enter an email.<p/>";
    }

}


?>


<form action="assignment7.php" method="post">
    <label for="fName">First Name:</label>
    <input type="text" id="fName" name="fName" value="<?php if(isset($fName)) {echo $fName;} ?>"/><br/>
    <label for="uName">Username:</label>
    <input type="text" id="uName" name="uName" value="<?php if(isset($uName)) {echo $uName;} ?>"/><br/>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" value="<?php if(isset($password)) {echo $password;} ?>"/><br/>
    <label for="retype">Retype Password:</label>
    <input type="password" id="retype" name="retype" value="<?php if(isset($retype)) {echo $retype;} ?>"/><br/>
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" value="<?php if(isset($email)) {echo $email;} ?>"/><br/>
    <input id="submit" type="submit" name="sumbit" value="Submit"/>

</form>

<?php



$to="tmpugh@butler.edu";
$subject="Assignment 7 Form";
$body.="Username: $uName\n";
$body.="Password: $password\n";
$body.="Email: $email\n";


if($fName && $uName && $password && $retype && $email) {
    echo "<p>Thank you for your submission, " . $fName . ". Here is the information you submitted:<p/><br/>";
    echo "Email: $email<br/>";
    echo "Username: $uName<br/>";

    if($password == $retype) {
        $sendMail=mail($to, $subject, $body);
        echo "<p> Password: You submitted a " . strlen($password) . "-character long password.</p>";
    } else {
        echo "<p> Password: Your password values do not match. Please resubmit the form.</p>";
    }

}


