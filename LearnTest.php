<?php
/**
 * Created by PhpStorm.
 * User: windd01
 * Date: 21/07/2017
 * Time: 10:38
 */
use PHPunit\Framework\TestCase;

class LearnTest extends TestCase
{
    public function testEquals()
    {
        $this->assertEquals(7,7);
    }
    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack);
        return $stack;
    }
    public function TestExpect()
    {
        $test = array(
            1,
            2,
        );
        $this->expectOutputString($test);
        print '';
    }
}