<?php

/**
 * Menuinfo form base class.
 *
 * @package    health
 * @subpackage form
 * @author     Your name here
 */
class BaseMenuinfoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'menuname'    => new sfWidgetFormInput(),
      'menu_link'   => new sfWidgetFormInput(),
      'parent_id'   => new sfWidgetFormInput(),
      'shopinfo_id' => new sfWidgetFormPropelChoice(array('model' => 'Shopinfo', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorPropelChoice(array('model' => 'Menuinfo', 'column' => 'id', 'required' => false)),
      'menuname'    => new sfValidatorString(array('max_length' => 50)),
      'menu_link'   => new sfValidatorString(array('max_length' => 100)),
      'parent_id'   => new sfValidatorInteger(),
      'shopinfo_id' => new sfValidatorPropelChoice(array('model' => 'Shopinfo', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('menuinfo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Menuinfo';
  }


}
