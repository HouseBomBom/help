<?php
/**
 * Created by PhpStorm.
 * User: House
 * Date: 2018/11/7
 * Time: 下午 01:39
 */

namespace XC\Independent\Kit\Network\Curl\Request;

use XC\Independent\Kit\Support\Scalar\ArrayMaster;
use XC\Independent\Kit\Utils\URLUtil;

class GetRequest extends AbstractMethodRequest
{
    /**
     * @inheritdoc
     */
    public function encodeParams()
    {
        $params = $this->curl->getOriginParams();
        if (ArrayMaster::isList($params)) {
            $sendParams = URLUtil::buildGet($this->curl->getRequestUrl(), $params);
            $this->curl->setActualParams($sendParams);
            $this->curl->setRequestUrl($sendParams);
        }

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function setOptions()
    {
        curl_setopt($this->curl->getCurl(), CURLOPT_HTTPGET, true);

        return $this;
    }
}
