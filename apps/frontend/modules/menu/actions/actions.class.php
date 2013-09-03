<?php

/**
 * menu actions.
 *
 * @package    health
 * @subpackage menu
 * @author     Your name here
 */
class menuActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->menuinfo_list = MenuinfoPeer::retrieveByShopId($this->getUser()->getId());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->menuinfo = MenuinfoPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->menuinfo);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->forward('menu','edit');
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward('menu','edit');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $id = $request->getParameter('id');
    $params = array(
    'menuname'=>$request->getParameter('menuname'),
    'menutype'=>$request->getParameter('menutype'),
    'menulink'=>$request->getParameter('menulink'),
    'parent'  =>$request->getParameter('parent'),
    'shopid'  =>$this->getUser()->getId()
    );

    $this->menus = MenuinfoPeer::retrieveByShopId($this->getUser()->getId());
    $menus = array();
    foreach($this->menus as $k=>$menu)
    {
      $menus[$k]['id'] = $menu->getId();
      $menus[$k]['parentId'] = $menu->getParentId();
      $menus[$k]['menuname'] = $menu->getMenuname();
    }
    sfLoader::loadHelpers('menu');
    $this->menuId = $id;
    $this->menuTree = menuTree($menus);

    $this->isEdit = 0;

    if($id)
    {
      $this->menuRecord = MenuinfoPeer::retrieveByPK($id);
      if($this->menuRecord)
      {
        $this->isEdit = 1;
      }
    }
    $this->pages = ShoppagePeer::retrieveByShopId($this->getUser()->getId());
    if($this->isEdit)
    {
      if($request->getMethod() == sfRequest::POST)
      {
        $this->saveToMenuDb($this->menuRecord,$params);
      }
      $this->setTemplate('input');
    }
    else
    {
      if($request->getMethod() == sfRequest::POST)
      {
        $menuinfo = new Menuinfo();
        $this->saveToMenuDb($menuinfo, $params);
      }
      $this->setTemplate('input');
    }
  }

  public function saveToMenuDb($menuinfo, $params)
  {
    $menuinfo->setMenuname($params['menuname']);
    $menuinfo->setMenutype($params['menutype']);
    $menuinfo->setMenuLink($params['menulink']);
    $menuinfo->setParentId($params['parent']);
    $menuinfo->setShopinfoId($params['shopid']);


    if($menuinfo->save())
    {
      $this->redirect('menu/index');
    }

  }
  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($menuinfo = MenuinfoPeer::retrieveByPk($request->getParameter('id')), sprintf('Object menuinfo does not exist (%s).', $request->getParameter('id')));
    $this->form = new MenuinfoForm($menuinfo);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    //$request->checkCSRFProtection();

    //$this->forward404Unless($menuinfo = MenuinfoPeer::retrieveByPk($request->getParameter('id')), sprintf('Object menuinfo does not exist (%s).', $request->getParameter('id')));
    //$menuinfo->delete();
    $this->menuinfo = MenuinfoPeer::retrieveByPK($request->getParameter('id'));
    if($this->menuinfo)
    {
      $this->menuinfo->delete();
    }
    $this->redirect('menu/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $menuinfo = $form->save();

      $this->redirect('menu/edit?id='.$menuinfo->getId());
    }
  }
}
