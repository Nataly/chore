<?php

/**
 * This is the model class for table "nusuario".
 *
 * The followings are the available columns in table 'nusuario':
 * @property string $usuario
 * @property string $clave
 * @property string $email
 * @property string $nombre
 * @property string $apellido
 * @property string $cedula
 * @property integer $estado
 * @property string $telefono
 * @property string $fecha_ingreso
 * @property string $fecha_egreso
 * @property integer $administrador_estado
 * @property integer $Carrera_id
 * @property string $Cuerda_idCuerda
 * @property string $usuario_modifico
 * @property string $fecha_modifico
 *
 * The followings are the available model relations:
 * @property Nevento[] $neventos
 * @property Nobra[] $nobras
 * @property Ncarrera $carrera
 * @property Ncuerda $cuerdaIdCuerda
 */
class Nusuario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Nusuario the static model class
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
		return 'nusuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usuario, clave, email, nombre, apellido, cedula, estado, telefono, administrador_estado, usuario_modifico, fecha_modifico', 'required'),
			array('estado, administrador_estado, Carrera_id', 'numerical', 'integerOnly'=>true),
			array('usuario, nombre, apellido, telefono, usuario_modifico', 'length', 'max'=>45),
			array('clave', 'length', 'max'=>32),
			array('email', 'length', 'max'=>100),
			array('cedula', 'length', 'max'=>20),
			array('Cuerda_idCuerda', 'length', 'max'=>1),
			array('fecha_ingreso, fecha_egreso', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('usuario, clave, email, nombre, apellido, cedula, estado, telefono, fecha_ingreso, fecha_egreso, administrador_estado, Carrera_id, Cuerda_idCuerda, usuario_modifico, fecha_modifico', 'safe', 'on'=>'search'),
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
			'neventos' => array(self::HAS_MANY, 'Nevento', 'Usuario_usuario'),
			'nobras' => array(self::MANY_MANY, 'Nobra', 'ngrupoacceso(Usuario_usuario, Obra_id)'),
			'carrera' => array(self::BELONGS_TO, 'Ncarrera', 'Carrera_id'),
			'cuerdaIdCuerda' => array(self::BELONGS_TO, 'Ncuerda', 'Cuerda_idCuerda'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'usuario' => 'Usuario',
			'clave' => 'Clave',
			'email' => 'Email',
			'nombre' => 'Nombre',
			'apellido' => 'Apellido',
			'cedula' => 'Cedula',
			'estado' => 'Estado',
			'telefono' => 'Telefono',
			'fecha_ingreso' => 'Fecha Ingreso',
			'fecha_egreso' => 'Fecha Egreso',
			'administrador_estado' => 'Administrador Estado',
			'Carrera_id' => 'Carrera',
			'Cuerda_idCuerda' => 'Cuerda Id Cuerda',
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

		$criteria->compare('usuario',$this->usuario,true);
		$criteria->compare('clave',$this->clave,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('cedula',$this->cedula,true);
		$criteria->compare('estado',$this->estado);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('fecha_ingreso',$this->fecha_ingreso,true);
		$criteria->compare('fecha_egreso',$this->fecha_egreso,true);
		$criteria->compare('administrador_estado',$this->administrador_estado);
		$criteria->compare('Carrera_id',$this->Carrera_id);
		$criteria->compare('Cuerda_idCuerda',$this->Cuerda_idCuerda,true);
		$criteria->compare('usuario_modifico',$this->usuario_modifico,true);
		$criteria->compare('fecha_modifico',$this->fecha_modifico,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}