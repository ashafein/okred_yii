<?php

/**
 * This is the model class for table "resume".
 *
 * The followings are the available columns in table 'resume':
 * @property string $id_resume
 * @property string $id_workman
 * @property string $name
 * @property integer $avatar
 * @property integer $birth_date
 * @property integer $gender
 * @property integer $residence
 * @property string $id_movement
 * @property string $id_business_trip
 * @property integer $citizenship
 * @property integer $job_allow
 * @property integer $time_to_arrive
 * @property integer $mail
 * @property integer $phone
 * @property string $position_wanted
 * @property string $id_activity_sphere
 * @property string $salary
 * @property string $id_currency
 * @property string $id_employment
 * @property string $id_schedule
 * @property string $additional_info
 * @property string $created_at
 * @property string $updated_at
 */
class Resume extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'resume';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_workman, id_movement, id_business_trip, id_activity_sphere, id_currency, id_employment, id_schedule', 'required'),
			array('avatar, birth_date, gender, residence, citizenship, job_allow, time_to_arrive, mail, phone', 'numerical', 'integerOnly'=>true),
			array('id_workman, id_movement, id_business_trip, id_activity_sphere, salary, id_currency, id_employment, id_schedule', 'length', 'max'=>10),
			array('name', 'length', 'max'=>200),
			array('position_wanted, additional_info', 'length', 'max'=>1024),
			array('created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_resume, id_workman, name, avatar, birth_date, gender, residence, id_movement, id_business_trip, citizenship, job_allow, time_to_arrive, mail, phone, position_wanted, id_activity_sphere, salary, id_currency, id_employment, id_schedule, additional_info, created_at, updated_at', 'safe', 'on'=>'search'),
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
			'id_resume' => 'Id Resume',
			'id_workman' => 'Id Workman',
			'name' => 'Name',
			'avatar' => 'Avatar',
			'birth_date' => 'Birth Date',
			'gender' => 'Gender',
			'residence' => 'Residence',
			'id_movement' => 'Id Movement',
			'id_business_trip' => 'Id Business Trip',
			'citizenship' => 'Citizenship',
			'job_allow' => 'Job Allow',
			'time_to_arrive' => 'Time To Arrive',
			'mail' => 'Mail',
			'phone' => 'Phone',
			'position_wanted' => 'Position Wanted',
			'id_activity_sphere' => 'Id Activity Sphere',
			'salary' => 'Salary',
			'id_currency' => 'Id Currency',
			'id_employment' => 'Id Employment',
			'id_schedule' => 'Id Schedule',
			'additional_info' => 'Additional Info',
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

		$criteria->compare('id_resume',$this->id_resume,true);
		$criteria->compare('id_workman',$this->id_workman,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('avatar',$this->avatar);
		$criteria->compare('birth_date',$this->birth_date);
		$criteria->compare('gender',$this->gender);
		$criteria->compare('residence',$this->residence);
		$criteria->compare('id_movement',$this->id_movement,true);
		$criteria->compare('id_business_trip',$this->id_business_trip,true);
		$criteria->compare('citizenship',$this->citizenship);
		$criteria->compare('job_allow',$this->job_allow);
		$criteria->compare('time_to_arrive',$this->time_to_arrive);
		$criteria->compare('mail',$this->mail);
		$criteria->compare('phone',$this->phone);
		$criteria->compare('position_wanted',$this->position_wanted,true);
		$criteria->compare('id_activity_sphere',$this->id_activity_sphere,true);
		$criteria->compare('salary',$this->salary,true);
		$criteria->compare('id_currency',$this->id_currency,true);
		$criteria->compare('id_employment',$this->id_employment,true);
		$criteria->compare('id_schedule',$this->id_schedule,true);
		$criteria->compare('additional_info',$this->additional_info,true);
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
	 * @return Resume the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
