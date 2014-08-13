<?php
/* @var $this TipoUsuarioController */
/* @var $model TipoUsuario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'TIUSUA_ID'); ?>
		<?php echo $form->textField($model,'TIUSUA_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TIUSUA_DESCRIPCION'); ?>
		<?php echo $form->textField($model,'TIUSUA_DESCRIPCION',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->