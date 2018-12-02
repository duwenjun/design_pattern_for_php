<?php


class  Emperor
{

    private static $emperor = null;

    public static function getSingleton()
    {
        if (is_null(self::$emperor)){
            self::$emperor = new self();
        }
        return self::$emperor;
    }

    public static function say()
    {
        echo "Hello, I'm an emperor";
    }

}