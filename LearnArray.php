<?php
/**
 * Created by PhpStorm.
 * User: windd01
 * Date: 18/07/2017
 * Time: 13:57
 */
$car = array (
    array("Volvo",30,15),
    array("BWM",22,15),
    array("Audi",120,22),
);
//echo $car[0][0]." , in stock : ".$car[0][1].", sold : ".$car[0][2]."<br/>";
//echo $car[1][0]." , in stock : ".$car[1][1].", sold : ".$car[1][2]."<br/>";
//echo $car[2][0]." , in stock : ".$car[2][1].", sold : ".$car[2][2]."<br/>";
for ($row = 0;$row <3;$row++){
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col =0; $col <2; $col++){
        echo "<li>".$car[$row][$col]."</li>";
    }
    echo "</ul>";

}
