<?php
/* @var $this CiudadController */
/* @var $data Ciudad */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CIGE_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CIGE_ID), array('view', 'id'=>$data->CIGE_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DEGE_ID')); ?>:</b>
	<?php echo CHtml::encode($data->DEGE_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CIGE_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->CIGE_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CIGE_REGISTRADOPOR')); ?>:</b>
	<?php echo CHtml::encode($data->CIGE_REGISTRADOPOR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CIGE_FECHACAMBIO')); ?>:</b>
	<?php echo CHtml::encode($data->CIGE_FECHACAMBIO); ?>
	<br />


</div>