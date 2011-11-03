<?php
$this->breadcrumbs=array(
	'Ncarreras'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Ncarrera', 'url'=>array('index')),
	array('label'=>'Create Ncarrera', 'url'=>array('create')),
	array('label'=>'Update Ncarrera', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Ncarrera', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ncarrera', 'url'=>array('admin')),
);
?>

<h1>View Ncarrera #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'carrera',
		'usuario_modifico',
		'fecha_modifico',
	),
)); ?>
