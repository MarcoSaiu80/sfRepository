<?php

/**
 * Utenti filter form base class.
 *
 * @package    sf2
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUtentiFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nome'    => new sfWidgetFormFilterInput(),
      'cognome' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nome'    => new sfValidatorPass(array('required' => false)),
      'cognome' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('utenti_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Utenti';
  }

  public function getFields()
  {
    return array(
      'id'      => 'Number',
      'nome'    => 'Text',
      'cognome' => 'Text',
    );
  }
}
