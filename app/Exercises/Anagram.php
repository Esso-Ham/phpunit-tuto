<?php

declare(strict_types=1);

namespace App\Exercises;

/**
 * Two strings are anagrams if same characters are used in both.
 * Only case insensitive characters, not spaces or punctuation should be counted.
 *
 * @method static bool check(string $first, string $second)
 * @example Anagram::check('rail safety', 'fairy tales') === true
 * @example Anagram::check('roast beef', 'goat roast') === false
 * @example Anagram::check('Elvis', 'lives') === true
 */
final class Anagram
{
    public static function result (string $str1, string $str2){
        
        $str1 = strtolower(str_replace([' ', '.'], '', $str1));
        $str2 = strtolower(str_replace([' ', '.'], '', $str2));

        if(strlen($str1) === strlen($str2)){

            $ar1 = count_chars($str1, 1);
            $ar2 = count_chars($str2, 1);

            $result = array_diff_assoc($ar1, $ar2);

            if(count($result) === 0){
                return true;
            }
            return false;
        }
        return false;
    }
}
