<?php
/**
 * Created by PhpStorm.
 * User: windd01
 * Date: 19/07/2017
 * Time: 09:46
 */
$XMLdata =
    "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
<company>
    <to>HX</to>
    <from>XP</from>
    <heading>REMEMBER</heading>
</company>";
$xml = simplexml_load_string($XMLdata);
if ($xml===FALSE )
{
    echo " Loading XML failed : ";
    foreach(libxml_get_errors() as $error) {
        echo "<br>", $error->message;
    }
}
else {
    print_r($xml);
}