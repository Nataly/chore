<?php
$this->breadcrumbs=array(
	'Npublicacions',
);

$this->menu=array(
	array('label'=>'Create Npublicacion', 'url'=>array('create')),
	array('label'=>'Manage Npublicacion', 'url'=>array('admin')),
);
?>

<h1>Npublicacions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
