<?php

namespace Rii\ReportBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Rii\ReportBundle\Entity\ContableTiposMonedas;
use Doctrine\ORM\EntityRepository;
/**
 * Description of ReportSaldoAdminType
 *
 * @author Juan Manuel Agüero <jaguero@flowcode.com.ar>
 */
class ReportSaldoAdminType extends AbstractType {

    public function __construct($report, $pickerOptions = array(), $withFrom = true){
        $pickerOptions['autoclose'] = true;
        $this->pickerOptions = $pickerOptions;
        $this->withFrom = $withFrom;
        $this->report = $report;
    }
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */

    public function buildForm(FormBuilderInterface $builder, array $options) {


        $sub1Build = $builder->create('changes', 'form', array('attr'=>array("class" => "chancesForm"), 'inherit_data' => false));
        $sub1Build->add( 'moneda', 'entity', array(
                'class' => 'Rii\ReportBundle\Entity\ContableTiposMonedas',
                'label' => 'Moneda del Balance',
                'property' => 'nombreMoneda',
                'query_builder' => function(EntityRepository $er )  {
                                        return $er->createQueryBuilder('ContableTiposMonedas');
                                    },
                'attr' => array('class' => "cambioMoneda")
                ));

        $sub2Build = $builder->create('changeItems', 'form', array('label'=> false, 'inherit_data' => false));
        foreach ($this->report->getChanges() as $change) {
            $sub2Build->add($change->getId(),'integer', array("label" =>"Cotización ".$change->getNombreMoneda(),'attr' => array("class" => "montoCambio")) );
        }
        $sub1Build->add( $sub2Build);
        $builder->add( $sub1Build);

        $sub1Build = $builder->create('dates', 'form', array('inherit_data' => false));
        if($this->withFrom){
            $sub1Build
                ->add('dateFrom', 'collot_datetime', array( 'pickerOptions' => $this->pickerOptions,
                                                            'data' => $this->report->getDateFrom()));
        }

        $sub1Build
                ->add('dateTo', 'collot_datetime', array('pickerOptions' => $this->pickerOptions,
                                                         'data' => $this->report->getDateTo())
                );
        $builder->add( $sub1Build);
        $builder->add('submit', 'submit', array('label' => 'Aplicar'));
    }
    

    public function getName() {
        return "rii_reportbundle_report_saldo_admin";
    }

//put your code here
}
