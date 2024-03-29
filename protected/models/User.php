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
class User extends CActiveRecord
{


    const ROLE_ADMIN = 'admin';
    const ROLE_EMPLOYER = 'employer';
    const CHILD_EMPLOYER = 'child_employer';
    const ROLE_WORKMAN = 'workman';
    const STATE_ACTIVE = 1;
    const STATE_DISABLED = 2;

    public $verifyPassword;
    public $userSelection;

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

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
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
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
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */


	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
