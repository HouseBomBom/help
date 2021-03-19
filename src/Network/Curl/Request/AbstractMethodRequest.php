<?php
/**
 * Created by PhpStorm.
 * User: House
 * Date: 2019/1/17
 * Time: 下午 03:03
 */

namespace House\Help\Network\Curl\Request;

use House\Help\Contract\IHttpMethodRequest;
use House\Help\Network\Curl\Curl;
use House\Help\Support\Traits\Pattern\Singleton;

abstract class AbstractMethodRequest implements IHttpMethodRequest
{
    use Singleton;
    /**
     * @var Curl
     */
    protected $curl;

    protected function init(Curl $curl)
    {
        $this->curl = $curl;
    }
}
