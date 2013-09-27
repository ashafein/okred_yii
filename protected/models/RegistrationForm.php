<?php

/**
 * RegistrationForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class RegistrationForm extends CFormModel
{

    private $_identity;

    public $email;
    public $password;
    public $verifyPassword;
    public $userSelection;
    public $fio;
    /**
     * Declares the validation rules.
     * The rules state that username and password are required,
     * and password needs to be authenticated.
     */
    public function rules()
    {
		return array(
            // username and password are required
            array('email, password, verifyPassword', 'required'),
            //Email needs to be validated by regular exprassion
            array('email', 'email'),
            //Password needs to be compared with verifyPassword to be sure you're not a bot
            array('password','compare','compareAttribute'=>'verifyPassword', 'on'=>'signup' ),
        );
    }

    /**
     * Declares attribute labels.
     */
    public function attributeLabels()
    {
        return array(
            'email' => 'Email',
            'password' => 'Password',
            'verifyPassword' => 'Repeat Password',
            'fio' => 'FIO',
            'userSelection' => 'Select user type',
        );
    }



}
