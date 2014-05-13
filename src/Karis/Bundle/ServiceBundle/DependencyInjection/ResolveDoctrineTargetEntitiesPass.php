<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Karis\Bundle\ServiceBundle\DependencyInjection;



class ResolveDoctrineTargetEntitiesPass implements \Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    
    private $interfaces;

    public function __construct ( array $interfaces )
    {
        $this->interfaces = $interfaces;
    }
    
    public function process(\Symfony\Component\DependencyInjection\ContainerBuilder $container) {
        
        $resolveTargetEntityListener = $container->findDefinition('doctrine.orm.listeners.resolve_target_entity');
        foreach ($this->interfaces as $interface => $model) {
            var_dump($model);
            $resolveTargetEntityListener
                ->addMethodCall('addResolveTargetEntity', array(
                $interface, $model, array()
            ));
        }
        if ( ! $resolveTargetEntityListener->hasTag('doctrine.event_listener')) {
            $resolveTargetEntityListener->addTag('doctrine.event_listener', array('event' => 'loadClassMetadata'));
        }
    
 
}
}

