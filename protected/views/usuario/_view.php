<?php
/* @var $this UsuarioController */
/* @var $data Usuario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('USUA_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->USUA_ID), array('view', 'id'=>$data->USUA_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USUA_FECHACAMBIO')); ?>:</b>
	<?php echo CHtml::encode($data->USUA_FECHACAMBIO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USUA_REGISTRADOPOR')); ?>:</b>
	<?php echo CHtml::encode($data->USUA_REGISTRADOPOR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PEGE_ID')); ?>:</b>
	<?php echo CHtml::encode($data->PEGE_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USUA_USUARIO')); ?>:</b>
	<?php echo CHtml::encode($data->USUA_USUARIO); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('USUA_TIPO')); ?>:</b>
	<?php echo CHtml::encode($data->USUA_TIPO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USUA_ESTADO')); ?>:</b>
	<?php echo CHtml::encode($data->USUA_ESTADO); ?>
	<br />

	*/ ?>

</div>