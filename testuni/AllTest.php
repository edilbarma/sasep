<?php

//require_once 'PHPUnit/Framework.php';
//require_once 'PHPUnit/TextUI/TestRunner.php';
require_once 'clsUsuarioTest.php';

class AllTests {

  public static function main() {
    PHPUnit_TextUI_TestRunner::run(self::suite());
  }

  public static function suite() {
    $suite = new PHPUnit_Framework_TestSuite('YII Framework - YII');
    $suite->addTestSuite('clsUsuarioTest');
    return $suite;
  }

}