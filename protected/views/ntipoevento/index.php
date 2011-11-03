<?php
$this->breadcrumbs=array(
	'Ntipoeventos',
);

$this->menu=array(
	array('label'=>'Create Ntipoevento', 'url'=>array('create')),
	array('label'=>'Manage Ntipoevento', 'url'=>array('admin')),
);
?>

<h1>Ntipoeventos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
