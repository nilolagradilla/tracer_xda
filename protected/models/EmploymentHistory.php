<?php

/**
 * This is the model class for table "employment_history".
 *
 * The followings are the available columns in table 'employment_history':
 * @property integer $id
 * @property integer $scholarId
 * @property string $position
 * @property string $inclusivePeriod
 * @property integer $relatedToAcademic
 * @property string $companyAddress
 */
class EmploymentHistory extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'employment_history';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('position, inclusivePeriod, relatedToAcademic, companyAddress', 'required'),
			array('scholarId, relatedToAcademic', 'numerical', 'integerOnly'=>true),
			array('position, inclusivePeriod', 'length', 'max'=>250),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, scholarId, position, inclusivePeriod, relatedToAcademic, companyAddress', 'safe', 'on'=>'search'),
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
			'position' => 'Position',
			'inclusivePeriod' => 'Inclusive Period',
			'relatedToAcademic' => 'Related To Academic',
			'companyAddress' => 'Company Address',
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
		$criteria->compare('position',$this->position,true);
		$criteria->compare('inclusivePeriod',$this->inclusivePeriod,true);
		$criteria->compare('relatedToAcademic',$this->relatedToAcademic);
		$criteria->compare('companyAddress',$this->companyAddress,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EmploymentHistory the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
