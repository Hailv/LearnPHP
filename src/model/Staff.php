<?php
/**
 * Created by PhpStorm.
 * User: hieuhpt
 * Date: 08/07/2017
 * Time: 16:26
 */

namespace Src\Model;

use Src\Connection;
use Src\DatabaseConfig;
use Src\Entity\Staff as StaffEntity;

class Staff
{
    public function __construct()
    {
        $this->dbh = Connection::get(new DatabaseConfig());
    }

    public function create(StaffEntity $staff)
    {
        $name = $staff->getName();
        $email = $staff->getEmail();
        $mobile = $staff->getMobile();

        $stmt = $this->dbh->prepare("INSERT INTO staff (name, email, mobile) VALUES (:name, :email, :mobile)");

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':mobile', $mobile);

        $stmt->execute();
        
        return $staff->setId($this->dbh->lastInsertId());

    }
}