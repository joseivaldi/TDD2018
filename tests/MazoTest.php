<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class MazoTest extends TestCase {

    /**
     * Valida que se puedan crear mazos de cartas.
     */
    public function testExiste() {
        $mazo = new Mazo();
        $this->assertTrue(isset($mazo));
    }

    public function testMezclable() {
        $mazo = new Mazo();
        $this->assertTrue($mazo->mezclar());
    }

    public function testObtenerCarta() {
        $mazo = new Mazo();
        $this->assertTrue($mazo->getTop());
    }

    public function testCortar() {
        $mazo = new Mazo();
        $this->assertTrue($mazo->cortar());
    }
    
    public function testCantidadCartas() {
        $mazo = new Mazo();
        $this->assertEquals(0,$mazo->cantidad());
    }
  
    public function testAgregarCarta() {
        $mazo = new Mazo();
        $this->assertTrue($mazo->nuevacarta());
    }  
    
    public function testEsVacio() {
        $mazo = new Mazo();
        $this->assertTrue($mazo->esvacio());
    }  
}
