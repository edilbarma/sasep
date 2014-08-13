<?php

/**
 * This is the model class for table "tbl_tipousuario".
 *
 * The followings are the available columns in table 'tbl_tipousuario':
 * @property integer $TIUSUA_ID
 * @property string $TIUSUA_DESCRIPCION
 *
 * The followings are the available model relations:
 * @property TblUsuario[] $tblUsuarios
 */
class TipoUsuario extends CActiveRecord
{
	public function getnombre($id)
	{
		$sql =  "SELECT TIUSUA_DESCRIPCION FROM ".$this->tableName()." WHERE TIUSUA_ID = '".$id."'";		
		$connection = Yii::app()->db;
		$query = $connection->createCommand($sql)->queryColumn();
		return ($query[0]);
	}
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_tipousuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('TIUSUA_DESCRIPCION', 'required'),
			array('TIUSUA_DESCRIPCION', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('TIUSUA_ID, TIUSUA_DESCRIPCION', 'safe', 'on'=>'search'),
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
			'tblUsuarios' => array(self::HAS_MANY, 'TblUsuario', 'USUA_TIPO'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'TIUSUA_ID' => 'ID',
			'TIUSUA_DESCRIPCION' => 'DESCRIPCION',
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

		$criteria->compare('TIUSUA_ID',$this->TIUSUA_ID);
		$criteria->compare('TIUSUA_DESCRIPCION',$this->TIUSUA_DESCRIPCION,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TipoUsuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
