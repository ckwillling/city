<?php

class accountActions extends sfActions
{
  public function executeLoggin()
  {
      if($this->getRequest()->getMethod() == sfRequest::POST)
      {
          $password = md5($this->getRequestParameter('password'));
          $shop = ShopinfoPeer::getShopByFName($this->getRequestParameter('f_name'));
          $mypwd = $shop->getFPassword();
          if($password === $mypwd)
          {
            $this->logginStat = 1;
            return sfView::SUCCESS;
          }

          return sfView::INPUTt;

      }
      return sfView::INPUT;

  }

}