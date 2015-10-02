<?php

/**
 * This is the model class for table "relasi_po".
 *
 * The followings are the available columns in table 'relasi_po':
 * @property integer $ID_RELASI_PO
 * @property integer $ID_PERJALANAN
 * @property integer $ID_ONGKOS
 * @property integer $KETERANGAN
 */
class RelasiPo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'relasi_po';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_PERJALANAN, ID_ONGKOS, KETERANGAN', 'required'),
			array('ID_PERJALANAN, ID_ONGKOS, KETERANGAN', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_RELASI_PO, ID_PERJALANAN, ID_ONGKOS, KETERANGAN', 'safe', 'on'=>'search'),
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
			'iDONGKOS' => array(self::BELONGS_TO, 'Ongkos', 'ID_ONGKOS'),
			'iDPERJALANAN' => array(self::BELONGS_TO, 'Perjalanan', 'ID_PERJALANAN'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_RELASI_PO' => 'Id Relasi Po',
			'ID_PERJALANAN' => 'Id Perjalanan',
			'ID_ONGKOS' => 'Id Ongkos',
			'KETERANGAN' => 'Keterangan',
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

		$criteria->compare('ID_RELASI_PO',$this->ID_RELASI_PO);
		$criteria->compare('ID_PERJALANAN',$this->ID_PERJALANAN);
		$criteria->compare('ID_ONGKOS',$this->ID_ONGKOS);
		$criteria->compare('KETERANGAN',$this->KETERANGAN);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function search2($id)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('ID_RELASI_PO',$this->ID_RELASI_PO);
		$criteria->compare('ID_PERJALANAN',$this->ID_PERJALANAN);
		$criteria->compare('ID_ONGKOS',$this->ID_ONGKOS);
		$criteria->compare('KETERANGAN',$this->KETERANGAN);

		if(!empty($id))
		{
			$criteria->condition = "ID_PERJALANAN='$id'";
		}

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RelasiPo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function hitungtotalongkos($records)
	{
		$jumlah = 0;
		foreach ($records as $rekam_data) {
			$jumlah += $rekam_data->iDONGKOS->HARGA;
		}
		return $jumlah;
	}
}
