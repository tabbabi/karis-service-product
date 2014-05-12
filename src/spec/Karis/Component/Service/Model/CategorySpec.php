<?php

namespace spec\Karis\Component\Service\Model;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
//se Karis\Component\Service\Model\ProductInterface;

class CategorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Karis\Component\Service\Model\Category');
    }
    
    function it_implements_Service_category_interface()
    {
        $this->shouldImplement('Karis\Component\Service\Model\CategoryInterface');
    }
    
    function it_has_no_id_by_default()
    {
        $this->getId()->shouldReturn(null);
    }
    
    function it_has_no_name_by_default()
    {
        $this->getName()->shouldReturn(null);
    }
    
    function it_has_no_price_by_default()
    {
        $this->getPrice()->shouldReturn(null);
    }
    
    function its_name_is_mutable()
    {
        $this->setName('first category');
        $this->getName()->shouldReturn('first category');
    }
    
    function its_price_is_mutable()
    {
        $this->setName(100);
        $this->getName()->shouldReturn(100);
    }
    
    function it_initializes_product_collection_by_default()
    {
        $this->getProducts()->shouldHaveType('Doctrine\Common\Collections\Collection');
    }
    
    function it_adds_product(\Karis\Component\Service\Model\ProductInterface $product) {
        
        $product->setCategory($this);
        $this->addProduct($product);
        $this->hasProduct($product)->shouldReturn(false);
    }
}
