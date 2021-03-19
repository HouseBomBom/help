<?php
/**
 * Created by PhpStorm.
 * User: House
 * Date: 2018/11/7
 * Time: 下午 03:20
 */

namespace House\Help\Network\Curl\Params;

use House\Help\Constants\ContentTypeConstants;
use House\Help\Contract\Params\IPostEncoder;
use House\Help\Support\Traits\Pattern\Factory;

/**
 * Class PostParamEncoderFactory
 * @package House\Help\Network\Curl\Params
 * @method static IPostEncoder make(string $key, array $parameters = [])
 */
class PostEncoderFactory
{
    use Factory;

    /**
     * @return array
     */
    public static function map(): array
    {
        return [
            ContentTypeConstants::JSON              => JsonEncoder::class,
            ContentTypeConstants::BINARY_XML        => BinaryXMLEncoder::class,
            ContentTypeConstants::TEXT_XML          => TextXMLEncoder::class,
            ContentTypeConstants::TEXT_PLAIN        => TextPlainEncoder::class,
            ContentTypeConstants::TEXT_HTML         => TextHTMLEncoder::class,
            ContentTypeConstants::X_FORM_URLENCODED => XFormUrlEncoder::class,
        ];
    }

    /**
     * @inheritdoc
     */
    protected static function initMethodName()
    {
        return 'getInstance';
    }

    /**
     * @inheritdoc
     */
    protected static function defaultConcrete()
    {
        return SimpleEncoder::class;
    }
}
