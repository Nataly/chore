<?php
$this->breadcrumbs=array(
	'Ngeneros',
);

$this->menu=array(
	array('label'=>'Create Ngenero', 'url'=>array('create')),
	array('label'=>'Manage Ngenero', 'url'=>array('admin')),
);
?>

<h1>Ngeneros</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
