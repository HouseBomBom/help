<?php
/**
 * Created by PhpStorm.
 * User: House
 * Date: 2019/1/17
 * Time: 下午 03:03
 */

namespace House\Help\Network\Curl\Params;

use House\Help\Contract\Params\IPostEncoder;
use House\Help\Support\Traits\Pattern\Singleton;

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
