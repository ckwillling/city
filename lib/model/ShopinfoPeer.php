<?php

class ShopinfoPeer extends BaseShopinfoPeer
{
  public static function retrieveShopByFName($fname)
  {
    $c = new Criteria();
    $c->add(self::F_NAME,$fname);
    return self::doSelectOne($c);
  }

  public static function retrieveByUsernameMd5Password($username,$md5passord)
  {
    $c = new Criteria();
    $c->add(self::F_NAME, $username);
    $c->add(self::F_PASSWORD, $md5passord);

    return self::doSelectOne($c);
  }
}
