<?php
$this->breadcrumbs=array(
	'Ncuerdas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ncuerda', 'url'=>array('index')),
	array('label'=>'Manage Ncuerda', 'url'=>array('admin')),
);
?>

<h1>Create Ncuerda</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>