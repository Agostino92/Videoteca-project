<?php

class Persona {
    public $nome;
    public $cognome;
	public $indirizzo;
    public $telefono;

/**Metodi di impostazione della classe Persona
*/
  public function addNome($nome) {
    array_push($this->$nome);
  }
  
  public function addCognome($cognome) {
    array_push($this->$cognome);
  }
  
  public function addIndirizzo($indirizzo) {
    array_push($this->$indirizzo);
  }
  
  public function addTelefono($telefono) {
    array_push($this->$telefono);
  }
  
/**
* Restituisce il nome della persona
*
* @access public
* @return string
*/
  public function getNome() {
    return ($this->nome);
  }

/**
* Restituisce il cognome della persona
*
* @access public
* @return string
*/
  public function getCognome() {
    return ($this->cognome);
  }
  
/**
* Restituisce l'indirizzo della persona
*
* @access public
* @return string
*/
  public function getIndirizzo() {
    return ($this->indirizzo);
  }
  
/**
* Restituisce il telefono della persona
*
* @access public
* @return string
*/
  public function getTelefono() {
    return ($this->telefono);
  }
?>
