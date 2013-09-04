<?php


function menuTree($menus=array(), $id = 0, $level=0 )
{
  $tree = array();
  foreach($menus as $menu)
  {
    if($menu['parentId'] == $id)
    {
      $menu['lev'] = $level;
      $tree[] = $menu;
      $tree = array_merge($tree, menuTree($menus, $menu['id'], $level+1));
    }
  }
  return $tree;
}

function objMenuTree($menus=array(), $id=0, $level=0)
{
  $tree = array();
  foreach($menus as $menu)
  {
    if($menu->getParentId() == $id)
    {
      $menu->setLevel($level);
      $tree[] = $menu;
      $tree = array_merge($tree, objMenuTree($menus, $menu->getId(), $level+1));
    }
  }
  return $tree;
}