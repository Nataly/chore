<?php
$this->breadcrumbs=array(
	'Npublicacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Npublicacion', 'url'=>array('index')),
	array('label'=>'Manage Npublicacion', 'url'=>array('admin')),
);
?>

<h1>Create Npublicacion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>