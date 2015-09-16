<?php

/**
 * This is the model class for table "privilege".
 *
 * The followings are the available columns in table 'privilege':
 * @property integer $ID_PRIVILEGE
 * @property string $NAMA_PRIVILEGE
 *
 * The followings are the available model relations:
 * @property Karyawan[] $karyawans
 */
class Privilege extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'privilege';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NAMA_PRIVILEGE', 'required'),
			array('NAMA_PRIVILEGE', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_PRIVILEGE, NAMA_PRIVILEGE', 'safe', 'on'=>'search'),
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
			'karyawans' => array(self::HAS_MANY, 'Karyawan', 'ID_PRIVILEGE'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_PRIVILEGE' => 'Id Privilege',
			'NAMA_PRIVILEGE' => 'Nama Privilege',
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

		$criteria->compare('ID_PRIVILEGE',$this->ID_PRIVILEGE);
		$criteria->compare('NAMA_PRIVILEGE',$this->NAMA_PRIVILEGE,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Privilege the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
