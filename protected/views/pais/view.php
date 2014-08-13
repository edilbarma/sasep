<?php
/* @var $this PaisController */
/* @var $model Pais */

$this->breadcrumbs=array(
	'Paises'=>array('index'),
	$model->PAGE_ID,
);

$this->menu=array(
	array('label'=>'List Pais', 'url'=>array('index')),
	array('label'=>'Create Pais', 'url'=>array('create')),
	array('label'=>'Update Pais', 'url'=>array('update', 'id'=>$model->PAGE_ID)),
	array('label'=>'Delete Pais', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PAGE_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pais', 'url'=>array('admin')),
);
?>

<h1>View Pais #<?php echo $model->PAGE_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PAGE_ID',
		'PAGE_NOMBRE',
		'PAGE_REGISTRADOPOR',
		'PAGE_FECHACAMBIO',
		'PAGE_CODIGODANE',
	),
)); ?>
