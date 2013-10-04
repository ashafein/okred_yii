<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}




    public function accessRules() {
        return array(
            array('allow',
                'actions' => array('index', 'error', 'logout'),
                'users' => array('*'),
            ),

            array('allow',
                'actions' => array('install'),
                'roles' => array('admin'),
            ),

            array('allow',
                'actions' => array('captcha'),
                'users' => array('*'),
            ),
            array('deny', // deny all other users
                'users' => array('*'),
            ),

            array('deny', // deny all other users
                'actions' => array('logout'),
                'users' => array('?'),
            ),

        );
    }

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

    public function actionInstall()
    {
        $auth=Yii::app()->authManager;

        $auth->clearAll();

        $auth->createOperation('createCompany','create a company');
        $auth->createOperation('viewCompany','view a company');
        $auth->createOperation('updateCompany','update a company');
        $auth->createOperation('deleteCompany','delete a company');

        $auth->createOperation('deleteResume','delete a resume');
        $auth->createOperation('createResume','delete a resume');
        $auth->createOperation('viewResume','delete a resume');
        $auth->createOperation('updateResume','delete a resume');

        $auth->createOperation('createEmployer','delete a resume');
        $auth->createOperation('viewEmployer','delete a resume');
        $auth->createOperation('updateEmployer','delete a resume');
        $auth->createOperation('indexEmployer','delete a resume');
        $auth->createOperation('deleteEmployer','delete a resume');


        $auth->createOperation('indexWorkman','delete a resume');
        $auth->createOperation('createWorkman','delete a resume');
        $auth->createOperation('deleteWorkman','delete a resume');
        $auth->createOperation('updateWorkman','delete a resume');
        $auth->createOperation('viewWorkman','delete a resume');

        $auth->createOperation('changeRole','delete a resume');

        $bizRule='return Yii::app()->user->id==$params["company"]->id_employer;';
        $task=$auth->createTask('updateOwnCompany','update a post by author himself',$bizRule);
        $task->addChild('updateCompany');


        $bizRule='return Yii::app()->user->id==$params["employer"]->id;';
        $task=$auth->createTask('updateOwnEmployer','update a post by author himself',$bizRule);
        $task->addChild('updateEmployer');


        $bizRule='return Yii::app()->user->id==$params["workman"]->id;';
        $task=$auth->createTask('updateOwnWorkman','update a post by author himself',$bizRule);
        $task->addChild('updateWorkman');


        $role=$auth->createRole('child_employer');
        $role->addChild('viewCompany');

        $role=$auth->createRole('employer');
        $role->addChild('child_employer');
        $role->addChild('createCompany');
        $role->addChild('updateCompany');

        $role=$auth->createRole('workman');
        $role->addChild('createResume');
        $role->addChild('updateResume');
        $role->addChild('viewResume');
        $role->addChild('updateWorkman');

        $role=$auth->createRole('admin');
        $role->addChild('employer');
        $role->addChild('workman');
        $role->addChild('deleteCompany');
        $role->addChild('deleteResume');
        $role->addChild('indexWorkman');
        $role->addChild('indexEmployer');

        //создаем пользователя root (запись в БД в таблице users)
        //тут используем DAO, т.к. AR автоматически назначит пользователю роль user
        $password = CPasswordHelper::hashPassword('123456');

        $sql = 'INSERT INTO employer(fio, email, password, state, role)'

            .' VALUES ("root", "test@test.ru", "'.$password
            .'", '.Employer::STATE_ACTIVE.', "'.Employer::ROLE_ADMIN.'")';
        $conn = Yii::app()->db;
        $conn->createCommand($sql)->execute();

        //связываем пользователя с ролью
        $auth->assign('admin', $conn->getLastInsertID());

        $auth->save();

       // $this->render('install');
    }

	/**
	 * This is the action to handle external exceptions.
	 */
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


    public function actionLogout()
    {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }
}