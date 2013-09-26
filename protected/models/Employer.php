<?php

/**
 * This is the model class for table "employer".
 *
 * The followings are the available columns in table 'employer':
 * @property string $id_employer
 * @property string $email
 * @property string $password
 * @property string $fio
 * @property string $id_parent
 * @property string $id_role
 * @property string $id_company
 * @property string $id_city
 * @property string $created_at
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property Role $idRole
 * @property Company $idCompany
 * @property City $idCity
 * @property Vacancy[] $vacancies
 */
class Employer extends CActiveRecord
{

    public $verifyPassword;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'employer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('email, password', 'required'),
            array('email', 'email'),
			array('email, password, fio', 'length', 'max'=>255),
			array('password', 'compare', 'compareAttribute'=>'verifyPassword', 'on'=>'create'),
			array('created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_employer, email, password, fio, id_parent, id_role, id_company, id_city, created_at, updated_at', 'safe', 'on'=>'search'),
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
			'company' => array(self::HAS_ONE, 'Company', 'id_employer'),
			'vacancies' => array(self::HAS_MANY, 'Vacancy', 'id_employer'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'email' => 'Email',
			'password' => 'Password',
			'fio' => 'FIO',
			'id_role' => 'Role',
			'id_city' => 'City',
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

		$criteria->compare('id_employer',$this->id_employer,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('fio',$this->fio,true);
		$criteria->compare('id_parent',$this->id_parent,true);
		$criteria->compare('id_role',$this->id_role,true);
		$criteria->compare('id_company',$this->id_company,true);
		$criteria->compare('id_city',$this->id_city,true);
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
	 * @return Employer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}


    /**
     * This is invoked before the record is saved.
     * @return boolean whether the record should be saved.
     */protected function beforeSave()
    {
        if(parent::beforeSave())
        {
            if($this->isNewRecord === true)
            {
                 if(!Yii::app()->user->isGuest) {
                   $this->id_parent = Yii::app()->user->Id;
                }

                $date = date('Y-m-d H:i:s',time());
                $this->created_at=$date;
                $this->password = $this->cryptPassword($this->password);
                return true;
            }
             else {
                 $date = date('Y-m-d H:i:s',time());
                 $this->updated_at=$date;
                 $this->password = $this->cryptPassword($this->password);
                 return true;
             }
        }

        else
            return false;
    }

    public function cryptPassword($password)
    {
        return crypt($password);
    }

}
