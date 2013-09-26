<?php

/**
 * This is the model class for table "company".
 *
 * The followings are the available columns in table 'company':
 * @property string $id_company
 * @property string $id_employer
 * @property string $name
 * @property string $id_company_type
 * @property string $id_legal_type
 * @property string $staff
 * @property string $description
 * @property string $logo
 * @property string $slogan
 * @property string $phone
 * @property string $website
 * @property string $id_city
 * @property string $created_at
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property CompanyType $idCompanyType
 * @property LegalType $idLegalType
 * @property City $idCity
 * @property Employer[] $employers
 */
class Company extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'company';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_employer, id_company_type, id_legal_type, staff, id_city', 'length', 'max'=>10),
			array('name', 'length', 'max'=>200),
			array('description, logo, slogan, website', 'length', 'max'=>1024),
			array('phone', 'length', 'max'=>100),
			array('created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_company, id_employer, name, id_company_type, id_legal_type, staff, description, logo, slogan, phone, website, id_city, created_at, updated_at', 'safe', 'on'=>'search'),
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
			'employers' => array(self::BELONGS_TO, 'Employer', 'id_imployer'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'companyname' => 'Name',
			'id_company_type' => 'Company Type',
			'id_legal_type' => 'Company Legal Type',
			'staff' => 'Staff',
			'description' => 'Description',
			'logo' => 'Logo',
			'slogan' => 'Slogan',
			'phone' => 'Phone',
			'website' => 'Website',
			'idCity' => 'City',
			'createdAt' => 'Created At',
			'updatedAt' => 'Updated At',
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

		$criteria->compare('id_company',$this->id_company,true);
		$criteria->compare('id_employer',$this->id_employer,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('id_company_type',$this->id_company_type,true);
		$criteria->compare('id_legal_type',$this->id_legal_type,true);
		$criteria->compare('staff',$this->staff,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('logo',$this->logo,true);
		$criteria->compare('slogan',$this->slogan,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('website',$this->website,true);
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
	 * @return Company the static model class
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
