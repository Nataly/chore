<?php
$this->breadcrumbs=array(
	'Neventos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Nevento', 'url'=>array('index')),
	array('label'=>'Create Nevento', 'url'=>array('create')),
	array('label'=>'View Nevento', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Nevento', 'url'=>array('admin')),
);
?>

<h1>Update Nevento <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>