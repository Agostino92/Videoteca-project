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
            if(!FPersistantManager::getInstance()->exists(EUser::class,FTarget::EXISTS_NICKNAME, $loggedUser->getNickname())
                && !FPersistantManager::getInstance()->exists(EUser::class,FTarget::EXISTS_MAIL, $loggedUser->getMail()))
            {
                // se il nickname e la mail non sono stati ancora usati, si puo salvare l'utente
                
                $loggedUser->hashPassword(); // cripta la password
                
                FPersistantManager::getInstance()->store($loggedUser); // salva l'utente
                
                CSession::startSession($loggedUser);
                
                              
                $loggedUser->setUserInfo();
                        
                header('Location: /videoteca-project/userInfo/editInfo/');
            }
            else
			{
			 if (FPersistantManager::getInstance()->exists(EUser::class, FTarget::EXISTS_NICKNAME, $loggedUser->getNickName())) $vUser->showSignUp(true,NULL,NULL,NULL,NULL);
			 if (FPersistantManager::getInstance()->exists(EUser::class, FTarget::EXISTS_MAIL, $loggedUser->getMail())) $vUser->showSignUp(NULL,true,NULL,NULL,NULL);
		    }
        }
        else
		{
			if (!$vUser->validateNick($loggedUser)) $vUser->showSignUp(NULL,NULL,true,NULL,NULL);
            else if (!$vUser->validatePwd($loggedUser)) $vUser->showSignUp(NULL,NULL,NULL,true,NULL);
			else if (!$vUser->validateEmail($loggedUser)) $vUser->showSignUp(NULL,NULL,NULL,NULL,true);
		}
    }
	
	/*La funzione Authentication verifica che le credenziali di accesso inserite da un utente siano corrette: in tal caso, 
	l'applicazione lo riporterà verso la sua pagina, altrimenti restituirà la schermata di login, con un messaggio di errore*/
    private function authentication()
    {
        $vUser = new VUser();
        $loggedUser = $vUser->createUser();
        
        //if($vUser->validateLogin($loggedUser))
        //{
            $authenticated = false; // bool per l'autenticazione
            
            $userId = FPersistantManager::getInstance()->exists(EUser::class, FTarget::EXISTS_NICKNAME, $loggedUser->getNickName()); // verifica che l'utente inserito matchi nel db
			
            if($userId) // se e' stato prelevato un id...
            {             
                $loggedUser->setId($userId); // viene assegnato all'utente l'user id
				
				$file = fopen('utente.php', 'w');       // TESTING utente creato
				fwrite($file,$loggedUser);
				//fwrite($file,print_r($resources, TRUE));
				fclose($file);  
                
                if($loggedUser->checkPassword()) // se la password e' corretta
                {
                    unset($loggedUser); // istanza utilizzata per il login viene rimossa
                    $user = FPersistantManager::getInstance()->load(EUser::class, $userId); // viene caricato l'utente
                    
                    $authenticated = true; // l'utente e' autenticato
                    
                    CSession::startSession($user);
                    
                    header('Location: /Videoteca-project/index');
                }
            }
            
            if(!$authenticated)
                $vUser->showLogin(true);
                
       // }
        //else
         //   $vUser->showLogin();
    }
}

