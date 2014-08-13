<?php
/* @var $this TipoDocumentoController */
/* @var $model TipoDocumento */

$this->breadcrumbs=array(
	'Tipo Documentos'=>array('index'),
	$model->TIDG_ID,
);

$this->menu=array(
	array('label'=>'List TipoDocumento', 'url'=>array('index')),
	array('label'=>'Create TipoDocumento', 'url'=>array('create')),
	array('label'=>'Update TipoDocumento', 'url'=>array('update', 'id'=>$model->TIDG_ID)),
	array('label'=>'Delete TipoDocumento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->TIDG_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoDocumento', 'url'=>array('admin')),
);
?>

<h1>View TipoDocumento #<?php echo $model->TIDG_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'TIDG_ID',
		'TIDG_DESCRIPCION',
		'TIDG_REGISTRADOPOR',
		'TIDG_FECHACAMBIO',
		'TIDG_ABREVIATURA',
	),
)); ?>
