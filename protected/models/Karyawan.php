<?php

/**
 * This is the model class for table "karyawan".
 *
 * The followings are the available columns in table 'karyawan':
 * @property integer $ID_KARYAWAN
 * @property string $NAMA
 * @property string $NO_HP
 * @property string $ALAMAT
 * @property string $TGL_MASUK_KERJA
 * @property string $PENEMPATAN
 * @property string $STATUS
 *
 * The followings are the available model relations:
 * @property Kendaraan[] $kendaraans
 */
class Karyawan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'karyawan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NAMA', 'required'),
			array('NAMA, PENEMPATAN, STATUS', 'length', 'max'=>25),
			array('ID_PRIVILEGE', 'numerical', 'integerOnly'=>true),
			array('NO_HP', 'length', 'max'=>15),
			array('ALAMAT', 'length', 'max'=>30),
			array('TGL_MASUK_KERJA', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_KARYAWAN, NAMA, NO_HP, ALAMAT, TGL_MASUK_KERJA, PENEMPATAN, STATUS', 'safe', 'on'=>'search'),
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
			'kendaraans' => array(self::HAS_MANY, 'Kendaraan', 'ID_KARYAWAN'),
			'iDPREVILEGE' => array(self::BELONGS_TO, 'Privilege', 'ID_PRIVILEGE'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_KARYAWAN' => 'Id Karyawan',
			'NAMA' => 'Nama',
			'NO_HP' => 'No Hp',
			'ALAMAT' => 'Alamat',
			'TGL_MASUK_KERJA' => 'Tgl Masuk Kerja',
			'PENEMPATAN' => 'Penempatan',
			'STATUS' => 'Status',
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

		$criteria->compare('ID_KARYAWAN',$this->ID_KARYAWAN);
		$criteria->compare('NAMA',$this->NAMA,true);
		//$criteria->compare('ID_PRIVILEGE',$this->ID_PRIVILEGE,true);
		$criteria->compare('NO_HP',$this->NO_HP,true);
		$criteria->compare('ALAMAT',$this->ALAMAT,true);
		$criteria->compare('TGL_MASUK_KERJA',$this->TGL_MASUK_KERJA,true);
		$criteria->compare('PENEMPATAN',$this->PENEMPATAN,true);
		$criteria->compare('STATUS',$this->STATUS,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Karyawan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
