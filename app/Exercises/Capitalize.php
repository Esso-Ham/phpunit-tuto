<?php

declare(strict_types=1);

namespace App\Exercises;

/**
 * Capitalize each word.
 *
 * @method static string get(string $string)
 * @example Capitalize::get('hello there') === 'Hello There'
 * @example Capitalize::get("hey, so it's working!") === "Hey, So It's Working!"
 */
final class Capitalize
{
    public static function get(string $phrase){

        return ucwords(strtolower($phrase));
    }
}
