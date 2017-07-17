<?php
/**
 * Created by PhpStorm.
 * User: hieuhpt
 * Date: 08/07/2017
 * Time: 16:32
 */

namespace Src\Entity;


class Staff
{

    private $id;
    private $name;
    private $mobile;
    private $email;

    public function __construct($arrayStaff = [])
    {
        $this
            ->setId(isset($arrayStaff['id']) ? $arrayStaff['id'] : null)
            ->setName(isset($arrayStaff['name']) ? $arrayStaff['name'] : '')
            ->setEmail(isset($arrayStaff['email']) ? $arrayStaff['email'] : '')
            ->setMobile(isset($arrayStaff['mobile']) ? $arrayStaff['mobile'] : '');
    }



    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Staff
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Staff
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param mixed $mobile
     * @return Staff
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     * @return Staff
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

}