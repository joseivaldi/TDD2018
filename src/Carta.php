<?php

namespace TDD;

class Carta {
    public $numcarta;
    public $palo;
    public $tip;

    public function __construct($numero, $pal, $tipo){
        $this->numcarta=$numero;
        $this->palo=$pal;
        $this->tip=$tipo;
    }

    public function esCarta(){
        if($this->tip=="Poker"){
            if($this->palo=="Diamantes"||$this->palo=="Picas"||$this->palo=="Corazones"||$this->palo=="Treboles"){
                if($this->numcarta=="A"||$this->numcarta=="J"||$this->numcarta=="Q"||$this->numcarta=="K"||$this->numcarta=="2"||$this->numcarta=="3"||$this->numcarta=="4"||$this->numcarta=="5"||$this->numcarta=="6"||$this->numcarta=="7"||$this->numcarta=="8"||$this->numcarta=="9"||$this->numcarta=="10"){
                    return TRUE;
                }else return FALSE;
            }else return FALSE;
        }
        elseif($this->tip=="Española"){
            if($this->palo=="Oro"||$this->palo=="Basto"||$this->palo=="Espada"||$this->palo=="Copa"){
                if($this->numcarta>=1&&$this->numcarta<=12){
                    return TRUE;
                }else return FALSE;
            }else return FALSE;
        }else return FALSE;
    }

    public function verNumero(){
        return $this->numcarta;
    }

    public function verPalo(){
        return $this->palo;
    }
}
