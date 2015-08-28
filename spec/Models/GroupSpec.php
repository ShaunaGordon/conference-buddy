<?php

namespace spec\App\Models;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GroupSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('App\Models\Group');
    }
}
