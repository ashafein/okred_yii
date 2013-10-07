<?php


class UserController extends Controller {
    public $defaultAction = 'login';

    // Only allow the registration if the user is not already logged in and
    // the function is activated in the Module Configuration


    public function beforeAction($action) {



        return parent::beforeAction($action);
    }

    /**
     * @return array action filters
     */
   /* public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }*/
// Actions access rights for users
    public function accessRules() {
        return array(
            array('allow',
                'actions' => array('error', 'login','signup', 'recover'),
                'users' => array('*'),
            ),
            array('allow',
                'actions' => array('view', 'index'),
                'users' => array('@'),
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

        $user = new User;
        $path = '';
      //  var_dump($user->getScenario()); die('21');
        // If data received
        if(isset($_POST['User'])){
            $user->attributes = $_POST['User'];
            if($user->validate()){
                if($_POST['User']['userSelection'] == 'employer'){
                    $data = new Employer;
                    $data->attributes = $_POST['User'];
                    $path = 'company';
                    $data->save(false);

                }else if($_POST['User']['userSelection'] == 'workman'){
                    $data = new Workman;
                    $data->attributes = $_POST['User'];
                    $path = 'vacancy';
                    $data->save(false);
                }else{
                    return false;
                }
                $this->redirect($this->createUrl('/site/index'));
                return true;
            }
        }

        //Render registration form
        $this->render('_registration_form', array('data' => $user));
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
            if($model->validate() && $model->login())
               //var_dump('1'); die('2');

                $this->redirect($this->createUrl(Yii::app()->user->getRole().'/view/'.Yii::app()->user->Id));
        }
        // display the login form
        $this->render('login',array('model'=>$model));
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id)
    {
        $this->render('view',array(
            'model'=>$this->loadModel($id),
        ));
    }


    public function actionRecover()
    {

    }

    public function actionIndex()
    {
        $dataProvider=new CActiveDataProvider('User');
        $this->render('index',array(
            'dataProvider'=>$dataProvider,
        ));
    }


    public function loadModel($id)
    {
        $model=User::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }
}
