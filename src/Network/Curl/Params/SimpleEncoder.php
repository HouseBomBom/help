<?php
/**
 * Created by PhpStorm.
 * User: House
 * Date: 2019/1/17
 * Time: 下午 04:02
 */

namespace House\Help\Network\Curl\Params;

use House\Help\Network\HttpPostFieldsBuilder;

class SimpleEncoder extends AbstractPostEncoder
{
    /**
     * @inheritdoc
     */
    public function encode($params)
    {
        return HttpPostFieldsBuilder::toCurlFields($params);
    }
}
