<?php

/**
 * This is the model class for table "tbl_personageneral".
 *
 * The followings are the available columns in table 'tbl_personageneral':
 * @property integer $PEGE_ID
 * @property integer $CIGE_IDRESIDENCIA
 * @property string $PEGE_DIRECCION
 * @property string $PEGE_MAIL
 * @property string $PEGE_TELEFONOCELULAR
 * @property string $PEGE_FECHACAMBIO
 * @property string $PEGE_TELEFONO
 * @property string $PAGE_IDRESIDENCIA
 * @property integer $TIDG_ID
 * @property string $PEGE_DOCUMENTOIDENTIDAD
 * @property string $PEGE_LUGAREXPEDICION
 * @property string $PEGE_FECHAEXPEDICION
 *
 * The followings are the available model relations:
 * @property TblCiudadgeneral $cIGEIDRESIDENCIA
 * @property TblPaisgeneral $pAGEIDRESIDENCIA
 * @property TblTipodocumentogeneral $tIDG
 * @property TblUsuario[] $tblUsuarios
 */
class Persona extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_personageneral';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('TIDG_ID', 'required'),
			array('CIGE_IDRESIDENCIA, TIDG_ID', 'numerical', 'integerOnly'=>true),
			array('PEGE_NOMBRE, PEGE_DIRECCION', 'length', 'max'=>100),
			array('PEGE_MAIL, PEGE_TELEFONO, PEGE_LUGAREXPEDICION', 'length', 'max'=>50),
			array('PEGE_TELEFONOCELULAR', 'length', 'max'=>20),
			array('PAGE_IDRESIDENCIA', 'length', 'max'=>2),
			array('PEGE_DOCUMENTOIDENTIDAD', 'length', 'max'=>15),
			array('PEGE_FECHACAMBIO, PEGE_FECHAEXPEDICION', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('PEGE_ID, PEGE_NOMBRE, CIGE_IDRESIDENCIA, PEGE_DIRECCION, PEGE_MAIL, PEGE_TELEFONOCELULAR, PEGE_FECHACAMBIO, PEGE_TELEFONO, PAGE_IDRESIDENCIA, TIDG_ID, PEGE_DOCUMENTOIDENTIDAD, PEGE_LUGAREXPEDICION, PEGE_FECHAEXPEDICION', 'safe', 'on'=>'search'),
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
			'cIGEIDRESIDENCIA' => array(self::BELONGS_TO, 'TblCiudadgeneral', 'CIGE_IDRESIDENCIA'),
			'pAGEIDRESIDENCIA' => array(self::BELONGS_TO, 'TblPaisgeneral', 'PAGE_IDRESIDENCIA'),
			'tIDG' => array(self::BELONGS_TO, 'TblTipodocumentogeneral', 'TIDG_ID'),
			'uSUARIOS' => array(self::HAS_MANY, 'TblUsuario', 'PEGE_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PEGE_ID' => 'ID',
			'PEGE_NOMBRE' => 'NOMBRE',
			'CIGE_IDRESIDENCIA' => 'CIUDAD',
			'PEGE_DIRECCION' => 'DIRECCION',
			'PEGE_MAIL' => 'MAIL',
			'PEGE_TELEFONOCELULAR' => 'CELULAR',
			'PEGE_FECHACAMBIO' => 'FECHA DE CAMBIO',
			'PEGE_TELEFONO' => 'TELEFONO',
			'PAGE_IDRESIDENCIA' => 'PAIS',
			'TIDG_ID' => 'TIPO DE DOCUMENTO',
			'PEGE_DOCUMENTOIDENTIDAD' => 'DOCUMENTO',
			'PEGE_LUGAREXPEDICION' => 'LUGAR DE EXPEDICION',
			'PEGE_FECHAEXPEDICION' => 'FECHA DE EXPEDICION',
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

		$criteria->compare('PEGE_ID',$this->PEGE_ID);
		$criteria->compare('PEGE_NOMBRE',$this->PEGE_NOMBRE);
		$criteria->compare('CIGE_IDRESIDENCIA',$this->CIGE_IDRESIDENCIA);
		$criteria->compare('PEGE_DIRECCION',$this->PEGE_DIRECCION,true);
		$criteria->compare('PEGE_MAIL',$this->PEGE_MAIL,true);
		$criteria->compare('PEGE_TELEFONOCELULAR',$this->PEGE_TELEFONOCELULAR,true);
		$criteria->compare('PEGE_FECHACAMBIO',$this->PEGE_FECHACAMBIO,true);
		$criteria->compare('PEGE_TELEFONO',$this->PEGE_TELEFONO,true);
		$criteria->compare('PAGE_IDRESIDENCIA',$this->PAGE_IDRESIDENCIA,true);
		$criteria->compare('TIDG_ID',$this->TIDG_ID);
		$criteria->compare('PEGE_DOCUMENTOIDENTIDAD',$this->PEGE_DOCUMENTOIDENTIDAD,true);
		$criteria->compare('PEGE_LUGAREXPEDICION',$this->PEGE_LUGAREXPEDICION,true);
		$criteria->compare('PEGE_FECHAEXPEDICION',$this->PEGE_FECHAEXPEDICION,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Persona the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
