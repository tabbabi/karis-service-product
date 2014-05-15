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
 * Description of Category
 *
 * @author marouentabbabi
 */
class CategoryType extends AbstractType{
    
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
                ->add('price', null, array())
                ;
    }
    
    public function setDefaultOptions(\Symfony\Component\OptionsResolver\OptionsResolverInterface $resolver) {
        
        $resolver
                ->setDefaults(array('data_class' => $this->dataClass));
    }

    public function getName() {
        return 'karis_category';
    }

}
