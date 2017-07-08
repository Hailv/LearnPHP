<?php

namespace Src;

class Connection
{
    static function get($serverName, $database, $userName, $password)
    {
        return new \PDO("mysql:host=$serverName;dbname=$database", $userName, $password);
    }



}