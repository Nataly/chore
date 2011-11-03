<?php
$this->breadcrumbs=array(
	'Nusuarios'=>array('index'),
	$model->usuario,
);

$this->menu=array(
	array('label'=>'List Nusuario', 'url'=>array('index')),
	array('label'=>'Create Nusuario', 'url'=>array('create')),
	array('label'=>'Update Nusuario', 'url'=>array('update', 'id'=>$model->usuario)),
	array('label'=>'Delete Nusuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->usuario),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Nusuario', 'url'=>array('admin')),
);
?>

<h1>View Nusuario #<?php echo $model->usuario; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'usuario',
		'clave',
		'email',
		'nombre',
		'apellido',
		'cedula',
		'estado',
		'telefono',
		'fecha_ingreso',
		'fecha_egreso',
		'administrador_estado',
		'Carrera_id',
		'Cuerda_idCuerda',
		'usuario_modifico',
		'fecha_modifico',
	),
)); ?>
