<?php
$this->breadcrumbs=array(
	'Nimagenes',
);

$this->menu=array(
	array('label'=>'Create Nimagenes', 'url'=>array('create')),
	array('label'=>'Manage Nimagenes', 'url'=>array('admin')),
);
?>

<h1>Nimagenes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
