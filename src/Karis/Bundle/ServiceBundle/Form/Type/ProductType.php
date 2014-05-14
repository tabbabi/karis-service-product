<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Karis\Bundle\ServiceBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
/**
 * Description of ProductType
 *
 * @author marouentabbabi
 */
class ProductType extends AbstractType {
    
        protected $dataClass;
    
    /**
     * Constructor
     * 
     * @param string $dataClass
     */
    public function __construct($dataClass) {
        
        $this->dataClass = $dataClass;
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        
        $builder
                ->add('name', 'text',array())
                ->add('description', 'textarea', array())
                ->add('category','entity', array('data' => 'Karis\Component\Service\Model\Category'))
                ;
    }

    public function getName() {
        return 'karis_product';
    }
}
