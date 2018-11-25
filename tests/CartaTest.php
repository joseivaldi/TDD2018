<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class CartaTest extends TestCase {
   
    public function testCartaValida(){
        $unooro = new Carta("1","Oro", "Española");
        $treceoro = new Carta("13","Oro", "Española");
        $noespañola = new Carta("1","NoEspañola", "Española");
        $nipokniesp = new Carta("1","NoEspañola", "Ni de Poker ni Española");
        $aspicas = new Carta("A","Picas", "Poker");
        $trecepicas = new Carta("13","Picas", "Poker");
        $nopoker = new Carta("1","NoPoker", "Poker");
        $this->assertTrue($unooro->esCarta());
        $this->assertFalse($treceoro->esCarta());
        $this->assertFalse($noespañola->esCarta());
        $this->assertFalse($nipokniesp->esCarta());
        $this->assertTrue($aspicas->esCarta());
        $this->assertFalse($trecepicas->esCarta());
        $this->assertFalse($nopoker->esCarta());
    }

    public function testVerNumero(){
        $unooro = new Carta("1","Oro", "Española");
        $this->assertEquals($unooro->verNumero(),"1");
        $this->assertNotEquals($unooro->verNumero(),"A");
    }

    public function testVerPalo(){
        $unooro = new Carta("1","Oro", "Española");
        $this->assertEquals($unooro->verPalo(),"Oro");
        $this->assertNotEquals($unooro->verPalo(),"Oro");
    }
}