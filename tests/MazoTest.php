<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class MazoTest extends TestCase {

        /**
         * Valida que se puedan crear mazos de cartas.
         */
    public function testExiste() {
        $mazo = new Mazo("Poker");
        $mazo2 = new Mazo("No Existe");                             //Entro al caso donde no es ni un mazo de poker ni uno español
        $this->assertTrue(isset($mazo));                            //Pruebo que Mazo si existe
        $this->assertFalse(isset($mazoQueNoExiste));                //Pruebo que nunca cree mazoQueNoExiste
    }

        /**
         * Valida que el se pueda mezclar.
         */
    public function testMezclable() {
        $mazo = new Mazo("Poker");
        $this->assertFalse($mazo->mezclar());                       //Pruebo que un mazo sin cartas NO puede mezclarse
        $aspicas = new Carta ("A","Picas","Poker");
        $mazo->nuevacarta($aspicas);
        $this->assertTrue($mazo->mezclar());                        //Pruebo que un mazo con una carta SI puede mezclarse
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
        $this->assertEquals($mazo->obtenerCarta(0),$aspicas);       //La primera carta es el as de picas
        $this->assertNotEquals($mazo->obtenerCarta(0),$dospicas);   //La primera carta NO es el dos de picas
        $this->assertEquals($mazo->obtenerCarta(1),$dospicas);      //Misma prueba pero agregando otra carta
        $this->assertNotEquals($mazo->obtenerCarta(1),$aspicas);
        $mazo2 = new Mazo("Española");
        $dosoro = new Carta ("2","Oro","Española");
        $tresoro = new Carta ("3","Oro","Española");
        $mazo2->nuevacarta($dosoro);
        $this->assertEquals($mazo2->obtenerCarta(0),$dosoro);       //Misma prueba pero con españolas
        $this->assertNotEquals($mazo2->obtenerCarta(0),$tresoro);
    }

        /**
         * Valida que el mazo se pueda cortar.
         */
    public function testCortar() {
        $mazo = new Mazo("Poker");
        $this->assertFalse($mazo->cortar());                        //Pruebo que un mazo sin cartas NO puede cortarse
        $aspicas = new Carta ("A","Picas","Poker");
        $mazo->nuevacarta($aspicas);
        $this->assertTrue($mazo->cortar());                         //Pruebo que un mazo con una carta SI puede cortarse
    }
    
        /**
         * Valida que se obtenga bien la cantidad de cartas en el mazo.
         */ 
    public function testCantidadCartas() {
        $mazo = new Mazo("Poker");
        $aspicas = new Carta ("A","Picas","Poker");
        $this->assertEquals(0,$mazo->cantidad());                   //Pruebo que la cantidad de cartas es 0
        $this->assertNotEquals(20,$mazo->cantidad());               //Pruebo que la cantidad de cartas NO es, por ejemplo, 20
        $mazo->nuevacarta($aspicas);
        $this->assertEquals(1,$mazo->cantidad());                   //Pruebo que la cantidad de cartas ahora es 1
        $this->assertNotEquals(20,$mazo->cantidad());               //Pruebo que la cantidad de cartas NO es, por ejemplo, 20
        $mazo2 = new Mazo ("Poker");
        $mazo2->nuevacarta($aspicas);
        $this->assertEquals(1,$mazo2->cantidad());                  //Pruebo que el mazo tiene una sola carta
        $this->assertNotEquals(20,$mazo2->cantidad());              //Pruebo que la cantidad de cartas NO es, por ejemplo, 20
    }
    
        /**
         * Valida que se pueda agrergar una nueva carta al mazo.
         */
    public function testAgregarCarta() {
        $mazo = new Mazo("Poker");
        $mazo2 = new Mazo("Española");
        $aspicas = new Carta ("A","Picas","Poker");
        $this->assertTrue($mazo->nuevacarta($aspicas));             //Pruebo que SI puedo agregar una carta de Poker a un mazo de Poker
        $this->assertFalse($mazo2->nuevacarta($aspicas));           //Pruebo que NO puedo agregar una carta Española a un mazo de Poker
    }  
    
        /**
         * Valida que se pueda saber si el mazo tiene cartas o no.
         */
    public function testEsVacio() {
        $mazo = new Mazo("Poker");
        $this->assertTrue($mazo->esvacio());                        //Pruebo que el mazo esta vacio
        $aspicas = new Carta ("A","Picas","Poker");
        $mazo->nuevacarta($aspicas);
        $this->assertFalse($mazo->esvacio());                       //Pruebo que el mazo YA NO esta vacio
        $mazo2 = new Mazo("Poker");
        $mazo2->nuevacarta($aspicas);
        $this->assertFalse($mazo2->esvacio());                      //Pruebo que el mazo NO esta vacio
    }  
}
