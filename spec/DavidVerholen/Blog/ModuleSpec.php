<?php

namespace spec\DavidVerholen\Blog;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ModuleSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('DavidVerholen\Blog\Module');
    }
}
