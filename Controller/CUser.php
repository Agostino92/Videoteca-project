<?php

require_once 'req.php';

/*La classe CUser permettone la creazione, autenticazione e visualizzazione di un profilo di un utente.*/
class CUser
{
    /*Metodo che implementa il caso d'uso di login. 
	GET fornisce la pagina di login, POST cerca di autenticare l'utente attraverso i valori che quest'ultimo ha fornito*/
    static function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') 
        { 
            $vUser = new VUser();
            $user = CSession::getUserFromSession();
            if(get_class($user)!=EGuest::class) // se l'utente non è guest, non puo accedere al login
            {
                $vUser->showErrorPage($user, 'Cosa stai cercando di fare? Hai già effettuato il login!');
            }
            else
                $vUser->showLogin();
        }
        else if ($_SERVER['REQUEST_METHOD'] == 'POST')
            CUser::authentication();
        else
            header('Location: HTTP/1.1 Invalid HTTP method detected');
    }

    /*Metodo che implementa il caso d'uso di registrazione. 
    GET mostra la form di compilazione, POST riceve i dati forniti dall'utente e procede con la creazione di un nuovo utente.*/
    static function signup()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') 
        { 
            $vUser = new VUser();
            $user = CSession::getUserFromSession();
            if (get_class($user)!=EGuest::class) // se l'utente non è guest, non puo accedere al login
                $vUser->showErrorPage($user, 'Cosa stai cercando di fare? Hai già effettuato il login!');
            else
                $vUser->showSignUp();
        }
        else if ($_SERVER['REQUEST_METHOD'] == 'POST')
            CUser::register();
        else
            header('Location: Invalid HTTP method detected');
    }
    
    /*Effettua il logout.*/
    static function logout()
    {
        CSession::destroySession();
        header('Location: /videoteca-project/home');
    }
              
    /**
     * La funzione Register permette di creare un nuovo utente
     * ammesso che non vi siano presenti utenti con stessa mail o nome utente inseriti nella form
     */
    private function register()
    {
        $vUser = new VUser();
        $loggedUser = $vUser->createUser(); // viene creato un utente con i parametri della form
        
        if($vUser->validateSignUp($loggedUser))
        {
            if(!FPersistantManager::getInstance()->exists(EUser::class, $loggedUser->getUsername())
                && !FPersistantManager::getInstance()->exists(EUser::class, $loggedUser->getEmail()))
            {
                // se il nickname e la mail non sono stati ancora usati, si puo salvare l'utente
                
                $loggedUser->hashPassword(); // cripta la password
                
                FPersistantManager::getInstance()->store($loggedUser); // salva l'utente
                
                CSession::startSession($loggedUser);
                
                              
                $loggedUser->setUser();
                        
                header('Location: /videoteca-project/User');
            }
            else
                $vUser->showSignUp(true);
        }
        else
            $vUser->showSignUp();
    }
}

