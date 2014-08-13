<?php
/* @var $this PaisController */
/* @var $model Pais */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pais-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'PAGE_ID'); ?>
		<?php echo $form->textField($model,'PAGE_ID',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'PAGE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PAGE_NOMBRE'); ?>
		<?php echo $form->textField($model,'PAGE_NOMBRE',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'PAGE_NOMBRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PAGE_REGISTRADOPOR'); ?>
		<?php echo $form->textField($model,'PAGE_REGISTRADOPOR',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PAGE_REGISTRADOPOR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PAGE_FECHACAMBIO'); ?>
		<?php echo $form->textField($model,'PAGE_FECHACAMBIO'); ?>
		<?php echo $form->error($model,'PAGE_FECHACAMBIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PAGE_CODIGODANE'); ?>
		<?php echo $form->textField($model,'PAGE_CODIGODANE',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'PAGE_CODIGODANE'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->