<?php

declare(strict_types=1);

namespace App\Exercises;

use PHPUnit\Framework\TestCase;
use App\Exercises\Ladder;

class LadderTest extends TestCase
{
    public function testPrintLadder1(): void
    {
        $this->expectOutputString('#');
        Ladder::print(1);
    }

    public function testPrintLadder2(): void
    {
        $this->expectOutputString('# ##');
        Ladder::print(2);
    }

    public function testPrintLadder3(): void
    {
        $this->expectOutputString('# ## ###');
        Ladder::print(3);
    }

    public function testPrintLadder4(): void
    {
        $this->expectOutputString('# ## ### ####');
        Ladder::print(4);
    }

    public function testPrintLadder5(): void
    {
        $this->expectOutputString('# ## ### #### #####');
        Ladder::print(5);
    }

    public function testPrintLadder6(): void
    {
        $this->expectOutputString('# ## ### #### ##### ######');
        Ladder::print(6);
    }
}
