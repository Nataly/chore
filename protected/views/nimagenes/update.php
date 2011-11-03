<?php
$this->breadcrumbs=array(
	'Nimagenes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Nimagenes', 'url'=>array('index')),
	array('label'=>'Create Nimagenes', 'url'=>array('create')),
	array('label'=>'View Nimagenes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Nimagenes', 'url'=>array('admin')),
);
?>

<h1>Update Nimagenes <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>