<?php

/**
 * This is the model class for table "nbitacora".
 *
 * The followings are the available columns in table 'nbitacora':
 * @property integer $id
 * @property string $usuario
 * @property string $momento
 * @property string $tipoOperacion
 * @property string $tabla
 * @property string $descripcion
 */
class Nbitacora extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Nbitacora the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'nbitacora';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, usuario, momento, tipoOperacion, tabla', 'required'),
			array('id', 'numerical', 'integerOnly'=>true),
			array('usuario, tabla', 'length', 'max'=>45),
			array('tipoOperacion', 'length', 'max'=>1),
			array('descripcion', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, usuario, momento, tipoOperacion, tabla, descripcion', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'usuario' => 'Usuario',
			'momento' => 'Momento',
			'tipoOperacion' => 'Tipo Operacion',
			'tabla' => 'Tabla',
			'descripcion' => 'Descripcion',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('usuario',$this->usuario,true);
		$criteria->compare('momento',$this->momento,true);
		$criteria->compare('tipoOperacion',$this->tipoOperacion,true);
		$criteria->compare('tabla',$this->tabla,true);
		$criteria->compare('descripcion',$this->descripcion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}