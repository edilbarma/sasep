<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}
	
	public function actionView($id)
	{
		//exit(var_dump($id));
		$model=Persona::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'Modelo persona no existe.');
		else {
			$model_usua=Usuario::model()->findByAttributes(array('PEGE_ID'=>$id));
			if($model_usua===null)
				throw new CHttpException(404,'Modelo Usuario no existe.');
			else			
				// renders the view file 		'protected/views/site/index.php'
			// using the default layout 'protected/views/layouts/main.php'
			$this->render('view',array(
				'model'=>$model, 'model_usua'=>$model_usua
			));
		}
	}
	
	public function actionRegistro()
	{	// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		
		$model = new Persona;
		$model_usua = new Usuario;
		//exit(var_dump($_POST));
		if(isset($_POST['Persona']))
		{
			$model->attributes=$_POST['Persona'];
			$model->PEGE_FECHACAMBIO=$_POST['Persona']['PEGE_FECHACAMBIO'];
			$model->PEGE_FECHAEXPEDICION=$_POST['Persona']['PEGE_FECHAEXPEDICION'];
			
			
			if($model->save())
				if(isset($_POST['Usuario']))
				{
					$model_usua->attributes=$_POST['Usuario'];
					$model_usua->TIUSUA_ID=$_POST['Usuario']['TIUSUA_ID'];
					$model_usua->PEGE_ID=$model->PEGE_ID;
					if($model_usua->save())
						$this->redirect(array('View','id'=>$model->PEGE_ID));
				}
		}
		
		$model_usua->USUA_FECHACAMBIO=date("Y-m-d");
		$model_usua->USUA_REGISTRADOPOR	='Usuario';	
		$model_usua->USUA_ESTADO='1';
		$this->render('Registro',array('model'=>$model, 'model_usua'=>$model_usua));
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;
		//exit(var_dump($_POST));
		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}