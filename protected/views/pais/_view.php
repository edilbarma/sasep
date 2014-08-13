<?php
/* @var $this PaisController */
/* @var $data Pais */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PAGE_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PAGE_ID), array('view', 'id'=>$data->PAGE_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PAGE_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->PAGE_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PAGE_REGISTRADOPOR')); ?>:</b>
	<?php echo CHtml::encode($data->PAGE_REGISTRADOPOR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PAGE_FECHACAMBIO')); ?>:</b>
	<?php echo CHtml::encode($data->PAGE_FECHACAMBIO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PAGE_CODIGODANE')); ?>:</b>
	<?php echo CHtml::encode($data->PAGE_CODIGODANE); ?>
	<br />


</div>