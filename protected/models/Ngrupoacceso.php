<?php

/**
 * This is the model class for table "ngrupoacceso".
 *
 * The followings are the available columns in table 'ngrupoacceso':
 * @property string $Usuario_usuario
 * @property integer $Obra_id
 * @property string $usuario_modifico
 * @property string $fecha_modifico
 */
class Ngrupoacceso extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Ngrupoacceso the static model class
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
		return 'ngrupoacceso';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Usuario_usuario, Obra_id, usuario_modifico, fecha_modifico', 'required'),
			array('Obra_id', 'numerical', 'integerOnly'=>true),
			array('Usuario_usuario, usuario_modifico', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Usuario_usuario, Obra_id, usuario_modifico, fecha_modifico', 'safe', 'on'=>'search'),
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
			'Usuario_usuario' => 'Usuario Usuario',
			'Obra_id' => 'Obra',
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

		$criteria->compare('Usuario_usuario',$this->Usuario_usuario,true);
		$criteria->compare('Obra_id',$this->Obra_id);
		$criteria->compare('usuario_modifico',$this->usuario_modifico,true);
		$criteria->compare('fecha_modifico',$this->fecha_modifico,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}