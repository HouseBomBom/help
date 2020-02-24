<?php
/**
 * Created by PhpStorm.
 * User: House
 * Date: 2019/1/17
 * Time: 下午 03:36
 */

namespace XC\Independent\Kit\Network\Curl\Params;

class JsonEncoder extends AbstractPostEncoder
{
    /**
     * @inheritdoc
     */
    public function encode($params)
    {
        return json_encode($params) ?: '';
    }
}
