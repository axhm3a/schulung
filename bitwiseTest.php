<?php

class bitwiseTest extends PHPUnit_Framework_TestCase
{

    public function testXor()
    {
        $this->assertSame(0xF0F0, 0xF00F ^ 0x00FF);
        $this->assertSame("\x00\x04\x00\x00\x00", 'hallo' ^ 'hello');
    }

    public function testOr()
    {
        $this->assertSame(0xF0FF, 0xF00F | 0x00FF);
    }

    public function testAnd()
    {
        $this->assertSame(0x000F, 0xF00F & 0x00FF);
    }

    public function testNot()
    {
        // den 0-Punkt beachten
        $this->assertSame(- 0xF1, ~ 0xF0);
        $this->assertSame(- 51, ~ 50);
    }

    public function testShift()
    {
        $this->assertSame(0xFE, 0x7F << 1);
        $this->assertSame(20, 5 << 2);
        $this->assertSame(40, 5 << 3);
        $this->assertSame(5, 80 >> 4);
    }
}
