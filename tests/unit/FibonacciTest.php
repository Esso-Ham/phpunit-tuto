<?php

declare(strict_types=1);

namespace App\Exercises;

use PHPUnit\Framework\TestCase;

class FibonacciTest extends TestCase
{
    public function testGet0Return0(){

        $this->assertSame(0, Fibonacci::get(0));
    }

    public function testGet1Return1(){

        $this->assertSame(1, Fibonacci::get(1));
    }

    public function testGet2Return1(){

        $this->assertSame(1, Fibonacci::get(2));
    }

    public function testGet3Return2(){

        $this->assertSame(2, Fibonacci::get(3));
    }

    public function testGet4Return3(){

        $this->assertSame(3, Fibonacci::get(4));
    }

    public function testGet5Return5(){

        $this->assertSame(5, Fibonacci::get(5));
    }

    public function testGet6Return8(){

        $this->assertSame(8, Fibonacci::get(6));
    }

    public function testGet7Return13(){

        $this->assertSame(13, Fibonacci::get(7));
    }

    public function testGet8Return21(){

        $this->assertSame(21, Fibonacci::get(8));
    }

    public function testGet9Return34(){

        $this->assertSame(34, Fibonacci::get(9));
    }
}
