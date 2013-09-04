<?php

class menuHandler
{
  function menuObjsToArray($objMenus)
  {
    $menus = array();
    foreach($objMenus as $k=>$menu)
    {
      $menus[$k]['id'] = $menu->getId();
      $menus[$k]['parentId'] = $menu->getParentId();
      $menus[$k]['menuname'] = $menu->getMenuname();
    }
    return $menus;
  }
}