<?php

class myUser extends sfBasicSecurityUser
{
  public function setLogin($user)
  {
    $this->setSession($user);
   // $context = sfContext::getInstance();
  //  $context->getController()->redirect('@home');

    //if($context->getRequest()->getReferer() === $context->getRequest()->getUri())
   // {
    //  $context->getController()->redirect('@home');
   // }
    //$context->getController()->redirect($context->getRequest()->getReferer());
  }

  public function setSession($user)
  {
    $this->setAttribute('user_name',$user->getFName());
    $this->setAttribute('user_id',$user->getId());
    $this->setAuthenticated(true);
  }

  public function getId()
  {
    return $this->getAttribute('user_id');
  }

  public function clearSession()
  {
    if($this->isAuthenticated())
    {
      $this->getAttributeHolder()->clear();
      $this->setAuthenticated(false);
      $this->clearCredentials();
      $this->clearSession();
    }
  }

}
