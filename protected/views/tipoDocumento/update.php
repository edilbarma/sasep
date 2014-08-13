<?php
/* @var $this TipoDocumentoController */
/* @var $model TipoDocumento */

$this->breadcrumbs=array(
	'Tipo Documentos'=>array('index'),
	$model->TIDG_ID=>array('view','id'=>$model->TIDG_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipoDocumento', 'url'=>array('index')),
	array('label'=>'Create TipoDocumento', 'url'=>array('create')),
	array('label'=>'View TipoDocumento', 'url'=>array('view', 'id'=>$model->TIDG_ID)),
	array('label'=>'Manage TipoDocumento', 'url'=>array('admin')),
);
?>

<h1>Update TipoDocumento <?php echo $model->TIDG_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>