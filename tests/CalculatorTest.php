<?php

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();
        $this->assertEquals(5, $calculator->add(2, 3));
    }

    public function testSubtract()
    {
        $calculator = new Calculator();
        $this->assertEquals(1, $calculator->subtract(3, 2));
    }
}