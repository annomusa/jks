<?php

/**
 * This is the model class for table "ban".
 *
 * The followings are the available columns in table 'ban':
 * @property integer $ID_BAN
 * @property integer $ID_POSISI
 * @property string $NOMOR_SERI
 * @property string $MERK
 * @property integer $HARGA
 * @property integer $JUMLAH
 *
 * The followings are the available model relations:
 * @property PosisiBan $iDPOSISI
 */
class Ban extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ban';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_POSISI, NOMOR_SERI', 'required'),
			array('ID_POSISI, HARGA, JUMLAH', 'numerical', 'integerOnly'=>true),
			array('NOMOR_SERI, MERK', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_BAN, ID_POSISI, NOMOR_SERI, MERK, HARGA, JUMLAH', 'safe', 'on'=>'search'),
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
			'iDPOSISI' => array(self::BELONGS_TO, 'PosisiBan', 'ID_POSISI'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_BAN' => 'Id Ban',
			'ID_POSISI' => 'Id Posisi',
			'NOMOR_SERI' => 'Nomor Seri',
			'MERK' => 'Merk',
			'HARGA' => 'Harga',
			'JUMLAH' => 'Jumlah',
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

		$criteria->compare('ID_BAN',$this->ID_BAN);
		$criteria->compare('ID_POSISI',$this->ID_POSISI);
		$criteria->compare('NOMOR_SERI',$this->NOMOR_SERI,true);
		$criteria->compare('MERK',$this->MERK,true);
		$criteria->compare('HARGA',$this->HARGA);
		$criteria->compare('JUMLAH',$this->JUMLAH);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ban the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
