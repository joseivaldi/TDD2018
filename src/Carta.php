<?php

namespace TDD;

class Carta {
    protected $numcarta;
    protected $palo;
    protected $tip;

    public function __construct($numero, $pal, $tipo){
        $this->numcarta=$numero;
        $this->palo=$pal;
        $this->tip=$tipo;
    }

    public function esCarta($carta){
        if($carta->tip=="Poker"){
            if($carta->palo=="Diamantes"||$carta->palo=="Picas"||$carta->palo=="Corazones"||$carta->palo=="Treboles"){
                if($carta->numcarta=="A"||$carta->numcarta=="J"||$carta->numcarta=="Q"||$carta->numcarta=="K"||$carta->numcarta=="2"||$carta->numcarta=="3"||$carta->numcarta=="4"||$carta->numcarta=="5"||$carta->numcarta=="6"||$carta->numcarta=="7"||$carta->numcarta=="8"||$carta->numcarta=="9"||$carta->numcarta=="10"){
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
