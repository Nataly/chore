<?php
$this->breadcrumbs=array(
	'Nbitacoras',
);

$this->menu=array(
	array('label'=>'Create Nbitacora', 'url'=>array('create')),
	array('label'=>'Manage Nbitacora', 'url'=>array('admin')),
);
?>

<h1>Nbitacoras</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
