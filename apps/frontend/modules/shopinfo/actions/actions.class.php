<?php

/**
 * shopinfo actions.
 *
 * @package    health
 * @subpackage shopinfo
 * @author     Your name here
 */
class shopinfoActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->shopinfo_list = ShopinfoPeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->shopinfo = ShopinfoPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->shopinfo);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ShopinfoForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new ShopinfoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($shopinfo = ShopinfoPeer::retrieveByPk($request->getParameter('id')), sprintf('Object shopinfo does not exist (%s).', $request->getParameter('id')));
    $this->form = new ShopinfoForm($shopinfo);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($shopinfo = ShopinfoPeer::retrieveByPk($request->getParameter('id')), sprintf('Object shopinfo does not exist (%s).', $request->getParameter('id')));
    $this->form = new ShopinfoForm($shopinfo);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($shopinfo = ShopinfoPeer::retrieveByPk($request->getParameter('id')), sprintf('Object shopinfo does not exist (%s).', $request->getParameter('id')));
    $shopinfo->delete();

    $this->redirect('shopinfo/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $shopinfo = $form->save();

      $this->redirect('shopinfo/edit?id='.$shopinfo->getId());
    }
  }
}
