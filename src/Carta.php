<?php

namespace TDD;

class Carta {
    protected $num;
    protected $palo;
    protected $tip;

    public function __construct($numero, $pal, $tipo){
        $this->$num=$numero;
        $this->$palo=$pal;
        $this->$tip=$tipo;
    }

    public function esCarta($carta){
        if($carta->tip=="Poker"){
            if($carta->palo=="Diamantes"||$carta->palo=="Picas"||$carta->palo=="Corazones"||$carta->palo=="Treboles"){
                if($carta->num=='A'||$carta->num=='J'||$carta->num=='Q'||$carta->num=='K'||($carta->num>1&&$carta->num<11)){
                    return TRUE;
                }else return FALSE;
            }else return FALSE;
        }
        elseif($carta->tip=="Española"){
            if($carta->palo=="Oro"||$carta->palo=="Basto"||$carta->palo=="Espada"||$carta->palo=="Copa"){
                if($carta->num>=1&&$carta->num<=12){
                    return TRUE;
                }else return FALSE;
            }else return FALSE;
        }else return FALSE;
    }
}
