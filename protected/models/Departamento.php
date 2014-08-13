<?php

/**
 * This is the model class for table "tbl_departamentogeneral".
 *
 * The followings are the available columns in table 'tbl_departamentogeneral':
 * @property integer $DEGE_ID
 * @property string $DEGE_NOMBRE
 * @property string $PAGE_ID
 * @property string $DEGE_REGISTRADOPOR
 * @property string $DEGE_FECHACAMBIO
 *
 * The followings are the available model relations:
 * @property TblCiudadgeneral[] $tblCiudadgenerals
 * @property TblPaisgeneral $pAGE
 */
class Departamento extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_departamentogeneral';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('DEGE_ID, DEGE_NOMBRE, DEGE_REGISTRADOPOR, DEGE_FECHACAMBIO', 'required'),
			array('DEGE_ID', 'numerical', 'integerOnly'=>true),
			array('DEGE_NOMBRE', 'length', 'max'=>80),
			array('PAGE_ID', 'length', 'max'=>2),
			array('DEGE_REGISTRADOPOR', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('DEGE_ID, DEGE_NOMBRE, PAGE_ID, DEGE_REGISTRADOPOR, DEGE_FECHACAMBIO', 'safe', 'on'=>'search'),
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
			'tblCiudadgenerals' => array(self::HAS_MANY, 'TblCiudadgeneral', 'DEGE_ID'),
			'pAGE' => array(self::BELONGS_TO, 'TblPaisgeneral', 'PAGE_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'DEGE_ID' => 'ID',
			'DEGE_NOMBRE' => 'NOMBRE',
			'PAGE_ID' => 'ID PAIS',
			'DEGE_REGISTRADOPOR' => 'REGISTRADO POR',
			'DEGE_FECHACAMBIO' => 'FECHA DE CAMBIO',
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

		$criteria->compare('DEGE_ID',$this->DEGE_ID);
		$criteria->compare('DEGE_NOMBRE',$this->DEGE_NOMBRE,true);
		$criteria->compare('PAGE_ID',$this->PAGE_ID,true);
		$criteria->compare('DEGE_REGISTRADOPOR',$this->DEGE_REGISTRADOPOR,true);
		$criteria->compare('DEGE_FECHACAMBIO',$this->DEGE_FECHACAMBIO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Departamento the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
