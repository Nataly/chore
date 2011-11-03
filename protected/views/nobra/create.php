<?php
$this->breadcrumbs=array(
	'Nobras'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Nobra', 'url'=>array('index')),
	array('label'=>'Manage Nobra', 'url'=>array('admin')),
);
?>

<h1>Create Nobra</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>