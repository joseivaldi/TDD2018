<?php

namespace TDD;

class Mazo {
  
    protected $cantidad;
    protected $baraja;
    protected $tipo;

    public function __construct($tipo) {
    if ($tipo=="Poker"||$tipo=="Española") {
        $this->tipo=$tipo;
        $this->baraja=array();
        $this->cantidad=0;
    } else {
        return FALSE;
    }
    }
  
    public function mezclar() {
    if ($this->cantidad!=0) {  
        return shuffle($this->baraja);
    } else {
        return FALSE;
    }
    }
  
    public function obtenerCarta($index) {
    return $this->baraja[$index];
    }
  
    public function cortar() {
    if ($this->cantidad!=0) {
        $corte=rand(0, $this->cantidad);
        $der=array_slice($this->baraja, $corte);
        $izq=array_slice($this->baraja, 0, $corte-1);
        $this->baraja=array_merge($der, $izq);
    }else return FALSE;
    }
  
    public function cantidad() {
    return $this->cantidad;
    }
  
    public function nuevacarta($carta) {
    if ($carta->tip==$this->tipo) {
        array_push($this->baraja, $carta);
        $this->cantidad=count($this->baraja);
        return TRUE;
    } else {
        return FALSE;
    }
    }
  
    public function esvacio() {
    if ($this->cantidad==0) {
        return TRUE;
    } else {
        return FALSE;
    }
    }
}
