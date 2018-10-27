<?php
require_once 'req.php';

/*La classe CSession regola la sessione dell'utente nella navigazione dell'applicazione.
 * Le sue funzionalità permettono di iniziare, terminare e riprendere una sessione di un utente*/
class CSession
{
    /*Funzione che da inizio alla sessione.*/
	 
    static function startSession(EUser &$user)
    {
        session_start();
        // i suoi dati sono memorizzati all'interno della sessione
        $_SESSION['id'] =  $user->getId();
        $_SESSION['username'] = $user->getUsername();
        $_SESSION['type'] = lcfirst(substr(get_class($user), 1));
    }
    
    /*Restituisce l'utente della sessione corrispondente alla connessione che ha richiamato il metodo.
 	Se la sessione è effettivamente attiva, restituirà l'utente corrispondente, altrimenti restituirà un semplice utente guest.*/
	
    static function getUserFromSession() : EUser
    {
        session_start();
        
        if(isset($_SESSION['id']))
        {
            $uType= 'E'.ucfirst($_SESSION['type']); // determina la entity della tipologia di utente
            
            $user = new $uType();
            $user->setId($_SESSION['id']);
            $user->setUsername($_SESSION['username']);
        }
        else
        {
            $user = new EGuest();
        }
        return $user;
        
    }
    
    /*Termina una sessione.*/
	
    static function destroySession()
    {
        session_start(); // recupera i parametri di sessione
        
        session_unset(); // rimuove le variabili di sessione
        
        session_destroy(); // distrugge la sessione
    }
    
    static function populateApplication()
    {
        setcookie('install', 'ok', time()+3600); //expires in 1h
    }
    
    static function checkPopulateApplication() : bool
    {
        if(isset($_COOKIE['install']))
            return true;
        else
            return false;
    }
    
    static function unsetCookie() //rimuove il cookie
    {
        setcookie('install', 'ok', time()-3600);
    }
}

