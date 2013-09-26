<?php

/**
 * RegistrationForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class LoginForm extends CFormModel
{
    public $companyName;
    public $companyLegalType;

    public $email;
    public $password;
    public $verifyPassword;
    public $fio;

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
            //array('companyName, id_legal_type' , 'required'),
            array('email, password, verifyPassword ', 'required'),
            array('email', 'email'),
            array('password', 'compare', 'compareAttribute'=>'verifyPassword'),
            array('email', 'filter', 'filter'=>'mb_strtolower'),
            array('email', 'unique'),
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
            //'companyName' => 'Company Name',
            //'companyLegalType' => 'Company Legal Type'
        );
    }



}
