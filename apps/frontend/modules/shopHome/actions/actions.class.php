<?php

/**
 * shopHome actions.
 *
 * @package    health
 * @subpackage shopHome
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class shopHomeActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->shopId = $this->getRequest()->getParameter('shopId');
    $mainPage = ShoppagePeer::retrieveMainPageByShopId($this->shopId);
    if(is_null($mainPage))
    {
      $this->redirect404();
    }
    $this->pageId = $mainPage->getId();
    $this->getRequest()->setParameter('shopId', $this->shopId);
    $this->getRequest()->setParameter('pageId', $this->pageId);
    $this->forward('guestPage','index');
  }
}
