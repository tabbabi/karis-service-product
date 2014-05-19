<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Karis\Component\Service\Builder;

use Karis\Component\Service\Model\ProductInterface;
/**
 *
 * @author marouentabbabi
 */
interface ProductBuilderInterface {
    
  
    /**
     * Create new Product 
     * @param string $name
     */
    public function create($name);

        /**
     * Save product
     * @param Boolean $flush
     * 
     * @return ProductInterface
     */
    public function save($flush = true);
}
