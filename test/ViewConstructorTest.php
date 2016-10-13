<?php
require_once '../class/ViewConstructor.php';

class ViewConstructorTest extends PHPUnit_Framework_TestCase{
    
    public function testTituloPadrão(){
        $constructor = ViewConstructor::getInstance();
        
        $titulo = "Corollarium";
        
        $this->assertEquals($titulo, $constructor->getPageTitle());
    }
}