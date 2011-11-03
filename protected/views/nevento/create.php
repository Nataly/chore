<?php
$this->breadcrumbs=array(
	'Neventos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Nevento', 'url'=>array('index')),
	array('label'=>'Manage Nevento', 'url'=>array('admin')),
);
?>

<h1>Create Nevento</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>