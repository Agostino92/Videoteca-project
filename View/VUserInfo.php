<?php

require_once 'req.php';
include_once 'View/VObject.php';

/*
 * 
 * @package View
 */
 
 
class VUserInfo extends VObject
{
    /**
     * 
     */
    function __construct()
    {
        parent::__construct();
        
        $this->check = array(
            'firstName' => true,
            'lastName' => true,
            'birthPlace' => true,
            'birthDate' => true,
            'bio' => true,
        );
    }
    
    /**
     * Funzione con lo scopo di creare le informazioni dell'utente con i valori prelevati da una form
     * @return EUserInfo ottenuta dai campi della form
     */
    function createUserInfo() : EUserInfo
    {
        $userInfo = new EUserInfo();
        
        if(isset($_POST['firstName']))
            $userInfo->setFirstName($_POST['firstName']);
        if(isset($_POST['lastName']))
            $userInfo->setLastName($_POST['lastName']);
        if(isset($_POST['birthPlace']))
            $userInfo->setBirthPlace($_POST['birthPlace']);
        if(isset($_POST['birthDate']))
            $userInfo->setBirthDate($_POST['birthDate']);
        if(isset($_POST['bio']))
            $userInfo->setBio($_POST['bio']);
        if(isset($_POST['genre']))
            $userInfo->setGenre($_POST['genre']);
    
        return $userInfo;
    }
    
    
    /**
     * Controlla se l'oggetto EUserInfo sia valido
     * @param EUserInfo $eui di norma e' un oggetto ottenuto dal metodo createUserInfo()
     * @return true se l'oggetto e' valido, false altrimenti
     */
    function validateUserInfo(EUserInfo &$eui) : bool
    {
        $eui->validate($this->check['firstName'], $this->check['lastName'], $this->check['birthPlace'], $this->check['birthDate'], $this->check['bio']);
        
        if($this->check['firstName'] && $this->check['lastName'] && $this->check['birthPlace'] && $this->check['birthDate'])
            return true;
        else 
            return false;
    }
    
    
    
    /**
     * Mostra la form di modifica delle info utente
     *
     * @param bool $error
     *            facoltativo se presente un errore
     */
    function showUserInfoForm(EUser &$user, bool $error1 = NULL, bool $error2 = NULL, bool $error3 = NULL, bool $error4 = NULL, bool $error5 = NULL)
    {
        if (! $error1)
            $error1 = false;
		
		if (! $error2)
            $error2 = false;
        
		if (! $error3)
            $error3 = false;
		
		if (! $error4)
            $error4 = false;
 
		if (! $error5)
            $error5 = false;
          
        $userInfo = $user->getUserInfo();

        $this->smarty->registerObject('user', $user);
        $this->smarty->assign('uInfo', $userInfo);
        
        $this->smarty->assign('uType', lcfirst(substr(get_class($user), 1)));
        
        $this->smarty->assign('error1', $error1);
		$this->smarty->assign('error2', $error2);
		$this->smarty->assign('error3', $error3);
		$this->smarty->assign('error4', $error4);
		$this->smarty->assign('error5', $error5);
        $this->smarty->assign('check', $this->check);
        
        $this->smarty->display('user/registerUserInfo.tpl');
    }
    
   	function ValidateFname(EUserInfo &$eui): bool
    {
        if($this->check['firstName']=$eui->ValidateFirstname()) return true; 
		else return false;
    }
    function ValidateLname(EUserInfo &$eui): bool
    {
        if($this->check['lastName']=$eui->ValidateLastname()) return true; 
		else return false;
    }
    function ValidateBplace(EUserInfo &$eui): bool
    {
        if($this->check['birthPlace']=$eui->validateBirthplace()) return true; 
		else return false;
    } 
    function ValidateBdate(EUserInfo &$eui): bool
    {
        if($this->check['birthDate']=$eui->validateBirthdate()) return true; 
		else return false;
    }
    function ValidateBio(EUserInfo &$eui): bool
    {
        if($this->check['bio']=$eui->validateBio()) return true; 
		else return false;
    } 
}

?>