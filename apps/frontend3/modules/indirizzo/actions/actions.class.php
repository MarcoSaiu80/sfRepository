<?php

/**
 * indirizzo actions.
 *
 * @package    sf2
 * @subpackage indirizzo
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class indirizzoActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->indirizzos = Doctrine_Core::getTable('Indirizzo')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->indirizzo = Doctrine_Core::getTable('Indirizzo')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->indirizzo);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new IndirizzoForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new IndirizzoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($indirizzo = Doctrine_Core::getTable('Indirizzo')->find(array($request->getParameter('id'))), sprintf('Object indirizzo does not exist (%s).', $request->getParameter('id')));
    $this->form = new IndirizzoForm($indirizzo);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($indirizzo = Doctrine_Core::getTable('Indirizzo')->find(array($request->getParameter('id'))), sprintf('Object indirizzo does not exist (%s).', $request->getParameter('id')));
    $this->form = new IndirizzoForm($indirizzo);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($indirizzo = Doctrine_Core::getTable('Indirizzo')->find(array($request->getParameter('id'))), sprintf('Object indirizzo does not exist (%s).', $request->getParameter('id')));
    $indirizzo->delete();

    $this->redirect('indirizzo/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $indirizzo = $form->save();

      $this->redirect('indirizzo/edit?id='.$indirizzo->getId());
    }
  }
}
