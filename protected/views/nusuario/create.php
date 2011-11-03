<?php
$this->breadcrumbs=array(
	'Nusuarios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Nusuario', 'url'=>array('index')),
	array('label'=>'Manage Nusuario', 'url'=>array('admin')),
);
?>

<h1>Create Nusuario</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>