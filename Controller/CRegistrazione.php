<?php
    
    require_once '../Entity/ERegistered.php';
    
    class CRegistrazione
    {
	  public static function registraUtente(string $firstName, string $lastName, string $birthPlace, string $birthDate, string $username, string $password, string $email)
        {
            $nuovoUtente=new ERegistered;
            $success=$nuovoUtente->aggiungiUtente($firstName, $lastName, $birthPlace, $birthDate, $username, $password, $email);           
            return $success;
        }
    }
	
	