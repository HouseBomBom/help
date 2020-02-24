<?php
/**
 * Created by PhpStorm.
 * User: House
 * Date: 2018/11/7
 * Time: 下午 12:03
 */

namespace XC\Independent\Kit\Tests;

use PHPUnit\Framework\TestCase;
use XC\Independent\Kit\Support\Scalar\ArrayMaster;

class ExampleTest extends TestCase
{
    public function testExample()
    {
        $arr = [2, 3, 4];
        $this->assertTrue(2 == ArrayMaster::first($arr));
    }
}
