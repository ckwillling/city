<?php

class ShopinfoPeer extends BaseShopinfoPeer
{
  public static function retrieveShopByFName($fname)
  {
    $c = new Criteria();
    $c->add(self::F_NAME,$fname);
    return self::doSelectOne($c);
  }
}
