<?php
require_once('clsUsuario.php');

class clsUsuarioTest extends PHPUnit_Framework_TestCase {


  public function setUp() {
  	$this->Usuario = new clsUsuario();
  }


	/**
     * @dataProvider additionProvider
     */
  public function testGetNombre($id, $esperado) {
   $this->assertEquals($esperado,$this->Usuario->getnombre($id));
  }

public function additionProvider()
    {
        return array(
          array(1, 'admin'),
          array(2, 'randy'),
          array(10, 'edilverbm')
          
        );
    }


public function testGetNumUsuarios(){

$ini = $this->Usuario->getNumUsuarios();
$this->Usuario->insert();
$fin = $this->Usuario->getNumUsuarios();

$this->assertEquals($ini+1,$fin);

}

  public function tearDown() {
    unset($this->demo);
  }



}
