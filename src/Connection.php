<?php

namespace Src;

class Connection
{
    static function get(DatabaseConfig $config)
    {
        return new \PDO("mysql:host=" . $config->getServerName() . ";dbname=" . $config->getDbname(), $config->getUserName(), $config->getPassword());
    }
}