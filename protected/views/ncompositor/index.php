<?php
$this->breadcrumbs=array(
	'Ncompositors',
);

$this->menu=array(
	array('label'=>'Create Ncompositor', 'url'=>array('create')),
	array('label'=>'Manage Ncompositor', 'url'=>array('admin')),
);
?>

<h1>Ncompositors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
