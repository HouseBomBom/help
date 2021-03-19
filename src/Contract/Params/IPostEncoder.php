<?php
/**
 * Created by PhpStorm.
 * User: House
 * Date: 2019/1/17
 * Time: 下午 03:24
 */

namespace House\Help\Contract\Params;

interface IPostEncoder
{
    /**
     * @param array|string|resource $params
     * @return array|string|resource
     */
    public function encode($params);
}
