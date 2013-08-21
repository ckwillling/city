<?php

class myUser extends sfBasicSecurityUser
{
  public function setLoggin($user)
  {
    $this->setAuthenticated(true);
    $this->setAttribute('user_name',$user->getFName());
    $this->setAttribute('user_id',$user->getId());
  }

  public function getId()
  {
    return $this->getAttribute('user_id');
  }

}
