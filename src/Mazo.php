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
  
  public function getTop() {
    return TRUE;
  }
  
  public function cortar() {
    return TRUE;
  }
  
  public function cantidad() {
    return $this->cantidad;
  }
  
  public function nuevacarta() {
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
