<?php
namespace Softr\Vipp\Core\Utils;

/**
 * Collection of string manipulation methods.
 *
 * @author Agência Softr <agencia.softr@gmail.com>
 */
class Str
{
    /**
     * Convert to CamelCase
     *
     * @param   string  $str  Snake case string
     * @return  string  Camel case string
     */
    public static function convertToCamelCase($str)
    {
        $callback = function ($match) {
            return strtoupper($match[2]);
        };

        return lcfirst(preg_replace_callback('/(^|_)([a-z])/', $callback, $str));
    }
}
