<?php

namespace Spec\Minds\Core\Feeds;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class IteratorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Minds\Core\Feeds\Iterator');
    }
}
