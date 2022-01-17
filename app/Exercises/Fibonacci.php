<?php

declare(strict_types=1);

namespace App\Exercises;

/**
 * The fibonacci series is a series of numbers where
 * each consecutive number is the sum of the previous two.
 * For example [0, 1, 1, 2, 3, 5, 8, 13, 21, 34, ∞]
 *
 * @method static int get(int $index)
 * @example Fibonacci::get(7) === 13
 */
final class Fibonacci
{
    public static  function get(int $index){

        $tab = [0, 1];
        $nb = 0;

        for ($i=0; $i <= $index; $i++) {

            if($i < 2){
                $nb = $index;                
            }else{
                $nb = $tab[0] + $tab[1];
                array_push($tab, $nb);
                array_shift($tab);
            }           
        }

        return $nb;
    }
}
