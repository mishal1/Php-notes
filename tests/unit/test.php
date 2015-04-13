<?php

require 'vendor/autoload.php';
require 'lib/something.php';

class StupidTest extends PHPUnit_Framework_TestCase{
  public function testTrue(){
    $foo = true;
    $this->assertTrue($foo);
  }

  public function testClass(){
    $class = new Something();
    $checkIfClass = is_a($class, 'Something');
    $this->assertTrue($checkIfClass);
  }
}