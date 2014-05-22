<?php


namespace Karis\Bundle\ServiceBundle\Controller;


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
    
    public function getRouteName($name)
    {
        return sprintf('%s_%s_%s', $this->bundlePrefix, $this->resourceName, $name);
    }
    
    public function getPluralRessourceName()
    {
        return Inflector::pluralize($this->resourceName);
    }
    
    public function getServiceName($service)
    {
        return sprintf('%s.%s.%s', $this->bundlePrefix, $service, $this->resourceName);
    }

   
}
