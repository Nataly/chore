<?php
$this->breadcrumbs=array(
	'Nimagenes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Nimagenes', 'url'=>array('index')),
	array('label'=>'Manage Nimagenes', 'url'=>array('admin')),
);
?>

<h1>Create Nimagenes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>