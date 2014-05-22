<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Karis\Component\Service\Repository;

use Doctrine\Common\Persistence\ObjectRepository;
/**
 * Description of RepositoryInterface
 *
 * @author marouentabbabi
 */
interface RepositoryInterface extends ObjectRepository {
    
    /**
     * create new Ressource
     */
    public function createNew();
    
    /**
     * @return QueryBuilder
     * 
     */
    public function getQueryBuilder();
    
    
}
