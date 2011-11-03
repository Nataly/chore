<?php
$this->breadcrumbs=array(
	'Ntipoeventos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ntipoevento', 'url'=>array('index')),
	array('label'=>'Manage Ntipoevento', 'url'=>array('admin')),
);
?>

<h1>Create Ntipoevento</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>