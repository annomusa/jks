<?php

/**
 * This is the model class for table "pengadaan".
 *
 * The followings are the available columns in table 'pengadaan':
 * @property integer $ID_PENGADAAN
 * @property string $NO_PO
 * @property string $TGL_PENGADAAN
 * @property string $PERMINTAAN
 * @property integer $HARGA_TOTAL
 * @property string $NAMA_TOKO
 * @property string $NO_TLP
 *
 * The followings are the available model relations:
 * @property RelasiPengadaanSparepart[] $relasiPengadaanSpareparts
 */
class Pengadaan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pengadaan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NO_PO', 'required'),
			array('HARGA_TOTAL', 'numerical', 'integerOnly'=>true),
			array('NO_PO, PERMINTAAN, NAMA_TOKO, STATUS', 'length', 'max'=>25),
			array('NO_TLP', 'length', 'max'=>15),
			array('TGL_PENGADAAN', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_PENGADAAN, NO_PO, TGL_PENGADAAN, PERMINTAAN, HARGA_TOTAL, NAMA_TOKO, NO_TLP, STATUS', 'safe', 'on'=>'search'),
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
			'relasiPengadaanSpareparts' => array(self::HAS_MANY, 'RelasiPengadaanSparepart', 'ID_PENGADAAN'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_PENGADAAN' => 'Id Pengadaan',
			'NO_PO' => 'No Po',
			'TGL_PENGADAAN' => 'Tgl Pengadaan',
			'PERMINTAAN' => 'Permintaan',
			'HARGA_TOTAL' => 'Harga Total',
			'NAMA_TOKO' => 'Nama Toko',
			'NO_TLP' => 'No Tlp',
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

		$criteria->compare('ID_PENGADAAN',$this->ID_PENGADAAN);
		$criteria->compare('NO_PO',$this->NO_PO,true);
		$criteria->compare('TGL_PENGADAAN',$this->TGL_PENGADAAN,true);
		$criteria->compare('PERMINTAAN',$this->PERMINTAAN,true);
		$criteria->compare('HARGA_TOTAL',$this->HARGA_TOTAL);
		$criteria->compare('NAMA_TOKO',$this->NAMA_TOKO,true);
		$criteria->compare('NO_TLP',$this->NO_TLP,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pengadaan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
