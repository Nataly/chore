<?php
$this->breadcrumbs=array(
	'Npublicacions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Npublicacion', 'url'=>array('index')),
	array('label'=>'Create Npublicacion', 'url'=>array('create')),
	array('label'=>'View Npublicacion', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Npublicacion', 'url'=>array('admin')),
);
?>

<h1>Update Npublicacion <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>