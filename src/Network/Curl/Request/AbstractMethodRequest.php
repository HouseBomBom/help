<?php
/**
 * Created by PhpStorm.
 * User: House
 * Date: 2019/1/17
 * Time: 下午 03:03
 */

namespace XC\Independent\Kit\Network\Curl\Request;

use XC\Independent\Kit\Contract\IHttpMethodRequest;
use XC\Independent\Kit\Network\Curl\Curl;
use XC\Independent\Kit\Support\Traits\Pattern\Singleton;

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
