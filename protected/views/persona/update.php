<?php
/* @var $this PersonaController */
/* @var $model Persona */

$this->breadcrumbs=array(
	'Personas'=>array('index'),
	$model->PEGE_ID=>array('view','id'=>$model->PEGE_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Persona', 'url'=>array('index')),
	array('label'=>'Create Persona', 'url'=>array('create')),
	array('label'=>'View Persona', 'url'=>array('view', 'id'=>$model->PEGE_ID)),
	array('label'=>'Manage Persona', 'url'=>array('admin')),
);
?>

<h1>Update Persona <?php echo $model->PEGE_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>