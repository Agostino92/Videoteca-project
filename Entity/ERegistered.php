<?php
require_once 'req.php';
include_once 'Entity/EObject.php';

/** La classe ERegistered estende la classe padre EUser e implementa la tipologia di utente Registrato */

class ERegistered extends EUser
{
   /** l'username dell'utente */
    protected $username; 
    /** la e-mail dell'utente */
    protected $email; 
    /** la password dell'utente */
    protected $password; 
	
    function __construct($username, $email, $password)
    {
        $this->username='';
		$this->email='';
		$this->password='';
    }
   
   /**set username dell'utente */
    function setUsername (string $username)
    {
        $this->username = $username;
	}
	
	/**get username dell'utente */
    function getUsername () : string
    {
        return $this->username;
    }
    	
    /**set mail dell'utente */
    function setEmail (string $email)
    {
        $this->email = $email;
    }
	
    /**get mail dell'utente */
    function getEmail () : string
    {
        return $this->email;
    }
    
    /**set password dell'utente */
    function setPassword (string $password)
    {
        $this->password = $password;
    }
	
	/**get paswword dell'utente */
    function getPassword () : string
    {
        return $this->password;
    }
    
    /** Metodo che verifica se l'email sia corretta */
    function validateEmail() : bool
    {
        if($this->email && filter_var($this->email, FILTER_VALIDATE_EMAIL))
        {
            return true;
        }
        else
            return false;
    }
    
    /** Metodo che verifica se la password sia corretta */
    function validatePassword() : bool
    {
        if($this->password && preg_match('/^[[:alnum:]]{6,20}$/', $this->password)) // solo numeri-lettere da 6 a 20
        {
            return true;
        }
        else
            return false;
    }
}
