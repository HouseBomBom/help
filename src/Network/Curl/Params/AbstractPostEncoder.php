<?php
/**
 * Created by PhpStorm.
 * User: House
 * Date: 2019/1/17
 * Time: 下午 03:03
 */

namespace XC\Independent\Kit\Network\Curl\Params;

use XC\Independent\Kit\Contract\Params\IPostEncoder;
use XC\Independent\Kit\Support\Traits\Pattern\Singleton;

abstract class AbstractPostEncoder implements IPostEncoder
{
    use Singleton;

    /**
     * Initialize class.
     * @param array $parameters
     */
    protected function init(...$parameters)
    {
    }

    /**
     * @inheritdoc
     */
    public function encode($params)
    {
        return $params;
    }
}
