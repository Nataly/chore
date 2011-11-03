<?php
$this->breadcrumbs=array(
	'Nobras',
);

$this->menu=array(
	array('label'=>'Create Nobra', 'url'=>array('create')),
	array('label'=>'Manage Nobra', 'url'=>array('admin')),
);
?>

<h1>Nobras</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
