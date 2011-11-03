<?php
$this->breadcrumbs=array(
	'Ncarreras'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ncarrera', 'url'=>array('index')),
	array('label'=>'Manage Ncarrera', 'url'=>array('admin')),
);
?>

<h1>Create Ncarrera</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>