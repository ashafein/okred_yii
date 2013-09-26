<?php

/**
 * This is the model class for table "vacancy".
 *
 * The followings are the available columns in table 'vacancy':
 * @property string $id_vacancy
 * @property string $id_employer
 * @property string $name
 * @property string $id_region
 * @property string $salary_from
 * @property string $salary_to
 * @property string $id_currency
 * @property string $id_expirience
 * @property string $description
 * @property string $address
 * @property string $id_activity_sphere
 * @property string $functions
 * @property string $id_education_lvl
 * @property string $schedule
 * @property string $created_at
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property Resume[] $resumes
 * @property Employer $idEmployer
 * @property Region $idRegion
 * @property Currency $idCurrency
 * @property WorkmanExpirience $idExpirience
 * @property ActivitySphere $idActivitySphere
 * @property EducationLvl $idEducationLvl
 * @property Technology[] $technologies
 */
class Vacancy extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'vacancy';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_employer, name, id_region', 'required'),
			array('id_employer, id_region, salary_from, salary_to, id_currency, id_expirience, id_activity_sphere, id_education_lvl', 'length', 'max'=>10),
			array('name', 'length', 'max'=>200),
			array('description', 'length', 'max'=>1024),
			array('address, functions, schedule', 'length', 'max'=>500),
			array('created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_vacancy, id_employer, name, id_region, salary_from, salary_to, id_currency, id_expirience, description, address, id_activity_sphere, functions, id_education_lvl, schedule, created_at, updated_at', 'safe', 'on'=>'search'),
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
			'employer' => array(self::BELONGS_TO, 'Employer', 'id_employer'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_vacancy' => 'Id Vacancy',
			'id_employer' => 'Id Employer',
			'name' => 'Name',
			'id_region' => 'Id Region',
			'salary_from' => 'Salary From',
			'salary_to' => 'Salary To',
			'id_currency' => 'Id Currency',
			'id_expirience' => 'Id Expirience',
			'description' => 'Description',
			'address' => 'Address',
			'id_activity_sphere' => 'Id Activity Sphere',
			'functions' => 'Functions',
			'id_education_lvl' => 'Id Education Lvl',
			'schedule' => 'Schedule',
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

		$criteria->compare('id_vacancy',$this->id_vacancy,true);
		$criteria->compare('id_employer',$this->id_employer,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('id_region',$this->id_region,true);
		$criteria->compare('salary_from',$this->salary_from,true);
		$criteria->compare('salary_to',$this->salary_to,true);
		$criteria->compare('id_currency',$this->id_currency,true);
		$criteria->compare('id_expirience',$this->id_expirience,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('id_activity_sphere',$this->id_activity_sphere,true);
		$criteria->compare('functions',$this->functions,true);
		$criteria->compare('id_education_lvl',$this->id_education_lvl,true);
		$criteria->compare('schedule',$this->schedule,true);
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
	 * @return Vacancy the static model class
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
            $date = date('Y-m-d H:i:s',time());
            $this->created_at=$date;
            //var_dump($dates); die();
            return true;
        }
        else {
            $date = date('Y-m-d H:i:s',time());
            $this->updated_at=$date;
            return true;
        }
    }

    else
        return false;
}
}
