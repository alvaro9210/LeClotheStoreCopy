<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class RegistrationForm extends CFormModel
{
	public $cRfc;
	public $cName;
	public $cLastname;
	public $cStreetname;
	public $cStreetname2;
	public $cZipCode;
	public $cState;
	public $uName;
	public $uPassword;
	public $uEmail;
	public $uCreateTime;
	public $uLastLogin;
	public $uId_Customer;
	public $uActivation;
	
	private $_identity;
	

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('cName','cLastname','cStreetname','cZipCode','cState','uName',
			'uPassword','uEmail'),
            // auththetificates email
            array('uEmail', 'email'),
			// password needs to be authenticated
		//	array('password', 'authenticate'),
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
            'cName'=>'Name',
            'cLastname'=>'Last Name',
            'cStreetname'=>'Street Name',
            'cZipCode'=>'Zip Code',
            'cState'=>'State',
            'uName'=>'Username',
			'uPassword','Password'
		);
	}

	/**
	 * Authenticates the password.
	 * This is the 'authenticate' validator as declared in rules().
	 */
	

	
}