<?php
require_once 'inc.php';
include_once 'Entity/EObject.php';

/**
 *
 * @author gruppo 2
 *         La classe ERegistered rappresenta una tipologia di utente piu' avanzata di quella
 *         di EGuest. Un utente istanza di ERegistered
 *         ha infatti un genere di film, ricavato dalla lista di recensioni di film che egli stesso puo'
 *         caricare.
 * @package Entity
 */
class ERegistered extends EUser
{
   
    function __construct()
    {
        parent::__construct();
    }
   
    
     /**
     * Restituisce i film dell'utente
     *
     * @return array i film dell'utente
     */
    function getFilm()
    {
        $film = FPersistantManager::getInstance()->load(EFilm::class, $this->id, FTarget::LOAD_REGISTERED_FILM);
        if ($film == NULL)
            return null;
        else
            return $songs;
    }
    
    /**
     * Imposta il genere dei film dell'utente registrato a partire dalle recensioni dei film caricate.
     */
    function setGenre()
    {
        $film = $this->getFilm(); // ricava i film
    
        $info = $this->getUserInfo(); // ricava le info dell'utente
        
        $info->generateGenre($film); // le info generano il genere
        
        FPersistantManager::getInstance()->update($info); // aggiorna il genere
    }
}
