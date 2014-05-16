<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Karis\Bundle\ServiceBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
/**
 * Description of RessourceController
 *
 * @author marouentabbabi
 */
class RessourceController extends FOSRestController{
    
    /**
     * 
     * @param Configuration $configuration
     */
    protected $config;


    public function __construct(Configuration $config) {
        $this->config = $config;
    }
    
    /**
     * @param object|null $ressource
     *
     * @return FormInterface
     */
    public function getForm($ressource = null)
    {
       return $this->createForm($this->config->getFormType(), $ressource);
    }
    
    /**
     * @param string $name
     * 
     * @return EntityRepository
     */
    public function getRepository($name)
    {
        return $this->container->get('doctrine')->getRepository($this->config->getTemplateNamespace($name));
    }
    
   
    
}
