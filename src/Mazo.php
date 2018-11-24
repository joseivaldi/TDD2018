<?php

namespace TDD;

class Mazo {
  
  protected $cantidad;
  
  protected $baraja;
  
  public function __construct($baraja){
    $this->cartas = $baraja;
    $this->cantidad=count($baraja);
  }
  
  public function mezclar() {
    return shuffle($this->cartas);
  }
  
  public function obtenerCarta($index) {
    return $this->cartas[$index];
  }
  
  public function cortar() {
    return TRUE;
  }
  
  public function cantidad() {
    return $this->cantidad;
  }
  
  public function nuevacarta($carta) {
    array_push($this->cartas,$carta);
    $this->cantidad=count($baraja);
    return TRUE;
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
