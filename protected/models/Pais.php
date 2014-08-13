<?php

/**
 * This is the model class for table "tbl_paisgeneral".
 *
 * The followings are the available columns in table 'tbl_paisgeneral':
 * @property string $PAGE_ABREVIATURA
 * @property string $PAGE_NOMBRE
 * @property string $PAGE_REGISTRADOPOR
 * @property string $PAGE_FECHACAMBIO
 * @property string $PAGE_CODIGODANE
 *
 * The followings are the available model relations:
 * @property TblDepartamentogeneral[] $tblDepartamentogenerals
 * @property TblPersonageneral[] $tblPersonagenerals
 */
class Pais extends CActiveRecord
{


	public function getnombre($id)
	{
		$sql =  "SELECT PAGE_NOMBRE FROM ".$this->tableName()." WHERE PAGE_ABREVIATURA = '".$id."'";		
		$connection = Yii::app()->db;
		$query = $connection->createCommand($sql)->queryColumn();
		return ($query[0]);
	}
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_paisgeneral';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PAGE_ABREVIATURA, PAGE_NOMBRE, PAGE_REGISTRADOPOR, PAGE_FECHACAMBIO', 'required'),
			array('PAGE_ABREVIATURA', 'length', 'max'=>2),
			array('PAGE_NOMBRE', 'length', 'max'=>50),
			array('PAGE_REGISTRADOPOR', 'length', 'max'=>30),
			array('PAGE_CODIGODANE', 'length', 'max'=>5),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('PAGE_ABREVIATURA, PAGE_NOMBRE, PAGE_REGISTRADOPOR, PAGE_FECHACAMBIO, PAGE_CODIGODANE', 'safe', 'on'=>'search'),
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
			'tblDepartamentogenerals' => array(self::HAS_MANY, 'TblDepartamentogeneral', 'PAGE_ABREVIATURA'),
			'tblPersonagenerals' => array(self::HAS_MANY, 'TblPersonageneral', 'PAGE_ABREVIATURARESIDENCIA'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PAGE_ABREVIATURA' => 'ID',
			'PAGE_NOMBRE' => 'NOMBRE',
			'PAGE_REGISTRADOPOR' => 'REGISTRADO POR',
			'PAGE_FECHACAMBIO' => 'FECHA DE CAMBIO',
			'PAGE_CODIGODANE' => 'CODIGO DANE',
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

		$criteria->compare('PAGE_ABREVIATURA',$this->PAGE_ABREVIATURA,true);
		$criteria->compare('PAGE_NOMBRE',$this->PAGE_NOMBRE,true);
		$criteria->compare('PAGE_REGISTRADOPOR',$this->PAGE_REGISTRADOPOR,true);
		$criteria->compare('PAGE_FECHACAMBIO',$this->PAGE_FECHACAMBIO,true);
		$criteria->compare('PAGE_CODIGODANE',$this->PAGE_CODIGODANE,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pais the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
