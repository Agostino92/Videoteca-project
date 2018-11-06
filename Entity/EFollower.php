<?php

require_once 'req.php';

/**
 * La classe EFollower fornisce un modello per il caso d'uso 'Segui Utente'. 
 * Un'istanza di tale classe mette in relazione un utente con un ulteriore utente, che ha deciso di seguirlo. 
 */
class EFollower
{
    /**  EUser contenente l'utente oggetto del follow */
    private $user; 
    /** EUser contenente l'utente follower */
    private $follower; 
    
    /**
     * Istanzia un oggetto vuoto di tipo EFollower
     */
    function __construct(){}
    
    /**
     * 
     * @return EUser l'utente oggetto del follow
     */
    function getUser() : EUser
    {
        return $this->user;
    }

    /**
     * @return EUser l'utente follower
     */
    function getFollower() : EUser
    {
        return $this->follower;
    }

    /**
     * @param EUser l'utente oggetto del follow
     */
    function setUser(EUser &$user)
    {
        $this->user = $user;
    }

    /**
     * @param EUser l'utente follower
     */
    function setFollower(EUser &$follower)
    {
        $this->follower = $follower;
    }

        
    /**
     * Verifica che l'associazione tra gli utenti sia presente nel database
     * @return bool true se l'associazione esiste, false altrimenti
     */
    function exists() : bool
    {
        $uId = $this->user->getId();
        $fId = $this->follower->getId();
        
        if(FPersistantManager::getInstance()->exists(EFollower::class, FTarget::EXISTS_FOLLOWER, $uId, $fId))
            return true;
        else 
            return false;
    }
    
    
}

