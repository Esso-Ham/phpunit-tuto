<?php

declare(strict_types=1);

namespace App\Exercises;

/**
 * Find the most used character.
 *
 * @method static string get(string $string)
 * @example MaxChar::get('qqweqrty')  === 'q'
 * @example MaxChar::get('apple 2202')  === '2'
 */
final class MaxChar
{
    public static function get(string $text){

        $char = "";
        $value = 0;
       
        foreach (count_chars(strtolower($text), 1) as $i => $val) {
            if ($value < $val) {
                $char = chr($i);
                $value = $val;
            }
        }
        return $char;
    }
}
