<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Exercises\ArrayGroup;
use DMS\PHPUnitExtensions\ArraySubset\ArraySubsetAsserts;

/**
 * Divide the array into many sub-arrays,
 * where each subarray is at most of group size.
 *
 * @method static any[] group(any[] $array, int $size)
 * @example ArrayGroup::group([1, 2, 3, 4, 5], 2) -> [[ 1, 2], [3, 4], [5]]
 * @example ArrayGroup::group([1, 2, 3, 4, 5], 3) -> [[ 1, 2, 3], [4, 5]]
 * @example ArrayGroup::group([1, 2, 3, 4, 5], 6) -> [[ 1, 2, 3, 4, 5]]
 */
final class ArrayGroupTest extends TestCase
{
    use ArraySubsetAsserts;
    
    public function testgroup1 (){
        
        $this->assertArraySubset([[ 1, 2], [3, 4], [5]], ArrayGroup::group([1, 2, 3, 4, 5], 2));
    }

    public function testgroup2 (){

        $this->assertArraySubset([[ 1, 2, 3], [4, 5]], ArrayGroup::group([1, 2, 3, 4, 5], 3));

    }

    public function testgroup3 (){

        $this->assertArraySubset([ 1, 2, 3, 4, 5], ArrayGroup::group([1, 2, 3, 4, 5], 6));

    }

    public function testgroup4 (){
        
        $this->assertArraySubset([ [1], [2], [3], [4], [5]], ArrayGroup::group([1, 2, 3, 4, 5], 1));

    }


}
