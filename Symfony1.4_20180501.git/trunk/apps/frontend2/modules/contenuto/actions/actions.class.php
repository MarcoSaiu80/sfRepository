<?php

/**
 * contenuto actions.
 *
 * @package    sf2
 * @subpackage contenuto
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class contenutoActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('default', 'module');
  }


  public function executeShow()
  {
      $today= getdate();
      $this->hour=$today['hours'];

  }
  public function executeUpdate($request)
  {
      if($request->getParameter('nome')!="")
            $this->nome= $request->getParameter('nome');
      else
          $this->nome= "non sono mica riuscito a trovare il nome";
  }

public function executeList($request)
    {
        //dovrebbe servirmi a fare la lista
        $article= new Article();
        $article->setTitle('Cunnu de sa Zia');
        $article->setContent('primo articolo scritto da Marco');
        $article->save();

        $this->getResponse()->setTitle("Gino gino");

    }

public function executeLogin($request)
    {
        //execute del login

        if($request->getParameter('login')==='pippo')
        {
            $this->getUser()->setAuthenticated(true);
            $this->loginame="Pippo";
        }

    }
public function executeLogout()
{
    $this->getUser()->setAutenticated(false);

}
public function executeCommenta()
{
    $article=Doctrine_Core::getTable('Article')->find(1);
    $comment= new Comment();
    $comment->setArticleId($article->getId());
    $comment->setContent('sto commanetanto');
    $comment->save();
    $this->comment=$comment;

}

public function executeElenco($request)
{
    //$id=$request->get
    //mi da un elenco degli articoli, con i commenti
    $articoli= Doctrine_Core::getTable('Article')->findAll();
    $this->articoli=$articoli;
}

public function executeForm($request)
{
    $this->form= new sfForm();
    $this->form->setWidgets((array(
        'name'=> new sfWidgetFormInputText())));

    //gestione della richiesta qua dentro
    if($this->form->isValid())
    {
        $name=$this->form->getValue('name');

    }
}


}
