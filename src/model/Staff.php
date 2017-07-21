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
    public function update(StaffEntity $staff)
    {
        $id = $staff->getId();
        $name = $staff->getName();
        $email = $staff->getEmail();
        $mobile = $staff->getMobile();
        $stmt = $this->dbh->prepare("update staff set name = ':name', email = ':email', mobile =  ':mobile'
          where id = $id");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':mobile', $mobile);
        $stmt->execute();
        return $staff->setId($id);
    }
    public function delete(StaffEntity $staff)
    {
        $id = $staff->getId();
        $stmt = $this->dbh->prepare("delete from staff where id = $id");
        $stmt->execute();
        return $staff->setId($id);
    }
    public function get(StaffEntity $staff){
        $id = $staff->getId();
        $result = $this->dbh->prepare("SELECT * FROM staff WHERE id = $id");
        $result->execute();
        $staffArray = $result->fetch(\PDO::FETCH_ASSOC);
        return (new StaffEntity($result->fetch(\PDO::FETCH_ASSOC)))->setId($staffArray['id']);
    }
    public function GetAllStaff()
    {
        $stmt = $this->dbh->prepare("select * from staff");
        $stmt->execute();
        $staffArrayAll = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return (new StaffEntity($staffArrayAll));
    }
}