<?php
namespace Karis\Component\Service\Model;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use Karis\Component\Service\Model\CategoryInterface;
/**
 * Basic Product interface
 * 
 * @author marouentabbabi
 */
interface ProductInterface {
   
    /**
     * Get product name.
     *
     * @return string
     */
    public function getName();

    /**
     * Set product name.
     *
     * @param string $name
     */
    public function setName($name);
    
    /**
     * Get product description.
     *
     * @return string
     */
    public function getDescription();

    /**
     * Set product description.
     *
     * @param string $description
     */
    public function setDescription($description);
    
    /**
     * Get category.
     *
     * @return CategoryInterface
     */
    public function getCategory();
 
    /**
     * Set category.
     *
     * @param CategoryInterface $category
     */
    public function setCategory(CategoryInterface $category = null);
    
   
}
