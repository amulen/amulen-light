<?php

namespace Rii\ReportBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Description of ReportType
 *
 * @author Juan Manuel Agüero <jaguero@flowcode.com.ar>
 */
class ReportType extends AbstractType {

    public function __construct($pickerOptions = array(), $withFrom = true){
        $pickerOptions['autoclose'] = true;
        $this->pickerOptions = $pickerOptions;
        $this->withFrom = $withFrom;
    }
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        if($this->withFrom){
            $builder
                ->add('dateFrom', 'collot_datetime', array( 'pickerOptions' =>
                         $this->pickerOptions))
                ->add('dateTo', 'collot_datetime', array( 'pickerOptions' =>
                        $this->pickerOptions))
                ->add('submit', 'submit', array('label' => 'Filtrar'));
        }else{
            $builder
                ->add('dateTo', 'collot_datetime', array( 'pickerOptions' => 
                    $this->pickerOptions))
                ->add('submit', 'submit', array('label' => 'Filtrar'));
        }
    }
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Rii\ReportBundle\Entity\Report'
        ));
    }

    public function getName() {
        return "rii_reportbundle_report";
    }

//put your code here
}
