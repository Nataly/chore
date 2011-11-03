<?php
$this->breadcrumbs=array(
	'Nusuarios',
);

$this->menu=array(
	array('label'=>'Create Nusuario', 'url'=>array('create')),
	array('label'=>'Manage Nusuario', 'url'=>array('admin')),
);
?>

<h1>Nusuarios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
