<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Karis\Bundle\ServiceBundle\Repository;

use Doctrine\ORM\EntityRepository;


class ProductRepository extends EntityRepository  {
    
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
     * @param int $id
     * 
     * @return null|object
     */
    public function find($id) {
        
        return
        $this->getQueryBuilder()->andWhere($this->getAlias(). 'id =' . intval($id))
            ->getQuery()
            ->getOneOrNullResult();
    }
    
    /**
     * @param array $criteria
     * 
     * @return null|object
     */
    public function findOneBy(array $criteria) {
        
        $queryBuilder = $this->getQueryBuilder();
        $this->applyCriteria($queryBuilder, $criteria);
        
        return $queryBuilder
                ->getQuery()
                ->getOneOrNullResult();
    }
    
    /**
     * 
     * @param array $criteria
     * @param array $orderBy
     * @param integer $limit
     * @param integer $offset
     * 
     * @return array
     */
    public function findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null) {
        
        $queryBuilder = $this->getQueryBuilder();
        $this->applyCriteria($queryBuilder, $criteria);
        $this->applySorting($queryBuilder, $orderBy);
        if(null !== $limit) {
            $queryBuilder->setMaxResults($limit);
        }
        if(null !== $offset) {
            $queryBuilder->setFirstResult($offset);
        }
        return $queryBuilder->getQuery()
                            ->getResult();
    }

    /**
     * @param QueryBuilder $queryBuilder
     * 
     * @param array $criteria
     */
    protected function applyCriteria($queryBuilder, array $criteria = null)
    {
        if(null === $criteria){
            return;
        }
        foreach ($criteria as $property => $value) {
            if(null === $value) {
                $queryBuilder->andWhere($queryBuilder->expr()->isNull($this->getPropertyName($property)));
            }elseif (!is_array($value)) {
                $queryBuilder->
                        andWhere($queryBuilder->expr()->eq($this->getPropertyName($property), ':' .$property))
                        ->setProperty($property,$value);
            }else {
                $queryBuilder->andWhere($queryBuilder->expr()->in($this->getPropertyName($property), ':' .$value));
            }
        }
    }
    
    /**
     * @param QueryBuilder $queryBuilder
     * 
     * @param array $sorting
     */
    protected function applySorting($queryBuilder, array $sorting = null)
    {
        if(null === $sorting) {
            return;
        }
        foreach ($sorting as $property => $order) {
            if(!empty($order)) {
                $queryBuilder->orderBy($queryBuilder->expr()->eq($this->getPropertyName($property), $order));
            }
        }
    }

        /**
     * @param string $name
     *
     * @return string
     */
    protected function getPropertyName($name)
    {
        if (false === strpos($name, '.')) {
            return $this->getAlias().'.'.$name;
        }

        return $name;
    }

        /**
     * {@inheritdoc}
     */
    protected function getAlias()
    {
        return 'product';
    }
}
