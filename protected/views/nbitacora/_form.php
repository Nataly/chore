<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'nbitacora-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario'); ?>
		<?php echo $form->textField($model,'usuario',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'momento'); ?>
		<?php echo $form->textField($model,'momento'); ?>
		<?php echo $form->error($model,'momento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoOperacion'); ?>
		<?php echo $form->textField($model,'tipoOperacion',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'tipoOperacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tabla'); ?>
		<?php echo $form->textField($model,'tabla',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'tabla'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->