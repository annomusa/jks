<?php

/**
 * This is the model class for table "relasi_pengadaan_sparepart".
 *
 * The followings are the available columns in table 'relasi_pengadaan_sparepart':
 * @property integer $ID_RELASI
 * @property integer $ID_PENGADAAN
 * @property integer $ID_SPAREPART
 * @property integer $ID_SATUAN
 * @property integer $JUMLAH
 * @property integer $HARGA_SEMENTARA
 *
 * The followings are the available model relations:
 * @property Pengadaan $iDPENGADAAN
 * @property Sparepart $iDSPAREPART
 * @property Satuan $iDSATUAN
 */
class RelasiPengadaanSparepart extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'relasi_pengadaan_sparepart';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_PENGADAAN, ID_SPAREPART', 'required'),
			array('ID_PENGADAAN, ID_SPAREPART, ID_SATUAN, JUMLAH, HARGA_SEMENTARA', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_RELASI, ID_PENGADAAN, ID_SPAREPART, ID_SATUAN, JUMLAH, HARGA_SEMENTARA', 'safe', 'on'=>'search'),
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
			'iDPENGADAAN' => array(self::BELONGS_TO, 'Pengadaan', 'ID_PENGADAAN'),
			'iDSPAREPART' => array(self::BELONGS_TO, 'Sparepart', 'ID_SPAREPART'),
			'iDSATUAN' => array(self::BELONGS_TO, 'Satuan', 'ID_SATUAN'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_RELASI' => 'Id Relasi',
			'ID_PENGADAAN' => 'Id Pengadaan',
			'ID_SPAREPART' => 'Id Sparepart',
			'ID_SATUAN' => 'Id Satuan',
			'JUMLAH' => 'Jumlah',
			'HARGA_SEMENTARA' => 'Harga Sementara',
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

		$criteria->compare('ID_RELASI',$this->ID_RELASI);
		$criteria->compare('ID_PENGADAAN',$this->ID_PENGADAAN);
		$criteria->compare('ID_SPAREPART',$this->ID_SPAREPART);
		$criteria->compare('ID_SATUAN',$this->ID_SATUAN);
		$criteria->compare('JUMLAH',$this->JUMLAH);
		$criteria->compare('HARGA_SEMENTARA',$this->HARGA_SEMENTARA);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function search2($id)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('ID_RELASI',$this->ID_RELASI);
		$criteria->compare('ID_PENGADAAN',$this->ID_PENGADAAN);
		$criteria->compare('ID_SPAREPART',$this->ID_SPAREPART);
		$criteria->compare('ID_SATUAN',$this->ID_SATUAN);
		$criteria->compare('JUMLAH',$this->JUMLAH);
		$criteria->compare('HARGA_SEMENTARA',$this->HARGA_SEMENTARA);

		if(!empty($id))
		{
			$criteria->condition = "ID_PENGADAAN='$id'";
		}

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RelasiPengadaanSparepart the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
