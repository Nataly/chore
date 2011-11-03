<?php

/**
 * This is the model class for table "npublicacion".
 *
 * The followings are the available columns in table 'npublicacion':
 * @property integer $id
 * @property string $titulo
 * @property string $descripcion
 * @property string $autor
 * @property string $fecha_modifico
 * @property string $usuario_modifico
 */
class Npublicacion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Npublicacion the static model class
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
		return 'npublicacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, titulo, descripcion, autor, fecha_modifico, usuario_modifico', 'required'),
			array('id', 'numerical', 'integerOnly'=>true),
			array('titulo', 'length', 'max'=>100),
			array('autor, usuario_modifico', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, titulo, descripcion, autor, fecha_modifico, usuario_modifico', 'safe', 'on'=>'search'),
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
			'titulo' => 'Titulo',
			'descripcion' => 'Descripcion',
			'autor' => 'Autor',
			'fecha_modifico' => 'Fecha Modifico',
			'usuario_modifico' => 'Usuario Modifico',
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
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('autor',$this->autor,true);
		$criteria->compare('fecha_modifico',$this->fecha_modifico,true);
		$criteria->compare('usuario_modifico',$this->usuario_modifico,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}