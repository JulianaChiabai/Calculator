<?php
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAddition()
    {
        $this->assertEquals(4, 2 + 2);
    }

    public function testSubtraction()
    {
        $this->assertEquals(0, 2 - 2);
    }

    public function testMultiplication()
    {
        $this->assertEquals(4, 2 * 2);
    }

    public function testDivision()
    {
        $this->assertEquals(1, 2 / 2);
    }

    public function testDivisionByZero()
    {
        $this->expectException(DivisionByZeroError::class);
        $result = 2 / 0;
    }
}
