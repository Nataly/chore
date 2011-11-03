<?php
$this->pageTitle = Yii::app()->name . ' - Iniciar Sesion';
$this->breadcrumbs = array(
    'Iniciar Sesión',
);
?>
<div id="contenido" class="lateralleft">


    <h1>Iniciar Sesión</h1>

    <p>Por favor a continuacion ingrese sus credenciales de inicio de sesión:</p>

    <div class="form">
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'login-form',
            'enableAjaxValidation' => true,
            'enableClientValidation' => true,
            'clientOptions' => array(
                'validateOnSubmit' => true,
            ),
                ));
        ?>

        <p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

        <div class="row">
            <?php echo $form->labelEx($model, 'username'); ?>
            <?php echo $form->textField($model, 'username'); ?>
            <?php echo $form->error($model, 'username'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'password'); ?>
            <?php echo $form->passwordField($model, 'password'); ?>
            <?php echo $form->error($model, 'password'); ?>

        </div>

        <div class="row rememberMe">
            <?php echo $form->checkBox($model, 'rememberMe'); ?>
            <?php echo $form->label($model, 'rememberMe'); ?>
            <?php echo $form->error($model, 'rememberMe'); ?>
        </div>

        <div class="row buttons">
            <?php echo CHtml::submitButton('Iniciar'); ?>
        </div>

        <?php $this->endWidget(); ?>
    </div><!-- form -->
</div>
