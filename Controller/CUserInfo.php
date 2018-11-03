<?php

require_once 'req.php';

/**
 * La classe CUserInfo implementa la funzionalità 'Gestione Profilo': le sue funzioni infatti
 * presentano/ricevono una form in cui l'utente inserirà informazioni su di se, cioè:
 * - Nome e Cognome 
 * - Bio 
 * - Data di Nascita
 * - Luogo di Nascita
 *
 * @package Controller
 *
 */
class CUserInfo
{
    /**
     * A seconda del tipo di metodo richiesto dal client, verranno attivate funzioni diverse.
     * In particolare:
     * - register() salva su DB le informazioni inserite dall'utente.
     * - showUserInfoForm() mostra all'utente la form in cui inserire i dati.
     */
    static function editInfo()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            CUserInfo::register();
        }
        elseif ($_SERVER['REQUEST_METHOD'] == 'GET')
        {
            CUserInfo::showUserInfoForm();
        }
    }
    
    /**
     * La funzione Register permette di creare un nuovo oggetto user info e salvarlo sul DB.
     * 
     */
    private function register()
    {
        $vUserInfo = new VUserInfo();
        $loggedUser = CSession::getUserFromSession();
        
        if($vUserInfo->validateUserInfo($loggedUser))
        {		
			if(get_class($loggedUser)!=EGuest::class)
			{
				$loggedUserInfo = $vUserInfo->createUserInfo();
				$loggedUser->setUserInfo($loggedUserInfo);
				header('Location: /deepmusic/user/profile/'.$loggedUser->getId());
			}
		
			else
				$vUserInfo->showErrorPage($user, 'Sei un ospite! Che tipo di informazioni personali desideri modificare?');
		}
		else
		{
			if (!$vUserInfo->validateFname($loggedUser)) $vUserInfo->showUserInfoForm($loggedUser,true,NULL,NULL,NULL,NULL);
            else if (!$vUserInfo->validateLname($loggedUser)) $vUserInfo->showUserInfoForm($loggedUser,NULL,true,NULL,NULL,NULL);
			else if (!$vUserInfo->validateBplace($loggedUser)) $vUserInfo->showUserInfoForm($loggedUser,NULL,NULL,true,NULL,NULL);
			else if (!$vUserInfo->validateBdate($loggedUser)) $vUserInfo->showUserInfoForm($loggedUser,NULL,NULL,NULL,true,NULL);
			else if (!$vUserInfo->validateBio($loggedUser)) $vUserInfo->showUserInfoForm($loggedUser,NULL,NULL,NULL,NULL,true);
		}
    }
    
    /**
     * Mostra all'utente la form per la modifica delle informazioni. Se l'utente è Guest, verrà
     * reindirizzato ad un messaggio di errore.
     */
    private function showUserInfoForm()
    {
        $vUserInfo = new VUserInfo();
        $loggedUser = CSession::getUserFromSession();
        if(get_class($loggedUser)!=EGuest::class)
        {
            $vUserInfo->showUserInfoForm($loggedUser);
        }
        else 
            $vUserInfo->showErrorPage($loggedUser, 'Devi essere un utente della Videoteca per modificare le tue informazioni personali');
        
    }
    
}




?>