<?php
public class Utente extends Persona { 
/**
*Utente eredita variabili e metodi da Persona
*/
    
  String $username;
  String $password;
   
    public Utente() {
        $nome="";
        $cognome="";
		$indirizzo="";
		$telefono="";
        $username="";
		$password="";
    }
    
/**Metodi di impostazione username
*/
  public function addPassword($username) {
    array_push($this->$username);
  }    

/**Metodi di impostazione password
*/
  public function addPassword($password) {
    array_push($this->$password);
  }    
  
/** Metodi per il login dell'utente registrato
*/ 
    public Boolean CheckPassword(String $password) {         
      return $this->password($password);
  }   

    public Boolean CheckUsername(String $username) {         
      return $this->username($username);
  }



?>