<?php

/**
 * GcrPurchase filter form base class.
 *
 * @package    globalclassroom
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseGcrPurchaseFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'purchase_type'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'purchase_type_id'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'purchase_type_eschool_id'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'trans_time'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'user_institution_id'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'user_id'                   => new sfWidgetFormFilterInput(),
      'amount'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'bill_cycle'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'product_type_id'           => new sfWidgetFormFilterInput(),
      'product_short_name'        => new sfWidgetFormFilterInput(),
      'profile_id'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'gc_fee'                    => new sfWidgetFormFilterInput(),
      'owner_fee'                 => new sfWidgetFormFilterInput(),
      'commission_fee'            => new sfWidgetFormFilterInput(),
      'seller_id'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'seller_institution_id'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'purchase_type_description' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'purchase_type_quantity'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'purchase_type'             => new sfValidatorPass(array('required' => false)),
      'purchase_type_id'          => new sfValidatorPass(array('required' => false)),
      'purchase_type_eschool_id'  => new sfValidatorPass(array('required' => false)),
      'trans_time'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'user_institution_id'       => new sfValidatorPass(array('required' => false)),
      'user_id'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'amount'                    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'bill_cycle'                => new sfValidatorPass(array('required' => false)),
      'product_type_id'           => new sfValidatorPass(array('required' => false)),
      'product_short_name'        => new sfValidatorPass(array('required' => false)),
      'profile_id'                => new sfValidatorPass(array('required' => false)),
      'gc_fee'                    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'owner_fee'                 => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'commission_fee'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'seller_id'                 => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'seller_institution_id'     => new sfValidatorPass(array('required' => false)),
      'purchase_type_description' => new sfValidatorPass(array('required' => false)),
      'purchase_type_quantity'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('gcr_purchase_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'GcrPurchase';
  }

  public function getFields()
  {
    return array(
      'id'                        => 'Number',
      'purchase_type'             => 'Text',
      'purchase_type_id'          => 'Text',
      'purchase_type_eschool_id'  => 'Text',
      'trans_time'                => 'Number',
      'user_institution_id'       => 'Text',
      'user_id'                   => 'Number',
      'amount'                    => 'Number',
      'bill_cycle'                => 'Text',
      'product_type_id'           => 'Text',
      'product_short_name'        => 'Text',
      'profile_id'                => 'Text',
      'gc_fee'                    => 'Number',
      'owner_fee'                 => 'Number',
      'commission_fee'            => 'Number',
      'seller_id'                 => 'Number',
      'seller_institution_id'     => 'Text',
      'purchase_type_description' => 'Text',
      'purchase_type_quantity'    => 'Number',
    );
  }
}
