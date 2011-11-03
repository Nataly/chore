<?php
$this->breadcrumbs=array(
	'Nbitacoras'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Nbitacora', 'url'=>array('index')),
	array('label'=>'Manage Nbitacora', 'url'=>array('admin')),
);
?>

<h1>Create Nbitacora</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>