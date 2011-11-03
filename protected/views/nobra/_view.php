<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ruta')); ?>:</b>
	<?php echo CHtml::encode($data->ruta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anio')); ?>:</b>
	<?php echo CHtml::encode($data->anio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Compositor_id')); ?>:</b>
	<?php echo CHtml::encode($data->Compositor_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Genero_id')); ?>:</b>
	<?php echo CHtml::encode($data->Genero_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_modifico')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_modifico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_modifico')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_modifico); ?>
	<br />

	*/ ?>

</div>