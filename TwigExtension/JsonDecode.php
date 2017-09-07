<?php

namespace TangoMan\JsonDecodeBundle\TwigExtension;

/**
 * Class JsonDecode
 * Allows to decode json in twig.
 *
 * @author  Matthias Morin <tangoman@free.fr>
 * @package AppBundle\TwigExtension
 */
class JsonDecode extends \Twig_Extension
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
    public function getFilters()
    {
        return [
        new \Twig_SimpleFilter('json_decode', [$this, 'jsonDecodeFunction']),
        ];
    }

    /**
     * @param $json
     *
     * @return string
     */
    public function jsonDecodeFunction($json)
    {
        if(! is_string($json)){
            return json_decode($json);
        }
    }
}
