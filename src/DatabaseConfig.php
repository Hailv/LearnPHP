<?php
/**
 * Created by PhpStorm.
 * User: hieuhpt
 * Date: 13/07/2017
 * Time: 19:01
 */

namespace Src;


class DatabaseConfig
{
    private $serverName = "192.168.1.26";
    private $dbname = "default";
    private $userName = "root";
    private $password = "root";

    /**
     * @return string
     */
    public function getDbname(): string
    {
        return $this->dbname;
    }

    /**
     * @param string $dbname
     */
    public function setDbname(string $dbname)
    {
        $this->dbname = $dbname;
    }

    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     */
    public function setUserName(string $userName)
    {
        $this->userName = $userName;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password)
    {
        $this->password = $password;
    }


    /**
     * @return string
     */
    public function getServerName(): string
    {
        return $this->serverName;
    }

    /**
     * @param string $serverName
     */
    public function setServerName(string $serverName)
    {
        $this->serverName = $serverName;
    }


}