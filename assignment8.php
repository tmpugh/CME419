<?php
/**
 * Created by PhpStorm.
 * User: Taylor
 * Date: 2/25/18
 * Time: 1:51 PM
 */

$page_title="Assignment 8";

?>

    <title><?php echo $page_title; ?></title>


<?php



$cme219 = array ('HTML', 'CSS');
$cme306 = array ('Flexbox', 'CSS Grid');
$cme419 = array ('PHP', 'MySQL');
$cme422 = array ('Angular', 'Ionic');

$classes = array (
    "CME219" => $cme219,
    "CME306" => $cme306,
    "CME419" => $cme419,
    "CME422" => $cme422
);

$web = array ("Web Design and Development" => $classes);

foreach($web as $webArray => $classes) {
    echo "<h4>" . $webArray . "</h4><ul>";
    foreach ($classes as $classesArray => $topics) {
        echo "<li>" . $classesArray . ": " ;
        foreach ($topics as $value) {
            if ($value === end($topics)) {
                echo $value;
            } else
                echo $value . " &amp; ";
        }
        echo "</li>";
    }
    echo "</ul>";
}


