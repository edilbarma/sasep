<?php
/* @var $this TipoDocumentoController */
/* @var $model TipoDocumento */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tipo-documento-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'TIDG_ID'); ?>
		<?php echo $form->textField($model,'TIDG_ID'); ?>
		<?php echo $form->error($model,'TIDG_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TIDG_DESCRIPCION'); ?>
		<?php echo $form->textField($model,'TIDG_DESCRIPCION',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'TIDG_DESCRIPCION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TIDG_REGISTRADOPOR'); ?>
		<?php echo $form->textField($model,'TIDG_REGISTRADOPOR',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'TIDG_REGISTRADOPOR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TIDG_FECHACAMBIO'); ?>
		<?php echo $form->textField($model,'TIDG_FECHACAMBIO'); ?>
		<?php echo $form->error($model,'TIDG_FECHACAMBIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TIDG_ABREVIATURA'); ?>
		<?php echo $form->textField($model,'TIDG_ABREVIATURA',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'TIDG_ABREVIATURA'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->