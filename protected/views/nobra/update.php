<?php
$this->breadcrumbs=array(
	'Nobras'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Nobra', 'url'=>array('index')),
	array('label'=>'Create Nobra', 'url'=>array('create')),
	array('label'=>'View Nobra', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Nobra', 'url'=>array('admin')),
);
?>

<h1>Update Nobra <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>