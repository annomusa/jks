<?php

/**
 * This is the model class for table "sparepart".
 *
 * The followings are the available columns in table 'sparepart':
 * @property integer $ID_SPAREPART
 * @property string $NAMA_BARANG
 * @property integer $HARGA_SATUAN
 * @property integer $STOK
 *
 * The followings are the available model relations:
 * @property RelasiPengadaanSparepart[] $relasiPengadaanSpareparts
 */
class Sparepart extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sparepart';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NAMA_BARANG', 'required'),
			array('HARGA_SATUAN, STOK', 'numerical', 'integerOnly'=>true),
			array('NAMA_BARANG', 'length', 'max'=>25),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_SPAREPART, NAMA_BARANG, HARGA_SATUAN, STOK', 'safe', 'on'=>'search'),
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
			'relasiPengadaanSpareparts' => array(self::HAS_MANY, 'RelasiPengadaanSparepart', 'ID_SPAREPART'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_SPAREPART' => 'Id Sparepart',
			'NAMA_BARANG' => 'Nama Barang',
			'HARGA_SATUAN' => 'Harga Satuan',
			'STOK' => 'Stok',
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

		$criteria->compare('ID_SPAREPART',$this->ID_SPAREPART);
		$criteria->compare('NAMA_BARANG',$this->NAMA_BARANG);
		$criteria->compare('HARGA_SATUAN',$this->HARGA_SATUAN);
		$criteria->compare('STOK',$this->STOK);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Sparepart the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
