<?php
/**
 * Created by PhpStorm.
 * User: hieuhpt
 * Date: 08/07/2017
 * Time: 16:26
 */

namespace Src\Model;

use Src\Entity\Staff as StaffEntity;

class Staff
{
    public function create()
    {
        return new StaffEntity();
    }
}