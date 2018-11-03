<?php
require_once 'req.php';
include_once 'Entity/EObject.php';

//questa classe è fatta per contenere tutte le 
//informazioni dell'utente che non sono necessarie o cruciali
/**
 * La classe EUserInfo e' pensata per contenere tutte le informazioni sull'utente che non 
 * sono necessarie in fase di autenticazione/registrazione/ricerca. Proprio per questo, estende
 * la classe EObject avendo come id lo stesso identificativo dell'utente a cui appartengono.
 * @author gruppo2
 * @package Entity
 */
class EUserInfo extends EObject
{
    /** il nome dell'utente */
    private $firstName;         //the first name of the user
    /** il cognome dell'utente */
    private $lastName;          //the last name of the user
    /** il luogo di nascita dell'utente */
    private $birthPlace;        //the birth place of the user    
    /** la data di nascita dell'utente */
    private $birthDate;         //the birth date of the user    
    /** la biografia dell'utente */
    private $bio;               //a self made introduction of the user himself
    
    
    /**
     * Costruisce un oggetto EUserInfo vuoto.
     */
    function __construct()
    {
        parent::__construct();
        
        $this->firstName='';
        $this->lastName='';
        $this->birthPlace='';
        $this->birthDate='';
        $this->bio='';
        
    }
    
    
    
    /**
     * 
     * @param string $firstName il nome dell'utente
     */
    function setFirstName (string $firstName)
    {
        $this->firstName = $firstName;
    }
    
    /**
     * 
     * @return string il nome dell'utente
     */
    function getFirstName () 
    {
        return $this->firstName;
    }
    
    /**
     * 
     * @param string $lastname il cognome dell'utente
     */
    function setLastName (string $lastname)
    {
        $this->lastName = $lastname;
    }
    
    /**
     * 
     * @return string il cognome dell'utente
     */
    function getLastName () 
    {
        return $this->lastName;
    }
    
    /**
     * 
     * @param string $birthPlace il luogo di nascita
     */
    function setBirthPlace (string $birthPlace)
    {
        $this->birthPlace = $birthPlace;
    }
    
    /**
     * 
     * @return string il luogo di nascita
     */
    function getBirthPlace () 
    {
        return $this->birthPlace;
    }
    
    /**
     * 
     * @param string $birthDate la data di nascita
     */
    function setBirthDate (string $birthDate)
    {
        $this->birthDate = new DateTime($birthDate);
    }
    
    /**
     * Restituisce la data di nascita dell'utente
     * @param bool $showFormat (opzionale) imposta la data nel formato di visualizzazione
     * @return string contenente la data in formato y-m-d (m/d/y se il campo bool e' true) e' specificata | NULL altrimenti
     */
    function getBirthDate (bool $showFormat = null)
    {
        if($this->birthDate)
        {
            $format = "y-m-d";
            if($showFormat)
               $format = "m/d/y";
                
            return $this->birthDate->format($format);
        }
        else 
            return NULL;
    }
    
    /**
     * 
     * @param string $bio la biografia dell'utente
     */
    function setBio(string $bio)
    {
        $this->bio = $bio;
    }
    
    /**
     * 
     * @return string la biografia dell'utente
     */
    function getBio() 
    {
        return $this->bio;
    }
    
    
      
    /**
     * Controlla che i dati dell'oggetto siano validi. I valori booleani passati per riferimento
     * saranno true o false a seconda se il dato attributo sia valido o meno.
     * @param bool $fn controllo del primo nome
     * @param bool $ln controllo del cognome
     * @param bool $bp controllo del luogo di nascita
     * @param bool $bd controllo della data di nascita
     * @param bool $bio controllo della biografia
     */
    function validate(bool &$fn, bool &$ln, bool &$bp, bool &$bd, bool $bio)
    {
        if (preg_match('~(?=^.{2,20}$)^[a-zA-Z]+([ ]?[a-zA-Z]+)*$~', $this->firstName)) 
        {
            strtolower($this->firstName);
            ucfirst($this->firstName);
            $fn=true;
        } else $fn = false;
        
        if (preg_match('~(?=^.{2,20}$)^[a-zA-Z]+([ ]?[a-zA-Z]+)*$~', $this->lastName)) 
        {
            strtolower($this->lastName);
            ucwords($this->lastName);
            $ln=true;
        } else $ln = false;
        
        if (preg_match('~(?=^.{6,25}$)^[a-zA-Z]+([._ -]?[a-zA-Z]+)*([._ -][0-9]{1,3}?)?$~', $this->birthPlace))
        {
            strtolower($this->birthPlace);
            ucwords($this->birthPlace);
            $bp=true;
        } else $bp = false;
        
        
        if(preg_match("~^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19\d\d|200[1-9])$~", $this->birthDate))
            $bd = true;
		else 
			$bd = false;
        
        if (preg_match("~^.{4,140}$~", $this->bio)) // biografia tra 4 e 140 caratteri
            $bio = true;
        else 
            $bio = false;
    }
	
	function ValidateFirstname () : bool 
	{
		if(preg_match('~(?=^.{2,20}$)^[a-zA-Z]+([ ]?[a-zA-Z]+)*$~', $this->firstName)) return true;
			else return false;
	}
  	function ValidateLastname () : bool 
	{
		if(preg_match('~(?=^.{2,20}$)^[a-zA-Z]+([ ]?[a-zA-Z]+)*$~', $this->lastName)) return true;
			else return false;
	}
	function ValidateBirthplace () : bool 
	{
		if(preg_match('~(?=^.{6,25}$)^[a-zA-Z]+([._ -]?[a-zA-Z]+)*([._ -][0-9]{1,3}?)?$~', $this->birthPlace)) return true;
			else return false;
	}
	function ValidateBirthdate () : bool 
	{
		if(preg_match("~^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19\d\d|200[1-9])$~", $this->birthDate)) return true;
			else return false;
	}
	function ValidateBio () : bool 
	{
		if(preg_match("~^.{4,140}$~", $this->bio)) return true;
			else return false;
	}
  
    
}















