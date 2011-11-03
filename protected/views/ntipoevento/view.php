<?php
$this->breadcrumbs=array(
	'Ntipoeventos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Ntipoevento', 'url'=>array('index')),
	array('label'=>'Create Ntipoevento', 'url'=>array('create')),
	array('label'=>'Update Ntipoevento', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Ntipoevento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ntipoevento', 'url'=>array('admin')),
);
?>

<h1>View Ntipoevento #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tipoEvento',
		'usuario_modifico',
		'fecha_modifico',
	),
)); ?>
