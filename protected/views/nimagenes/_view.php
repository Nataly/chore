<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b>
	<?php echo CHtml::encode($data->url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('leyenda')); ?>:</b>
	<?php echo CHtml::encode($data->leyenda); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Galeria_id')); ?>:</b>
	<?php echo CHtml::encode($data->Galeria_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_modifico')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_modifico); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_modifico')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_modifico); ?>
	<br />

	*/ ?>

</div>