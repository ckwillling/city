<?php

class ShoppagePeer extends BaseShoppagePeer
{
  public static function retrieveMainPageByShopId($shopId)
  {
    $c = new Criteria();
    $c->add(self::SHOPINFO_ID,$shopId);
    $c->add(self::IS_MAINPAGE,1);

    return self::doSelectOne($c);
  }
  public static function retrieveByShopId($shopId)
  {
    $c = new Criteria();
    $c->add(self::SHOPINFO_ID,$shopId);

    return self::doSelect($c);
  }

  public static function retrieveByShopIdAndPageId($shopId, $pageId)
  {
    $c = new Criteria();
    $c->add(self::ID, $pageId);
    $c->add(self::SHOPINFO_ID, $shopId);

    return self::doSelectOne($c);
  }

}
