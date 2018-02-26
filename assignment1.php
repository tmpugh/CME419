<?php
/**
 * Created by PhpStorm.
 * User: Taylor
 * Date: 2/21/18
 * Time: 9:57 PM
 */

$page_title = "Assignment 1";

?>

    <title><?php echo $page_title; ?></title>

<?php
$fName = "Taylor";
$lName = "Pugh";
$street = "2951 Salmon Dr.";
$city = "Los Alamitos";
$state = "California";
$zip =  "90720";

$fullName = $fName . " " . $lName;

echo "Name: $fullName<br/>";
echo "Address: $street<br/>";
echo "$city, $state $zip";



?>

