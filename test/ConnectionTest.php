<?php
/**
 * Created by PhpStorm.
 * User: hieuhpt
 * Date: 08/07/2017
 * Time: 12:19
 */

namespace Test;

use PHPUnit\Framework\TestCase;
use Src\Connection;

class ConnectionTest extends TestCase
{
    private $serverName = "mysql";
    private $wrongServerName = "192.168.1.197";
    private $database = "test";
    private $userName = "root";
    private $password = "root";

    public function testCanBeCreated()
    {
        $this->assertInstanceOf(
            \PDO::class,
            Connection::get($this->serverName, $this->database, $this->userName, $this->password)
        );
    }

    public function testCannotBeCreated()
    {
        $this->expectException(\PDOException::class);

        Connection::get($this->wrongServerName, $this->database, $this->userName, $this->password);
    }
}

