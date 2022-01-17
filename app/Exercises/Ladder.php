<?php

declare(strict_types=1);

namespace App\Exercises;

/**
 * Print a ladder.
 *
 * @method static void print(int $level)
 * @example Ladder::print(3)  -> '#  '
 *                               '## '
 *                               '###'
 */
final class Ladder
{
    public static function print(int $nb){

        $text = "";
        $loop = 1;

        for ($i=1; $i <= $nb; $i++) {

            if ($loop > 1) {
                $text .= ' ';
            }

            for ($f=1; $f <= $i; $f++) { 
                $text .= '#';
            }
            $loop++;        
        }

        echo $text;
    }
}
