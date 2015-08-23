<?php

/**
 * This is the model class for table "ongkos".
 *
 * The followings are the available columns in table 'ongkos':
 * @property integer $ID_ONGKOS
 * @property integer $ID_SATUAN
 * @property string $TUJUAN
 * @property integer $HARGA
 *
 * The followings are the available model relations:
 * @property Satuan $iDSATUAN
 * @property Perjalanan[] $perjalanans
 */
class Ongkos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ongkos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_SATUAN, TUJUAN, HARGA', 'required'),
			array('ID_SATUAN, HARGA', 'numerical', 'integerOnly'=>true),
			array('TUJUAN', 'length', 'max'=>25),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_ONGKOS, ID_SATUAN, TUJUAN, HARGA', 'safe', 'on'=>'search'),
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
			'iDSATUAN' => array(self::BELONGS_TO, 'Satuan', 'ID_SATUAN'),
			'perjalanans' => array(self::HAS_MANY, 'Perjalanan', 'ID_ONGKOS'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_ONGKOS' => 'Id Ongkos',
			'ID_SATUAN' => 'Id Satuan',
			'TUJUAN' => 'Tujuan',
			'HARGA' => 'Harga',
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

		$criteria->compare('ID_ONGKOS',$this->ID_ONGKOS);
		$criteria->compare('ID_SATUAN',$this->ID_SATUAN);
		$criteria->compare('TUJUAN',$this->TUJUAN,true);
		$criteria->compare('HARGA',$this->HARGA);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ongkos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
