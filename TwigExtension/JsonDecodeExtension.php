<?php

namespace TangoMan\JsonDecodeBundle\TwigExtension;

/**
 * Class JsonDecode
 * Allows to decode json in twig.
 *
 * @author  Matthias Morin <tangoman@free.fr>
 * @package AppBundle\TwigExtension
 */
class JsonDecodeExtension extends \Twig_Extension
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'jsonDecode';
    }

    /**
     * @return array
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('json_decode', [$this, 'jsonDecodeFunction']),
        ];
    }

    /**
     * @param $json
     *
     * @return string
     */
    public function jsonDecodeFunction($json)
    {
        if (!is_string($json)) {
            return json_decode($json);
        }
        return null;
    }
}
