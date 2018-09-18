<?php

namespace TDD;

class Mazo {
  
  protected $cantidad;
  
  protected $cartas;
  
  public function __construct($array) {
        $this->cartas = $array;
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
