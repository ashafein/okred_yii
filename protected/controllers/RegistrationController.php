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


    public function actionEmployer() {
        // Creating model
        $data = array();

        $employer = new Employer();
        $company = new Company();

        $data['employer'] = $employer;
        $data['company'] = $company;
        $data['user'] = 'employer';
       // echo '<pre>';
       // var_dump($_POST); die();

        // If dat;a received
        if((isset($_POST['Employer'])) && (isset($_POST['Company'])))
        {
            // Safe attributes values assign
            $employer->attributes = $_POST['Employer'];
            $company->attributes = $_POST['Company'];

            // Data validation before saving
            if(($employer->validate()) && ($company->validate()))
            {
                // Save recieved data
                // false is given for non forward second validation
                $employer->save(false);
                $company->save(false);

                // redirect to  all employers list
                $this->redirect($this->createUrl('employer/'));
            }
        }

        // Render registration form
        $this->render('_formEmployer', array('data' => $data ));
    }

    public function actionWorkman() {
        // Creating model
        $employer = new Workman();
//die('21');
        // If data received
        if(isset($_POST['Employer']))
        {
            // Safe attributes values assign
            $employer->attributes = $_POST['Employer'];

            // Data validation before saving
            if($employer->validate())
            {
                // Save recieved date
                // false is given for non forward second validation
                $employer->save(false);

                // redirect to  all employers list
                $this->redirect($this->createUrl('employer/'));
            }
        }

        // Render registration form
        $this->render('_form', array('form'=>$employer, 'user'=>'workman'));


    }
   */


}
