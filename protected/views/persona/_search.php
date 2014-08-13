<?php
/* @var $this PersonaController */
/* @var $model Persona */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'PEGE_ID'); ?>
		<?php echo $form->textField($model,'PEGE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CIGE_IDRESIDENCIA'); ?>
		<?php echo $form->textField($model,'CIGE_IDRESIDENCIA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PEGE_DIRECCION'); ?>
		<?php echo $form->textField($model,'PEGE_DIRECCION',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PEGE_MAIL'); ?>
		<?php echo $form->textField($model,'PEGE_MAIL',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PEGE_TELEFONOCELULAR'); ?>
		<?php echo $form->textField($model,'PEGE_TELEFONOCELULAR',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PEGE_FECHACAMBIO'); ?>
		<?php echo $form->textField($model,'PEGE_FECHACAMBIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PEGE_TELEFONO'); ?>
		<?php echo $form->textField($model,'PEGE_TELEFONO',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PAGE_IDRESIDENCIA'); ?>
		<?php echo $form->textField($model,'PAGE_IDRESIDENCIA',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TIDG_ID'); ?>
		<?php echo $form->textField($model,'TIDG_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PEGE_DOCUMENTOIDENTIDAD'); ?>
		<?php echo $form->textField($model,'PEGE_DOCUMENTOIDENTIDAD',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PEGE_LUGAREXPEDICION'); ?>
		<?php echo $form->textField($model,'PEGE_LUGAREXPEDICION',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PEGE_FECHAEXPEDICION'); ?>
		<?php echo $form->textField($model,'PEGE_FECHAEXPEDICION'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->