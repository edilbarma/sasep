<?php
/* @var $this TipoUsuarioController */
/* @var $data TipoUsuario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('TIUSUA_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->TIUSUA_ID), array('view', 'id'=>$data->TIUSUA_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TIUSUA_DESCRIPCION')); ?>:</b>
	<?php echo CHtml::encode($data->TIUSUA_DESCRIPCION); ?>
	<br />


</div>