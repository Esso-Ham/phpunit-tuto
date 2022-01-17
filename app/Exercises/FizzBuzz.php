<?php

declare(strict_types=1);

namespace App\Exercises;

/**
 * Print numbers from 1 to n.
 * When n is divisible by 3 echo 'fizz'.
 * When n is divisible by 5 echo 'buzz.
 * When n is divisible by both 3 and 5 echo 'fizzbuzz'.
 *
 * @method static void print(int $limit)
 * @example FizzBuzz::print('5') -> '12fizz4buzz'
 */
final class FizzBuzz
{
    public static function print($limit)
    {
        $val = '';
        
        for ($i=1; $i < ($limit+1) ; $i++) { 
            
            if($i % 5 === 0 || $i % 3 === 0){
                if($i % 3 === 0){
                    $val .= 'fizz';
                }

                if($i % 5 === 0){
                    $val .= "buzz";
                }
            }else{            
                $val .= $i;
            }
        }
        return $val;        
    }
}
