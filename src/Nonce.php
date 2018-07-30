<?php

namespace Wu\Nonce;

class Nonce
{
    /**
     * @var int , 随机串长度
     */
    public static $length = 16;

    /**
     * @var string , 随机串字符集
     */
    public static $characters = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    /**
     * @return string , 生成随机串
     */
    public static function generate(): string
    {
        $range = strlen(static::$characters);

        $randomString = '';
        for ($i = 0; $i < static::$length; $i++) {
            $randomString .= static::$characters[rand(0, $range - 1)];
        }

        return $randomString;
    }
}
