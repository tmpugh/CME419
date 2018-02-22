<?php
/**
 * Created by PhpStorm.
 * User: tmpugh
 * Date: 1/30/18
 * Time: 11:20 AM
 */


error_reporting(E_ALL);
ini_set('display_errors', 1);

$page_title="Contact Form";
 include('includes/header.html');
 //require('includes/header.html');

 $majorArray = array ("DMP" => "Digital Media Production", "WDD" => "Web Design and Development", "RIS" => "Recording Industry Studies", "SM" => "Sports Media");


 //alphabetical order
asort($majorArray);
//reverse order
rsort($majorArray);

//key sort - alphabetical
ksort($majorArray);
//key sort - reverse
krsort($majorArray);
?>

<form action="procForm.php" method="post">
    <label for="fName">First Name:</label>
    <input type="text" id="fName" name="fName"/><br/>
    <label for="lName">Last Name:</label>
    <input type="text" id="lName" name="lName"/><br/>
    <label for="email">Email:</label>
    <input type="text" id="email" name="email"/><br/>
    <label for="birthdate">Birthdate:</label>
    <?php
    $months = array ('January', 'Februay', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

    echo '<select name="months">';
    foreach ($months as $value) {
        echo '<option value="' . $value . '">' . $value . '</option>';
    } echo '</select>';

    $days = range (1,31);

    echo '<select name="days">';
    foreach ($days as $value) {
        echo '<option value="' . $value . '">' . $value . '</option>';
    } echo '</select>';

    $years = range (1980, 2010);

    echo '<select name="years">';
    foreach ($years as $value) {
        echo '<option value="' . $value . '">' . $value . '</option>';
    } echo '</select>';

    ?>
    <label for="state">Home State:</label>
    <?php
    $states = array (
	'AL'=>'Alabama', 'AK'=>'Alaska', 'AZ'=>'Arizona', 'AR'=>'Arkansas', 'CA'=>'California', 'CO'=>'Colorado',
	'CT'=>'Connecticut', 'DE'=>'Delaware', 'FL'=>'Florida', 'GA'=>'Georgia', 'HI'=>'Hawaii', 'ID'=>'Idaho',
	'IL'=>'Illinois', 'IN'=>'Indiana', 'IA'=>'Iowa', 'KS'=>'Kansas', 'KY'=>'Kentucky', 'LA'=>'Louisiana', 'ME'=>'Maine',
	'MD'=>'Maryland', 'MA'=>'Massachusetts', 'MI'=>'Michigan', 'MN'=>'Minnesota', 'MS'=>'Mississippi', 'MO'=>'Missouri',
	'MT'=>'Montana', 'NE'=>'Nebraska', 'NV'=>'Nevada', 'NH'=>'New Hampshire', 'NJ'=>'New Jersey', 'NM'=>'New Mexico',
	'NY'=>'New York', 'NC'=>'North Carolina', 'ND'=>'North Dakota', 'OH'=>'Ohio', 'OK'=>'Oklahoma', 'OR'=>'Oregon',
	'PA'=>'Pennsylvania', 'RI'=>'Rhode Island', 'SC'=>'South Carolina', 'SD'=>'South Dakota', 'TN'=>'Tennessee', 'TX'=>'Texas',
	'UT'=>'Utah', 'VT'=>'Vermont', 'VA'=>'Virginia', 'WA'=>'Washington', 'WV'=>'West Virginia', 'WI'=>'Wisconsin', 'WY'=>'Wyoming',);

    echo '<select name="state">';
    foreach ($states as $value) {
        echo '<option value="' . $value . '">' . $value . '</option>';
    } echo '</select>';
    ?><br/>
    <label for="gender">Gender:</label>
    <input type="radio" id="male" name="gender" value="male"/>
    <label id="gender" for="male">Male</label>
    <input type="radio" id="female" name="gender" value="female"/>
    <label id="gender" for="female">Female</label><br/>
    <label for="majors">Major:</label>
    <select id="majors" name="majors">
        <option>Choose a major...</option>
        <option value="DMP">Digital Media Production</option>
        <option value="WDD">Web Design and Development</option>
        <option value="RIS">Recording Industry Studies</option>
        <option value="SM">Sports Media</option>
    </select><br/>
    <?php
    //echo '<select name="majors">';
//<option>Choose a major...</option>';
    //foreach($majorArray as $key => $value) {
        //echo '<option value="' . $key . '">' . $value . "</option>";
   // }

    ?>
    <label for="comments">Comments:</label>
    <textarea id="comments" name="comments"></textarea><br/>
    <input id="submit" type="submit" name="sumbit" value="Submit Form"/>

</form>



<?php

echo "<div id='array'>";

$college = 'College of Communication';

echo "<h2> $college </h2>";

$csd = array ('Communication Sciences and Disorders');
$cme = array ('Digital Media Production', 'Interactive Media', 'Recording Industry Studies');
$ccm = array ('Critical Communication and Media Studies');
$hcol = array ('Human Communication and Organizational Leadership');
$journalism = array ('Journalism', 'Sports Media');
$stratCom = array ('Strategic Communication', 'Public Relations', 'Advertising');

$ccom = array (
    "Communication Sciences and Disorders" => $csd,
    "Creative Media and Entertainment" => $cme,
    "Critical Communication and Media Studies" => $ccm,
    "Human Communication and Organizational Leadership" => $hcol,
    "Journalism" => $journalism,
    "Strategic Communication" => $stratCom
);

foreach($ccom as $ccomArray => $majors) {
    echo "<h3>" . $ccomArray . "</h3><ul>";
    foreach($majors as $value) {
        echo "<li>" . $value . "</li>";
    }
    echo "</ul>";
}

echo "</div>";


include('includes/footer.html');
?>