<?php

/**
 * This is the model class for table "perjalanan".
 *
 * The followings are the available columns in table 'perjalanan':
 * @property integer $ID_PERJALANAN
 * @property integer $ID_PENERBIT
 * @property integer $ID_ONGKOS
 * @property integer $ID_KENDARAAN
 * @property string $TGL_PERJALANAN
 * @property string $NO_SURAT_PO
 * @property string $JENIS_PERINTAH
 * @property string $RITASE
 * @property integer $TITIPAN_AWAL
 * @property integer $LEBIH
 * @property integer $KURANG
 * @property integer $AKHIR
 *
 * The followings are the available model relations:
 * @property Penerbit $iDPENERBIT
 * @property Ongkos $iDONGKOS
 * @property Kendaraan $iDKENDARAAN
 */
class Perjalanan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'perjalanan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_PENERBIT, ID_ONGKOS, ID_KENDARAAN, TGL_PERJALANAN, NO_SURAT_PO', 'required'),
			array('ID_PENERBIT, ID_ONGKOS, ID_KENDARAAN, TITIPAN_AWAL, LEBIH, KURANG, AKHIR', 'numerical', 'integerOnly'=>true),
			array('NO_SURAT_PO, JENIS_PERINTAH', 'length', 'max'=>20),
			array('RITASE', 'length', 'max'=>25),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_PERJALANAN, ID_PENERBIT, ID_ONGKOS, ID_KENDARAAN, TGL_PERJALANAN, NO_SURAT_PO, JENIS_PERINTAH, RITASE, TITIPAN_AWAL, LEBIH, KURANG, AKHIR', 'safe', 'on'=>'search'),
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
			'iDPENERBIT' => array(self::BELONGS_TO, 'Penerbit', 'ID_PENERBIT'),
			'iDONGKOS' => array(self::BELONGS_TO, 'Ongkos', 'ID_ONGKOS'),
			'iDKENDARAAN' => array(self::BELONGS_TO, 'Kendaraan', 'ID_KENDARAAN'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_PERJALANAN' => 'Id Perjalanan',
			'ID_PENERBIT' => 'Id Penerbit',
			'ID_ONGKOS' => 'Id Ongkos',
			'ID_KENDARAAN' => 'Id Kendaraan',
			'TGL_PERJALANAN' => 'Tgl Perjalanan',
			'NO_SURAT_PO' => 'No Surat Po',
			'JENIS_PERINTAH' => 'Jenis Perintah',
			'RITASE' => 'Ritase',
			'TITIPAN_AWAL' => 'Titipan Awal',
			'LEBIH' => 'Lebih',
			'KURANG' => 'Kurang',
			'AKHIR' => 'Akhir',
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

		$criteria->compare('ID_PERJALANAN',$this->ID_PERJALANAN);
		$criteria->compare('ID_PENERBIT',$this->ID_PENERBIT);
		$criteria->compare('ID_ONGKOS',$this->ID_ONGKOS);
		$criteria->compare('ID_KENDARAAN',$this->ID_KENDARAAN);
		$criteria->compare('TGL_PERJALANAN',$this->TGL_PERJALANAN,true);
		$criteria->compare('NO_SURAT_PO',$this->NO_SURAT_PO,true);
		$criteria->compare('JENIS_PERINTAH',$this->JENIS_PERINTAH,true);
		$criteria->compare('RITASE',$this->RITASE,true);
		$criteria->compare('TITIPAN_AWAL',$this->TITIPAN_AWAL);
		$criteria->compare('LEBIH',$this->LEBIH);
		$criteria->compare('KURANG',$this->KURANG);
		$criteria->compare('AKHIR',$this->AKHIR);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Perjalanan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
