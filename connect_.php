<?php

/**
 * Created by PhpStorm.
 * User: windd01
 * Date: 05/07/2017
 * Time: 14:21
 */
class connect_
{
    private $db_host = 'mysql';
    private $db_user = 'dev';
    private $db_pass = 'dev';
    private $db_name = 'test';

    function connect()
    {
        // Tạo biến kết nối với CSDL
        $conn = new mysqli($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
        return $conn;
    }

}