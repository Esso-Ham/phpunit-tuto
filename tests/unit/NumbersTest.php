<?php

declare(strict_types=1);

namespace App\Exercises;

use App\Exercises\Numbers;
use PHPUnit\Framework\TestCase;

class NumbersTest extends TestCase
{
    public function testThat2Return3(){
        
        $this->assertSame(3, Numbers::add(2));
    }

    public function testThat3Return6(){
        
        $this->assertSame(6, Numbers::add(3));
    }

    public function testThat6Return21(){
        
        $this->assertSame(21, Numbers::add(6));
    }
}
