<?php
/**
 * Created by PhpStorm.
 * User: hieuhpt
 * Date: 08/07/2017
 * Time: 15:54
 */

namespace Test\Model;

use PHPUnit\Framework\TestCase;
use Src\Model\Staff;
use Src\Entity\Staff as StaffEntity;

class StaffTest extends TestCase
{
    private $staffModel;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $this->staffModel = new Staff();
    }

    public function testCanCreateByValidStaffEntity()
    {
        $staff = new StaffEntity();

        $this->assertInternalType(
            "int",
            $this->staffModel->create($staff)->getId()
        );
    }

}