<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class MazoTest extends TestCase {

    /**
     * Valida que se puedan crear mazos de cartas.
     */
    public function testExiste() {
        $mazo = new Mazo("Poker");
        $mazo2 = new Mazo("No Existe");
        $this->assertTrue(isset($mazo));
        $this->assertFalse(isset($mazoQueNoExiste));
    }

    /**
     * Valida que el se pueda mezclar.
     */
    public function testMezclable() {
        $mazo = new Mazo("Poker");
        $this->assertFalse($mazo->mezclar());
        $aspicas = new Carta ("A","Picas","Poker");
        $mazo->nuevacarta($aspicas);
        $this->assertTrue($mazo->mezclar());
    }

    /**
     * Valida que se pueda conocer una carta buscando por posicion.
     */
    public function testObtenerCarta() {
        $mazo = new Mazo("Poker");
        $aspicas = new Carta ("A","Picas","Poker");
        $dospicas = new Carta ("2","Picas","Poker");
        $mazo->nuevacarta($aspicas);
        $mazo->nuevacarta($dospicas);
        $this->assertEquals($mazo->obtenerCarta(0),$aspicas);
        $this->assertNotEquals($mazo->obtenerCarta(0),$dospicas);
        $this->assertEquals($mazo->obtenerCarta(1),$dospicas);
        $this->assertNotEquals($mazo->obtenerCarta(1),$aspicas);
        $mazo2 = new Mazo("Española");
        $dosoro = new Carta ("2","Oro","Española");
        $tresoro = new Carta ("3","Oro","Española");
        $mazo2->nuevacarta($dosoro);
        $this->assertEquals($mazo2->obtenerCarta(0),$dosoro);
        $this->assertNotEquals($mazo2->obtenerCarta(0),$tresoro);
    }

    /**
     * Valida que el mazo se pueda cortar.
     */
    public function testCortar() {
        $mazo = new Mazo("Poker");
        $this->assertFalse($mazo->cortar());
        $aspicas = new Carta ("A","Picas","Poker");
        $mazo->nuevacarta($aspicas);
        $this->assertTrue($mazo->cortar());
    }
    
    /**
     * Valida que se obtenga bien la cantidad de cartas en el mazo.
     */
    public function testCantidadCartas() {
        $mazo = new Mazo("Poker");
        $aspicas = new Carta ("A","Picas","Poker");
        $this->assertEquals(0,$mazo->cantidad());
        $this->assertNotEquals(20,$mazo->cantidad());
        $mazo->nuevacarta($aspicas);
        $this->assertEquals(1,$mazo->cantidad());
        $this->assertNotEquals(20,$mazo->cantidad());
        $mazo2 = new Mazo ("Poker");
        $mazo2->nuevacarta($aspicas);
        $this->assertEquals(1,$mazo2->cantidad());
        $this->assertNotEquals(20,$mazo2->cantidad());
    }
    
    /**
     * Valida que se pueda agrergar una nueva carta al mazo.
     */
    public function testAgregarCarta() {
        $mazo = new Mazo("Poker");
        $mazo2 = new Mazo("Española");
        $aspicas = new Carta ("A","Picas","Poker");
        $this->assertTrue($mazo->nuevacarta($aspicas));
        $this->assertFalse($mazo2->nuevacarta($aspicas));
    }  
    
    /**
     * Valida que se pueda saber si el mazo tiene cartas o no.
     */
    public function testEsVacio() {
        $mazo = new Mazo("Poker");
        $this->assertTrue($mazo->esvacio());
        $aspicas = new Carta ("A","Picas","Poker");
        $mazo->nuevacarta($aspicas);
        $this->assertFalse($mazo->esvacio());
        $mazo2 = new Mazo("Poker");
        $mazo2->nuevacarta($aspicas);
        $this->assertFalse($mazo2->esvacio());
    }  
}
