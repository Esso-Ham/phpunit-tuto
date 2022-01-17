<?php

declare(strict_types=1);

namespace App\Exercises;

/**
 * @method static int add(int $n) add numbers from 1 up to $n including.
 * @example Numbers::add(3) === 6
 */
final class Numbers
{
    public static function add(int $nb){

        $total = 0;

        for ($i=1; $i < ($nb+1); $i++) { 
            $total += $i;
        }
        
        return $total;
    }
}
