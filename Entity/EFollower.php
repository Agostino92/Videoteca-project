<?php

require_once 'req.php';

/**
 * La classe EFollower fornisce un modello per il caso d'uso 'Segui Film'. 
 * Un'istanza di tale classe mette in relazione un utente con un ulteriore utente, che ha deciso di seguirlo. 
 */
class EFollower
{
    /**  EUser contenente il film oggetto del follow */
    private $film; 
    /** EUser contenente l'utente follower */
    private $follower; 
    
    /**
     * Istanzia un oggetto vuoto di tipo EFollower
     */
    function __construct(){}
    
    /**
     * 
     * @return EFilm il film oggetto del follow
     */
    function getFilm() : EFilm
    {
        return $this->film;
    }

    /**
     * @return EUser l'utente follower
     */
    function getFollower() : EUser
    {
        return $this->follower;
    }

    /**
     * @param EFilm il film oggetto del follow
     */
    function setFilm(EFilm &$film)
    {
        $this->film = $film;
    }

    /**
     * @param EUser l'utente follower
     */
    function setFollower(EUser &$follower)
    {
        $this->follower = $follower;
    }

        
    /**
     * Verifica che l'associazione tra utente e film sia presente nel database
     * @return bool true se l'associazione esiste, false altrimenti
     */
    function exists() : bool
    {
        $uId = $this->film->getId();
        $fId = $this->follower->getId();
        
        if(FPersistantManager::getInstance()->exists(EFollower::class, FTarget::EXISTS_FOLLOWER, $uId, $fId))
            return true;
        else 
            return false;
    }
    
    
}

