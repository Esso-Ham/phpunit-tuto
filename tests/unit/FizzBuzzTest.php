<?php

use PHPUnit\Framework\TestCase;
use App\Exercises\FizzBuzz;

    class FizzBuzzTest extends TestCase
    {
        public function testThat1Print1 (){

            $this->assertEquals("1", FizzBuzz::print(1));
        }

        public function testThat2Print12 (){

            $this->assertEquals("12", FizzBuzz::print(2));
        }

        public function testThat3Print12fizz (){

            $this->assertEquals("12fizz", FizzBuzz::print(3));
        }

        public function testThat4Print12fizz4 (){

            $this->assertEquals("12fizz4", FizzBuzz::print(4));
        }

        public function testThat5Print12fizz4buzz (){

            $this->assertEquals("12fizz4buzz", FizzBuzz::print(5));
        }

        public function testThat6Print12fizz4buzzfizz (){

            $this->assertEquals("12fizz4buzzfizz", FizzBuzz::print(6));
        }

        public function testThat7Print12fizz4buzzfizz7 (){

            $this->assertEquals("12fizz4buzzfizz7", FizzBuzz::print(7));
        }

        public function testThat8Print12fizz4buzzfizz78 (){

            $this->assertEquals("12fizz4buzzfizz78", FizzBuzz::print(8));
        }

        public function testThat9Print12fizz4buzzfizz78fizz (){

            $this->assertEquals("12fizz4buzzfizz78fizz", FizzBuzz::print(9));
        }

        public function testThat10Print12fizz4buzzfizz78fizzbuzz (){

            $this->assertEquals("12fizz4buzzfizz78fizzbuzz", FizzBuzz::print(10));
        }

        public function testThat11Print12fizz4buzzfizz78fizzbuzz11 (){

            $this->assertEquals("12fizz4buzzfizz78fizzbuzz11", FizzBuzz::print(11));
        }

        public function testThat12Print12fizz4buzzfizz78fizzbuzz11fizz (){

            $this->assertEquals("12fizz4buzzfizz78fizzbuzz11fizz", FizzBuzz::print(12));
        }

        public function testThat13Print12fizz4buzzfizz78fizzbuzz11fizz13 (){

            $this->assertEquals("12fizz4buzzfizz78fizzbuzz11fizz13", FizzBuzz::print(13));
        }

        public function testThat14Print12fizz4buzzfizz78fizzbuzz11fizz1314 (){

            $this->assertEquals("12fizz4buzzfizz78fizzbuzz11fizz1314", FizzBuzz::print(14));
        }

        public function testThat15Print12fizz4buzzfizz78fizzbuzz11fizz1314fizzbuzz (){

            $this->assertEquals("12fizz4buzzfizz78fizzbuzz11fizz1314fizzbuzz", FizzBuzz::print(15));
        }

        public function testThat16Print12fizz4buzzfizz78fizzbuzz11fizz1314fizzbuzz16 (){

            $this->assertEquals("12fizz4buzzfizz78fizzbuzz11fizz1314fizzbuzz16", FizzBuzz::print(16));
        }

    }


?>