<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->usuario), array('view', 'id'=>$data->usuario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clave')); ?>:</b>
	<?php echo CHtml::encode($data->clave); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido')); ?>:</b>
	<?php echo CHtml::encode($data->apellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cedula')); ?>:</b>
	<?php echo CHtml::encode($data->cedula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_ingreso')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_ingreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_egreso')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_egreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('administrador_estado')); ?>:</b>
	<?php echo CHtml::encode($data->administrador_estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Carrera_id')); ?>:</b>
	<?php echo CHtml::encode($data->Carrera_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cuerda_idCuerda')); ?>:</b>
	<?php echo CHtml::encode($data->Cuerda_idCuerda); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_modifico')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_modifico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_modifico')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_modifico); ?>
	<br />

	*/ ?>

</div>