<?php
/* @var $this PaisController */
/* @var $model Pais */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'PAGE_ID'); ?>
		<?php echo $form->textField($model,'PAGE_ID',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PAGE_NOMBRE'); ?>
		<?php echo $form->textField($model,'PAGE_NOMBRE',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PAGE_REGISTRADOPOR'); ?>
		<?php echo $form->textField($model,'PAGE_REGISTRADOPOR',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PAGE_FECHACAMBIO'); ?>
		<?php echo $form->textField($model,'PAGE_FECHACAMBIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PAGE_CODIGODANE'); ?>
		<?php echo $form->textField($model,'PAGE_CODIGODANE',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->