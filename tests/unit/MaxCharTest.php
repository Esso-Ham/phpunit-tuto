<?php

declare(strict_types=1);

namespace App\Exercises;

use PHPUnit\Framework\TestCase;
use App\Exercises\MaxChar;

class MaxCharTest extends TestCase
{
    public function testGetMaxChar1(): void
    {
        self::assertSame('q', MaxChar::get('qqweqrty'));
    }

    public function testGetMaxChar2(): void
    {
        self::assertSame('2', MaxChar::get('apple 2202'));
    }

    public function testGetMaxChar3(): void
    {
        self::assertSame('t', MaxChar::get('Testez toujours!'));
    }

}
