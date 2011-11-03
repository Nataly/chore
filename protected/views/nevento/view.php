<?php
$this->breadcrumbs=array(
	'Neventos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Nevento', 'url'=>array('index')),
	array('label'=>'Create Nevento', 'url'=>array('create')),
	array('label'=>'Update Nevento', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Nevento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Nevento', 'url'=>array('admin')),
);
?>

<h1>View Nevento #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'titulo',
		'descripcion',
		'lugar',
		'fechaInicio',
		'fechaFin',
		'TipoEvento_id',
		'Usuario_usuario',
		'usuario_modifico',
		'fecha_modifico',
	),
)); ?>
