<?php

class MenuinfoPeer extends BaseMenuinfoPeer
{
  public static function retrieveByShopId($shopId)
  {
    $c = new Criteria();
    $c->add(self::SHOPINFO_ID, $shopId);

    return self::doSelect($c);
  }
}