<?php
/**
 * Created by PhpStorm.
 * User: Taylor
 * Date: 2/25/18
 * Time: 1:26 PM
 */


$page_title="Assignment 2";
include('includes/header.html');



$x = 12;
$y = 8;


?>


<table>
    <tr>
        <th colspan="2"><?php echo "x=" . $x . " y=" . $y ?></th>
    </tr>
    <tr>
        <th>Operation</th>
        <th>Result</th>
    </tr>
    <tr>
        <td>Addition</td>
        <td><?php echo ($x + $y) ?></td>
    </tr>
    <tr>
        <td>Subtraction</td>
        <td><?php echo ($x - $y) ?></td>
    </tr>
    <tr>
        <td>Multiplication</td>
        <td><?php echo ($x * $y) ?></td>
    </tr>
    <tr>
        <td>Division</td>
        <td><?php echo ($x / $y) ?></td>
    </tr>
    <tr>
        <td>Modulus</td>
        <td><?php echo ($x % $y) ?></td>
    </tr>
    <tr>
        <td>Increment of X</td>
        <td><?php echo (++$x) ?></td>
    </tr>
    <tr>
        <td>Decrement of Y</td>
        <td><?php echo (--$y) ?></td>
    </tr>

</table>

<?php

include('includes/footer.html');

?>