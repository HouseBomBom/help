<?php
/**
 * Created by PhpStorm.
 * User: House
 * Date: 2018/11/7
 * Time: 下午 01:39
 */

namespace House\Help\Network\Curl\Request;

class DeleteRequest extends GetRequest
{
    /**
     * @inheritdoc
     */
    public function setOptions()
    {
        curl_setopt($this->curl->getCurl(), CURLOPT_CUSTOMREQUEST, "DELETE");

        return $this;
    }
}
