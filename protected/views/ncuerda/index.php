<?php
$this->breadcrumbs=array(
	'Ncuerdas',
);

$this->menu=array(
	array('label'=>'Create Ncuerda', 'url'=>array('create')),
	array('label'=>'Manage Ncuerda', 'url'=>array('admin')),
);
?>

<h1>Ncuerdas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
