<?php
$this->breadcrumbs=array(
	'Nbitacoras'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Nbitacora', 'url'=>array('index')),
	array('label'=>'Create Nbitacora', 'url'=>array('create')),
	array('label'=>'Update Nbitacora', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Nbitacora', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Nbitacora', 'url'=>array('admin')),
);
?>

<h1>View Nbitacora #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'usuario',
		'momento',
		'tipoOperacion',
		'tabla',
		'descripcion',
	),
)); ?>
