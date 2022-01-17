<?php

declare(strict_types=1);

namespace App\Exercises;
    
use PHPUnit\Framework\TestCase;
use App\Exercises\Capitalize;

use function PHPUnit\Framework\assertEquals;

class CapitalizeTest extends TestCase
{
    public function testCapitaliseGet1 (){

        $this->assertSame('Hello There', Capitalize::get('hello there'));
    }

    public function testCapitaliseGet2 (){

        $this->assertSame("Hey, So It's Working!", Capitalize::get("hey, so it's working!"));
    }

    public function testCapitaliseGet3 (){

        $this->assertSame("Je Suis Malade. Tu Me Vois? Ils Nous Cherchent.", Capitalize::get("Je suis malade. Tu me vois? Ils nous cherchent."));
    }

    public function testCapitaliseGet4 (){

        $this->assertSame("Je Suis Malade. Tu Me Vois?", Capitalize::get("JE SUIS MALADE. TU ME VOIS?"));
    }
}
