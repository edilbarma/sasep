<?php
/* @var $this CiudadController */
/* @var $model Ciudad */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ciudad-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'CIGE_ID'); ?>
		<?php echo $form->textField($model,'CIGE_ID'); ?>
		<?php echo $form->error($model,'CIGE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DEGE_ID'); ?>
		<?php echo $form->textField($model,'DEGE_ID'); ?>
		<?php echo $form->error($model,'DEGE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CIGE_NOMBRE'); ?>
		<?php echo $form->textField($model,'CIGE_NOMBRE',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'CIGE_NOMBRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CIGE_REGISTRADOPOR'); ?>
		<?php echo $form->textField($model,'CIGE_REGISTRADOPOR',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'CIGE_REGISTRADOPOR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CIGE_FECHACAMBIO'); ?>
		<?php echo $form->textField($model,'CIGE_FECHACAMBIO'); ?>
		<?php echo $form->error($model,'CIGE_FECHACAMBIO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->