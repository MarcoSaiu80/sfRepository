<?php

/**
 * Indirizzo filter form base class.
 *
 * @package    sf2
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseIndirizzoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'via'          => new sfWidgetFormFilterInput(),
      'indirizzo_id' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'via'          => new sfValidatorPass(array('required' => false)),
      'indirizzo_id' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('indirizzo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Indirizzo';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'via'          => 'Text',
      'indirizzo_id' => 'Text',
    );
  }
}
