<?php

namespace TDD;

class Mazo {
  
  protected $cantidad;
  
  protected $baraja;
  
  public function __construct($baraja){
    $this->baraja = $baraja;
    $this->cantidad=count($cartas);
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
    array_push($this->baraja,$carta);
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
