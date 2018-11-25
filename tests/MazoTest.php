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

    /**
     * Valida que el mazo mezclado sea diferente al mazo sin mezclar.
     */
    public function testMezclable() {
        $mazo = new Mazo([]);
        $this->assertTrue($mazo->mezclar());
    }

    /**
     * Valida que se pueda conocer una carta buscando por posicion.
     */
    public function testObtenerCarta() {
        $mazo = new Mazo([0,10]);
        $this->assertEquals($mazo->obtenerCarta(0),0);
        $this->assertNotEquals($mazo->obtenerCarta(0),10);
        $this->assertEquals($mazo->obtenerCarta(1),10);
        $this->assertNotEquals($mazo->obtenerCarta(1),0);
        $mazo2 = new Mazo([]);
        $mazo2->nuevacarta(0);
        $this->assertEquals($mazo->obtenerCarta(0),0);
        $this->assertNotEquals($mazo->obtenerCarta(0),10);
    }

    /**
     * Valida que el mazo cortado sea diferente al mazo antes de cortar.
     */
    public function testCortar() {
        $mazo = new Mazo([]);
        $this->assertTrue($mazo->cortar());
    }
    
    /**
     * Valida que se obtenga bien la cantidad de cartas en el mazo.
     */
    public function testCantidadCartas() {
        $mazo = new Mazo([]);
        $this->assertEquals(0,$mazo->cantidad());
        $this->assertNotEquals(20,$mazo->cantidad());
        $mazo->nuevacarta(1);
        $this->assertEquals(1,$mazo->cantidad());
        $this->assertNotEquals(20,$mazo->cantidad());
        $mazo2 = new Mazo ([0]);
        $this->assertEquals(1,$mazo2->cantidad());
        $this->assertNotEquals(20,$mazo2->cantidad());
    }
    
    /**
     * Valida que se pueda agrergar una nueva carta al mazo.
     */
    public function testAgregarCarta() {
        $mazo = new Mazo([]);
        $this->assertTrue($mazo->nuevacarta(1));

    }  
    
    /**
     * Valida que se pueda saber si el mazo tiene cartas o no.
     */
    public function testEsVacio() {
        $mazo = new Mazo([]);
        $this->assertTrue($mazo->esvacio());
        $mazo->nuevacarta(1);
        $this->assertFalse($mazo->esvacio());
        $mazo2 = new Mazo([0]);
        $this->assertFalse($mazo2->esvacio());
    }  
}
