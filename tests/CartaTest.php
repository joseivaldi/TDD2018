<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class CartaTest extends TestCase {
   
    public function testCartaValida(){
        $unooro = new Carta("1","Oro", "Española");
        $this->assertTrue($unooro->esCarta());
    }
}