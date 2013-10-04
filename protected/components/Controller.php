<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();



    protected $_authManager;
    protected $_request;
    protected $_session;
    protected $_user;


    public function __construct($id, $module = null)
    {
        parent::__construct($id, $module);

        $this->_authManager = Yii::app()->authManager;
        $this->_request = Yii::app()->request;
        $this->_session = Yii::app()->session;
        $this->_user = Yii::app()->user;
    }

    public function init()
    {
       if (!$this->_user->isGuest) {
            // если да - читаем
            $role = $this->_user->getState('role');

            if ($role) {
                var_dump($this);
                if ($this->_authManager->getAuthItem($role)) {
                    $this->_authManager->assign($role, $this->_user->id);
                } else {
                    // TODO: Log this. типа  - "отметим этот факт"
                }
            }
        }
    }

   /* public function filters()
    {
        return array(
            'accessControl',
        );
    }
   */


}