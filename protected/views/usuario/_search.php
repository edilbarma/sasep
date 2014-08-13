<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'USUA_ID'); ?>
		<?php echo $form->textField($model,'USUA_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USUA_FECHACAMBIO'); ?>
		<?php echo $form->textField($model,'USUA_FECHACAMBIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USUA_REGISTRADOPOR'); ?>
		<?php echo $form->textField($model,'USUA_REGISTRADOPOR',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PEGE_ID'); ?>
		<?php echo $form->textField($model,'PEGE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USUA_USUARIO'); ?>
		<?php echo $form->textField($model,'USUA_USUARIO',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USUA_TIPO'); ?>
		<?php echo $form->textField($model,'USUA_TIPO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USUA_ESTADO'); ?>
		<?php echo $form->textField($model,'USUA_ESTADO',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->