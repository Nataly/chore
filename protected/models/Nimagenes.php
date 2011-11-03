<?php

/**
 * This is the model class for table "nimagenes".
 *
 * The followings are the available columns in table 'nimagenes':
 * @property integer $id
 * @property string $url
 * @property string $fecha
 * @property string $titulo
 * @property string $leyenda
 * @property integer $Galeria_id
 * @property string $usuario_modifico
 * @property string $fecha_modifico
 *
 * The followings are the available model relations:
 * @property Ngaleria $galeria
 */
class Nimagenes extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Nimagenes the static model class
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
		return 'nimagenes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, url, fecha, titulo, leyenda, Galeria_id, usuario_modifico, fecha_modifico', 'required'),
			array('id, Galeria_id', 'numerical', 'integerOnly'=>true),
			array('url', 'length', 'max'=>150),
			array('titulo', 'length', 'max'=>100),
			array('leyenda', 'length', 'max'=>255),
			array('usuario_modifico', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, url, fecha, titulo, leyenda, Galeria_id, usuario_modifico, fecha_modifico', 'safe', 'on'=>'search'),
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
			'galeria' => array(self::BELONGS_TO, 'Ngaleria', 'Galeria_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'url' => 'Url',
			'fecha' => 'Fecha',
			'titulo' => 'Titulo',
			'leyenda' => 'Leyenda',
			'Galeria_id' => 'Galeria',
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
		$criteria->compare('url',$this->url,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('leyenda',$this->leyenda,true);
		$criteria->compare('Galeria_id',$this->Galeria_id);
		$criteria->compare('usuario_modifico',$this->usuario_modifico,true);
		$criteria->compare('fecha_modifico',$this->fecha_modifico,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}