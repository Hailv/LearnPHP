<?php

/**
 * Created by PhpStorm.
 * User: windd01
 * Date: 18/07/2017
 * Time: 15:57
 */
class Connect
{
    private $db_host = 'mysql';
    private $db_user = 'dev';
    private $db_pass = 'dev';
    private $db_name = 'test';
    function ConnectDB(){
        $Connect = new mysqli($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
        return $Connect;
    }
}
