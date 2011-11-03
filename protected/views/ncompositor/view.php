<?php
$this->breadcrumbs=array(
	'Ncompositors'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Ncompositor', 'url'=>array('index')),
	array('label'=>'Create Ncompositor', 'url'=>array('create')),
	array('label'=>'Update Ncompositor', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Ncompositor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ncompositor', 'url'=>array('admin')),
);
?>

<h1>View Ncompositor #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'nacionalidad',
		'descripcion',
		'usuario_modifico',
		'fecha_modifico',
	),
)); ?>
