<?php
$this->breadcrumbs=array(
	'Ngeneros'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ngenero', 'url'=>array('index')),
	array('label'=>'Create Ngenero', 'url'=>array('create')),
	array('label'=>'View Ngenero', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ngenero', 'url'=>array('admin')),
);
?>

<h1>Update Ngenero <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>