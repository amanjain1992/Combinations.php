<?php

/**
 * Combinations
 *
 * @example See /example folder
 * @author Sony? aka Sawny <andreas@wallstrom.it>
 */
class Combinations
{
    private static $charset;        //See Combinations::with()
    private static $charsetLength;

    public  static $maxLength;     //Max length of combinations (Ie: 3 -> zzz, 4 -> zzzz, 5 -> zzzzz)
    private static $current = 0;



    /**
     * @example `Combinations::with('abcdefghijklmnopqrstuvwxyz')`
     * @example `Combinations::with(range('a', 'z'))` (Identical to the example above)
     */
    public static function with($charset)
    {
        static::$charset       = is_array($charset) ? implode("", $charset) : $charset;
        static::$charsetLength = strlen(static::$charset);

        return new static();
    }



    /**
     * @param (int) $maxLength = a positive integer
     * @example `Combinations::length(4)`
     */
    public static function length($maxLength)
    {
        static::$maxLength = $maxLength;

        return new static();
    }



    /**
     * @example ```
     *      while(($combination = Combinations::next())) {
     *          echo $combination;
     *      }```
     */
    public static function next()
    {
        return static::get(static::$current++);
    }



    /**
     * @example `echo Combination::get(1337)`
     */
    public static function get($num) 
    {
        $chrLen = static::$charsetLength;

        if($num < $chrLen)
            return static::$charset[$num];
        else
        {
            $position = (int) floor($num / $chrLen);

            //Recursion <3
            $combination = static::get($position - 1) . static::$charset[$num % $chrLen];

            return (strlen($combination) <= static::$maxLength) ? $combination : false;
        }
    }
}



?>