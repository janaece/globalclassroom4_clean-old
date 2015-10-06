<?php

/**
 * Purchase form.
 *
 * @package    globalclassroom
 * @subpackage form
 * @author     Justin England
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class GcrPurchaseForm extends BaseGcrPurchaseForm
{
    public function configure()
    {
        global $CFG;
        $mhr_user = $CFG->current_app->getCurrentUser()->getUserOnInstitution();
        $mhr_user_obj = $mhr_user->getObject();

        require_once(gcr::moodleDir . 'lang/en/countries.php');
        array_unshift($string, 'Select Country');
        $states = array('Select State',
                        'AL'=>'ALABAMA',
                        'AK'=>'ALASKA',
                        'AZ'=>'ARIZONA',
                        'AR'=>'ARKANSAS',
                        'CA'=>'CALIFORNIA',
                        'CO'=>'COLORADO',
                        'CT'=>'CONNECTICUT',
                        'DE'=>'DELAWARE',
                        'DC'=>'DISTRICT OF COLUMBIA',
                        'FL'=>'FLORIDA',
                        'GA'=>'GEORGIA',
                        'HI'=>'HAWAII',
                        'ID'=>'IDAHO',
                        'IL'=>'ILLINOIS',
                        'IN'=>'INDIANA',
                        'IA'=>'IOWA',
                        'KS'=>'KANSAS',
                        'KY'=>'KENTUCKY',
                        'LA'=>'LOUISIANA',
                        'ME'=>'MAINE',
                        'MD'=>'MARYLAND',
                        'MA'=>'MASSACHUSETTS',
                        'MI'=>'MICHIGAN',
                        'MN'=>'MINNESOTA',
                        'MS'=>'MISSISSIPPI',
                        'MO'=>'MISSOURI',
                        'MT'=>'MONTANA',
                        'NE'=>'NEBRASKA',
                        'NV'=>'NEVADA',
                        'NH'=>'NEW HAMPSHIRE',
                        'NJ'=>'NEW JERSEY',
                        'NM'=>'NEW MEXICO',
                        'NY'=>'NEW YORK',
                        'NC'=>'NORTH CAROLINA',
                        'ND'=>'NORTH DAKOTA',
                        'OH'=>'OHIO',
                        'OK'=>'OKLAHOMA',
                        'OR'=>'OREGON',
                        'PA'=>'PENNSYLVANIA',
                        'RI'=>'RHODE ISLAND',
                        'SC'=>'SOUTH CAROLINA',
                        'SD'=>'SOUTH DAKOTA',
                        'TN'=>'TENNESSEE',
                        'TX'=>'TEXAS',
                        'UT'=>'UTAH',
                        'VT'=>'VERMONT',
                        'VA'=>'VIRGINIA',
                        'WA'=>'WASHINGTON',
                        'WV'=>'WEST VIRGINIA',
                        'WI'=>'WISCONSIN',
                        'WY'=>'WYOMING');

        $month = array (1 => '01',
                        2 => '02',
                        3 => '03',
                        4 => '04',
                        5 => '05',
                        6 => '06',
                        7 => '07',
                        8 => '08',
                        9 => '09',
                        10 => '10',
                        11 => '11',
                        12 => '12');

        $thisYear = date('Y', time());

        $year = array  ($thisYear => $thisYear,
                        $thisYear + 1 => $thisYear + 1,
                        $thisYear + 2 => $thisYear + 2,
                        $thisYear + 3 => $thisYear + 3,
                        $thisYear + 4 => $thisYear + 4,
                        $thisYear + 5 => $thisYear + 5,
                        $thisYear + 6 => $thisYear + 6,
                        $thisYear + 7 => $thisYear + 7,
                        $thisYear + 8 => $thisYear + 8,
                        $thisYear + 9 => $thisYear + 9);

        $creditCards = array(   'MasterCard' => 'MasterCard',
                                'Visa' => 'Visa',
                                'Amex' => 'American Express',
                                'Discover' => 'Discover');

        $this->setWidgets
        (
            array
            (
                'id'                		=> new sfWidgetFormInputHidden(),
                'purchase_type'     		=> new sfWidgetFormInputHidden(),
                'purchase_type_id'  		=> new sfWidgetFormInputHidden(),
                'purchase_type_eschool_id'  => new sfWidgetFormInputHidden(),
                'bill_cycle'                => new sfWidgetFormInputHidden(),
                'product_type_id'           => new sfWidgetFormInputHidden(),
                'product_short_name'        => new sfWidgetFormInputHidden(),
                'profile_id'                => new sfWidgetFormInputHidden(),
                'trans_time'      			=> new sfWidgetFormInputHidden(),
                'user_institution_id' 		=> new sfWidgetFormInputHidden(),
                'user_id'         			=> new sfWidgetFormInputHidden(),
                'amount'          			=> new sfWidgetFormInputHidden(),
                'gc_fee'					=> new sfWidgetFormInputHidden(),
                'purchase_token'  			=> new sfWidgetFormInputHidden(),
                'first_name'      			=> new sfWidgetFormInputText(),
                'last_name'       			=> new sfWidgetFormInputText(),
                'cc_number'       			=> new sfWidgetFormInputText(),
                'cc_type'         			=> new sfWidgetFormSelect(array('choices' => $creditCards)),
                'cc_ccv2'         			=> new sfWidgetFormInputText(),
                'cc_exp_month'    			=> new sfWidgetFormSelect(array('choices' => $month)),
                'cc_exp_year'     			=> new sfWidgetFormSelect(array('choices' => $year)),
                'address'         			=> new sfWidgetFormInputText(),
                'city'            			=> new sfWidgetFormInputText(),
                'state'           			=> new sfWidgetFormSelect(array('choices' => $states)),
                'country'         			=> new sfWidgetFormSelect(array('choices' => $string)),
                'zip'             			=> new sfWidgetFormInputText(),
            )
        );
        $this->widgetSchema->setDefaults
        (
            array
            (
                'address'       => $mhr_user_obj->address,
                'city'          => $mhr_user_obj->city,
                'country'       => 'US',
                'first_name'    => $mhr_user_obj->firstname,
                'last_name'  	=> $mhr_user_obj->lastname,
            )
        );

        $this->widgetSchema->setLabels
        (
            array
            (
                'address'=> 'Street Address:',
                'street2' => 'Address 2nd Line:',
                'city'     => 'City:',
                'country'  => 'Country:',
                'first_name'  => 'First Name:',
                'last_name'  => 'Last Name:',
                'cc_number'  => 'Credit Card Number:',
                'cc_type'  => 'Credit Card Type:',
                'cc_ccv2'   => 'CCV Number:',
                'cc_exp_month'  => 'Card Exp. Month:',
                'cc_exp_year'  => 'Card Exp. Year:',
                'state'    => 'State:',
                'zip' => 'Zipcode:',
            )
        );

        $this->setValidators
        (
            array
            (
                'id'              			=> new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
                'purchase_type'            	=> new sfValidatorString(array('required' => true)),
                'purchase_type_id'         	=> new sfValidatorString(array('required' => true)),
                'purchase_type_eschool_id' 	=> new sfValidatorString(array('required' => true)),
                'bill_cycle'				=> new sfValidatorString(array('required' => true)),
                'product_type_id'			=> new sfValidatorString(array('required' => false)),
                'product_short_name'		=> new sfValidatorString(array('required' => false)),
                'profile_id'				=> new sfValidatorString(array('required' => false)),
                'trans_time'      			=> new sfValidatorInteger(array('required' => false)),
                'user_institution_id' 		=> new sfValidatorString(array('required' => false)),
                'user_id'         			=> new sfValidatorInteger(array('required' => false)),
                'amount'          			=> new sfValidatorNumber(array('required' => false)),
                'gc_fee'          			=> new sfValidatorNumber(array('required' => false)),
                'first_name'      			=> new sfValidatorString(array('required' => true)),
                'last_name'       			=> new sfValidatorString(array('required' => true)),
                'cc_number'       			=> new sfValidatorString(array('required' => true)),
                'cc_type'         			=> new sfValidatorString(array('required' => true)),
                'cc_ccv2'         			=> new sfValidatorString(array('required' => true)),
                'cc_exp_month'    			=> new sfValidatorInteger(array('required' => true)),
                'cc_exp_year'     			=> new sfValidatorInteger(array('required' => true)),
                'address'         			=> new sfValidatorString(array('required' => true)),
                'city'            			=> new sfValidatorString(array('required' => true)),
                'country'         			=> new sfValidatorString(array('required' => true, 'min_length' => 2), array('min_length' => 'Required.')),
                'state'           			=> new sfValidatorString(array('required' => true, 'min_length' => 2), array('min_length' => 'Required.')),
                'zip'             			=> new sfValidatorString(array('required' => true)),
                'purchase_token'  			=> new sfValidatorString(array('required' => true)),
            )
        );
    }
}