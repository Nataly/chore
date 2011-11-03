<?php
$this->breadcrumbs=array(
	'Ngalerias',
);

$this->menu=array(
	array('label'=>'Create Ngaleria', 'url'=>array('create')),
	array('label'=>'Manage Ngaleria', 'url'=>array('admin')),
);
?>

<h1>Ngalerias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
