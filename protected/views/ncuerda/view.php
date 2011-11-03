<?php
$this->breadcrumbs=array(
	'Ncuerdas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Ncuerda', 'url'=>array('index')),
	array('label'=>'Create Ncuerda', 'url'=>array('create')),
	array('label'=>'Update Ncuerda', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Ncuerda', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ncuerda', 'url'=>array('admin')),
);
?>

<h1>View Ncuerda #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descripcion',
		'usuario_modifico',
		'fecha_modifico',
	),
)); ?>
