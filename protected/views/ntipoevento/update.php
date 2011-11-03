<?php
$this->breadcrumbs=array(
	'Ntipoeventos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ntipoevento', 'url'=>array('index')),
	array('label'=>'Create Ntipoevento', 'url'=>array('create')),
	array('label'=>'View Ntipoevento', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ntipoevento', 'url'=>array('admin')),
);
?>

<h1>Update Ntipoevento <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>