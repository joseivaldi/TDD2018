<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class CartaTest extends TestCase {
   
    public function testCartaValida(){
        $unooro=new Carta('1',"Oro", "Española");
        $unodiamantes=new Carta('1',"Diamantes", "Poker");
        $this->assertTrue(esCarta($unooro));
        $this->assertFalse(esCarta($unodiamantes));
    }
}