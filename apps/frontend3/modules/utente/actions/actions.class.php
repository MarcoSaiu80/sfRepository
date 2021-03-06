<?php

/**
 * utente actions.
 *
 * @package    sf2
 * @subpackage utente
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class utenteActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->utentis = Doctrine_Core::getTable('Utenti')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->utenti = Doctrine_Core::getTable('Utenti')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->utenti);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new UtentiForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new UtentiForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($utenti = Doctrine_Core::getTable('Utenti')->find(array($request->getParameter('id'))), sprintf('Object utenti does not exist (%s).', $request->getParameter('id')));
    $this->form = new UtentiForm($utenti);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($utenti = Doctrine_Core::getTable('Utenti')->find(array($request->getParameter('id'))), sprintf('Object utenti does not exist (%s).', $request->getParameter('id')));
    $this->form = new UtentiForm($utenti);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($utenti = Doctrine_Core::getTable('Utenti')->find(array($request->getParameter('id'))), sprintf('Object utenti does not exist (%s).', $request->getParameter('id')));
    $utenti->delete();

    $this->redirect('utente/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $utenti = $form->save();

      $this->redirect('utente/edit?id='.$utenti->getId());
    }
  }
}
