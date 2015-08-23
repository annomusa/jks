<?php

/**
 * This is the model class for table "admin".
 *
 * The followings are the available columns in table 'admin':
 * @property integer $ID_ADMIN
 * @property string $NAMA
 * @property string $USERNAME
 * @property string $PASSWORD
 * @property integer $PRIVILEGE
 */
class Admin extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'admin';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NAMA, USERNAME, PASSWORD, PRIVILEGE', 'required'),
			array('PRIVILEGE', 'numerical', 'integerOnly'=>true),
			array('NAMA', 'length', 'max'=>50),
			array('USERNAME', 'length', 'max'=>20),
			array('PASSWORD', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_ADMIN, NAMA, USERNAME, PASSWORD, PRIVILEGE', 'safe', 'on'=>'search'),
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
			'ID_ADMIN' => 'Id Admin',
			'NAMA' => 'Nama',
			'USERNAME' => 'Username',
			'PASSWORD' => 'Password',
			'PRIVILEGE' => 'Privilege',
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

		$criteria->compare('ID_ADMIN',$this->ID_ADMIN);
		$criteria->compare('NAMA',$this->NAMA,true);
		$criteria->compare('USERNAME',$this->USERNAME,true);
		$criteria->compare('PASSWORD',$this->PASSWORD,true);
		$criteria->compare('PRIVILEGE',$this->PRIVILEGE);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Admin the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
