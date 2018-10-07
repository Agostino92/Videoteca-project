<?php
    
	require_once '../Entity/ERegistered.php';
	require_once '../Foundation/Session.php'; /** in base a come viene chiamato */
	
    class CLogin
    {    
        public static function login (string $username,string $password)
        {
            if(isset ($_SESSION['username']))
                {return true;}
            else
            {
                $autenticato=ERegistered::verifica($username,$password);
                if ($autenticato)
                {
                    $session= new USession;
                    $session->impostaValore('username',$username);
                    return true;
                } else 
                    return false;
                }
				
			
		}
        
        
        public static function logout ()
        {
            session_start();
            if(isset($_SESSION['username']))
            {
                session_unset();
                session_destroy();
            }
        }
        
                
    }
    
?>