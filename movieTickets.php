<?php
/**
 * Created by PhpStorm.
 * User: Taylor
 * Date: 2/14/18
 * Time: 9:06 PM
 */

$page_title="Movie Tickets";
include('includes/header.html');


// Check to see if form has been submitted
if($_SERVER['REQUEST_METHOD']=='POST') {
    $aQuantity = $_POST['aQuantity'];
    $cQuantity = $_POST['cQuantity'];
    $sQuantity = $_POST['sQuantity'];
    $adult = 7.00;
    $child = 5.00;
    $senior = 6.00;

    //function with parameters
    function ticketCalc($price, $quantity) {
        $ticketTotal = $price * $quantity;
        $ticketTotal = number_format($ticketTotal, 2);
        return $ticketTotal;

    }
    // $totalCost = $adultTotal + $childTotal + $seniorTotal
    $adultTotal = ticketCalc($adult, $aQuantity);
    $childTotal = ticketCalc($child, $cQuantity );
    $seniorTotal = ticketCalc($senior, $sQuantity);
    $totalCost = $adultTotal + $childTotal + $seniorTotal;



    $message =  "<p>Your total ticket cost is $" . number_format($totalCost, 2) . "</p>";




} else {

}


?>

<form method="post" action="movieTickets.php">
<table>
    <tr>
        <th>Tickets</th>
        <th>Price</th>
        <th>Quantity</th>
    </tr>
    <tr>
        <td>Adult</td>
        <td>$7.00</td>
        <td><input type="text" name="aQuantity" value="<?php if(isset($aQuantity)) {echo $aQuantity;} ?>"/></td>
        <td><?php if(isset($adultTotal)) {echo "$" . $adultTotal;} ?></td>
    </tr>
    <tr>
        <td>Child</td>
        <td>$5.00</td>
        <td><input type="text" name="cQuantity" value="<?php if(isset($cQuantity)) {echo $cQuantity;} ?>"/></td>
        <td><?php if(isset($childTotal)) {echo "$" . $childTotal;} ?></td>
    </tr>
    <tr>
        <td>Senior</td>
        <td>$6.00</td>
        <td><input type="text" name="sQuantity" value="<?php if(isset($sQuantity)) {echo $sQuantity;} ?>"/></td>
        <td><?php if(isset($seniorTotal)) {echo "$" . $seniorTotal;} ?></td>
    </tr>

</table>
    <input type="submit" value="Submit Query" id="submit"/>
</form>



<?php

echo $message;

include('includes/footer.html');
?>