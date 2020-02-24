<?php
/**
 * Created by PhpStorm.
 * User: House
 * Date: 2018/11/7
 * Time: 下午 01:39
 */

namespace XC\Independent\Kit\Network\Curl\Request;

class PatchRequest extends AbstractMethodRequest
{
    /**
     * @inheritdoc
     */
    public function encodeParams()
    {
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function setOptions()
    {
        return $this;
    }
}
