<?php
/* @var $this CiudadController */
/* @var $model Ciudad */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'CIGE_ID'); ?>
		<?php echo $form->textField($model,'CIGE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DEGE_ID'); ?>
		<?php echo $form->textField($model,'DEGE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CIGE_NOMBRE'); ?>
		<?php echo $form->textField($model,'CIGE_NOMBRE',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CIGE_REGISTRADOPOR'); ?>
		<?php echo $form->textField($model,'CIGE_REGISTRADOPOR',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CIGE_FECHACAMBIO'); ?>
		<?php echo $form->textField($model,'CIGE_FECHACAMBIO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->