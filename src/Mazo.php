<?php

namespace TDD;

class Mazo {
  
  protected $cantidad;
  protected $baraja;
  protected $tipo;
  
  public function __construct($tipo){
    if($tipo=="Poker"||$tipo=="Española"){
      $this->tipo = $tipo;
      $this->cantidad=0;
    }else return FALSE;
  }
  
  public function mezclar() {
    return shuffle($this->baraja);
  }
  
  public function obtenerCarta($index) {
    return $this->baraja[$index];
  }
  
  public function cortar() {
    return TRUE;
  }
  
  public function cantidad() {
    return $this->cantidad;
  }
  
  public function nuevacarta($carta) {
    if($carta->tip==$this->tipo){
      array_push($this->baraja,$carta);
      $this->cantidad=count($this->baraja);
      return TRUE;
    }else return FALSE;
  }
  
  public function esvacio() {
    if($this->cantidad==0){
      return TRUE;
    }
    else{
      return FALSE;
    }
  }
}
