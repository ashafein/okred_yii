<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property string $id
 * @property string $email
 * @property string $phone
 * @property string $password
 * @property string $avatar
 * @property string $name
 * @property string $surname
 * @property string $patronymic
 * @property string $role
 * @property string $gender
 * @property string $birth_date
 * @property string $id_country
 * @property string $id_city
 * @property string $state
 * @property string $last_visited_at
 * @property string $created_at
 * @property string $updated_at

 */
class Workman extends User
{

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('email, phone', 'unique','className' => 'User'),
            array('email', 'email'),
            array('userSelection', 'required', 'on'=>'insert'),
            array('email, password, verifyPassword', 'required'),
            array('password','compare','compareAttribute'=>'verifyPassword' ),
            array('phone', 'length', 'max'=>100),
            array('email, password, name, surname, patronymic', 'length', 'max'=>200),
            array('phone', 'length', 'max'=>100),
            //array('avatar', 'length', 'max'=>1024),
            array('role, id_country, id_city', 'length', 'max'=>10),
            array('gender', 'length', 'max'=>6),
            array('birth_date, state', 'length', 'max'=>20),
            array('last_visited_at, created_at, updated_at', 'unsafe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, email, phone, password, avatar, name, surname, patronymic, role, gender, birth_date, id_country, id_city, state, last_visited_at, created_at, updated_at', 'safe', 'on'=>'search'),
        );
    }


    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'email' => 'Email',
            'phone' => 'Phone Number',
            'password' => 'Password',
            'avatar' => 'Avatar',
            'name' => 'Name',
            'surname' => 'Surname',
            'patronymic' => 'Patronymic',
            'role' => 'Role',
            'gender' => 'Gender',
            'birth_date' => 'Birth Date',
            'id_country' => 'Country',
            'id_city' => 'City',
            'state' => 'State',
            'last_visited_at' => 'Last Visited At',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search()
    {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria=new CDbCriteria;

        $criteria->compare('id',$this->id,true);
        $criteria->compare('email',$this->email,true);
        $criteria->compare('phone',$this->phone,true);
        $criteria->compare('avatar',$this->avatar,true);
        $criteria->compare('name',$this->name,true);
        $criteria->compare('surname',$this->surname,true);
        $criteria->compare('patronymic',$this->patronymic,true);
        $criteria->compare('role',$this->role,true);
        $criteria->compare('gender',$this->gender,true);
        $criteria->compare('birth_date',$this->birth_date,true);
        $criteria->compare('id_country',$this->id_country,true);
        $criteria->compare('id_city',$this->id_city,true);
        $criteria->compare('state',$this->state,true);
        $criteria->compare('last_visited_at',$this->last_visited_at,true);
        $criteria->compare('created_at',$this->created_at,true);
        $criteria->compare('updated_at',$this->updated_at,true);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }
    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'resume' => array(self::HAS_ONE, 'Resume', 'id_workman'),
        );
    }



    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Workman the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }


    /**
     * This is invoked before the record is saved.
     * @return boolean whether the record should be saved.
     */
    protected function beforeSave()
    {
        if(parent::beforeSave())
        {
            if($this->isNewRecord === true)
            {
                $date = date('Y-m-d H:i:s',time());
                $this->state = 0;
                $this->created_at=$date;
                $this->password = CPasswordHelper::hashPassword($this->password);
                $this->role = User::ROLE_WORKMAN;
                return true;
            }
            else {
                $date = date('Y-m-d H:i:s',time());
                $this->updated_at=$date;
                $this->password = CPasswordHelper::hashPassword($this->password);
                return true;
            }
        }

        else
            return false;
    }



  /*  public function afterSave() {
        parent::afterSave();
        //связываем нового пользователя с ролью
        $auth=Yii::app()->authManager;
        //предварительно удаляем старую связь
        if(!$this->isNewRecord === true){
            $auth->revoke($this->prevRole, $this->id);
        }
        $auth->assign($this->role, $this->id);
        $auth->save();
        return true;
    }
*/
    public function beforeDelete() {
        parent::beforeDelete();
        //убираем связь удаленного пользователя с ролью
        $auth=Yii::app()->authManager;
        $auth->revoke($this->role, $this->id);
        $auth->save();
        return true;
    }
}
