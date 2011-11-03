<?php
$this->breadcrumbs=array(
	'Neventos',
);

$this->menu=array(
	array('label'=>'Create Nevento', 'url'=>array('create')),
	array('label'=>'Manage Nevento', 'url'=>array('admin')),
);
?>

<h1>Neventos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
