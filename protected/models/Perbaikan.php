<?php

/**
 * This is the model class for table "perbaikan".
 *
 * The followings are the available columns in table 'perbaikan':
 * @property integer $ID_PERBAIKAN
 * @property integer $ID_iDKENDARAAN
 * @property string $TGL_PERBAIKAN
 * @property string $KERUSAKAN
 * @property integer $ESTIMASI_WAKTU_PERBAIKAN
 *
 * The followings are the available model relations:
 * @property Kendaraan $iDKENDARAAN
 */
class Perbaikan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */

	public $from_date;
	public $to_date;
	public $NOPOL;
	public $JENIS_PENGGANTIAN;

	public function tableName()
	{
		return 'perbaikan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_KENDARAAN, TGL_PERBAIKAN, JENIS_PERBAIKAN', 'required'),
			array('ID_KENDARAAN, ESTIMASI_WAKTU_PERBAIKAN, PJ_MEKANIK, JENIS_PENGGANTIAN', 'numerical', 'integerOnly'=>true),
			array('KERUSAKAN, JENIS_PERBAIKAN, STATUS', 'length', 'max'=>50),
			array('TGL_PERBAIKAN', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_PERBAIKAN, ID_KENDARAAN, TGL_PERBAIKAN, KERUSAKAN, ESTIMASI_WAKTU_PERBAIKAN, JENIS_PERBAIKAN, STATUS, PJ_MEKANIK, NOPOL, JENIS_PENGGANTIAN, from_date, to_date', 'safe', 'on'=>'search'),
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
			'iDKENDARAAN' => array(self::BELONGS_TO, 'Kendaraan', 'ID_KENDARAAN'),
			'pJMEKANIK' => array(self::BELONGS_TO, 'Karyawan', 'PJ_MEKANIK'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_PERBAIKAN' => 'Id Perbaikan',
			'ID_KENDARAAN' => 'Id Kendaraan',
			'TGL_PERBAIKAN' => 'Tgl Perbaikan',
			'KERUSAKAN' => 'Kerusakan',
			'JENIS_PENGGANTIAN' => 'Jenis Penggantian',
			'ESTIMASI_WAKTU_PERBAIKAN' => 'Estimasi Waktu Perbaikan',
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

		/*$criteria->compare('ID_PERBAIKAN',$this->ID_PERBAIKAN);
		$criteria->compare('ID_KENDARAAN',$this->ID_KENDARAAN);
		$criteria->compare('TGL_PERBAIKAN',$this->TGL_PERBAIKAN,true);
		$criteria->compare('KERUSAKAN',$this->KERUSAKAN,true);
		$criteria->compare('ESTIMASI_WAKTU_PERBAIKAN',$this->ESTIMASI_WAKTU_PERBAIKAN);
		$criteria->compare('STATUS',$this->STATUS);
		$criteria->compare('PJ_MEKANIK',$this->PJ_MEKANIK);*/

		if (!empty($this->from_date) && empty($this->to_date))
		{
			$criteria->condition = "TGL_PERBAIKAN>='$this->from_date'";
		}
		else if (empty($this->from_date) && !empty($this->to_date))
		{
			$criteria->condition = "TGL_PERBAIKAN<='$this->to_date'";
		}
		else if (!empty($this->from_date) && !empty($this->to_date))
		{
			$criteria->condition = "TGL_PERBAIKAN>='$this->from_date' and TGL_PERBAIKAN<='$this->to_date'";
		}
		$criteria->with = array('iDKENDARAAN');
		$criteria->compare('iDKENDARAAN.NOPOL',$this->NOPOL, true);
		$criteria->compare('JENIS_PERBAIKAN',$this->JENIS_PERBAIKAN);
		$criteria->compare('JENIS_PENGGANTIAN',$this->JENIS_PENGGANTIAN);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Perbaikan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
