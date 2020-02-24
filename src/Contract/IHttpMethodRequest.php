<?php
/**
 * Created by PhpStorm.
 * User: House
 * Date: 2018/11/7
 * Time: 下午 01:37
 */

namespace XC\Independent\Kit\Contract;

interface IHttpMethodRequest
{
    /**
     * Encode the conn client take params.
     * @return $this
     */
    public function encodeParams();

    /**
     * Setting the required options.
     * @return $this
     */
    public function setOptions();
}
