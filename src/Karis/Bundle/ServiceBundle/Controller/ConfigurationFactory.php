<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Karis\Bundle\ServiceBundle\Controller;

use Karis\Bundle\ServiceBundle\Controller\Configuration;
/**
 * Description of ConfigurationFactory
 *
 * @author marouentabbabi
 */
class ConfigurationFactory {
    
    /**
     * create configuration
     */
    public function createConfiguration($bundlePrefix, $resourceName, $templateNamespace, $templatingEngine = 'twig')
    {
        return new Configuration($bundlePrefix, $resourceName, $templateNamespace, $templatingEngine);
    }

}
