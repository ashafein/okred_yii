<?php

/**
 * This is the model class for table "workman".
 *
 * The followings are the available columns in table 'workman':
 * @property string $id
 * @property string $email
 * @property string $phone
 * @property string $password
 * @property string $avatar
 * @property string $fio
 * @property string $id_education_lvl
 * @property string $gender
 * @property string $birth_date
 * @property string $id_residence
 * @property string $created_at
 * @property string $updated_at
 */
class Workman extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'workman';
    }

    const ROLE_WORKMAN = 'workman';

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('email, password, fio', 'length', 'max'=>200),
            array('phone', 'length', 'max'=>100),
            array('avatar', 'length', 'max'=>1024),
            array('id_education_lvl, id_residence', 'length', 'max'=>10),
            array('gender', 'length', 'max'=>6),
            array('birth_date', 'length', 'max'=>20),
            array('created_at, updated_at', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, email, phone, password, avatar, fio, id_education_lvl, gender, birth_date, id_residence, created_at, updated_at', 'safe', 'on'=>'search'),
        );
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
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'Id Workman',
            'email' => 'Email',
            'phone' => 'Phone',
            'password' => 'Password',
            'avatar' => 'Avatar',
            'fio' => 'Fio',
            'id_education_lvl' => 'Id Education Lvl',
            'gender' => 'Gender',
            'birth_date' => 'Birth Date',
            'id_residence' => 'Id Residence',
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
        $criteria->compare('password',$this->password,true);
        $criteria->compare('avatar',$this->avatar,true);
        $criteria->compare('fio',$this->fio,true);
        $criteria->compare('id_education_lvl',$this->id_education_lvl,true);
        $criteria->compare('gender',$this->gender,true);
        $criteria->compare('birth_date',$this->birth_date,true);
        $criteria->compare('id_residence',$this->id_residence,true);
        $criteria->compare('created_at',$this->created_at,true);
        $criteria->compare('updated_at',$this->updated_at,true);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

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
                $this->role = Workman::ROLE_WORKMAN;
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

    public function afterSave() {
        parent::afterSave();
        //связываем нового пользователя с ролью
        $auth=Yii::app()->authManager;
        //предварительно удаляем старую связь
        if(!$this->isNewRecord === true){
            $auth->revoke($this->prevRole, $this->id);
        }
        $auth->assignwithtype($this->role, $this->id, $this->tableName());
        $auth->save();
        return true;
    }

    public function beforeDelete() {
        parent::beforeDelete();
        //убираем связь удаленного пользователя с ролью
        $auth=Yii::app()->authManager;
        $auth->revoke($this->role, $this->id);
        $auth->save();
        return true;
    }
}
