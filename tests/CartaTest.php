<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class CartaTest extends TestCase {
   
    public function testCartaValida(){
        $unooro = new Carta("1","Oro", "Española");
        $this->assertTrue($unooro->esCarta());                                  //El uno de oro SI es una carta española
        $treceoro = new Carta("13","Oro", "Española");
        $this->assertFalse($treceoro->esCarta());                               //El trece de oro NO es una carta española
        $noespañola = new Carta("1","Diamantes", "Española");
        $this->assertFalse($noespañola->esCarta());                             //Diamantes no es un mazo de la baraja española
        $nipokniesp = new Carta("1","NoEspañola", "Ni Poker ni Española");
        $this->assertFalse($nipokniesp->esCarta());                             //"Ni Poker ni Española" no es un tipo de mazo
        $aspicas = new Carta("A","Picas", "Poker");
        $this->assertTrue($aspicas->esCarta());                                 //El as de picas SI es una carta de Poker
        $trecepicas = new Carta("13","Picas", "Poker");
        $this->assertFalse($trecepicas->esCarta());                             //El trece de picas NO es una carta de Poker
        $nopoker = new Carta("1","Oro", "Poker");
        $this->assertFalse($nopoker->esCarta());                                //Oro no es un mazo de la baraja de Poker
    }

    public function testVerNumero(){
        $unooro = new Carta("1","Oro", "Española");
        $this->assertEquals($unooro->verNumero(),"1");                          //El numero de la carta "Uno de Oro" es el 1
        $this->assertNotEquals($unooro->verNumero(),"2");                       //El numero de la carta "Uno de Oro" NO es el 2
    }

    public function testVerPalo(){
        $unooro = new Carta("1","Oro", "Española");
        $this->assertEquals($unooro->verPalo(),"Oro");                          //El palo de la carta "Uno de Oro" es el oro
        $this->assertNotEquals($unooro->verPalo(),"Trebol");                    //El palo de la carta "Uno de Oro" NO es Treboles
    }
}