<?php

namespace Codes50;


/**
 * Class PasswordGenerator
 * @package App\Library
 */
class PasswordGenerator
{
    public const MODE_BASIC = 'basic';
    public const MODE_MEDIUM = 'medium';
    public const MODE_COMPLEX = 'complex';

    /**
     * @return string
     */
    public static function Basic()
    {
        return (string)rand(222222, 666666);
    }

    /**
     * @param int $length
     * @return string
     */
    public static function Medium($length = 8)
    {
        $characters = '0123456789ABCDEFGHKLMNPQRSTUVWYZ';

        $string = '';
        $total_caracter = ((int)strlen($characters)) - 1;
        for ($p = 0; $p < $length; $p++) {
            $string .= (string)$characters[mt_rand(0, $total_caracter)];
        }

        return $string;
    }

    /**
     * @param int $length
     * @return string
     */
    public static function Complex($length = 12)
    {
        $characters = '0123456789abcdefghijkmnopqrstuvwxyzABCDEFGHKLMNPQRSTUVWYZ';

        $string = '';
        $total_caracter = ((int)strlen($characters)) - 1;
        for ($p = 0; $p < $length; $p++) {
            $string .= (string)$characters[mt_rand(0, $total_caracter)];
        }

        return $string;
    }

    /**
     * @param $type
     * @return string
     */
    public static function Create($type)
    {
        if ($type === "medium") {
            return self::Medium();
        } elseif ($type === "complex") {
            return self::Complex();
        }

        return self::Basic();
    }
}