<?php

/**
 * This is the model class for table "employment".
 *
 * The followings are the available columns in table 'employment':
 * @property integer $id
 * @property integer $scholarId
 * @property integer $employmentStatus
 * @property integer $statusEmployed
 * @property string $companyName
 * @property string $companyAddress
 * @property string $businessName
 * @property string $businessAddress
 * @property integer $sector
 * @property string $businessType
 * @property integer $yearsOfOperation
 * @property string $reasonUnemployed
 */
class Employment extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'employment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('employmentStatus, statusEmployed, sector, businessType, reasonUnemployed', 'required'),
			array('scholarId, employmentStatus, statusEmployed, sector, yearsOfOperation', 'numerical', 'integerOnly'=>true),
			array('companyName, businessName', 'length', 'max'=>250),
			array('businessType', 'length', 'max'=>100),
			array('companyAddress, businessAddress', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, scholarId, employmentStatus, statusEmployed, companyName, companyAddress, businessName, businessAddress, sector, businessType, yearsOfOperation, reasonUnemployed', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'scholarId' => 'Scholar',
			'employmentStatus' => 'Employment Status',
			'statusEmployed' => 'Status Employed',
			'companyName' => 'Company Name',
			'companyAddress' => 'Company Address',
			'businessName' => 'Business Name',
			'businessAddress' => 'Business Address',
			'sector' => 'Sector',
			'businessType' => 'Business Type',
			'yearsOfOperation' => 'Years Of Operation',
			'reasonUnemployed' => 'Reason Unemployed',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('scholarId',$this->scholarId);
		$criteria->compare('employmentStatus',$this->employmentStatus);
		$criteria->compare('statusEmployed',$this->statusEmployed);
		$criteria->compare('companyName',$this->companyName,true);
		$criteria->compare('companyAddress',$this->companyAddress,true);
		$criteria->compare('businessName',$this->businessName,true);
		$criteria->compare('businessAddress',$this->businessAddress,true);
		$criteria->compare('sector',$this->sector);
		$criteria->compare('businessType',$this->businessType,true);
		$criteria->compare('yearsOfOperation',$this->yearsOfOperation);
		$criteria->compare('reasonUnemployed',$this->reasonUnemployed,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Employment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
