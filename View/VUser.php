<?php
require_once 'req.php';
include_once 'View/VObject.php';

/*La classe VUser si occupa dell'input-output per quanto riguarda la gestione di un utente.*/
class VUser extends VObject
{

    function __construct()
    {
        parent::__construct();
        
        $this->check = array(
            'username' => true,
            'email' => true,
            'password' => true,
			'type' => true,
        );
    }
    
    /*Funzione che permette la creazione di utente con i valori prelevati da una form*/
    function createUser() : EUser
    {
        $user;
        if(isset($_POST['type']))
        {
            $type = 'E'.ucfirst($_POST['type']);
            $user = new $type(); 
        }
        else
            $user = new EUser();
        
        if(isset($_POST['username']))
            $user->setUsername($_POST['username']);
        if(isset($_POST['email']))
            $user->setEmail($_POST['email']);
        if(isset($_POST['password']))
            $user->setPassword($_POST['password']);
        
        return $user;
    }
    /*Verifica che un utente abbia rispettato i vincoli per l'inserimento dei parametri di login*/
    function validateLogin(EUser $user): bool
    {
        if($this->check['username']=$user->validateUsername() && $this->check['password']=$user->validatePassword())
        {
            return true;
        }
        else
        {
            return false;
        }
        
    }

    /*Verifica che un utente abbia inserito i vincoli per l'inserimento dei parametri di signup*/
    function validateSignUp(EUser $user): bool
    {
        if($this->check['username']=$user->validateUsername() && $this->check['password']=$user->validatePassword() && $this->check['email']=$user->validateEmail())
        {
            return true;
        }
        else
            return false;
    }

  
    /*Mostra la pagina di login*/
    function showLogin(bool $error = NULL)
    {
        if(!$error)
            $error = false;
        
        $user = new ERegistered();
        
        $this->smarty->registerObject('user', $user);
        $this->smarty->assign('uType', lcfirst(substr(get_class($user), 1)));
        
        $this->smarty->assign('error', $error);
        $this->smarty->assign('check', $this->check);
        
        $this->smarty->display('user/login.tpl');
    }

    /*Mostra la pagina di signup*/
    function showSignUp(bool $error = NULL)
    {
        if (! $error)
            $error = false;
        
        $user = new EGuest();
        
        $this->smarty->registerObject('user', $user);
        $this->smarty->assign('uType', lcfirst(substr(get_class($user), 1)));
        
        $this->smarty->assign('error', $error);
        $this->smarty->assign('check', $this->check);
        
        $this->smarty->display('user/register.tpl');
    }
}

