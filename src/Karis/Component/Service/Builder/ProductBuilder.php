<?php

namespace Karis\Component\Service\Builder;

use Karis\Bundle\ServiceBundle\Repository\ProductRepository;
use Karis\Component\Service\Model\ProductInterface;

class ProductBuilder implements ProductBuilderInterface {
    
    /**
     * 
     * @param \Doctrine\ORM\EntityManager $em
     */
    protected $em;
    
    /**
     * @var ProductInterface
     */
    protected $product;
    
    /**
     * 
     * @param ProductRepository $productRepository
     */
    protected $productRepository;




    public function __construct(\Doctrine\ORM\EntityManager $em, ProductRepository $productRepository) {
        
        $this->em = $em;
        $this->productRepository = $productRepository;
    }

        public function create($name) {
            $this->product = $this->productRepository->createNew();
            $this->product->setName($name);
            return $this;
    }

    public function save($flush = true) {
        
        $this->em->persist($this->product);
        if($flush) {
            $this->em->flush();
        }
        return $this->product;
    }
    
    

}