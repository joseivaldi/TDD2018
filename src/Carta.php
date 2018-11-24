<?php

namespace TDD;

class Carta {
    protected $numero;
    protected $palo;
    protected $pokeroespañol;

    public function __construct($num, $pal, $tipo){
        if($tipo=="Poker"){
            if($pal=="Diamantes"||$pal=="Picas"||$pal=="Corazones"||$pal=="Treboles"){
                if($num=='A'||$num=='J'||$num=='Q'||$num=='K'||($num>1&&$num<11)){
                    $this->numero=$num;
                    $this->palo=$pal;
                    $this->pokeroespañol=$tipo;
                }else return FALSE
            }else return FALSE
        }
        elseif($tipo=="Española"){
            if($pal=="Oro"||$pal=="Basto"||$pal=="Espada"||$pal=="Copa"){
                if($num>=1&&$num<=12){
                    $this->numero=$num;
                    $this->palo=$pal;
                    $this->pokeroespañol=$tipo;
                }else return FALSE
            }else return FALSE
        }else return FALSE
    }


    
}
