<?php
$this->breadcrumbs=array(
	'Ngalerias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ngaleria', 'url'=>array('index')),
	array('label'=>'Create Ngaleria', 'url'=>array('create')),
	array('label'=>'View Ngaleria', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ngaleria', 'url'=>array('admin')),
);
?>

<h1>Update Ngaleria <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>