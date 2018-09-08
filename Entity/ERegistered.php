<?php

/** La classe ERegistered estende la classe padre EUser e implementa la tipologia di utente Registrato */

class ERegistered extends EUser
{
   /** il nickname dell'utente */
    protected $nickname; 
    /** la e-mail dell'utente */
    protected $email; 
    /** la password dell'utente */
    protected $password; 
	
    function __construct()
    {
        parent::__construct();
		$this->nickname='';
		$this->email='';
		$this->password='';
    }
   
   /**set nickname dell'utente */
    function setNickName (string $nickname)
    {
        $this->nickname = $nickname;
	}
	
	/**get nickname dell'utente */
    function getNickName () : string
    {
        return $this->nickname;
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
