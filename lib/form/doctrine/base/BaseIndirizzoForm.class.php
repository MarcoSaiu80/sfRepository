<?php

/**
 * Indirizzo form base class.
 *
 * @method Indirizzo getObject() Returns the current form's model object
 *
 * @package    sf2
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseIndirizzoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'via'          => new sfWidgetFormTextarea(),
      'indirizzo_id' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'via'          => new sfValidatorString(array('required' => false)),
      'indirizzo_id' => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('indirizzo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Indirizzo';
  }

}
