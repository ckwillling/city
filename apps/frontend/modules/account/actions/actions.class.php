<?php

/**
 * account actions.
 *
 * @package    health
 * @subpackage account
 * @author     Your name here
 */
class accountActions extends sfActions
{
  public function executeSignup(sfWebRequest $request)
  {
    if($request->getMethod() == sfRequest::POST)
    {
      $params = array(
      'f_name'     => $request->getParameter('user_name'),
      'f_password' => $request->getParameter('second_pwd'),
      'f_mobile'   => $request->getParameter('mobile'),
      'f_address'  => $request->getParameter('address'),
      'f_fid'       => $request->getParameter('user_id'),
      );

      $shopinfo = new Shopinfo();
      $this->regesterToDb($shopinfo,$params);
    }
    $this->setTemplate('signup');
  }

  public function validateSignup(sfWebRequest $request)
  {echo 'efddf';
   exit;
    $username = $request->getParameter('user_name');
    if(!$username)
    {
      $this->getRequest()->setError('user_name','用户名不能为空');
      return false;
    }

    $stringValidation = new sfStringValidator($this->getContext(), array(
        'min'       => 6,
        'min_error' => '至少6个字符',
        'max'       => 50,
        'max_error' => '最多50个字符'));
    if(!$stringValidation->execute($username,$error))
    {
      return false;
    }
    return true;
  }

  public function regesterToDb($shopinfo, $params)
  {
    //this should be put in validate
    if(ShopinfoPeer::retrieveShopByFName($params['f_name']))
    {
      $this->getRequest()->setError('f_name','用户已经存在');
      return false;
    }

    $params['f_number'] = md5(time());
    $shopinfo->setFName($params['f_name']);
    $shopinfo->setFPassword(md5($params['f_password']));
    $shopinfo->setFNumber($params['f_number']);
    $shopinfo->setFMobile($params['f_mobile']);
    $shopinfo->setFAddress($params['f_address']);
    $shopinfo->setFFid($params['f_fid']);

    if($shopinfo->save())
    {
      $this->redirect('page/index');
    }


  }
  public function executeIndex(sfWebRequest $request)
  {
    $this->shopinfo_list = ShopinfoPeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->shopinfo = ShopinfoPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->shopinfo);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ShopinfoForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new ShopinfoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($shopinfo = ShopinfoPeer::retrieveByPk($request->getParameter('id')), sprintf('Object shopinfo does not exist (%s).', $request->getParameter('id')));
    $this->form = new ShopinfoForm($shopinfo);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($shopinfo = ShopinfoPeer::retrieveByPk($request->getParameter('id')), sprintf('Object shopinfo does not exist (%s).', $request->getParameter('id')));
    $this->form = new ShopinfoForm($shopinfo);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($shopinfo = ShopinfoPeer::retrieveByPk($request->getParameter('id')), sprintf('Object shopinfo does not exist (%s).', $request->getParameter('id')));
    $shopinfo->delete();

    $this->redirect('account/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $shopinfo = $form->save();

      $this->redirect('account/edit?id='.$shopinfo->getId());
    }
  }
}
