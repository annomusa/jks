<?php

/**
 * This is the model class for table "kendaraan".
 *
 * The followings are the available columns in table 'kendaraan':
 * @property integer $ID_KENDARAAN
 * @property integer $ID_KARYAWAN
 * @property string $NOPOL
 * @property string $STATUS_SOPIR
 *
 * The followings are the available model relations:
 * @property Karyawan $iDKARYAWAN
 * @property Perbaikan[] $perbaikans
 * @property Perjalanan[] $perjalanans
 */
class Kendaraan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'kendaraan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_KARYAWAN, NOPOL', 'required'),
			array('ID_KARYAWAN', 'numerical', 'integerOnly'=>true),
			array('NOPOL, STATUS_SOPIR', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_KENDARAAN, ID_KARYAWAN, NOPOL, STATUS_SOPIR', 'safe', 'on'=>'search'),
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
			'iDKARYAWAN' => array(self::BELONGS_TO, 'Karyawan', 'ID_KARYAWAN'),
			'perbaikans' => array(self::HAS_MANY, 'Perbaikan', 'ID_KENDARAAN'),
			'perjalanans' => array(self::HAS_MANY, 'Perjalanan', 'ID_KENDARAAN'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_KENDARAAN' => 'Id Kendaraan',
			'ID_KARYAWAN' => 'Id Karyawan',
			'NOPOL' => 'Nopol',
			'STATUS_SOPIR' => 'Status Sopir',
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

		$criteria->compare('ID_KENDARAAN',$this->ID_KENDARAAN);
		$criteria->compare('ID_KARYAWAN',$this->ID_KARYAWAN);
		$criteria->compare('NOPOL',$this->NOPOL,true);
		$criteria->compare('STATUS_SOPIR',$this->STATUS_SOPIR,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kendaraan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
