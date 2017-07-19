<?php
/**
 * Created by PhpStorm.
 * User: windd01
 * Date: 19/07/2017
 * Time: 09:53
 */
//$xml=simplexml_load_file("LearnXML.xml") or die ("Cannot load file");
//print_r($xml);
//echo "<br/>";
//echo $xml->to . "<br>";
//echo $xml->from . "<br>";
//echo $xml->heading . "<br>";
$xml = simplexml_load_file("Book.xml") or die ( "Cannot load file");
echo $xml->Book[0]->title."<br/>";
echo $xml->Book[1]->title;
//var_dump($xml);
foreach($xml->children() as $books) {
    echo $books->title . ", ";
echo $books->author . ", ";
echo $books->year . ", ";
echo $books->price . "<br>";
}
echo $xml->Book[0]['category'] . "<br>";
echo $xml->Book[1]->title['lang'];