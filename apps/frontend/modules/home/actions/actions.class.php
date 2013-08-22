<?php

/**
 * home actions.
 *
 * @package    health
 * @subpackage home
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class homeActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->user =  $this->getUser();
    $this->menuList = MenuinfoPeer::retrieveByShopId($this->user->getId());
    $this->pages = ShoppagePeer::retrieveByShopId($this->user->getId());
  }
}
