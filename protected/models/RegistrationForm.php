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
    public $phone;
    public $verifyPassword;
    public $userSelection;
    public $fio;
    public $name;
    public $surname;
    public $patronymic;

    /**
     * Declares the validation rules.
     * The rules state that username and password are required,
     * and password needs to be authenticated.
     */
    public function rules()
    {
		return array(
            // username and password are required
            array('email, password, verifyPassword, userSelection', 'required'),
            //Email needs to be validated by regular expression
            array('email', 'email'),
            array('email', 'unique','className' => 'Employer'),
            array('email', 'unique','className' => 'Workman'),
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
            'name' => 'Name',
            'surname' => 'Surname',
            'patronymic' => 'Patronymic',
            'phone' => 'Phone Number',
        );
    }



}
