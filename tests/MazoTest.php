<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class MazoTest extends TestCase {

    /**
     * Valida que se puedan crear mazos de cartas.
     */
    public function testExiste() {
        $mazo = new Mazo([]);
        $this->assertTrue(isset($mazo));
        $this->assertFalse(isset($mazoQueNoExiste));
    }

    public function testMezclable() {
        $mazo = new Mazo([]);

        $this->assertTrue($mazo->mezclar());
    }

    public function testObtenerCarta() {
        $mazo = new Mazo([0,10]);
        $this->assertEquals($mazo->testObtenerCarta(0),0);
        $this->assertEquals($mazo->testObtenerCarta(1),10);
    }

    public function testCortar() {
        $mazo = new Mazo([]);
        $this->assertTrue($mazo->cortar());
    }
    
    public function testCantidadCartas() {
        $mazo = new Mazo([]);
        $this->assertEquals(0,$mazo->cantidad());
        $this->assertNotEquals(20,$mazo->cantidad());
        $mazo2 = new Mazo ([0]);
        $this->assertEquals(1,$mazo->cantidad());
        $this->assertNotEquals(20,$mazo->cantidad());
    }
  
    public function testAgregarCarta() {
        $mazo = new Mazo([]);
        $this->assertTrue($mazo->nuevacarta());
    }  
    
    public function testEsVacio() {
        $mazo = new Mazo([]);
        $this->assertTrue($mazo->esvacio());
        $mazo2 = new Mazo([0]);
        $this->assertFalse($mazo2->esvacio());
    }  
}
