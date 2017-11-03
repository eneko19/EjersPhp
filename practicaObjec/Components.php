<?php

class Component {
  protected $num_serie = "";
  protected $marca = "";
  protected $preu = "";
  protected $nom = "";

  function __construct($num_serie, $marca, $preu, $nom) {
    $this->num_serie = $num_serie;
    $this->marca = $marca;
    $this->preu = $preu;
    $this->nom = $nom;
  }
  function getNumSerie() {
    return $this->num_serie;
  }
  function setNumSerie($newNouNumSerie) {
    $this->num_serie = $nouNumSerie;
  }
  function getMarca() {
    return $this->marca;
  }
  function setMarca($nouName) {
    $this->marca = $NouMarca;
  }
  function getPreu() {
    return $this->preu;
  }
  function setPreu($nouPreu) {
    $this->preu = $nouPreu;
  }
  function getNom() {
    return $this->nom;
  }
  function setNom($nouNom) {
    $this->nom = $nouNom;
  }
  function describe_Component(){
    return $this->getNumSerie() . "," . $this->getMarca() . "," . $his->getPreu() .
    "," . $this->getNom();
   }

}

class Processador extends Component {
  protected $gen = "";
  protected $gh = "";
  protected $nucli = "";

  function __construct($num_serie, $marca, $preu, $nom, $generacio, $gh, $nucli) {
    $this->num_serie = $num_serie;
    $this->marca = $marca;
    $this->preu = $preu;
    $this->nom = $nom;
    $this->gen = $generacio;
    $this->gh = $gh;
    $this->$nucli = $nucli;
  }
  function getGen() {
    return $this->gen;
  }
  function setGen($nouGen) {
    $this->gen = $nouGen;
  }
function getGh() {
  return $this->gh;
  }
function setGh($nouGh) {
  $this->gh = $nouGh;
  }
function getNucli() {
  return $this->nucli;
  }
function setNucli($nouNucli) {
  $this->nucli = $nouNucli;
  }
  function describe_Procesador($processador){
    echo "Processador " . $processador->getMarca() . " " . $processador->getGen() . " " .
    $processador->getNom() . "," . $processador->getGh() . "Gh, " . $processador->getNucli() . " nuclis...";
   }

}
class Ram extends Component {
  protected $tipo = "":
  protected $capacidad = "";
  protected $velocidad = "";

  function __construct($num_serie, $marca, $preu, $nom, $tipo, $capacidad, $velocidad) {
    $this->num_serie = $num_serie;
    $this->marca = $marca;
    $this->preu = $preu;
    $this->nom = $nom;
    $this->tipo = $tipo;
    $this->capacidad = $capacidad;
    $this->velocidad = $velocidad;
  }
    function getTipo() {
      return $this->tipo;
  }
    function setTipo($nouTipo) {
      $this->tipo = $nouTipo;
  }
  function getCapacidad() {
    return $this->capacidad;
  }
  function setCapacidad($nouCapacidad) {
    $this->capacidad = $nouCapacidad;
  }
  function getVelocidad() {
    return $this->velocidad;
  }
  function setVelocidad($nouVelocidad) {
    $this->velocidad = $nouVelocidad;
  }
  function describe_Ram($ram){
    echo "Mòdul memòria RAM " . $ram.getNom() . " " . $ram->getTipo() . ", " . $ram->getCapacidad() . "GB, " .
    $ram->getVelocidad() . "Mhz ";
   }
}

class DiscDur extends Component {
  protected $capacidad = "";
  protected $velocidad = "";

  function __construct($num_serie, $marca, $preu, $nom, $capacidad, $velocidad) {
    $this->num_serie = $num_serie;
    $this->marca = $marca;
    $this->preu = $preu;
    $this->nom = $nom;
    $this->capacidad = $capacidad;
    $this->velocidad = $velocidad;
  }
  function getCapacidad() {
    return $this->capacidad;
  }
  function setCapacidad($nouCapacidad) {
    $this->capacidad = $nouCapacidad;
  }
  function getVelocidad() {
    return $this->velocidad;
  }
  function setVelocidad($nouVelocidad) {
    $this->velocidad = $nouVelocidad;
  }
  function describe_Ram($ram){
    echo "Mòdul memòria RAM " . $ram.getNom() . " " . $ram->getTipo() . ", " . $ram->getCapacidad() . "GB, " .
    $ram->getVelocidad() . "Mhz ";
   }
}
class PlacaBase extends Component {
  protected $socket = "";
  protected $chipset = "";

  function __construct($num_serie, $marca, $preu, $nom, $socket, $chipset ) {
    $this->num_serie = $num_serie;
    $this->marca = $marca;
    $this->socket = $socket;
    $this->chipset = $chipset;
  }

  function getSocket() {
    return $this->socket;
  }
  function setSocket($nouSocket){
    $this->socket = $nouSocket;
  }
  function getChipset() {
    return $this->chipset;
  }
  function setChipset($nouChipset){
    $this->chipset = $nouChipset;
  }

}





 ?>
