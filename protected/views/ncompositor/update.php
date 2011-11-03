<?php
$this->breadcrumbs=array(
	'Ncompositors'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ncompositor', 'url'=>array('index')),
	array('label'=>'Create Ncompositor', 'url'=>array('create')),
	array('label'=>'View Ncompositor', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ncompositor', 'url'=>array('admin')),
);
?>

<h1>Update Ncompositor <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>