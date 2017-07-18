<?php
/**
 * Created by PhpStorm.
 * User: windd01
 * Date: 18/07/2017
 * Time: 14:28
 */
echo "Today is ".date("Y/m/d")."<br/>";
//echo readfile("TestInput.txt");
$myfile = fopen("TestInput.txt", "r") or die ("notthing to open");
echo fread($myfile,filesize("TestInput.txt"));
fclose($myfile);
$myfile = fopen("TestInput.txt", "w") or die ("notthing to open");
$txt = "TestWriteIntoFile";
fwrite($myfile,$txt);
fclose($myfile);