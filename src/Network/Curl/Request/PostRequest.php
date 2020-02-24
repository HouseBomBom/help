<?php
/**
 * Created by PhpStorm.
 * User: House
 * Date: 2018/11/7
 * Time: 下午 01:39
 */

namespace XC\Independent\Kit\Network\Curl\Request;

use XC\Independent\Kit\Contract\Params\IPostEncoder;
use XC\Independent\Kit\Network\Curl\Curl;
use XC\Independent\Kit\Network\Curl\Params\PostEncoderFactory;

class PostRequest extends AbstractMethodRequest
{
    /**
     * @var IPostEncoder
     */
    private $paramsEncoder;

    protected function init(Curl $curl)
    {
        parent::init($curl);
        $this->paramsEncoder = PostEncoderFactory::make($curl->getContentType());
    }

    /**
     * @inheritdoc
     */
    public function encodeParams()
    {
        $payload = $this->paramsEncoder->encode($this->curl->getOriginParams());
        $this->curl->setActualParams($payload);
        curl_setopt($this->curl->getCurl(), CURLOPT_POSTFIELDS, $payload);

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function setOptions()
    {
        curl_setopt($this->curl->getCurl(), CURLOPT_POST, true);

        return $this;
    }
}
