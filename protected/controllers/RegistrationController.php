<?php


class RegistrationController extends Controller {
    public $defaultAction = 'registration';

     // Only allow the registration if the user is not already logged in and
    // the function is activated in the Module Configuration
    public function beforeAction($action) {

        if(!Yii::app()->user->isGuest)
            $this->redirect(Yii::app()->user->returnUrl);


        return parent::beforeAction($action);
    }

// Actions access rights for users
    public function accessRules() {
        return array(
            array('allow',
                'actions' => array('index', 'registration', 'recovery', 'activation', 'resendactivation'),
                'users' => array('*'),
            ),
            array('allow',
                'actions' => array('captcha'),
                'users' => array('*'),
            ),
            array('deny', // deny all other users
                'users' => array('*'),
            ),
        );
    }

    public function actions() {
        return array(
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
        );
    }


    public function actionSignUp() {
        $data = new RegistrationForm;

        // If data received
        if(isset($_POST['RegistrationForm'])){
            $data->attributes = $_POST['RegistrationForm'];
             //var_dump($_POST); die();
            if($data->validate()){
                if($_POST['RegistrationForm']['userSelection'] === 'employer'){

                    $employer = new Employer();
                    $employer->attributes = $_POST['RegistrationForm'];
                    $employer->
                    $employer->save(false);
                    $this->redirect($this->createUrl('employer/'));
                    return true;

                } elseif ($_POST['RegistrationForm']['userSelection'] === 'workman') {

                    $workman = new Workman();
                    $workman->attributes =  $_POST['RegistrationForm'];
                    $workman->save(false);
                    $this->redirect($this->createUrl('workman/'));
                    return true;

                } else {
                    return false;
                }
            }
        }


        //Render registration form
        $this->render('_form', array('data' => $data));
    }


}
