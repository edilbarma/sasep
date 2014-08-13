<?php
/* @var $this PersonaController */
/* @var $data Persona */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PEGE_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PEGE_ID), array('view', 'id'=>$data->PEGE_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CIGE_IDRESIDENCIA')); ?>:</b>
	<?php echo CHtml::encode($data->CIGE_IDRESIDENCIA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PEGE_DIRECCION')); ?>:</b>
	<?php echo CHtml::encode($data->PEGE_DIRECCION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PEGE_MAIL')); ?>:</b>
	<?php echo CHtml::encode($data->PEGE_MAIL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PEGE_TELEFONOCELULAR')); ?>:</b>
	<?php echo CHtml::encode($data->PEGE_TELEFONOCELULAR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PEGE_FECHACAMBIO')); ?>:</b>
	<?php echo CHtml::encode($data->PEGE_FECHACAMBIO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PEGE_TELEFONO')); ?>:</b>
	<?php echo CHtml::encode($data->PEGE_TELEFONO); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('PAGE_IDRESIDENCIA')); ?>:</b>
	<?php echo CHtml::encode($data->PAGE_IDRESIDENCIA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TIDG_ID')); ?>:</b>
	<?php echo CHtml::encode($data->TIDG_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PEGE_DOCUMENTOIDENTIDAD')); ?>:</b>
	<?php echo CHtml::encode($data->PEGE_DOCUMENTOIDENTIDAD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PEGE_LUGAREXPEDICION')); ?>:</b>
	<?php echo CHtml::encode($data->PEGE_LUGAREXPEDICION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PEGE_FECHAEXPEDICION')); ?>:</b>
	<?php echo CHtml::encode($data->PEGE_FECHAEXPEDICION); ?>
	<br />

	*/ ?>

</div>