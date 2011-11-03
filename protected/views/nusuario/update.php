<?php
$this->breadcrumbs=array(
	'Nusuarios'=>array('index'),
	$model->usuario=>array('view','id'=>$model->usuario),
	'Update',
);

$this->menu=array(
	array('label'=>'List Nusuario', 'url'=>array('index')),
	array('label'=>'Create Nusuario', 'url'=>array('create')),
	array('label'=>'View Nusuario', 'url'=>array('view', 'id'=>$model->usuario)),
	array('label'=>'Manage Nusuario', 'url'=>array('admin')),
);
?>

<h1>Update Nusuario <?php echo $model->usuario; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>