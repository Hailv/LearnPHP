<?php
/**
 * Created by PhpStorm.
 * User: windd01
 * Date: 18/07/2017
 * Time: 10:42
 */
class car
{
    function car()
    {
        $this->model= "WTF";
        return 0;
    }
}
$testcar = new car();
echo $testcar->model;
echo '<br/>';
echo $testcar->car();
define("hello","Hello World !!!!");
echo hello;
$a=15;
if ($a>16)
{
    echo "test1"."<br/>";
}
else
{
    echo "test2"."<br/>";
}
$x=1;
while ($x<=5){
    echo $x;
    echo "<br/>";
    $x++;
}
$y=100;
do{
    Echo $y;
    echo "<br/>";
    $y++;
} while ($y<5);
for ($z=0;$z<=10;$z++){
    echo $z;
    echo "<br/>";
}
$color1 = array ("red","red1","red2","red3 ");
foreach ($color1 as $value);
{
    echo "$value <br/>";
}
$car1 = array ("car 1","car 2","car 3");
echo $car1[0];
echo $car1[1];
echo $car1;
echo count($car1);
$length = count($car1);
for ($i=0;$i<=$length;$i++){
    echo $car1[$i];
    echo "<br/>";
}
sort($car1);