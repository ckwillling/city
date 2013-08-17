<?php

/**
 * Shopinfo form base class.
 *
 * @package    health
 * @subpackage form
 * @author     Your name here
 */
class BaseShopinfoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'f_name'     => new sfWidgetFormInput(),
      'f_password' => new sfWidgetFormInput(),
      'f_number'   => new sfWidgetFormInput(),
      'f_mobile'   => new sfWidgetFormInput(),
      'f_address'  => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorPropelChoice(array('model' => 'Shopinfo', 'column' => 'id', 'required' => false)),
      'f_name'     => new sfValidatorString(array('max_length' => 50)),
      'f_password' => new sfValidatorString(array('max_length' => 40)),
      'f_number'   => new sfValidatorString(array('max_length' => 20)),
      'f_mobile'   => new sfValidatorString(array('max_length' => 20)),
      'f_address'  => new sfValidatorString(array('max_length' => 100)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Shopinfo', 'column' => array('f_name')))
    );

    $this->widgetSchema->setNameFormat('shopinfo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Shopinfo';
  }


}
