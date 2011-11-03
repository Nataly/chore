<?php
$this->breadcrumbs=array(
	'Ncarreras'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ncarrera', 'url'=>array('index')),
	array('label'=>'Create Ncarrera', 'url'=>array('create')),
	array('label'=>'View Ncarrera', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ncarrera', 'url'=>array('admin')),
);
?>

<h1>Update Ncarrera <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>