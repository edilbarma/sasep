<?php
/* @var $this PersonaController */
/* @var $model Persona */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'persona-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'CIGE_IDRESIDENCIA'); ?>
		<?php echo $form->textField($model,'CIGE_IDRESIDENCIA'); ?>
		<?php echo $form->error($model,'CIGE_IDRESIDENCIA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PEGE_DIRECCION'); ?>
		<?php echo $form->textField($model,'PEGE_DIRECCION',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'PEGE_DIRECCION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PEGE_MAIL'); ?>
		<?php echo $form->textField($model,'PEGE_MAIL',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'PEGE_MAIL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PEGE_TELEFONOCELULAR'); ?>
		<?php echo $form->textField($model,'PEGE_TELEFONOCELULAR',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'PEGE_TELEFONOCELULAR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PEGE_FECHACAMBIO'); ?>
		<?php echo $form->textField($model,'PEGE_FECHACAMBIO'); ?>
		<?php echo $form->error($model,'PEGE_FECHACAMBIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PEGE_TELEFONO'); ?>
		<?php echo $form->textField($model,'PEGE_TELEFONO',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'PEGE_TELEFONO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PAGE_IDRESIDENCIA'); ?>
		<?php echo $form->textField($model,'PAGE_IDRESIDENCIA',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'PAGE_IDRESIDENCIA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TIDG_ID'); ?>
		<?php echo $form->textField($model,'TIDG_ID'); ?>
		<?php echo $form->error($model,'TIDG_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PEGE_DOCUMENTOIDENTIDAD'); ?>
		<?php echo $form->textField($model,'PEGE_DOCUMENTOIDENTIDAD',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'PEGE_DOCUMENTOIDENTIDAD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PEGE_LUGAREXPEDICION'); ?>
		<?php echo $form->textField($model,'PEGE_LUGAREXPEDICION',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'PEGE_LUGAREXPEDICION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PEGE_FECHAEXPEDICION'); ?>
		<?php echo $form->textField($model,'PEGE_FECHAEXPEDICION'); ?>
		<?php echo $form->error($model,'PEGE_FECHAEXPEDICION'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->