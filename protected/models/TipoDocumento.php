<?php

/**
 * This is the model class for table "tbl_tipodocumentogeneral".
 *
 * The followings are the available columns in table 'tbl_tipodocumentogeneral':
 * @property integer $TIDG_ID
 * @property string $TIDG_DESCRIPCION
 * @property string $TIDG_REGISTRADOPOR
 * @property string $TIDG_FECHACAMBIO
 * @property string $TIDG_ABREVIATURA
 *
 * The followings are the available model relations:
 * @property TblPersonageneral[] $tblPersonagenerals
 */
class TipoDocumento extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_tipodocumentogeneral';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('TIDG_ID, TIDG_DESCRIPCION, TIDG_REGISTRADOPOR, TIDG_FECHACAMBIO', 'required'),
			array('TIDG_ID', 'numerical', 'integerOnly'=>true),
			array('TIDG_DESCRIPCION', 'length', 'max'=>50),
			array('TIDG_REGISTRADOPOR', 'length', 'max'=>30),
			array('TIDG_ABREVIATURA', 'length', 'max'=>5),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('TIDG_ID, TIDG_DESCRIPCION, TIDG_REGISTRADOPOR, TIDG_FECHACAMBIO, TIDG_ABREVIATURA', 'safe', 'on'=>'search'),
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
			'tblPersonagenerals' => array(self::HAS_MANY, 'TblPersonageneral', 'TIDG_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'TIDG_ID' => 'ID',
			'TIDG_DESCRIPCION' => 'DESCRIPCION',
			'TIDG_REGISTRADOPOR' => 'REGISTRADO POR',
			'TIDG_FECHACAMBIO' => 'FECHA DE CAMBIO',
			'TIDG_ABREVIATURA' => 'ABREVIATURA',
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

		$criteria->compare('TIDG_ID',$this->TIDG_ID);
		$criteria->compare('TIDG_DESCRIPCION',$this->TIDG_DESCRIPCION,true);
		$criteria->compare('TIDG_REGISTRADOPOR',$this->TIDG_REGISTRADOPOR,true);
		$criteria->compare('TIDG_FECHACAMBIO',$this->TIDG_FECHACAMBIO,true);
		$criteria->compare('TIDG_ABREVIATURA',$this->TIDG_ABREVIATURA,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TipoDocumento the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
