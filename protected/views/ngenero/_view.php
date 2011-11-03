<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('genero')); ?>:</b>
	<?php echo CHtml::encode($data->genero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_modifico')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_modifico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_modifico')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_modifico); ?>
	<br />


</div>