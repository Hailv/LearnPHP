<?php
/**
 * Created by PhpStorm.
 * User: hieuhpt
 * Date: 08/07/2017
 * Time: 15:54
 */

namespace Test\Model;

use PHPUnit\Framework\TestCase;
use Src\Connection;
use Src\DatabaseConfig;
use Src\Model\Staff;
use Src\Entity\Staff as StaffEntity;

class StaffTest extends TestCase
{
    private $staffModel;
    private $connection;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $this->staffModel = new Staff();
        $this->connection = Connection::get(new DatabaseConfig());
    }

    public function getStaffById($staffId)
    {
        $result = $this->connection->prepare("SELECT * FROM staff WHERE id = $staffId");
        $result->execute();
        return new StaffEntity($result->fetch(\PDO::FETCH_ASSOC));
    }

    public function testCanCreateByValidStaffEntity()
    {
        $validStaffEntity = new StaffEntity();

        $createdStaff = $this->staffModel->create($validStaffEntity);

        $this->assertInstanceOf(
            StaffEntity::class,
            $createdStaff
        );

    }

    public function testInsertedInDatbase()
    {
        $staff = (new StaffEntity())
            ->setName('Hai')
            ->setEmail('Hai@gmail.com')
            ->setMobile('0969696969');

        $realStaff = $this->getStaffById(
            $this->staffModel->create($staff)->getId()
        );

        $this->assertNotEmpty($realStaff);
    }

    public function testInsertedInDatbaseAndGetRightValue()
    {
        $staff = (new StaffEntity())
            ->setName('Hieu')
            ->setEmail('hieuhpt@gmail.com')
            ->setMobile('0969696969');

        $realStaff = $this->getStaffById(
            $this->staffModel->create($staff)->getId()
        );

        $this->assertEquals($staff->getName(), $realStaff->getName());
        $this->assertEquals($staff->getEmail(), $realStaff->getEmail());
        $this->assertEquals($staff->getMobile(), $realStaff->getMobile());
    }

    public function testStaffInfoCanBeFoundById() {
        $id = 1;

        $this->assertInstanceOf(StaffEntity::class, $this->staffModel->get((new StaffEntity())->setId($id)));
    }

    public function testStaffInfoCanBeFoundAndHasRightId()
    {
        $staffId = 1;
        $staff =  (new StaffEntity())->setId($staffId);
        $this->assertInstanceOf(StaffEntity::class, $this->staffModel->get($staff));
        $this->assertEquals($staffId, $this->staffModel->get($staff)->getId());

    }

}
