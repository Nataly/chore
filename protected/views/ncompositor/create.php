<?php
$this->breadcrumbs=array(
	'Ncompositors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ncompositor', 'url'=>array('index')),
	array('label'=>'Manage Ncompositor', 'url'=>array('admin')),
);
?>

<h1>Create Ncompositor</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>