<?php

/**
 * This is the model class for table "category".
 *
 * The followings are the available columns in table 'category':
 * @property integer $id
 * @property integer $scholarId
 * @property integer $categoryId
 * @property integer $programId
 * @property integer $statusId
 * @property integer $yearAwarded
 * @property string $remarks
 */
class Category extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'category';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('scholarId, categoryId, programId, statusId, yearAwarded', 'required'),
			array('scholarId, categoryId, programId, statusId, yearAwarded', 'numerical', 'integerOnly'=>true),
			array('remarks', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, scholarId, categoryId, programId, statusId, yearAwarded, remarks', 'safe', 'on'=>'search'),
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
			'scholarshipCategory'=>array(self::BELONGS_TO, 'ScholarshipCategory', 'categoryId'),
			'scholarAddress'=>array(self::HAS_ONE, 'Address', 'scholarId'),
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
			'categoryId' => 'Category',
			'programId' => 'Program',
			'statusId' => 'Status',
			'yearAwarded' => 'Year Awarded',
			'remarks' => 'Remarks',
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
		$criteria->compare('categoryId',$this->categoryId);
		$criteria->compare('programId',$this->programId);
		$criteria->compare('statusId',$this->statusId);
		$criteria->compare('yearAwarded',$this->yearAwarded);
		$criteria->compare('remarks',$this->remarks,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Category the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
