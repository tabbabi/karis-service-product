<?php

namespace spec\Karis\Component\Service\Builder;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Karis\Bundle\ServiceBundle\Repository\ProductRepository;
use Karis\Component\Service\Model\ProductInterface;

class ProductBuilderSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Karis\Component\Service\Builder\ProductBuilder');
    }
    
    function let(\Doctrine\ORM\EntityManager $em, ProductRepository $productRepository, ProductInterface $product) 
    {
                $this->beConstructedWith($em, $productRepository,$product);
                $productRepository->createNew()->willReturn($product);
                $this->create('test product')->shouldReturn($this);
    }
    
    function it_saves_product($em,$product) {
        $em->persist($product)->shouldBeCalled();;
        $em->flush()->shouldBeCalled();;

        $this->save()->shouldReturn($product);
    }
}
