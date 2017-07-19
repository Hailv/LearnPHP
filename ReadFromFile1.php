<?php
/**
 * Created by PhpStorm.
 * User: windd01
 * Date: 19/07/2017
 * Time: 10:21
 */
$Parser = xml_parser_create();
function start($Parser,$ElementName,$ElementAttrs)
{
    switch ($ElementName)
    {
        case "NOTE":
            echo "Note"."<br/>";
            break;
        case "TO":
            echo "To:"."<br/>";
            break;
        case "FROM":
            echo "From : "."<br/>";
            break;
        case "HEADING":
            echo "Heading: "."<br/>";
            break;
        case "BODY":
            echo "Message: "."<br/>";

    }
}
function stop($Parser,$Elementname)
{
    echo "<br/>";
}
function char($Parser,$Data)
{
    echo $Data;
}
xml_set_element_handler($Parser,"start","stop");
xml_set_character_data_handler($Parser,"char");
$fp=fopen("Info.xml","r");
while ($Data=fread($fp,4096)) {
    xml_parse($Parser,$Data,feof($fp)) or
    die (sprintf("XML Error: %s at line %d",
        xml_error_string(xml_get_error_code($Parser)),
        xml_get_current_line_number($Parser)));
}

// Free the XML parser
xml_parser_free($Parser);
?>
