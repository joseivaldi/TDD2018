<?php

namespace TDD;

class Carta {
    protected $numcarta;
    protected $palo;
    protected $tip;

    public function __construct($numero, $pal, $tipo){
        $this->$numcarta=$numero;
        $this->$palo=$pal;
        $this->$tip=$tipo;
    }

    public function esCarta($carta){
        if($carta->tip=="Poker"){
            if($carta->palo=="Diamantes"||$carta->palo=="Picas"||$carta->palo=="Corazones"||$carta->palo=="Treboles"){
                if($carta->numcarta=='A'||$carta->numcarta=='J'||$carta->numcarta=='Q'||$carta->numcarta=='K'||($carta->numcarta>1&&$carta->numcarta<11)){
                    return TRUE;
                }else return FALSE;
            }else return FALSE;
        }
        elseif($carta->tip=="Española"){
            if($carta->palo=="Oro"||$carta->palo=="Basto"||$carta->palo=="Espada"||$carta->palo=="Copa"){
                if($carta->numcarta>=1&&$carta->numcarta<=12){
                    return TRUE;
                }else return FALSE;
            }else return FALSE;
        }else return FALSE;
    }
}
