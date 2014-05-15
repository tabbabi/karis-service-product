<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Karis\Bundle\ServiceBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Inflector\Inflector;
/**
 * controller Configuration
 *
 * @author marouentabbabi
 */
class Configuration {
    
    /***
     * @var string 
     */
    protected $bundlePrefix;
    
    /**
     * @var string
     */
    protected $resourceName;

    /**
     * @var string
     */
    protected $templateNamespace;

    /**
     * @var string
     */
    protected $templatingEngine;

    /**
     * @var array
     */
    protected $parameters;
    
    
    public function __construct($bundlePrefix, $resourceName, $templateNamespace, $templatingEngine = 'twig') {
        
        $this->bundlePrefix = $bundlePrefix;
        $this->resourceName = $resourceName;
        $this->templateNamespace = $templateNamespace;
        $this->templatingEngine = $templatingEngine;
    }
    
    
    public function getBundlePrefix()
    {
        return $this->bundlePrefix;
    }
    
    public function getRessourceName()
    {
        return $this->resourceName;
    }
    
    public function getTemplateNamespace()
    {
        return $this->templateNamespace;
    }
    
    public function getTemplatingEngine()
    {
        return $this->templatingEngine;
    }
    
    public function getTemplateName($name)
    {
        return sprintf('%s:%s.%s', $this->templateNamespace ?: ':', $name, $this->templatingEngine);
    }
    
    public function getTemplate($name)
    {
        $this->get('template', $this->getTemplateName($name));
    }
    
    public function getFormType()
    {
        return $this->get('form', sprintf('%s_%s', $this->bundlePrefix, $this->resourceName));
    }
    
    public function getRouteName($name)
    {
        return sprintf('%s_%s_%s', $this->bundlePrefix, $this->resourceName, $name);
    }
    
    public function getPluralRessourceName()
    {
        return Inflector::pluralize($this->resourceName);
    }

        public function get($parameters, $default = null)
    {
        return isset($this->parameters[$parameters]) ? $this->parameters[$parameters] : $default;
    }
}
