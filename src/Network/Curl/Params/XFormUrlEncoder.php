<?php
/**
 * Created by PhpStorm.
 * User: House
 * Date: 2019/1/18
 * Time: 下午 08:00
 */

namespace House\Help\Network\Curl\Params;

use House\Help\Utils\URLUtil;

class XFormUrlEncoder extends AbstractPostEncoder
{
    /**
     * @inheritdoc
     */
    public function encode($params)
    {
        return URLUtil::queryEncode($params);
    }
}
