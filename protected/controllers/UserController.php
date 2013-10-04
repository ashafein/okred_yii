<?php


class UserController extends Controller {
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
                'actions' => array('error', 'login','signup', 'recover'),
                'users' => array('*'),
            ),
            array('allow',
                'actions' => array('captcha'),
                'users' => array('*'),
            ),

            array('deny',
                'actions' => array('signup', 'recover', 'login'),
                'users' => array('@'),
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

    public function actionError()
    {
        if($error=Yii::app()->errorHandler->error)
        {
            if(Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    public function actionSignUp() {
        $data = new RegistrationForm;

        // If data received
        if(isset($_POST['RegistrationForm'])){
            $data->attributes = $_POST['RegistrationForm'];
           // var_dump( $_POST['RegistrationForm']); die();
            if($data->validate()){
                if($_POST['RegistrationForm']['userSelection'] === 'employer'){

                    $employer = new Employer();
                    $employer->attributes = $_POST['RegistrationForm'];
                    if($employer->validate()){
                        $employer->fio = $employer->getFio($_POST['RegistrationForm']['name'], $_POST['RegistrationForm']['surname'], $_POST['RegistrationForm']['patronymic']);
                        $employer->role = 'employer';
                        $employer->phone = $_POST['RegistrationForm']['phone'];
                        //var_dump($employer); die();
                        $employer->save(false);
                        $this->redirect($this->createUrl('employer/'));
                        return true;
                    }
                } elseif ($_POST['RegistrationForm']['userSelection'] === 'workman') {

                    $workman = new Workman();
                    $workman->attributes =  $_POST['RegistrationForm'];
                    if($employer->validate()){
                        $workman->fio = $workman->getFio($_POST['RegistrationForm']['name'], $_POST['RegistrationForm']['surname'], $_POST['RegistrationForm']['patronymic']);
                        $workman->role = 'workman';
                        $workman->phone = $_POST['RegistrationForm']['phone'];
                        $workman->save(false);
                        $this->redirect($this->createUrl('workman/'));
                        return true;
                    }
                } else {
                    return false;
                }
            }
        }


        //Render registration form
        $this->render('_registration_form', array('data' => $data));
    }

    /**
     * Displays the login page
     */
    public function actionLogin()
    {
        $model=new LoginForm;

        // if it is ajax validation request
        if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if(isset($_POST['LoginForm']))
        {
            $model->attributes=$_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            //var_dump($model->login()); die();
            if($model->validate() && $model->login())

                $this->redirect($this->createUrl(Yii::app()->user->getUserType().'/view/'.Yii::app()->user->Id));
        }
        // display the login form
        $this->render('login',array('model'=>$model));
    }



    public function actionRecover()
    {

    }


}
