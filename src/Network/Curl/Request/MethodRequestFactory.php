<?php
/**
 * Created by PhpStorm.
 * User: House
 * Date: 2018/11/7
 * Time: 下午 03:20
 */

namespace House\Help\Network\Curl\Request;

use House\Help\Constants\HttpMethodConstants;
use House\Help\Contract\IHttpMethodRequest;
use House\Help\Support\Traits\Pattern\Factory;

/**
 * Class HttpRequestFactory
 * @package House\Help\Network\Curl\Request
 * @method static IHttpMethodRequest make(string $key, array $parameters = [])
 */
class MethodRequestFactory
{
    use Factory;

    /**
     * @return array
     */
    public static function map(): array
    {
        return [
            HttpMethodConstants::GET    => GetRequest::class,
            HttpMethodConstants::POST   => PostRequest::class,
            HttpMethodConstants::PUT    => PutRequest::class,
            HttpMethodConstants::PATCH  => PatchRequest::class,
            HttpMethodConstants::DELETE => DeleteRequest::class,
        ];
    }

    /**
     * If want to use static init method by your self , please override this method ant return method string name.
     * @return null|string
     */
    protected static function initMethodName()
    {
        return 'getInstance';
    }
}
