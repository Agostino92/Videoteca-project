<?php

class EUser 
{
    /** il nome dell'utente */
    private $firstName;         
    /** il cognome dell'utente */
    private $lastName;          
    /** il luogo di nascita dell'utente */
    private $birthPlace;           
    /** la data di nascita dell'utente */
    private $birthDate;            
	   
     /** Costruisce un oggetto EUserInfo vuoto */
    function __construct()
    {
        parent::__construct();
        
        $this->firstName='';
        $this->lastName='';
        $this->birthPlace='';
        $this->birthDate='';
    }
      
	/** set nome dell'utente */
    function setFirstName (string $firstName)
    {
        $this->firstName = $firstName;
    }
    
    /** get nome dell'utente */
    function getFirstName () 
    {
        return $this->firstName;
    }
    
    /** set cognome dell'utente */
    function setLastName (string $lastname)
    {
        $this->lastName = $lastname;
    }
    
    /**get cognome dell'utente */
    function getLastName () 
    {
        return $this->lastName;
    }
    
    /**set luogo di nascita */
    function setBirthPlace (string $birthPlace)
    {
        $this->birthPlace = $birthPlace;
    }
    
    /**get luogo di nascita */
    function getBirthPlace () 
    {
        return $this->birthPlace;
    }
    
    /**set data di nascita */
    function setBirthDate (string $birthDate)
    {
        $this->birthDate = new DateTime($birthDate);
    }
	
	/**get data di nascita */
    function getBirthDate ()
    {
        return $this->birthDate;
    }
	
}

/* Ciaooooooo*/