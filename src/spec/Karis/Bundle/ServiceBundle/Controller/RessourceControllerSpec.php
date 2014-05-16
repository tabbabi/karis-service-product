<?php

namespace spec\Karis\Bundle\ServiceBundle\Controller;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RessourceControllerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Karis\Bundle\ServiceBundle\Controller\RessourceController');
    }
    
    function it_is_a_controller()
    {
        $this->shouldHaveType('Symfony\Bundle\FrameworkBundle\Controller\Controller');
    }
}
