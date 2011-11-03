<?php
$this->breadcrumbs=array(
	'Ncarreras',
);

$this->menu=array(
	array('label'=>'Create Ncarrera', 'url'=>array('create')),
	array('label'=>'Manage Ncarrera', 'url'=>array('admin')),
);
?>

<h1>Ncarreras</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
