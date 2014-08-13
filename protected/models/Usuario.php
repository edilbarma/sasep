<?php

/**
 * This is the model class for table "tbl_usuario".
 *
 * The followings are the available columns in table 'tbl_usuario':
 * @property integer $USUA_ID
 * @property string $USUA_FECHACAMBIO
 * @property string $USUA_REGISTRADOPOR
 * @property integer $PEGE_ID
 * @property string $USUA_USUARIO
 * @property string $USUA_CLAVE
 * @property integer $TIUSUA_ID
 * @property string $USUA_ESTADO
 *
 * The followings are the available model relations:
 * @property TblPersonageneral $pEGE
 * @property TblTipousuario $uSUATIPO
 */
class Usuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function getnombre($id)
	{
		$sql =  "SELECT USUA_USUARIO FROM ".$this->tableName()." WHERE USUA_ID = '".$id."'";		
		$connection = Yii::app()->db;
		$query = $connection->createCommand($sql)->queryColumn();
		return ($query[0]);
	}
	
	public function tableName()
	{
		return 'tbl_usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('USUA_FECHACAMBIO, USUA_REGISTRADOPOR, USUA_USUARIO,
					USUA_CLAVE, TIUSUA_ID, USUA_ESTADO', 'required'),
			array('PEGE_ID, TIUSUA_ID', 'numerical', 'integerOnly'=>true),
			array('USUA_REGISTRADOPOR, USUA_USUARIO, USUA_CLAVE', 'length', 'max'=>30),
			array('USUA_ESTADO', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('USUA_ID, USUA_FECHACAMBIO, USUA_REGISTRADOPOR, PEGE_ID, USUA_USUARIO, USUA_CLAVE, TIUSUA_ID, USUA_ESTADO', 'safe', 'on'=>'search'),
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
			'pEGE' => array(self::BELONGS_TO, 'TblPersonageneral', 'PEGE_ID'),
			'uSUATIPO' => array(self::BELONGS_TO, 'TblTipousuario', 'TIUSUA_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'USUA_ID' => 'ID',
			'USUA_FECHACAMBIO' => 'FECHA DE CAMBIO',
			'USUA_REGISTRADOPOR' => 'REGISTRADO POR',
			'PEGE_ID' => 'PERSONA ID',
			'USUA_USUARIO' => 'USUARIO',
			'USUA_CLAVE' => 'CONTRASEÑA',
			'TIUSUA_ID' => 'TIPO DE USUARIO',
			'USUA_ESTADO' => 'ESTADO',
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

		$criteria->compare('USUA_ID',$this->USUA_ID);
		$criteria->compare('USUA_FECHACAMBIO',$this->USUA_FECHACAMBIO,true);
		$criteria->compare('USUA_REGISTRADOPOR',$this->USUA_REGISTRADOPOR,true);
		$criteria->compare('PEGE_ID',$this->PEGE_ID);
		$criteria->compare('USUA_USUARIO',$this->USUA_USUARIO,true);
		$criteria->compare('USUA_CLAVE',$this->USUA_CLAVE,true);
		$criteria->compare('TIUSUA_ID',$this->TIUSUA_ID);
		$criteria->compare('USUA_ESTADO',$this->USUA_ESTADO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


	public function validatePassword($password)
	{
		return $password===$this->USUA_CLAVE;
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
