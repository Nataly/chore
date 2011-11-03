<?php
$this->breadcrumbs=array(
	'Nobras'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Nobra', 'url'=>array('index')),
	array('label'=>'Create Nobra', 'url'=>array('create')),
	array('label'=>'Update Nobra', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Nobra', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Nobra', 'url'=>array('admin')),
);
?>

<h1>View Nobra #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'ruta',
		'anio',
		'descripcion',
		'Compositor_id',
		'Genero_id',
		'usuario_modifico',
		'fecha_modifico',
	),
)); ?>
