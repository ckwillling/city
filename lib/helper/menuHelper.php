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
      $tree = array_merge($tree, menuTree($menus, $menu['id'], $level++));
    }
  }
  return $tree;
}

function menuTreeArray($tree)
{
  $menuTree = array();
  foreach($tree as $k => $menu)
  {
    $menuTree[] = array('id'=>$menu[$k][0]->getId, 'parentId'=>$menu[$k][0]->getParentId(),'menuname'=>$menu[$k][0]->getMenuname());
    $menuTree['lev'] = $menu['lev'];
  }
  return $menuTree;
}