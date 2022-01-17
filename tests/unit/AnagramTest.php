<?php

    namespace App\Exercises;
    
    use PHPUnit\Framework\TestCase;
    use App\Exercises\Anagram;
    
    class AnagramTest extends TestCase
    {
        public function testAnagram1 (){
            $this->assertTrue(Anagram::result('a', 'a'));
        }

        public function testAnagram2 (){
            $this->assertTrue(Anagram::result('A', 'a'));
        }

        public function testAnagram3 (){
            $this->assertTrue(Anagram::result('ab', 'ab'));
        }

        public function testAnagram4 (){
            $this->assertTrue(Anagram::result('aB', 'ab'));
        }

        public function testAnagram5 (){
            $this->assertTrue(Anagram::result('aBc', 'abc'));
        }

        public function testAnagram6 (){
            $this->assertFalse(Anagram::result('aB', 'abc'));
        }

        public function testAnagram7 (){
            $this->assertTrue(Anagram::result('AbC', 'abc'));
        }

        public function testAnagram8 (){
            $this->assertTrue(Anagram::result('AbC.', 'abc'));
        }

        public function testAnagram9 (){
            $this->assertTrue(Anagram::result('A bC.', 'abc'));
        }

        public function testAnagram10 (){
            $this->assertFalse(Anagram::result('A b.', 'abc'));
        }

        public function testAnagram11 (){
            $this->assertFalse(Anagram::result('AB.', 'abc'));
        }

        public function testAnagram12 (){
            $this->assertTrue(Anagram::result('bac', 'abc'));
        }

        public function testAnagram13 (){
            $this->assertTrue(Anagram::result('rail safety', 'fairy tales'));
        }

        public function testAnagram14 (){
            $this->assertFalse(Anagram::result('roast beef', 'goat roast'));
        }

        public function testAnagram15 (){
            $this->assertTrue(Anagram::result('Elvis', 'lives'));
        }

        public function testAnagram16 (){
            $this->assertTrue(Anagram::result('El. vis', 'lives'));
        }
    }

?>