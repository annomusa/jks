<?php

/**
 * This is the model class for table "satuan".
 *
 * The followings are the available columns in table 'satuan':
 * @property integer $ID_SATUAN
 * @property string $SATUAN
 * @property string $JENIS_SATUAN
 *
 * The followings are the available model relations:
 * @property Ongkos[] $ongkoses
 * @property RelasiPengadaanSparepart[] $relasiPengadaanSpareparts
 */
class Satuan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'satuan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('SATUAN, JENIS_SATUAN', 'required'),
			array('SATUAN', 'length', 'max'=>20),
			array('JENIS_SATUAN', 'length', 'max'=>25),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_SATUAN, SATUAN, JENIS_SATUAN', 'safe', 'on'=>'search'),
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
			'ongkoses' => array(self::HAS_MANY, 'Ongkos', 'ID_SATUAN'),
			'relasiPengadaanSpareparts' => array(self::HAS_MANY, 'RelasiPengadaanSparepart', 'ID_SATUAN'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_SATUAN' => 'Id Satuan',
			'SATUAN' => 'Satuan',
			'JENIS_SATUAN' => 'Jenis Satuan',
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

		$criteria->compare('ID_SATUAN',$this->ID_SATUAN);
		$criteria->compare('SATUAN',$this->SATUAN,true);
		$criteria->compare('JENIS_SATUAN',$this->JENIS_SATUAN,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Satuan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
