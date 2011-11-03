<?php
$this->breadcrumbs=array(
	'Ngeneros'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Ngenero', 'url'=>array('index')),
	array('label'=>'Create Ngenero', 'url'=>array('create')),
	array('label'=>'Update Ngenero', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Ngenero', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ngenero', 'url'=>array('admin')),
);
?>

<h1>View Ngenero #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'genero',
		'usuario_modifico',
		'fecha_modifico',
	),
)); ?>
