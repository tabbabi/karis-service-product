<?php

namespace spec\Karis\Bundle\ServiceBundle\Controller;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ConfigurationSpec extends ObjectBehavior
{
    
    function let()
    {
        $this->beConstructedWith('karis', 'product', 'KarisServiceBundle:Product', 'twig');
    }
            
    function it_is_initializable()
    {
        $this->shouldHaveType('Karis\Bundle\ServiceBundle\Controller\Configuration');
    }
    
    function it_returns_assigned_bundle_prefix()
    {
        $this->getBundlePrefix()->shouldReturn('karis');
    }
    
    function it_returns_assigned_ressource_name()
    {
        $this->getRessourceName()->shouldReturn('product');
    }
    
    function it_returns_assigned_template_namespace()
    {
        $this->getTemplateNamespace()->shouldReturn('KarisServiceBundle:Product');
    }
    
    function it_returns_assigned_templating_engine()
    {
        $this->getTemplatingEngine()->shouldReturn('twig');
    }
    
    function it_returns_template_name()
    {
        $this->getTemplateName('index.html')->shouldReturn('KarisServiceBundle:Product:index.html.twig');
    }
    
    
    function it_returns_route_name()
    {
        $this->getRouteName('show')->shouldReturn('karis_product_show');
    }
    
    function it_returns_plural_ressource_name()
    {
        $this->getPluralRessourceName()->shouldReturn('products');
    }
    
    function it_returns_service_name()
    {
        $this->getServiceName('repository')->shouldReturn('karis.repository.product');
    }
    
}
