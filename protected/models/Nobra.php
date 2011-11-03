<?php

/**
 * This is the model class for table "nobra".
 *
 * The followings are the available columns in table 'nobra':
 * @property integer $id
 * @property string $nombre
 * @property string $ruta
 * @property string $anio
 * @property string $descripcion
 * @property integer $Compositor_id
 * @property integer $Genero_id
 * @property string $usuario_modifico
 * @property string $fecha_modifico
 *
 * The followings are the available model relations:
 * @property Nusuario[] $nusuarios
 * @property Ncompositor $compositor
 * @property Ngenero $genero
 */
class Nobra extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Nobra the static model class
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
		return 'nobra';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, nombre, Compositor_id, Genero_id, usuario_modifico, fecha_modifico', 'required'),
			array('id, Compositor_id, Genero_id', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>100),
			array('ruta', 'length', 'max'=>500),
			array('anio', 'length', 'max'=>4),
			array('usuario_modifico', 'length', 'max'=>45),
			array('descripcion', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombre, ruta, anio, descripcion, Compositor_id, Genero_id, usuario_modifico, fecha_modifico', 'safe', 'on'=>'search'),
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
			'nusuarios' => array(self::MANY_MANY, 'Nusuario', 'ngrupoacceso(Obra_id, Usuario_usuario)'),
			'compositor' => array(self::BELONGS_TO, 'Ncompositor', 'Compositor_id'),
			'genero' => array(self::BELONGS_TO, 'Ngenero', 'Genero_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre' => 'Nombre',
			'ruta' => 'Ruta',
			'anio' => 'Anio',
			'descripcion' => 'Descripcion',
			'Compositor_id' => 'Compositor',
			'Genero_id' => 'Genero',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('ruta',$this->ruta,true);
		$criteria->compare('anio',$this->anio,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('Compositor_id',$this->Compositor_id);
		$criteria->compare('Genero_id',$this->Genero_id);
		$criteria->compare('usuario_modifico',$this->usuario_modifico,true);
		$criteria->compare('fecha_modifico',$this->fecha_modifico,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}