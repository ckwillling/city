<?php

class ShopinfoPeer extends BaseShopinfoPeer
{
  public static function getShopByFName($fname)
  {
    $c = new Criteria();
    $c->add(self::F_NAME,$fname);
    return self::doSelect($c);
  }
}
