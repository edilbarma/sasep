<?php
class UsuarioTest extends CTestCase
{

public function testGetUserName(){
	$model = new Usuario();
	$usernameEsperado="edilverbm";

 	$this->assertEquals($usernameEsperado,$model->getnombre("10"));


}
	
}

?>