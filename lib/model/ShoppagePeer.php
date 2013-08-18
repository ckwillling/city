<?php

class ShoppagePeer extends BaseShoppagePeer
{
  public static function retrieveMainPageByShopId($shopId)
  {
    $c = new Criteria();
    $c->add(self::SHOPINFO_ID,$shopId);
    $c->add(self::IS_MAINPAGE,1);

    return self::doSelect($c);
  }
}
