<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Karis\Component\Service\Model;

use Karis\Component\Service\Model\ProductInterface;
use Karis\Component\Service\Model\CategoryInterface;

class Product implements ProductInterface {
    
    /**
     * Product id
     * 
     * @var mixed
     */
    protected $id;
    
    /**
     * Product name.
     *
     * @var string
     */
    protected $name;
    
    /**
     * Product description.
     *
     * @var string
     */
    protected $description;
    
    protected $category;

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getName() {
        return $this->name;
    }

    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;;
    }
    
    /**
     * {@inheritdoc}
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * {@inheritdoc}
     */
    public function setCategory(CategoryInterface $category = null)
    {
        return $this->category = $category;
    }

}