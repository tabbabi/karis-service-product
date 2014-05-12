<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Karis\Component\Service\Model;

use Karis\Component\Service\Model\ProductInterface;

/**
 *
 * @author marouentabbabi
 */
interface CategoryInterface {
    
    /**
     * Get Category name.
     * 
     * @return string $name
     */
    public function getName();
    
    /**
     * Set Category name.
     * 
     * @param string $name
     */
    public function setName($name);
    
    /**
     * Get category price
     * 
     * @return float $price
     */
    public function getPrice();
    
    /**
     * Set Category price
     * 
     * @param float $price
     */
    public function setPrice($price);
    
    
}
