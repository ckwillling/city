<?php

/**
 * guestPage actions.
 *
 * @package    health
 * @subpackage guestPage
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class guestPageActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex()
  {
    if($this->pageId == null )
    {
        $this->redirect404();
    }

    $this->page = ShoppagePeer::retrieveByShopIdAndPageId($this->shopId,$this->pageId);
    if(is_null($this->page))
    {
        $this->redirect404();
    }

  }

  public function preExecute()
  {
    $this->shopId = $this->getRequest()->getParameter('shopId');
    $this->pageId = $this->getRequest()->getParameter('pageId');
    $this->menus = MenuinfoPeer::retrieveByShopId($this->shopId);
//$this->getConfigrations()->loadHelper('menu');
    sfLoader::loadHelpers('menu');
    $this->menuTree = menuTree($this->menus);

    $this->getResponse()->setSlot('menus',$this->menus);
  }
}
