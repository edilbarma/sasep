<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */
 /* @var $this PersonaController */
/* @var $model Persona */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - REGISTRO';
$this->breadcrumbs=array('Registro',);

?>

<h1>REGISTRO DE USUARIOS</h1>

<p>Por favor llene el siguiente formulario con sus datos personales:</p>

<div class="form">
	<?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'login-form',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
    )); ?>
        <p class="note"> LOS CAMPOS CON <span class="required">*</span> SON REQUERIDOS.</p>	
  
	<div class="row">
		<?php echo $form->labelEx($model,'PEGE_NOMBRE'); ?>
		<?php echo $form->textField($model,'PEGE_NOMBRE',array('size'=>30,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'PEGE_NOMBRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TIDG_ID'); ?>
		<?php echo $form->dropDownList($model,
										'TIDG_ID',
										chtml::listdata(TipoDocumento::model()->findall(),
														'TIDG_ID',
														'TIDG_DESCRIPCION'
														),
										array('prompt' => 'Seleccione un tipo de Documento')
									); 
								?>
		<?php echo $form->error($model,'TIDG_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PEGE_DOCUMENTOIDENTIDAD'); ?>
		<?php echo $form->textField($model,'PEGE_DOCUMENTOIDENTIDAD',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'PEGE_DOCUMENTOIDENTIDAD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PEGE_LUGAREXPEDICION'); ?>
		<?php //echo $form->textField($model,'PEGE_LUGAREXPEDICION',array('size'=>50,'maxlength'=>50)); ?>
        <?php echo $form->dropDownList($model,
										'PEGE_LUGAREXPEDICION',
										chtml::listdata(Ciudad::model()->findall(),
														'CIGE_ID',
														'CIGE_NOMBRE'
														),
										array('prompt' => 'Seleccione un Ciudad')
									); 
								?>
		<?php echo $form->error($model,'PEGE_LUGAREXPEDICION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PEGE_FECHAEXPEDICION'); ?>
        
        <?php 
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					'model'=>$model,
					'attribute'=>'PEGE_FECHAEXPEDICION',
					'value'=>$model->PEGE_FECHAEXPEDICION,
					'language' => 'es',
					'htmlOptions' => array('readonly'=>"readonly"),
					'options'=>array(
					'autoSize'=>true,
					'defaultDate'=>$model->PEGE_FECHAEXPEDICION,
					'dateFormat'=>'yy-mm-dd ',
					'buttonImage'=>Yii::app()->baseUrl.'/images/date.png',
					'buttonImageOnly'=>true,
					'buttonText'=>'PEGE_FECHAEXPEDICION',
					'selectOtherMonths'=>true,
					'showAnim'=>'slide',
					'showButtonPanel'=>true,
					'showOn'=>'button',
					'showOtherMonths'=>true,
					'changeMonth' => 'true',
					'changeYear' => 'true',
					'minDate'=>'date("Y-m-d")', //fecha minima
					'maxDate'=> "+20Y", //fecha maxima
					),
					)); 
		?>
		<?php //echo $form->textField($model,'PEGE_FECHAEXPEDICION'); ?>
		<?php echo $form->error($model,'PEGE_FECHAEXPEDICION'); ?>
	</div>
	
    <div class="row">
		<?php echo $form->labelEx($model,'PEGE_DIRECCION'); ?>
		<?php echo $form->textField($model,'PEGE_DIRECCION',array('size'=>20,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'PEGE_DIRECCION'); ?>
	</div>
 	
    <div class="row">
		<?php echo $form->labelEx($model,'CIGE_IDRESIDENCIA'); ?>
        <?php echo $form->dropDownList($model,
										'CIGE_IDRESIDENCIA',
										chtml::listdata(Ciudad::model()->findall(),
														'CIGE_ID',
														'CIGE_NOMBRE'
														),
										array('prompt' => 'Seleccione un Ciudad')
									); 
								?>
		<?php //echo $form->textField($model,'CIGE_IDRESIDENCIA'); ?>
		<?php echo $form->error($model,'CIGE_IDRESIDENCIA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PAGE_IDRESIDENCIA'); ?>
		<?php echo $form->dropDownList($model,
										'PAGE_IDRESIDENCIA',
										chtml::listdata(Pais::model()->findall(),
														'PAGE_ABREVIATURA',
														'PAGE_NOMBRE'
														),
										array('prompt' => 'Seleccione un Ciudad')
									); 
								?>
		<?php //echo $form->textField($model,'PAGE_IDRESIDENCIA',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'PAGE_IDRESIDENCIA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PEGE_MAIL'); ?>
		<?php echo $form->textField($model,'PEGE_MAIL',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'PEGE_MAIL'); ?>
	</div>
	
    <div class="row">
		<?php echo $form->labelEx($model,'PEGE_TELEFONO'); ?>
		<?php echo $form->textField($model,'PEGE_TELEFONO',array('size'=>20,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'PEGE_TELEFONO'); ?>
	</div>
	
    <div class="row">
		<?php echo $form->labelEx($model,'PEGE_TELEFONOCELULAR'); ?>
		<?php echo $form->textField($model,'PEGE_TELEFONOCELULAR',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'PEGE_TELEFONOCELULAR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PEGE_FECHACAMBIO');?>

		<?php 
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					'model'=>$model,
					'attribute'=>'PEGE_FECHACAMBIO',
					'value'=>$model->PEGE_FECHACAMBIO,
					'language' => 'es',
					'htmlOptions' => array('readonly'=>"readonly"),
					'options'=>array(
					'autoSize'=>true,
					'defaultDate'=>$model->PEGE_FECHACAMBIO,
					'dateFormat'=>'yy-mm-dd ',
					'buttonImage'=>Yii::app()->baseUrl.'/images/date.png',
					'buttonImageOnly'=>true,
					'buttonText'=>'',
					'selectOtherMonths'=>true,
					'showAnim'=>'slide',
					'showButtonPanel'=>true,
					'showOn'=>'button',
					'showOtherMonths'=>true,
					'changeMonth' => 'true',
					'changeYear' => 'true',
					'minDate'=>'date("Y-m-d")', //fecha minima
					'maxDate'=> "+20Y", //fecha maxima
					),
					)); 
		?>

		<?php //echo $form->textField($model,'PEGE_FECHACAMBIO'); ?>
		<?php echo $form->error($model,'PEGE_FECHACAMBIO'); ?>
	</div> 
    
   <div class="row">
		<?php echo $form->labelEx($model_usua,'USUA_USUARIO'); ?>
		<?php echo $form->textField($model_usua,'USUA_USUARIO',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model_usua,'USUA_USUARIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model_usua,'USUA_CLAVE'); ?>
		<?php echo $form->passwordField($model_usua,'USUA_CLAVE',
							array('size'=>30,'maxlength'=>30,'class'=>'input-medium', 'placeholder'=>'Digite su clave', 'prepend'=>'<i class="icon-lock"></i>')); ?>
		<?php echo $form->error($model_usua,'USUA_CLAVE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model_usua,'TIUSUA_ID'); ?>
         <?php echo $form->dropDownList($model_usua,
										'TIUSUA_ID',
										array(1=>'Aspirante',2=>'Empresa'),
										array('prompt' => 'Seleccione tipo de inscripción')
									); 
								?>
		<?php //echo $form->textField($model_usua,'TIUSUA_ID'); ?>
		<?php //echo $form->error($model_usua,'TIUSUA_ID'); ?>
	</div> 
    
	<div class="row">
		<?php //echo $form->labelEx($model,'USUA_FECHACAMBIO'); ?>
		<?php echo $form->hiddenField($model_usua,'USUA_FECHACAMBIO'); ?>
		<?php //echo $form->error($model_usua,'USUA_FECHACAMBIO'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'USUA_REGISTRADOPOR'); ?>
		<?php echo $form->hiddenField($model_usua,'USUA_REGISTRADOPOR',array('size'=>30,'maxlength'=>30)); ?>
		<?php //echo $form->error($model_usua,'USUA_REGISTRADOPOR'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'PEGE_ID'); ?>
		<?php echo $form->hiddenField($model_usua,'PEGE_ID'); ?>
		<?php //echo $form->error($model_usua,'PEGE_ID'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'USUA_ESTADO'); ?>
		<?php echo $form->hiddenField($model_usua,'USUA_ESTADO',array('size'=>1,'maxlength'=>1)); ?>
		<?php //echo $form->error($model_usua,'USUA_ESTADO'); ?>
	</div>

 
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>
