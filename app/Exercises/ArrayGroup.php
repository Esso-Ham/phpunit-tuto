<?php

declare(strict_types=1);

namespace App\Exercises;

/**
 * Divide the array into many sub-arrays,
 * where each subarray is at most of group size.
 *
 * @method static any[] group(any[] $array, int $size)
 * @example ArrayGroup::group([1, 2, 3, 4, 5], 2) -> [[ 1, 2], [3, 4], [5]]
 * @example ArrayGroup::group([1, 2, 3, 4, 5], 3) -> [[ 1, 2, 3], [4, 5]]
 * @example ArrayGroup::group([1, 2, 3, 4, 5], 6) -> [[ 1, 2, 3, 4, 5]]
 */
final class ArrayGroup
{
    public static function group (array $array, int $size){

        $ratio = ceil((count($array)/$size));
		$index = 0;

        if($ratio > 1){
            for ($i=1; $i <= $ratio; $i++) { 
                $finalArray[] = array_slice($array, $index, $size);
                $index += $size;       
            }
            return $finalArray;
        }        

		return array_slice($array, $index, $size);;
    }
}
