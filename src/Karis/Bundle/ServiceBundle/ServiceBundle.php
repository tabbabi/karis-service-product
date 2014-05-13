<?php

namespace Karis\Bundle\ServiceBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use \Doctrine\Bundle\DoctrineBundle\DependencyInjection\Compiler\DoctrineOrmMappingsPass;

class ServiceBundle extends Bundle
{
    
    /**
     * {@inheritdoc}
     */
    public function build(\Symfony\Component\DependencyInjection\ContainerBuilder $container) {
        
        $interfaces = array(
            'Karis\Component\Service\Model\CategoryInterface'        => 'Karis\Component\Service\Model\Category',
            'Karis\Component\Service\Model\ProductInterface'        => 'Karis\Component\Service\Model\Product',
        );
        $container->addCompilerPass(new DependencyInjection\ResolveDoctrineTargetEntitiesPass($interfaces));
        $mappings = array(
            realpath(__DIR__ . '/Resources/config/doctrine/model') => 'Karis\Component\Service\Model',
        );
        $container->addCompilerPass(DoctrineOrmMappingsPass::createXmlMappingDriver($mappings, array('doctrine.orm.entity_manager'),false));
        
   



        
    }
    
    
}
