<?php

/**
 * Shoppage form base class.
 *
 * @package    health
 * @subpackage form
 * @author     Your name here
 */
class BaseShoppageForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'page_title'   => new sfWidgetFormInput(),
      'page_number'  => new sfWidgetFormInput(),
      'page_content' => new sfWidgetFormTextarea(),
      'shopinfo_id'  => new sfWidgetFormPropelChoice(array('model' => 'Shopinfo', 'add_empty' => false)),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
      'is_mainpage'  => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorPropelChoice(array('model' => 'Shoppage', 'column' => 'id', 'required' => false)),
      'page_title'   => new sfValidatorString(array('max_length' => 50)),
      'page_number'  => new sfValidatorString(array('max_length' => 20)),
      'page_content' => new sfValidatorString(),
      'shopinfo_id'  => new sfValidatorPropelChoice(array('model' => 'Shopinfo', 'column' => 'id')),
      'created_at'   => new sfValidatorDateTime(array('required' => false)),
      'updated_at'   => new sfValidatorDateTime(array('required' => false)),
      'is_mainpage'  => new sfValidatorInteger(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Shoppage', 'column' => array('page_title')))
    );

    $this->widgetSchema->setNameFormat('shoppage[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Shoppage';
  }


}
