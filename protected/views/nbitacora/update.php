<?php
$this->breadcrumbs=array(
	'Nbitacoras'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Nbitacora', 'url'=>array('index')),
	array('label'=>'Create Nbitacora', 'url'=>array('create')),
	array('label'=>'View Nbitacora', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Nbitacora', 'url'=>array('admin')),
);
?>

<h1>Update Nbitacora <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>