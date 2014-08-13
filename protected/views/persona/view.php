<?php
/* @var $this PersonaController */
/* @var $model Persona */

$this->breadcrumbs=array(
	'Personas'=>array('index'),
	$model->PEGE_ID,
);

$this->menu=array(
	array('label'=>'List Persona', 'url'=>array('index')),
	array('label'=>'Create Persona', 'url'=>array('create')),
	array('label'=>'Update Persona', 'url'=>array('update', 'id'=>$model->PEGE_ID)),
	array('label'=>'Delete Persona', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PEGE_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Persona', 'url'=>array('admin')),
);
?>

<h1>View Persona #<?php echo $model->PEGE_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PEGE_ID',
		'CIGE_IDRESIDENCIA',
		'PEGE_DIRECCION',
		'PEGE_MAIL',
		'PEGE_TELEFONOCELULAR',
		'PEGE_FECHACAMBIO',
		'PEGE_TELEFONO',
		'PAGE_IDRESIDENCIA',
		'TIDG_ID',
		'PEGE_DOCUMENTOIDENTIDAD',
		'PEGE_LUGAREXPEDICION',
		'PEGE_FECHAEXPEDICION',
	),
)); ?>
