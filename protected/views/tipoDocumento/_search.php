<?php
/* @var $this TipoDocumentoController */
/* @var $model TipoDocumento */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'TIDG_ID'); ?>
		<?php echo $form->textField($model,'TIDG_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TIDG_DESCRIPCION'); ?>
		<?php echo $form->textField($model,'TIDG_DESCRIPCION',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TIDG_REGISTRADOPOR'); ?>
		<?php echo $form->textField($model,'TIDG_REGISTRADOPOR',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TIDG_FECHACAMBIO'); ?>
		<?php echo $form->textField($model,'TIDG_FECHACAMBIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TIDG_ABREVIATURA'); ?>
		<?php echo $form->textField($model,'TIDG_ABREVIATURA',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->