<?php
$this->breadcrumbs=array(
	'Ngeneros'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ngenero', 'url'=>array('index')),
	array('label'=>'Manage Ngenero', 'url'=>array('admin')),
);
?>

<h1>Create Ngenero</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>