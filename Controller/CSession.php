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
        $_SESSION['IF_id'] =  $user->getId();
        $_SESSION['IF_name'] = $user->getNickName();
        $_SESSION['IF_type'] = lcfirst(substr(get_class($user), 1));
    }
    
    /*Restituisce l'utente della sessione corrispondente alla connessione che ha richiamato il metodo.
 	Se la sessione è effettivamente attiva, restituirà l'utente corrispondente, altrimenti restituirà un semplice utente guest.*/
	
    static function getUserFromSession() : EUser
    {
        session_start();
        
        if(isset($_SESSION['IF_id']))
        {
            $uType= 'E'.ucfirst($_SESSION['IF_type']); // determina la entity della tipologia di utente
            
            $user = new $uType();
            $user->setId($_SESSION['IF_id']);
            $user->setNickName($_SESSION['IF_name']);
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
        setcookie('IF_install', 'ok', time()+3600); //expires in 1h
    }
    
    static function checkPopulateApplication() : bool
    {
        if(isset($_COOKIE['IF_install']))
            return true;
        else
            return false;
    }
    
    static function unsetCookie() //rimuove il cookie
    {
        setcookie('IF_install', 'ok', time()-3600);
    }
}

