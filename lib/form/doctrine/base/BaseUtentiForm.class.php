<?php

/**
 * Utenti form base class.
 *
 * @method Utenti getObject() Returns the current form's model object
 *
 * @package    sf2
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUtentiForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'      => new sfWidgetFormInputHidden(),
      'nome'    => new sfWidgetFormTextarea(),
      'cognome' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nome'    => new sfValidatorString(array('required' => false)),
      'cognome' => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('utenti[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Utenti';
  }

}
