<?php

/**
 * GcrPurchase form base class.
 *
 * @method GcrPurchase getObject() Returns the current form's model object
 *
 * @package    globalclassroom
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseGcrPurchaseForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                        => new sfWidgetFormInputHidden(),
      'purchase_type'             => new sfWidgetFormTextarea(),
      'purchase_type_id'          => new sfWidgetFormTextarea(),
      'purchase_type_eschool_id'  => new sfWidgetFormTextarea(),
      'trans_time'                => new sfWidgetFormInputText(),
      'user_institution_id'       => new sfWidgetFormTextarea(),
      'user_id'                   => new sfWidgetFormInputText(),
      'amount'                    => new sfWidgetFormInputText(),
      'bill_cycle'                => new sfWidgetFormTextarea(),
      'product_type_id'           => new sfWidgetFormInputText(),
      'product_short_name'        => new sfWidgetFormInputText(),
      'profile_id'                => new sfWidgetFormTextarea(),
      'gc_fee'                    => new sfWidgetFormInputText(),
      'owner_fee'                 => new sfWidgetFormInputText(),
      'commission_fee'            => new sfWidgetFormInputText(),
      'seller_id'                 => new sfWidgetFormInputText(),
      'seller_institution_id'     => new sfWidgetFormTextarea(),
      'purchase_type_description' => new sfWidgetFormTextarea(),
      'purchase_type_quantity'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'purchase_type'             => new sfValidatorString(array('required' => false)),
      'purchase_type_id'          => new sfValidatorString(array('required' => false)),
      'purchase_type_eschool_id'  => new sfValidatorString(array('required' => false)),
      'trans_time'                => new sfValidatorInteger(array('required' => false)),
      'user_institution_id'       => new sfValidatorString(array('required' => false)),
      'user_id'                   => new sfValidatorInteger(array('required' => false)),
      'amount'                    => new sfValidatorNumber(array('required' => false)),
      'bill_cycle'                => new sfValidatorString(array('required' => false)),
      'product_type_id'           => new sfValidatorString(array('required' => false)),
      'product_short_name'        => new sfValidatorString(array('required' => false)),
      'profile_id'                => new sfValidatorString(array('required' => false)),
      'gc_fee'                    => new sfValidatorNumber(array('required' => false)),
      'owner_fee'                 => new sfValidatorNumber(array('required' => false)),
      'commission_fee'            => new sfValidatorNumber(array('required' => false)),
      'seller_id'                 => new sfValidatorInteger(array('required' => false)),
      'seller_institution_id'     => new sfValidatorString(array('required' => false)),
      'purchase_type_description' => new sfValidatorString(array('required' => false)),
      'purchase_type_quantity'    => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('gcr_purchase[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'GcrPurchase';
  }

}
