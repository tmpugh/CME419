<?php
/**
 * Created by PhpStorm.
 * User: Taylor
 * Date: 2/21/18
 * Time: 11:40 PM
 */

$page_title="Assignment 6";
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

    if (!empty($_POST['email'])) {

        $email = $_POST['email'];
    } else {
        echo "<p>You did not enter an email.<p/>";
    }

}

?>

    <form action="assignment6.php" method="post">
        <label for="fName">First Name:</label>
        <input type="text" id="fName" name="fName"/><br/>
        <label for="uName">Username:</label>
        <input type="text" id="uName" name="uName"/><br/>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"/><br/>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email"/><br/>


        <input id="submit" type="submit" name="sumbit" value="Submit Form"/>

    </form>



<?php



$to="tmpugh@butler.edu";
$subject="Assignment 6 Form";
$body="A new customer signed up for services:\n";
$body.="Username: $uName\n";
$body.="Password: $password\n";
$body.="Email: $email\n";



if($fName && $uName && $password && $email) {
    $sendMail=mail($to, $subject, $body);
    echo "<p>Thank you, " . $fName . ". We have received your login information. We will contact you shortly.<p/>";


}



include('includes/footer.html');

?>