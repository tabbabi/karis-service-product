<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Karis\Bundle\ServiceBundle\Controller;

use Karis\Bundle\ServiceBundle\Controller\RessourceController;

/**
 * Description of ProductController
 *
 * @author marouentabbabi
 */
class ProductController extends RessourceController
{
    

    
    
    public function indexAction()
    {
        $productRepository = $this->get($this->config->getServiceName('repository'));
       return $this->render($this->config->getTemplateName('index.html'));
    }
    
}
