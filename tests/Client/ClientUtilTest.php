<?php
/**
 * Created by PhpStorm.
 * User: House
 * Date: 2019/5/30
 * Time: 下午 03:06
 */

namespace House\Help\Tests\Client;

use PHPUnit\Framework\TestCase;
use House\Help\Utils\ClientUtil;

class ClientUtilTest extends TestCase
{
    public function testIp()
    {
        $this->assertSame('5.5.5.5', ClientUtil::ip('5.5.5.5'));
    }
}
