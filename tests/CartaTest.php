<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class CartaTest extends TestCase {
   
    public function testCartaValida(){
        $unooro=new Carta('1',"Oro", "Española");
        $dosdiamantes=new Carta('2',"Diamantes", "Poker");
        $this->assertTrue(esCarta($unooro));
        $this->assertFalse(esCarta($dosdiamantes));
    }
}