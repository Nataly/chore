<?php
$this->breadcrumbs=array(
	'Ngalerias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ngaleria', 'url'=>array('index')),
	array('label'=>'Manage Ngaleria', 'url'=>array('admin')),
);
?>

<h1>Create Ngaleria</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>