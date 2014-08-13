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

<h1>EL REGISTRO DE USUARIOS HA SIDO COMPLETADO SATISFACTORIAMENTE </h1>

<h1>Datos del Usuario #<?php echo $model_usua->USUA_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model_usua,
	'attributes'=>array(
		//'USUA_FECHACAMBIO',
		//'USUA_REGISTRADOPOR',
		'USUA_USUARIO',
		TipoUsuario::model()->getnombre($model_usua->TIUSUA_ID),
		'USUA_ESTADO',
	),
)); ?>

<h1>Datos personales #<?php echo $model->PEGE_ID; ?></h1>
  		
<?php 
$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PEGE_NOMBRE',
		'TIDG_ID',
		'PEGE_DOCUMENTOIDENTIDAD',
		'PEGE_LUGAREXPEDICION',
		'PEGE_FECHAEXPEDICION',
		'PEGE_TELEFONO',
		'PEGE_TELEFONOCELULAR',
		'PEGE_MAIL',
		'PEGE_DIRECCION',
		Ciudad::model()->getnombre($model->CIGE_IDRESIDENCIA),
		Pais::model()->getnombre($model->PAGE_IDRESIDENCIA),
		'PEGE_FECHACAMBIO'
		),
)); ?>
