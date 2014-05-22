<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Karis\Bundle\ServiceBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Karis\Component\Service\Repository\RepositoryInterface;


class ProductRepository extends EntityRepository implements RepositoryInterface  {
    
    
    /**
     * create new Ressource
     */
    public function createNew()
    {
        $className = $this->getClassName();
        
        return new $className;
    }
    
    /**
     * @return QueryBuilder
     * 
     */
    public function getQueryBuilder()
    {
        return $this->createQueryBuilder($this->getAlias());
    }
    


    /**
     * {@inheritdoc}
     */
    protected function getAlias()
    {
        return 'product';
    }
}
