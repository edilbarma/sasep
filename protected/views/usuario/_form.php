<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'USUA_FECHACAMBIO'); ?>
		<?php echo $form->textField($model,'USUA_FECHACAMBIO'); ?>
		<?php echo $form->error($model,'USUA_FECHACAMBIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USUA_REGISTRADOPOR'); ?>
		<?php echo $form->textField($model,'USUA_REGISTRADOPOR',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'USUA_REGISTRADOPOR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PEGE_ID'); ?>
		<?php echo $form->textField($model,'PEGE_ID'); ?>
		<?php echo $form->error($model,'PEGE_ID'); ?>
	</div>
    
	<div class="row">
		<?php echo $form->labelEx($model,'USUA_USUARIO'); ?>
		<?php echo $form->textField($model,'USUA_USUARIO',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'USUA_USUARIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USUA_CLAVE'); ?>
		<?php if($model->isNewRecord) echo $form->textField($model,'USUA_CLAVE',array('size'=>30,'maxlength'=>30));
				else echo $form->hiddenField($model,'USUA_CLAVE',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'USUA_CLAVE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USUA_TIPO'); ?>
		<?php echo $form->textField($model,'USUA_TIPO'); ?>
		<?php echo $form->error($model,'USUA_TIPO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USUA_ESTADO'); ?>
		<?php echo $form->textField($model,'USUA_ESTADO',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'USUA_ESTADO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->