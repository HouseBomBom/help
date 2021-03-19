<?php
/**
 * Created by PhpStorm.
 * User: House
 * Date: 2019/5/3
 * Time: 下午 05:52
 */

namespace House\Help\Utils;

use House\Help\Support\Scalar\ArrayMaster;

/**
 * Handle client information.
 * Class ClientUtil
 * @package House\Help\Utils
 */
class ClientUtil
{
    /**
     * Get the real client ip.
     * @param string|null $customize
     * @return string
     */
    public static function ip(string $customize = null)
    {
        $result = $customize;
        if (isset($_SERVER) && !empty($_SERVER['REMOTE_ADDR'])) {
            $result = $_SERVER['REMOTE_ADDR'];
        } else {
            if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                $forwardIps = ArrayMaster::explode($_SERVER['HTTP_X_FORWARDED_FOR']);
                if (ArrayMaster::isList($forwardIps)) {
                    $result = ArrayMaster::first($forwardIps);
                }
            }
        }

        return $result;
    }
}
