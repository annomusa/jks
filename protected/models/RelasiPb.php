<?php

/**
 * This is the model class for table "relasi_pb".
 *
 * The followings are the available columns in table 'relasi_pb':
 * @property integer $ID_RELASI_PB
 * @property integer $ID_PERBAIKAN
 * @property integer $ID_BAN
 * @property integer $JUMLAH
 *
 * The followings are the available model relations:
 * @property Perbaikan $iDPERBAIKAN
 * @property Ban $iDBAN
 */
class RelasiPb extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'relasi_pb';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_PERBAIKAN, ID_BAN, JUMLAH', 'required'),
			array('ID_PERBAIKAN, ID_BAN, JUMLAH', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_RELASI_PB, ID_PERBAIKAN, ID_BAN, JUMLAH', 'safe', 'on'=>'search'),
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
			'iDPERBAIKAN' => array(self::BELONGS_TO, 'Perbaikan', 'ID_PERBAIKAN'),
			'iDBAN' => array(self::BELONGS_TO, 'Ban', 'ID_BAN'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_RELASI_PB' => 'Id Relasi Pb',
			'ID_PERBAIKAN' => 'Id Perbaikan',
			'ID_BAN' => 'Id Ban',
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

		$criteria->compare('ID_RELASI_PB',$this->ID_RELASI_PB);
		$criteria->compare('ID_PERBAIKAN',$this->ID_PERBAIKAN);
		$criteria->compare('ID_BAN',$this->ID_BAN);
		$criteria->compare('JUMLAH',$this->JUMLAH);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function carirekap($id)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('ID_PERBAIKAN',$id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RelasiPb the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
