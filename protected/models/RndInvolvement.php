<?php

/**
 * This is the model class for table "rnd_involvement".
 *
 * The followings are the available columns in table 'rnd_involvement':
 * @property integer $id
 * @property integer $scholarId
 * @property string $fieldTitleResearch
 * @property string $locationDuration
 * @property string $fundSource
 * @property string $natureOfInvolvement
 */
class RndInvolvement extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'rnd_involvement';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fieldTitleResearch, locationDuration, fundSource, natureOfInvolvement', 'required'),
			array('scholarId', 'numerical', 'integerOnly'=>true),
			array('fundSource, natureOfInvolvement', 'length', 'max'=>250),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, scholarId, fieldTitleResearch, locationDuration, fundSource, natureOfInvolvement', 'safe', 'on'=>'search'),
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
			'fieldTitleResearch' => 'Field Title Research',
			'locationDuration' => 'Location Duration',
			'fundSource' => 'Fund Source',
			'natureOfInvolvement' => 'Nature Of Involvement',
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
		$criteria->compare('fieldTitleResearch',$this->fieldTitleResearch,true);
		$criteria->compare('locationDuration',$this->locationDuration,true);
		$criteria->compare('fundSource',$this->fundSource,true);
		$criteria->compare('natureOfInvolvement',$this->natureOfInvolvement,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RndInvolvement the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
