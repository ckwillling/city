<?php

/**
 * page actions.
 *
 * @package    health
 * @subpackage page
 * @author     Your name here
 */
class pageActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->shoppage_list = ShoppagePeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->shoppage = ShoppagePeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->shoppage);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->forward('page','edit');
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward('page','edit');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $id = $request->getParameter('id');
    $page_num = md5(time());
    $params = array(
    'id'           => $id,
    'page_title'   => $request->getParameter('page_title'),
    'page_content' => $request->getParameter('page_content'),
    'is_main_page'=> $request->getParameter('is_main'),
    'page_number'  => $page_num,
    'shop_id'      => $request->getParameter('shop')
    );
    $this->isEdit = 0;

    if($id)
    {
      $this->pageRecord = ShoppagePeer::retrieveByPK($id);
      if($this->pageRecord)
      {
        $this->isEdit = 1;
      }
    }

    if($this->isEdit)
    {
      if($request->getMethod() == sfRequest::POST)
      {
        $this->saveToPageDb($this->pageRecord,$params);
      }
      $this->setTemplate('input');
    }
    else
    {
      if($request->getMethod() == sfRequest::POST)
      {
        $pageinfo = new Shoppage();
        $this->saveTopageDb($pageinfo, $params);
      }
          $this->setTemplate('input');
    }
  }

  public function saveToPageDb($page, $params)
  {
    if($params['is_main_page'])
    {
     $page = $this->modifyMainPage($page, $params['shop_id']);
    }
    $page->setPageTitle($params['page_title']);
    $page->setPageContent($params['page_content']);
    $page-> setPageNumber($params['page_number']);

    $page->setShopinfoId($params['shop_id']);


    if($page->save())
    {
      $this->redirect('page/index');
    }
  }

  public function modifyMainPage($page, $shopId)
  {

    $mainpage = ShoppagePeer::retrieveMainPageByShopId($shopId);
    if($mainpage)
    {
      echo $mainpage->getId;

      if($mainpage->getId() == $page->getId())
      {
        return $page;
      }
      //这里应该用事务，设置唯一首页，有待改进
      $mainpage->setIsMainpage(0);
      $mainpage->save();
    }
    $page->setIsMainpage(1);

    return $page;
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($shoppage = ShoppagePeer::retrieveByPk($request->getParameter('id')), sprintf('Object shoppage does not exist (%s).', $request->getParameter('id')));
    $this->form = new ShoppageForm($shoppage);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $this->page = ShoppagePeer::retrieveByPK($request->getParameter('id'));
    if($this->page)
    {
      $this->page->delete();
    }
    $this->redirect('page/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $shoppage = $form->save();

      $this->redirect('page/edit?id='.$shoppage->getId());
    }
  }
}
