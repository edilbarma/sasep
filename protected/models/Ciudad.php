<?php

/**
 * This is the model class for table "tbl_ciudadgeneral".
 *
 * The followings are the available columns in table 'tbl_ciudadgeneral':
 * @property integer $CIGE_ID
 * @property integer $DEGE_ID
 * @property string $CIGE_NOMBRE
 * @property string $CIGE_REGISTRADOPOR
 * @property string $CIGE_FECHACAMBIO
 *
 * The followings are the available model relations:
 * @property TblDepartamentogeneral $dEGE
 * @property TblPersonageneral[] $tblPersonagenerals
 */
class Ciudad extends CActiveRecord
{
	
	

	public function getnombre($id)
	{
		$sql =  "SELECT CIGE_NOMBRE FROM ".$this->tableName()." WHERE CIGE_ID = '".$id."'";		
		$connection = Yii::app()->db;
		$query = $connection->createCommand($sql)->queryColumn();
		return ($query[0]);
	}
	
		/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_ciudadgeneral';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CIGE_ID, CIGE_NOMBRE, CIGE_REGISTRADOPOR, CIGE_FECHACAMBIO', 'required'),
			array('CIGE_ID, DEGE_ID', 'numerical', 'integerOnly'=>true),
			array('CIGE_NOMBRE', 'length', 'max'=>50),
			array('CIGE_REGISTRADOPOR', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('CIGE_ID, DEGE_ID, CIGE_NOMBRE, CIGE_REGISTRADOPOR, CIGE_FECHACAMBIO', 'safe', 'on'=>'search'),
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
			'dEGE' => array(self::BELONGS_TO, 'TblDepartamentogeneral', 'DEGE_ID'),
			'tblPersonagenerals' => array(self::HAS_MANY, 'TblPersonageneral', 'CIGE_IDRESIDENCIA'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'CIGE_ID' => 'ID',
			'DEGE_ID' => 'ID DEPARTAMENTO',
			'CIGE_NOMBRE' => 'NOMBRE',
			'CIGE_REGISTRADOPOR' => 'REGISTRADO POR',
			'CIGE_FECHACAMBIO' => 'FECHA DE CAMBIO',
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

		$criteria->compare('CIGE_ID',$this->CIGE_ID);
		$criteria->compare('DEGE_ID',$this->DEGE_ID);
		$criteria->compare('CIGE_NOMBRE',$this->CIGE_NOMBRE,true);
		$criteria->compare('CIGE_REGISTRADOPOR',$this->CIGE_REGISTRADOPOR,true);
		$criteria->compare('CIGE_FECHACAMBIO',$this->CIGE_FECHACAMBIO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ciudad the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
