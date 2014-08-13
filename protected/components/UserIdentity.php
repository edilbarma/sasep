<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;
	const ERROR_EMAIL_INVALIDO=1;
	const ERROR_STATUS_SUSPENDIDO=2;
	const ERROR_STATUS_RETIRADO=3;
	
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		/*$users=array(
			// username => password
			'demo'=>'demo',
			'admin'=>'admin',
		);
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;*/
		
		$user=Usuario::model()->findByAttributes(array('USUA_USUARIO'=>$this->username));
		
		if($user===null)			
			$this->errorCode=self::ERROR_USERNAME_INVALID;		
        elseif(!$user->validatePassword($this->password)){
			$this->errorCode=self::ERROR_PASSWORD_INVALID;	
		}/*elseif($user->USES_ID===2)
			$this->errorCode=self::ERROR_STATUS_SUSPENDIDO;
		elseif($user->USES_ID===3)
			$this->errorCode=self::ERROR_STATUS_RETIRADO;*/
		else{
				
			$this->_id=$user->USUA_ID;
			$this->username=$user->USUA_USUARIO;
			$this->errorCode=self::ERROR_NONE;
		}
		return !$this->errorCode;
	
	}
	
	public function getId()
	{
		return $this->_id;
	}
}