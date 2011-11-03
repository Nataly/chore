<?php

/**
 * This is the model class for table "ncuerda".
 *
 * The followings are the available columns in table 'ncuerda':
 * @property string $id
 * @property string $descripcion
 * @property string $usuario_modifico
 * @property string $fecha_modifico
 *
 * The followings are the available model relations:
 * @property Nusuario[] $nusuarios
 */
class Ncuerda extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Ncuerda the static model class
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
		return 'ncuerda';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, descripcion, usuario_modifico, fecha_modifico', 'required'),
			array('id', 'length', 'max'=>1),
			array('descripcion, usuario_modifico', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, descripcion, usuario_modifico, fecha_modifico', 'safe', 'on'=>'search'),
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
			'nusuarios' => array(self::HAS_MANY, 'Nusuario', 'Cuerda_idCuerda'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'descripcion' => 'Descripcion',
			'usuario_modifico' => 'Usuario Modifico',
			'fecha_modifico' => 'Fecha Modifico',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('usuario_modifico',$this->usuario_modifico,true);
		$criteria->compare('fecha_modifico',$this->fecha_modifico,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}