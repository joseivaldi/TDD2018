<?php

namespace TDD;

class Carta {
    public $numcarta;
    public $palo;
    public $tip;
    public $valoresP;
    public $valoresE;
    public $palosP;
    public $palosE;

    public function __construct($numero, $pal, $tipo) {
        $this->numcarta=$numero;
        $this->palo=$pal;
        $this->tip=$tipo;
        $this->valoresP=["A", "J", "Q", "K", "2", "3", "4", "5", "6", "7", "8", "9", "10"];
        $this->valoresE=["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12"];
        $this->palosP=["Picas", "Treboles", "Diamantes", "Corazones"];
        $this->palosE=["Oro", "Copa", "Espada", "Basto"];
    }

    public function esCarta() {
        if ($this->tip=="Poker") {
            if (in_array($this->palo, $this->palosP)&&in_array($this->numcarta, $this->valoresP)) {
                
                    return TRUE;
               
            } else {
                return FALSE;
            }
        } elseif ($this->tip=="Española") {
            if (in_array($this->palo, $this->palosE)&&in_array($this->numcarta, $this->valoresE)) {
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

    public function verNumero() {
        return $this->numcarta;
    }

    public function verPalo() {
        return $this->palo;
    }
}
