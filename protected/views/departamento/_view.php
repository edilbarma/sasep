<?php
/* @var $this DepartamentoController */
/* @var $data Departamento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('DEGE_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->DEGE_ID), array('view', 'id'=>$data->DEGE_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DEGE_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->DEGE_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PAGE_ID')); ?>:</b>
	<?php echo CHtml::encode($data->PAGE_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DEGE_REGISTRADOPOR')); ?>:</b>
	<?php echo CHtml::encode($data->DEGE_REGISTRADOPOR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DEGE_FECHACAMBIO')); ?>:</b>
	<?php echo CHtml::encode($data->DEGE_FECHACAMBIO); ?>
	<br />


</div>