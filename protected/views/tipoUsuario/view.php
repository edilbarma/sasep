<?php
/* @var $this TipoUsuarioController */
/* @var $model TipoUsuario */

$this->breadcrumbs=array(
	'Tipo Usuarios'=>array('index'),
	$model->TIUSUA_ID,
);

$this->menu=array(
	array('label'=>'List TipoUsuario', 'url'=>array('index')),
	array('label'=>'Create TipoUsuario', 'url'=>array('create')),
	array('label'=>'Update TipoUsuario', 'url'=>array('update', 'id'=>$model->TIUSUA_ID)),
	array('label'=>'Delete TipoUsuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->TIUSUA_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoUsuario', 'url'=>array('admin')),
);
?>

<h1>View TipoUsuario #<?php echo $model->TIUSUA_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'TIUSUA_ID',
		'TIUSUA_DESCRIPCION',
	),
)); ?>
