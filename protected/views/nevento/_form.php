<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'nevento-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lugar'); ?>
		<?php echo $form->textField($model,'lugar',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'lugar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaInicio'); ?>
		<?php echo $form->textField($model,'fechaInicio'); ?>
		<?php echo $form->error($model,'fechaInicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaFin'); ?>
		<?php echo $form->textField($model,'fechaFin'); ?>
		<?php echo $form->error($model,'fechaFin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TipoEvento_id'); ?>
		<?php echo $form->textField($model,'TipoEvento_id'); ?>
		<?php echo $form->error($model,'TipoEvento_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Usuario_usuario'); ?>
		<?php echo $form->textField($model,'Usuario_usuario',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Usuario_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario_modifico'); ?>
		<?php echo $form->textField($model,'usuario_modifico',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'usuario_modifico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_modifico'); ?>
		<?php echo $form->textField($model,'fecha_modifico'); ?>
		<?php echo $form->error($model,'fecha_modifico'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->