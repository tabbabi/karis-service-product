<?php

namespace spec\Karis\Bundle\ServiceBundle\Form\Type;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Symfony\Component\Form\FormBuilder;

class CategoryTypeSpec extends ObjectBehavior
{
    
    function let()
    {
        $this->beConstructedWith('Category');
    }
            
    function it_is_initializable()
    {
        $this->shouldHaveType('Karis\Bundle\ServiceBundle\Form\Type\CategoryType');
    }
    
    function it_a_form_type()
    {
        $this->shouldImplement('Symfony\Component\Form\FormTypeInterface');
    }
    
    function it_builds_form(FormBuilder $builder)
    {
        $builder
                ->add('name', 'text', Argument::any())
                ->shouldBeCalled()
                ->willReturn($builder);
        $builder
                ->add('price', null, Argument::any())
                ->shouldBeCalled()
                ->willReturn($builder);
        $this->buildForm($builder,array());
    }
    
    function it_defines_assigned_data_class(\Symfony\Component\OptionsResolver\OptionsResolver $resolver) 
    {
        $resolver
                ->setDefaults(array('data_class' => 'Category'));
        $this->setDefaultOptions($resolver);
    }
            
    function it_has_valid_name()
    {
        $this->getName()->shouldReturn('karis_category');
    }
}
