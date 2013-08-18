<?php

/**
 * page actions.
 *
 * @package    health
 * @subpackage page
 * @author     Your name here
 */
class pageActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->shoppage_list = ShoppagePeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->shoppage = ShoppagePeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->shoppage);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ShoppageForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new ShoppageForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($shoppage = ShoppagePeer::retrieveByPk($request->getParameter('id')), sprintf('Object shoppage does not exist (%s).', $request->getParameter('id')));
    $this->form = new ShoppageForm($shoppage);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($shoppage = ShoppagePeer::retrieveByPk($request->getParameter('id')), sprintf('Object shoppage does not exist (%s).', $request->getParameter('id')));
    $this->form = new ShoppageForm($shoppage);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($shoppage = ShoppagePeer::retrieveByPk($request->getParameter('id')), sprintf('Object shoppage does not exist (%s).', $request->getParameter('id')));
    $shoppage->delete();

    $this->redirect('page/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $shoppage = $form->save();

      $this->redirect('page/edit?id='.$shoppage->getId());
    }
  }
}
