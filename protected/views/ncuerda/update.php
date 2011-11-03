<?php
$this->breadcrumbs=array(
	'Ncuerdas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ncuerda', 'url'=>array('index')),
	array('label'=>'Create Ncuerda', 'url'=>array('create')),
	array('label'=>'View Ncuerda', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ncuerda', 'url'=>array('admin')),
);
?>

<h1>Update Ncuerda <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>