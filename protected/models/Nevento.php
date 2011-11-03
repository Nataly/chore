<?php

/**
 * This is the model class for table "nevento".
 *
 * The followings are the available columns in table 'nevento':
 * @property integer $id
 * @property string $titulo
 * @property string $descripcion
 * @property string $lugar
 * @property string $fechaInicio
 * @property string $fechaFin
 * @property integer $TipoEvento_id
 * @property string $Usuario_usuario
 * @property string $usuario_modifico
 * @property string $fecha_modifico
 *
 * The followings are the available model relations:
 * @property Ntipoevento $tipoEvento
 * @property Nusuario $usuarioUsuario
 */
class Nevento extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Nevento the static model class
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
		return 'nevento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, titulo, descripcion, lugar, fechaInicio, TipoEvento_id, Usuario_usuario, usuario_modifico, fecha_modifico', 'required'),
			array('id, TipoEvento_id', 'numerical', 'integerOnly'=>true),
			array('titulo', 'length', 'max'=>100),
			array('lugar', 'length', 'max'=>200),
			array('Usuario_usuario, usuario_modifico', 'length', 'max'=>45),
			array('fechaFin', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, titulo, descripcion, lugar, fechaInicio, fechaFin, TipoEvento_id, Usuario_usuario, usuario_modifico, fecha_modifico', 'safe', 'on'=>'search'),
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
			'tipoEvento' => array(self::BELONGS_TO, 'Ntipoevento', 'TipoEvento_id'),
			'usuarioUsuario' => array(self::BELONGS_TO, 'Nusuario', 'Usuario_usuario'),
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
			'lugar' => 'Lugar',
			'fechaInicio' => 'Fecha Inicio',
			'fechaFin' => 'Fecha Fin',
			'TipoEvento_id' => 'Tipo Evento',
			'Usuario_usuario' => 'Usuario Usuario',
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
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('lugar',$this->lugar,true);
		$criteria->compare('fechaInicio',$this->fechaInicio,true);
		$criteria->compare('fechaFin',$this->fechaFin,true);
		$criteria->compare('TipoEvento_id',$this->TipoEvento_id);
		$criteria->compare('Usuario_usuario',$this->Usuario_usuario,true);
		$criteria->compare('usuario_modifico',$this->usuario_modifico,true);
		$criteria->compare('fecha_modifico',$this->fecha_modifico,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}