<?php
/**
 * Created by PhpStorm.
 * User: tmpugh
 * Date: 1/30/18
 * Time: 12:07 PM
 */


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


if(!empty($_POST['email'])) {

    $email = $_POST['email'];
} else {
    echo "<p>You did not enter an email address.<p/>";
}

if(!empty($_POST['months'])) {

    $months = $_POST['months'];
} else {
    echo "<p>You did not enter a birthdate.<p/>";
}

if(!empty($_POST['days'])) {

    $days = $_POST['days'];
} else {
    echo "<p>You did not enter a birthdate.<p/>";
}

if(!empty($_POST['years'])) {

    $years = $_POST['years'];
} else {
    echo "<p>You did not enter a birthdate.<p/>";
}

$birthdate = $months . " " . $days . " " . $years;

if(!empty($_POST['state'])) {

    $state = $_POST['state'];
} else {
    echo "<p>You did not enter a home state.<p/>";
}

if($_POST['gender']=="male") {
    $gender = "male";
} elseif($_POST['gender']=="female") {
    $gender = "female";
} else {
    echo"<p>You did not select your gender.</p>";
}

// Switch statement
if(!empty($_POST['majors'])) {
    $major = $_POST['majors'];
    switch($major) {
        case "DMP":
            $majorName = "Digital Media Production";
            break;
        case "WDD":
            $majorName = "Web Design and Development";
            break;
        case "RIS":
            $majorName = "Recording Industry Studies";
            break;
        case "SM":
            $majorName = "Sports Media";
            break;
        default:
            echo "<p>You did not choose a major.</p>";
            break;
    }
}

//Comment
if(!empty($_POST['comments'])) {
    $comment = $_POST['comments'];
}else {
    echo "<p>You did not write a comment.</p>";
}

$fullName = $fName . " " . $lName;


//For email
$to="tmpugh@butler.edu";
$subject="CME419 Test Form";
$body="Name: $fullName\n";
$body.="Email: $email\n";
$body.="Birthdate: $birthdate\n";
$body.="Home State: $state\n";
$body.="Gender: $gender\n";
$body.="Major: $majorName\n";
$body.="Comment: $comment\n";

$sendMail=mail($to, $subject, $body);



if($fName && $lName && $email && $birthdate && $state && $gender && $majorName && $comment) {

        echo "<p>Thank you, $fullName for submitting your information. This is the information we recieved:</p>";
        echo "Email Address: $email<br/>";
        echo "Birthdate: $birthdate<br/>";
        echo "Home State: $state<br/>";
        echo "Gender: $gender<br/>";
        echo "Major: $majorName<br/>";
        echo "Comment: $comment<br/>";

} else {
    echo "First Name" . $fName;
    echo "Last Name" . $lName;
    echo "Email" . $email;
    echo "Birthdate" . $birthdate;
    echo "Home State" . $state;
    echo "Gender" . $gender;
    echo "Major" . $majorName;
    echo "Comment" . $comment;
}

