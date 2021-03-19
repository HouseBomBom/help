<?php
/**
 * Created by PhpStorm.
 * User: House
 * Date: 2018/11/7
 * Time: 下午 12:29
 */

namespace House\Help\Tests\Scalar;

use PHPUnit\Framework\TestCase;
use House\Help\Support\Scalar\ArrayMaster;

class ArrayTest extends TestCase
{
    public function testFirst()
    {
        $arr = [2, 3, 4];
        $this->assertTrue(2 == ArrayMaster::first($arr));
    }

    public function testExplode()
    {
        $arr = '123,223';
        $ex = ArrayMaster::explode($arr);
        var_dump($ex);
        $this->assertTrue(ArrayMaster::isListOrEmpty($ex));
    }
}
