<?php

/**
 * This is the model class for table "tracer".
 *
 * The followings are the available columns in table 'tracer':
 * @property integer $id
 * @property integer $scholarId
 * @property string $lastName
 * @property string $firstName
 * @property string $middleName
 * @property string $nameSuffix
 * @property integer $sex
 * @property string $dateOfBirth
 * @property integer $civilStatus
 * @property string $father
 * @property string $mother
 * @property string $addressParents
 * @property integer $yearGraduated
 * @property string $awardsHonors
 * @property string $dateAccomplished
 * @property integer $userId
 * @property string $entryDate
 */
class Tracer extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tracer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('lastName, firstName, dateOfBirth, civilStatus, father, mother, addressParents, yearGraduated, awardsHonors,entryDate', 'required'),
			array('scholarId, sex, civilStatus, yearGraduated, userId', 'numerical', 'integerOnly'=>true),
			array('lastName, firstName, middleName', 'length', 'max'=>100),
			array('nameSuffix', 'length', 'max'=>10),
			array('father, mother', 'length', 'max'=>250),
			array('dateAccomplished', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, scholarId, lastName, firstName, middleName, nameSuffix, sex, dateOfBirth, civilStatus, father, mother, addressParents, yearGraduated, awardsHonors, dateAccomplished, userId, entryDate', 'safe', 'on'=>'search'),
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
			'scholar'=> array(self::BELONGS_TO, 'Scholar', 'scholarID'),
			'address'=> array(self::HAS_ONE, 'Address', 'scholarID'),
			'employmentHistory' => array(self::HAS_MANY, 'EmploymentHistory', 'scholarId'),
			'professionalAffiliation' => array(self::HAS_MANY, 'ProfesiionalAffiliation', 'scholarId'),
			'rndInvolvement' => array(self::HAS_MANY, 'RndInvolvement', 'scholarId'),
			'employment' => array(self::BELONGS_TO, 'Employment', 'scholarId'),
			'proAwardsRecognitionReceived' => array(self::HAS_MANY, 'ProAwardsRecognitionReceived', 'scholarId'),
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
			'lastName' => 'Last Name',
			'firstName' => 'First Name',
			'middleName' => 'Middle Name',
			'nameSuffix' => 'Name Suffix',
			'sex' => 'Gender',
			'dateOfBirth' => 'Date Of Birth',
			'civilStatus' => 'Civil Status',
			'father' => 'Father Name',
			'mother' => 'Mother Name',
			'addressParents' => 'Parents Address',
			'yearGraduated' => 'Year Graduated',
			'awardsHonors' => 'Awards Honors',
			'dateAccomplished' => 'Date Accomplished',
			'userId' => 'User',
			'entryDate' => 'Entry Date',
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
		$criteria->compare('lastName',$this->lastName,true);
		$criteria->compare('firstName',$this->firstName,true);
		$criteria->compare('middleName',$this->middleName,true);
		$criteria->compare('nameSuffix',$this->nameSuffix,true);
		$criteria->compare('sex',$this->sex);
		$criteria->compare('dateOfBirth',$this->dateOfBirth,true);
		$criteria->compare('civilStatus',$this->civilStatus);
		$criteria->compare('father',$this->father,true);
		$criteria->compare('mother',$this->mother,true);
		$criteria->compare('addressParents',$this->addressParents,true);
		$criteria->compare('yearGraduated',$this->yearGraduated);
		$criteria->compare('awardsHonors',$this->awardsHonors,true);
		$criteria->compare('dateAccomplished',$this->dateAccomplished,true);
		$criteria->compare('userId',$this->userId);
		$criteria->compare('entryDate',$this->entryDate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tracer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
