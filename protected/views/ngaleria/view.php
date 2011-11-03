<?php
$this->breadcrumbs=array(
	'Ngalerias'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Ngaleria', 'url'=>array('index')),
	array('label'=>'Create Ngaleria', 'url'=>array('create')),
	array('label'=>'Update Ngaleria', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Ngaleria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ngaleria', 'url'=>array('admin')),
);
?>

<h1>View Ngaleria #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'titulo',
		'fecha_modifco',
		'usuario_modifico',
	),
)); ?>
