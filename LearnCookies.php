<?php
/**
 * Created by PhpStorm.
 * User: windd01
 * Date: 18/07/2017
 * Time: 14:50
 */
$cookie_name ="user";
$cookie_value = "Luong Viet Hai";
setcookie($cookie_name,$cookie_value,time() +(1800), "/");
?>
<html>
<body>
<?php
if(!isset($_COOKIE[$cookie_name])){
    echo "Cookie name '".$cookie_name."'is not set!";
}else
{
    echo "Cookie '".$cookie_name."'is set <br/>";
    echo "Value is : ".$_COOKIE[$cookie_name];
}
?>
</body>
</html>
