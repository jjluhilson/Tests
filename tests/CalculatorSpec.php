<?php

namespace spec\Sainsburys;

use Sainsburys\Calculator;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CalculatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Calculator::class);
    }

    function it_adds_two_numbers_together()
    {
        $this->add(7, 9)->shouldReturn(16);
        $this->add(6, 10)->shouldReturn(16);
        $this->add(23, 49)->shouldReturn(72);
    }
}
