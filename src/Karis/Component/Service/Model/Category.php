<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Karis\Component\Service\Model;

use Karis\Component\Service\Model\CategoryInterface;
use Karis\Component\Service\Model\ProductInterface;
use Doctrine\Common\Collections\Collection;

class Category implements CategoryInterface {
    
    /**
     * Category id
     * 
     * @var mixed
     */
    protected $id;
    
    /**
     * Category name.
     *
     * @var string
     */
    protected $name;
    
    /**
     * Category price
     * 
     * @var float
     */
    protected $price;
    
    
    /**
     * Category products
     * 
     * @var \Doctrine\Common\Collections\Collection|ProductInterface[]
     */
    protected $products;
    
    /**
     * Constructor
     * 
     */
    public function __construct() {
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
    }

        /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    public function getName() {
        
        return $this->name;
    }

    public function getPrice() {
        
        return $this->price;
    }

    public function setName($name) {
        
        $this->name = $name;
        return $this;
    }

    public function setPrice($price) {
        
        $this->price = $price;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getProducts() {
        
        return $this->products;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setProduct(Collection $products)
    {
        foreach ($products as $product) {
            $this->addProduct($product);
        }
        return $this;
    }
    
    /**
     * {@inheritdoc}
     */
    public function addProduct(ProductInterface $product) {
        if(!$this->hasProduct($product)) {
            
            $this->products[] = $product;
        }
        
        return $this;
    }
    
    /**
     * {@inheritdoc}
     */
    public function hasProduct(ProductInterface $product)
    {
        return $this->products->contains($product);
    }
    
    /**
     * {@inheritdoc}
     */
    public function removeProduct(ProductInterface $product)
    {
        if ($this->hasProduct($product)) {
            $product->setCategory(null);
            $this->products->removeElement($product);
        }

        return $this;
    }
    
    
}
