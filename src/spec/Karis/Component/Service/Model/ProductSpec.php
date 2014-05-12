<?php

namespace spec\Karis\Component\Service\Model;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ProductSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Karis\Component\Service\Model\Product');
    }
    
    function it_implements_Servioce_product_interface()
    {
        $this->shouldImplement('Karis\Component\Service\Model\ProductInterface');
    }
    
    function it_has_no_id_by_default()
    {
        $this->getId()->shouldReturn(null);
    }
    
    function it_has_no_name_by_default()
    {
        $this->getName()->shouldReturn(null);
    }
    
    function it_has_no_description_by_default()
    {
        $this->getDescription()->shouldReturn(null);
    }
    
    function its_name_is_mutable()
    {
        $this->setName('first product');
        $this->getName()->shouldReturn('first product');
    }
    
    function its_description_is_mutable()
    {
        $this->setName('description product');
        $this->getName()->shouldReturn('description product');
    }
}
