<?php
require_once 'inc.php';
include_once 'Entity/EObject.php';

/**
 * La classe EUserInfo e' pensata per contenere tutte le informazioni sull'utente che non 
 * sono necessarie in fase di autenticazione/registrazione/ricerca. Proprio per questo, estende
 * la classe EObject avendo come id lo stesso identificativo dell'utente a cui appartengono.
 * @author gruppo13
 * @package Entity
 */
class EUserInfo extends EObject
{
    /** il nome dell'utente */
    private $firstName;         
    /** il cognome dell'utente */
    private $lastName;          
    /** il luogo di nascita dell'utente */
    private $birthPlace;           
    /** la data di nascita dell'utente */
    private $birthDate;             
    /** la biografia dell'utente */
    private $bio;               
    /** il genere musicale dell'utente */
    private $genre;             
    
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
     * @param bool $showFormat imposta la data nel formato di visualizzazione
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
     * Controlla che i dati dell'oggetto siano validi. I valori booleani passati per riferimento
     * saranno true o false a seconda se il dato attributo sia valido o meno.
     * @param bool $fn controllo del primo nome
     * @param bool $ln controllo del cognome
     * @param bool $bp controllo del luogo di nascita
     * @param bool $bd controllo della data di nascita
    */
    function validate(bool &$fn, bool &$ln, bool &$bp, bool &$bd, bool $bio)
    {
        if (ctype_alpha($this->firstName)) 
        {
            strtolower($this->firstName);
            ucfirst($this->firstName);
            $fn=true;
        } else $fn = false;
        
        if (ctype_alpha($this->lastName)) 
        {
            strtolower($this->lastName);
            ucwords($this->lastName);
            $ln=true;
        } else $ln = false;
        
        if (ctype_alpha($this->birthPlace))
        {
            strtolower($this->birthPlace);
            ucwords($this->birthPlace);
            $bp=true;
        } else $bp = false;
        
        
        if(ctype_digit($this->birthDate))
        {
            date_format($this->birthDate, 'DD/MM/YYYY');
            if($this->birthDate <= mktime(0,0,0,1,1,2000))
            {
                $bd = true;
            } else $bd = false;
        } else $bd = false;
        
    }
    
    
}















