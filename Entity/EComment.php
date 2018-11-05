<?php

require_once 'req.php';
include_once 'Entity/EObject.php';

/**
 * La classe EReport implementa i commenti effettuati dall'utente. Come tale, avrà un
 * identificativo dell'utente che ha effettuato il commento, l'id dell'oggetto 
 * commentato.*/
class EReport extends EObject
{
    
    /** titolo del commento */
    private $title;             
    /** descrizione del commento */
    private $description;       
    /** identificativo dell'utente che ha effettuato il commento */
    private $idCommentatore;     
    /** identificativo del film commentato */
    private $idFilm;         
   
    
    /**
     * 
     */   
    function __construct()
    {
        parent::__construct();
    }
    
    /**
     * Verifica che il titolo del commento sia valido. Deve contenere solo caratteri alfanumerici
     * per un massimo di 29 caratteri
     * @return bool true se e' valido, false altrimenti
     */
    function validateTitle() : bool
    {   // solo lettere (accenti), numeri 
        if (preg_match("/^(\p{L})|([a-zA-Z0-9][a-zA-Z0-9 -])+$/ui", $this->title)) 
            return true;
        else
            return false;
    }
    
    /**
     * Verifica che la descrizione del commento sia valida. Deve contenere solo lettere (anche con accenti)
     * numeri e spazi.
     * @return bool true se e' valido, false altrimenti
     */
    function validateDescription() : bool
    {
        // solo lettere (accenti), numeri
        if (preg_match("/^(\p{L})|([a-zA-Z0-9][a-zA-Z0-9 -])+$/ui", $this->description)) // solo lettere, numeri e spazi
            return true;
        else
            return false;
    }
    
    /**
     * 
     * @return string il titolo del commento
     */
    function getTitle () : string
    {
        return $this->title;
    }
    
    /**
     * 
     * @param string $title il titolo del commento
     */
    function setTitle (string $title)
    {
        $this->title = $title;
    }
    
    /**
     * 
     * @return string la descrizione del commento
     */
    function getDescription () : string
    {
        return $this->description;
    }
    
    /**
     * 
     * @param string $desc la descrizione del commento
     */
    function setDescription (string $desc)
    {
        $this->description = $desc;
    }
    
    /**
     * 
     * @return int l'identificativo dell'utente che ha inviato il commento
     */
    function getIdCommentatore () : int
    {
        return $this->idCommentatore;
    }
    
    /**
     * 
     * @param int $idS l'identificativo dell'utente che ha inviato il commento
     */
    function setIdCommentatore (int $idS)
    {
        $this->idCommentatore = $idS;
    }
    
    /**
     * 
     * @return int l'identificativo dell'oggetto
     */
    function getIdObject () : int
    {
        return $this->idObject;
    }
    
    /**
     * 
     * @param int $idO l'identificativo dell'oggetto
     */
    function setIdObject (int $idO)
    {
        $this->idObject= $idO;
    }
    
    /**
     * Restituisce l'utente che ha effettuato il commento
    */
    function getCommentatore()
    {
        if($this->idCommentatore)
            return FPersistantManager::getInstance()->load(EUser::class, $this->idCommentatore);
        else 
            return NULL;
    }
}