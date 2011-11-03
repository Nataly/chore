<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'nimagenes-form',
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
		<?php echo $form->labelEx($model,'url'); ?>
		<?php echo $form->textField($model,'url',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'leyenda'); ?>
		<?php echo $form->textField($model,'leyenda',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'leyenda'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Galeria_id'); ?>
		<?php echo $form->textField($model,'Galeria_id'); ?>
		<?php echo $form->error($model,'Galeria_id'); ?>
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