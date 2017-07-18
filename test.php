<?php

/**
 * Created by PhpStorm.
 * User: windd01
 * Date: 15/07/2017
 * Time: 10:55
 */
class animal
{
    public $name ="horse";
    public function move(){
        return __METHOD__;
    }
}
$animal - new animal();
echo $animal($name);