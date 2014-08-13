<?php
/* @var $this TipoDocumentoController */
/* @var $data TipoDocumento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('TIDG_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->TIDG_ID), array('view', 'id'=>$data->TIDG_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TIDG_DESCRIPCION')); ?>:</b>
	<?php echo CHtml::encode($data->TIDG_DESCRIPCION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TIDG_REGISTRADOPOR')); ?>:</b>
	<?php echo CHtml::encode($data->TIDG_REGISTRADOPOR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TIDG_FECHACAMBIO')); ?>:</b>
	<?php echo CHtml::encode($data->TIDG_FECHACAMBIO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TIDG_ABREVIATURA')); ?>:</b>
	<?php echo CHtml::encode($data->TIDG_ABREVIATURA); ?>
	<br />


</div>