<?php

class Shopinfo extends BaseShopinfo
{
  public function __toString()
  {
    return $this->getFName();
  }
}
