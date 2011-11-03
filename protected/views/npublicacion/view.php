<?php
$this->breadcrumbs=array(
	'Npublicacions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Npublicacion', 'url'=>array('index')),
	array('label'=>'Create Npublicacion', 'url'=>array('create')),
	array('label'=>'Update Npublicacion', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Npublicacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Npublicacion', 'url'=>array('admin')),
);
?>

<h1>View Npublicacion #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'titulo',
		'descripcion',
		'autor',
		'fecha_modifico',
		'usuario_modifico',
	),
)); ?>
