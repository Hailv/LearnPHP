<?php
/**
 * Created by PhpStorm.
 * User: windd01
 * Date: 18/07/2017
 * Time: 15:05
 */
session_start();
echo $_SESSION;
var_dump($_SESSION);
$_SESSION['name']='Việt Hải';
echo $_SESSION;
var_dump($_SESSION);
$array=[1,2,3,4,5,'Việt Hải'];
$_SESSION['number']=$array;
var_dump($_SESSION);
if (isset($_SESSION['name']))
{
    echo $_SESSION['name'];
}
session_destroy();