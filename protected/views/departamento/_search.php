<?php
/* @var $this DepartamentoController */
/* @var $model Departamento */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'DEGE_ID'); ?>
		<?php echo $form->textField($model,'DEGE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DEGE_NOMBRE'); ?>
		<?php echo $form->textField($model,'DEGE_NOMBRE',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PAGE_ID'); ?>
		<?php echo $form->textField($model,'PAGE_ID',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DEGE_REGISTRADOPOR'); ?>
		<?php echo $form->textField($model,'DEGE_REGISTRADOPOR',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DEGE_FECHACAMBIO'); ?>
		<?php echo $form->textField($model,'DEGE_FECHACAMBIO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->