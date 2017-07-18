<?php

/**
 * Created by PhpStorm.
 * User: windd01
 * Date: 05/07/2017
 * Time: 15:10
 */
class content
{  private $method;
    public $url;
    public $parameters;
    function get_method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
    function get_url()
    {
        $this->url = explode('/', $_GET['id']);
        return $_GET['id'];
    }
    public function staffinfo()
    {
        $body = file_get_contents("php://input");
        return ($body);
    }
}